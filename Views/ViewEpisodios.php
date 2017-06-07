<?php
require_once('libs/Smarty.class.php');

class ViewEpisodios
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty;
  }

  function Top(){
    $this->smarty->display('header.tpl');
    $this->smarty->display('nav.tpl');
    $this->smarty->display('video.tpl');
  }

  function Bot(){
    $this->smarty->display('footer.tpl');
  }
}

?>
