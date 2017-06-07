<?php
require_once('libs/Smarty.class.php');

class ViewHome
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty;
  }

  function mostrarHome($Arr_List_Pers, $Arr_Galeria, $Cant_Img){
    $this->smarty->display('nav.tpl');
    $this->smarty->display('video.tpl');
    $this->smarty->assign("Arr_Galeria", $Arr_Galeria);
    $this->smarty->assign("Cant_Img", $Cant_Img);
    $this->smarty->display('Galeria.tpl');
    $this->smarty->assign("List_Pers", $Arr_List_Pers);
    $this->smarty->display('ListaPersonajes.tpl');
  }
}
?>
