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

  function mostrarAdmin(){
   $listaUsuarios = $this->modelo->GetUsuarios();
   $this->vista->mostrarAdmin($listaUsuarios);
 }

}
?>
