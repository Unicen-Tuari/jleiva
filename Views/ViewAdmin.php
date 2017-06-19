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

  function mostrarAdmin(){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->assign("session", 'admin');
    $this->smarty->display('header.tpl');
    $this->smarty->display('nav.tpl');
    $this->smarty->display('sectoresAdmin.tpl');
    $this->smarty->display('footer.tpl');
  }

  function sessionUsuarios($listaUsuarios){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->assign("session", 'admin');
    $this->smarty->assign("listaUsuarios", $listaUsuarios);
    $this->smarty->display('header.tpl');
    $this->smarty->display('nav.tpl');
    $this->smarty->display('tableUsuarios.tpl');
    $this->smarty->display('footer.tpl');
  }

  function sessionTemporadas($listaTemporadas){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->assign("session", 'admin');
    $this->smarty->assign("listaTemporadas", $listaTemporadas);
    $this->smarty->display('header.tpl');
    $this->smarty->display('nav.tpl');
    $this->smarty->display('tableTemporadas.tpl');
    $this->smarty->display('footer.tpl');
  }

  function sessionEpisodios($listaEpisodios){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->assign("session", 'admin');
    $this->smarty->assign("listaEpisodios", $listaEpisodios);
    $this->smarty->display('header.tpl');
    $this->smarty->display('nav.tpl');
    $this->smarty->display('tableEpisodios.tpl');
    $this->smarty->display('footer.tpl');
  }

  function crearUsuario(){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->assign("session", 'admin');
    $this->smarty->display('header.tpl');
    $this->smarty->display('nav.tpl');
    $this->smarty->display('newUser.tpl');
  }

  function editarUsuario(){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->assign("session", 'admin');
    $this->smarty->display('header.tpl');
    $this->smarty->display('nav.tpl');
    $this->smarty->display('newUser.tpl');
  }
}
?>
