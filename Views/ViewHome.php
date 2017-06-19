<?php
require_once('libs/Smarty.class.php');

class ViewHome
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty;
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }

  function mostrarHome($Arr_List_Pers, $Arr_Galeria, $Cant_Img){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->assign("session", 'user');
    $this->smarty->display('header.tpl');
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
