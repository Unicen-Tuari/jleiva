<?php
require_once('Views/ViewEpisodios.php');
require_once('Models/ModelEpisodios.php');
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

  function mostrarEpisodio($episodio){
    $this->vista->mostrarEpisodio();
  }
}
?>
