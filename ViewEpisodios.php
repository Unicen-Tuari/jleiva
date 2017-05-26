<?php
  require_once('libs/Smarty.class.php');

class ViewEpisodios
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty;
  }

  function mostrar(){
    $this->smarty->display('header.tpl');
    $this->smarty->display('nav.tpl');
    $this->smarty->display('video.tpl');
    $this->smarty->display('comentarios.tpl');
    $this->smarty->display('footer.tpl');
  }
}

$p = new ViewEpisodios;
$p-> mostrar();
?>
