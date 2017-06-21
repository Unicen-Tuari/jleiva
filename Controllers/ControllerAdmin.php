<?php
require_once('Views/ViewAdmin.php');
require_once('Models/ModelAdmin.php');

require_once('config/configUrl.php');

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
        header("Location:".ConfigUrl::$BASE_URL."/admin");
      die();
    }
  }

 function terminarSession(){
   session_start();
   if(isset($_SESSION['logueado'])){
     header("Location:".ConfigUrl::$BASE_URL."/admin");
     session_destroy();
   }else{
     header("Location:".ConfigUrl::$BASE_URL."/admin");
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
      //$hash = password_hash($usuario["password"], PASSWORD_BCRYPT);
      $this->modelo->cargarUsuario($id_usuario, $email, $password);
    }
    header("Location:".ConfigUrl::$BASE_URL."/admin/logueado/sUsuarios");
  }

  function eliminarUsuario(){
    $this->verificaSession();
    if(isset($_POST["id_usuario"])){
      $id_usuario = $_POST["id_usuario"];
      $this->modelo->eliminarUsuario($id_usuario);
    }
    header("Location:".ConfigUrl::$BASE_URL."/admin/logueado/sUsuarios");
  }

function editarUsuario(){
  $this->verificaSession();
  if(isset($_POST["id_usuario"]) && isset($_POST["email"]) && isset($_POST["password"])){
    $id_usuario = $_POST["id_usuario"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $this->vista->editarUsuario($id_usuario, $email, $password);
  }
}

function subirEditadoU(){
  $this->verificaSession();
  if(isset($_POST["id_safe"]) && isset($_POST["id_usuario"]) && isset($_POST["email"]) && isset($_POST["password"])){
    $id_safe = $_POST["id_safe"];
    $id_usuario = $_POST["id_usuario"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $this->modelo->editarUsuario($id_safe, $id_usuario, $password, $email);
  }
  header("Location:".ConfigUrl::$BASE_URL."/admin/logueado/sUsuarios");
}

//-----------------------------------------------------------------------

function crearTemp(){
  $this->verificaSession();
  $this->vista->crearTemp();
}

function cargarTemp(){
  $this->verificaSession();
  if(isset($_POST["id_temp"]) && isset($_POST["cant_caps"])
                                 && isset($_POST["detalles"])){
    $id_temp = $_POST["id_temp"];
    $cant_caps = $_POST["cant_caps"];
    $detalles = $_POST["detalles"];
    $this->modelo->cargartemp($id_temp, $cant_caps, $detalles);
  }
  header("Location:".ConfigUrl::$BASE_URL."/admin/logueado/sTemporadas");
}

function eliminarTemp(){
  $this->verificaSession();
  if(isset($_POST["id_temp"])){
    $id_temp = $_POST["id_temp"];
    $this->modelo->eliminarTemp($id_temp);
  }
  header("Location:".ConfigUrl::$BASE_URL."/admin/logueado/sTemporadas");
}

function editarTemp(){
  $this->verificaSession();
  if(isset($_POST["id_temp"]) && isset($_POST["cant_caps"]) && isset($_POST["detalles"])){
    $id_temp = $_POST["id_temp"];
    $cant_caps = $_POST["cant_caps"];
    $detalles = $_POST["detalles"];
    $this->vista->editarTemp($id_temp, $cant_caps, $detalles);
  }
}

function subirEditadoT(){
  $this->verificaSession();
  if(isset($_POST["id_safe"]) && isset($_POST["id_temp"]) && isset($_POST["cant_caps"]) && isset($_POST["detalles"])){
    $id_safe = $_POST["id_safe"];
    $id_temp = $_POST["id_temp"];
    $cant_caps = $_POST["cant_caps"];
    $detalles = $_POST["detalles"];
    $this->modelo->editarTemp($id_safe, $id_temp, $cant_caps, $detalles);
  }
  header("Location:".ConfigUrl::$BASE_URL."/admin/logueado/sTemporadas");
}

//---------------------------------------------------------------------------

function crearEpi(){
  $this->verificaSession();
  $this->vista->crearEpi();
}

function cargarEpi(){
  $this->verificaSession();
  if(isset($_POST["id_episodio"]) && isset($_POST["id_temporada"]) &&
     isset($_POST["nombre"]) && isset($_POST["duracion"]) &&
     isset($_POST["detalles"]) && isset($_POST["nro_episodio"])){
      $id_episodio = $_POST["id_episodio"];
      $id_temporada = $_POST["id_temporada"];
      $nombre = $_POST["nombre"];
      $duracion = $_POST["duracion"];
      $detalles = $_POST["detalles"];
      $nro_episodio = $_POST["nro_episodio"];
      $this->modelo->cargarEpi($id_episodio, $id_temporada, $nombre, $duracion, $detalles, $nro_episodio);
  }
  header("Location:".ConfigUrl::$BASE_URL."/admin/logueado/sEpisodios");
}

function eliminarEpi(){
  $this->verificaSession();
  if(isset($_POST["id_episodio"])){
    $id_episodio = $_POST["id_episodio"];
    $this->modelo->eliminarEpi($id_episodio);
  }
  header("Location:".ConfigUrl::$BASE_URL."/admin/logueado/sEpisodios");
}

function editarEpi(){
  $this->verificaSession();
  if(isset($_POST["id_episodio"]) && isset($_POST["id_temporada"]) &&
     isset($_POST["nombre"]) && isset($_POST["duracion"]) &&
     isset($_POST["detalles"]) && isset($_POST["nro_episodio"])){
      $id_episodio = $_POST["id_episodio"];
      $id_temporada = $_POST["id_temporada"];
      $nombre = $_POST["nombre"];
      $duracion = $_POST["duracion"];
      $detalles = $_POST["detalles"];
      $nro_episodio = $_POST["nro_episodio"];
      $this->vista->editarEpi($id_episodio, $id_temporada, $nombre, $duracion, $detalles, $nro_episodio);
  }
}

function subirEditadoE(){
  $this->verificaSession();
  if(isset($_POST["id_safe"]) && isset($_POST["id_episodio"]) && isset($_POST["id_temporada"]) &&
     isset($_POST["nombre"]) && isset($_POST["duracion"]) &&
     isset($_POST["detalles"]) && isset($_POST["nro_episodio"])){
        $id_safe = $_POST["id_safe"];
        $id_episodio = $_POST["id_episodio"];
        $id_temporada = $_POST["id_temporada"];
        $nombre = $_POST["nombre"];
        $duracion = $_POST["duracion"];
        $detalles = $_POST["detalles"];
        $nro_episodio = $_POST["nro_episodio"];
        $this->modelo->editarEpi($id_safe, $id_episodio, $id_temporada, $nombre, $duracion, $detalles, $nro_episodio);
  }
  header("Location:".ConfigUrl::$BASE_URL."/admin/logueado/sEpisodios");
}

}
?>
