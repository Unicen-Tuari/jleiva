<?php
require_once('libs/Smarty.class.php');

class ViewHome
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
    $this->smarty->display('Galeria.tpl');
    $this->smarty->display('ListaPersonajes.tpl');
    $this->smarty->display('footer.tpl');
  }
}

$p = new ViewHome;
$p-> mostrar();
?>
