<?php
require_once('libs/Smarty.class.php');

class ViewAdmin
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty;
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }

  function mostrarAdmin($listaUsuarios){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->assign("listaUsuarios", $listaUsuarios);
    $this->smarty->display('tableAdmin.tpl');
    $this->smarty->display('footer.tpl');
  }
}
?>
