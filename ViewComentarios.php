<?php
require_once('libs/Smarty.class.php');

class ViewComentarios
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty;
  }

  function MostrarComentarios($Arr_List_Comentarios){
    $this->smarty->assign("List_Comentarios", $Arr_List_Comentarios);
    $this->smarty->display('comentarios.tpl');
  }
}
?>
