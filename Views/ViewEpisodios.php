<?php
require_once('libs/Smarty.class.php');

class ViewEpisodios
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty;
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }

  function mostrarEpisodio(){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->assign("session", 'user');
    $this->smarty->display('header.tpl');
    $this->smarty->display('nav.tpl');
    $this->smarty->display('video.tpl');
  }
}

?>
