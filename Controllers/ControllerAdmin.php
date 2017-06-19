<?php
require_once('Views/ViewAdmin.php');
require_once('Models/ModelAdmin.php');

class ControllerAdmin
{
  private $vista;
  private $modelo;

  function __construct()
  {
      $this->vista = new ViewAdmin();
      $this->modelo = new ModelAdmin();
  }

  function verificaSession(){
    session_start();
    if(!isset($_SESSION['logueado'])){
      header('Location: http://127.0.0.1/web-1/jleiva/admin');
      die();
    }
  }

 function terminarSession(){
   session_start();
   if(isset($_SESSION['logueado'])){
     header('Location: http://127.0.0.1/web-1/jleiva/admin');
     session_destroy();
   }else{
     header('Location: http://127.0.0.1/web-1/jleiva/admin');
   }
 }

function mostrarAdmin(){
  $this->verificaSession();
  $this->vista->mostrarAdmin();
}

  function sessionUsuarios(){
    $this->verificaSession();
    $listaUsuarios = $this->modelo->GetUsuarios();
    $this->vista->sessionUsuarios($listaUsuarios);
  }

  function sessionTemporadas(){
    $this->verificaSession();
    $listaTemporadas = $this->modelo->getTemporadas();
    $this->vista->sessionTemporadas($listaTemporadas);
  }

  function sessionEpisodios(){
    $this->verificaSession();
    $listaEpisodios = $this->modelo->getEpisodios();
    $this->vista->sessionEpisodios($listaEpisodios);
  }

  function crearUsuario(){
    $this->verificaSession();
    $this->vista->crearUsuario();
  }

  function cargarUsuario(){
    $this->verificaSession();
    if(isset($_POST["id_usuario"]) && isset($_POST["email"])
                                   && isset($_POST["password"])){
      $id_usuario = $_POST["id_usuario"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $this->modelo->cargarUsuario($id_usuario, $email, $password);
    }
    header('Location: http://127.0.0.1/web-1/jleiva/admin/logueado/sUsuarios');
  }

  function eliminarUsuario(){
    $this->verificaSession();
    if(isset($_POST["id_usuario"])){
      $id_usuario = $_POST["id_usuario"];
      $this->modelo->eliminarUsuario($id_usuario);
    }
    header('Location: http://127.0.0.1/web-1/jleiva/admin/logueado');
  }

function editarUsuario(){
  $this->verificaSession();
  $this->vista->editarUsuario();
}

}
?>
