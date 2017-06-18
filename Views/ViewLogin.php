<?php
require_once('libs/Smarty.class.php');

class ViewLogin
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty;
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }

  function mostrarLogin(){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->display('header.tpl');
    $this->smarty->display('nav.tpl');
    $this->smarty->display('login.tpl');
  }
}
?>
