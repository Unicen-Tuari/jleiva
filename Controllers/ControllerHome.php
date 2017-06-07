<?php
require_once('Views/ViewHome.php');
require_once('Models/ModelHome.php');

class ControllerHome
{
  private $vista;
  private $modelo;

  function __construct()
  {
      $this->vista = new ViewHome();
      $this->modelo = new ModelHome();
  }

 function mostrarHome(){
   $Arr_List_Pers = $this->modelo->GetListaPersonajes();
   $Arr_Galeria = $this->modelo->GetGaleriaImg();
   $contador = 0;
   foreach ($Arr_Galeria as $Img) {
          $Cant_Img[$contador]= $contador;
          $contador += 1;
      }
   $this->vista->mostrarHome($Arr_List_Pers, $Arr_Galeria, $Cant_Img);
 }
}
?>
