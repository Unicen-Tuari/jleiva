<?php
require_once('Views/ViewTemporadas.php');
require_once('Models/ModelTemporadas.php');
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

  function ArmarListaEpisodios($temporada){
    $Arr_List_Episodios = $this->modelo->GetListaEpisodios($temporada);
    return $Arr_List_Episodios;
  }

  function mostrarTemporada($temporada){
    $Arr_List_Episodios = $this->ArmarListaEpisodios($temporada);
    $this->vista->mostrarTemporada($Arr_List_Episodios, $temporada);
  }

}
?>
