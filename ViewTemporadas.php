<?php
require_once('libs/Smarty.class.php');

class ViewTemporadas
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty;
  }

  function Top(){
    $this->smarty->display('header.tpl');
    $this->smarty->display('nav.tpl');
  }

  function MostrarListaEpisodios($Arr_List_Episodios){
    $this->smarty->assign("List_Epis", $Arr_List_Episodios);
    $this->smarty->display('ListaEpisodios.tpl');
  }

  function Bot(){
    $this->smarty->display('footer.tpl');
  }
}
?>
