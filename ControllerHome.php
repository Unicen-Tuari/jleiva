<?php
require_once('ViewHome.php');
require_once('ModelHome.php');

class ControllerTareas
{
  private $vista;
  private $modelo;

  function __construct()
  {
      $this->vista = new ViewHome();
      $this->modelo = new ModelHome();
  }

  function ArmarGaleria(){
   $Arr_Galeria = $this->modelo->GetGaleriaImg();
   $contador = 0;
   foreach ($Arr_Galeria as $Img) {
          $Cant_Img[$contador]= $contador;
          $contador += 1;
      }
   $this->vista->MostrarGaleria($Arr_Galeria, $Cant_Img);
 }

 function ArmarListaPersonajes(){
   $Arr_List_Pers = $this->modelo->GetListaPersonajes();
   $this->vista->MostrarListaPersonajes($Arr_List_Pers);
 }

 function mostrarTop(){
   $this->vista->Top();
 }

 function mostrarBot(){
   $this->vista->Bot();
 }
}

$p = new ControllerTareas;
$p->mostrarTop();
$p->ArmarGaleria();
$p->ArmarListaPersonajes();
$p->mostrarBot();
?>
