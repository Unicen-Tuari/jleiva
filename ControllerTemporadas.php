<?php
require_once('ViewTemporadas.php');
require_once('ModelTemporadas.php');
require_once('ControllerComentarios.php');

class ControllerTemporadas
{
  private $vista;
  private $modelo;

  function __construct()
  {
      $this->vista = new ViewTemporadas();
      $this->modelo = new ModelTemporadas();
  }

  function mostrarTop(){
    $this->vista->Top();
  }

  function ArmarListaEpisodios($temporada){
    $Arr_List_Episodios = $this->modelo->GetListaEpisodios($temporada);
    $this->vista->MostrarListaEpisodios($Arr_List_Episodios);
  }

  function mostrarBot(){
    $this->vista->Bot();
  }
}

$p = new ControllerTemporadas;
$c = new ControllerComentarios;
$p->mostrarTop();
$p->ArmarListaEpisodios(1);
$c->ArmarComentariosxTemp(1);
$p->mostrarBot();
?>
