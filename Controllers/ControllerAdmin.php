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

  function mostrarAdmin(){
   $this->verificaSession();
   $listaUsuarios = $this->modelo->GetUsuarios();
   $this->vista->mostrarAdmin($listaUsuarios);
 }

}
?>
