<?php
require_once('libs/Smarty.class.php');

class ViewComentarios
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty;
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }

  function MostrarComentarios($Arr_List_Comentarios){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->assign("List_Comentarios", $Arr_List_Comentarios);
    $this->smarty->display('comentarios.tpl');
  }
}
?>
