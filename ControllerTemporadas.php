<?php
require_once('ViewTemporadas.php');
require_once('ModelTemporadas.php');

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

  function ArmarListaPersonajes($temporada){
    $Arr_List_Episodios = $this->modelo->GetListaEpisodios($temporada);
    $this->vista->MostrarListaEpisodios($Arr_List_Episodios);
  }

  function mostrarBot(){
    $this->vista->Bot();
  }
}

$p = new ControllerTemporadas;
$p->mostrarTop();
$p->ArmarListaPersonajes(1);
$p->mostrarBot();
?>
