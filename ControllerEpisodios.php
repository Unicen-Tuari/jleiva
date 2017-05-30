<?php
require_once('ViewEpisodios.php');
require_once('ModelEpisodios.php');
require_once('ControllerComentarios.php');

class ControllerEpisodios
{
  private $vista;
  private $modelo;

  function __construct()
  {
      $this->vista = new ViewEpisodios();
      $this->modelo = new ModelEpisodios();
  }

  function mostrarTop(){
    $this->vista->Top();
  }

  function mostrarBot(){
    $this->vista->Bot();
  }
}

$p = new ControllerEpisodios;
$p->mostrarTop();
$p->mostrarBot();
?>
