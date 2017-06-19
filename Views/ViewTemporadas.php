<?php
require_once('libs/Smarty.class.php');

class ViewTemporadas
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty;
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }

  function mostrarTemporada($Arr_List_Episodios, $temporada){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->assign("session", 'user');
    $this->smarty->assign("temporada", $temporada);
    $this->smarty->display('header.tpl');
    $this->smarty->display('nav.tpl');

    $this->smarty->assign("List_Epis", $Arr_List_Episodios);
    $this->smarty->display('ListaEpisodios.tpl');

  }
}
?>
