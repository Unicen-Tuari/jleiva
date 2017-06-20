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
  }

  function sessionUsuarios($listaUsuarios){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->assign("session", 'admin');
    $this->smarty->assign("listaUsuarios", $listaUsuarios);
    $this->smarty->display('header.tpl');
    $this->smarty->display('nav.tpl');
    $this->smarty->display('tableUsuarios.tpl');
  }

  function sessionTemporadas($listaTemporadas){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->assign("session", 'admin');
    $this->smarty->assign("listaTemporadas", $listaTemporadas);
    $this->smarty->display('header.tpl');
    $this->smarty->display('nav.tpl');
    $this->smarty->display('tableTemporadas.tpl');
  }

  function sessionEpisodios($listaEpisodios){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->assign("session", 'admin');
    $this->smarty->assign("listaEpisodios", $listaEpisodios);
    $this->smarty->display('header.tpl');
    $this->smarty->display('nav.tpl');
    $this->smarty->display('tableEpisodios.tpl');
  }

  function crearUsuario(){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->assign("session", 'admin');
    $this->smarty->assign("titulo", 'Crear Usuario');
    $this->smarty->assign("dir", 'nuevoUsuario/creado');
    $this->smarty->assign("id_usuario", '');
    $this->smarty->assign("email", '');
    $this->smarty->assign("password", '');
    $this->smarty->display('header.tpl');
    $this->smarty->display('nav.tpl');
    $this->smarty->display('newEditUser.tpl');
  }

  function editarUsuario($id_usuario, $email, $password){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->assign("session", 'admin');
    $this->smarty->assign("titulo", 'Editar Usuario');
    $this->smarty->assign("dir", 'editarUsuario/editado');
    $this->smarty->assign("id_usuario", $id_usuario);
    $this->smarty->assign("email", $email);
    $this->smarty->assign("password", $password);
    $this->smarty->display('header.tpl');
    $this->smarty->display('nav.tpl');
    $this->smarty->display('newEditUser.tpl');
  }

//----------------------------------------------------------------

  function crearTemp(){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->assign("session", 'admin');
    $this->smarty->assign("titulo", 'Crear Temporada');
    $this->smarty->assign("dir", 'nuevaTemp/creado');
    $this->smarty->assign("id_temp", '');
    $this->smarty->assign("cant_caps", '');
    $this->smarty->assign("detalles", '');
    $this->smarty->display('header.tpl');
    $this->smarty->display('nav.tpl');
    $this->smarty->display('newEditTemp.tpl');
  }

  function editarTemp($id_temp, $cant_caps, $detalles){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->assign("session", 'admin');
    $this->smarty->assign("titulo", 'Editar Usuario');
    $this->smarty->assign("dir", 'editarTemp/editado');
    $this->smarty->assign("id_temp", $id_temp);
    $this->smarty->assign("cant_caps", $cant_caps);
    $this->smarty->assign("detalles", $detalles);
    $this->smarty->display('header.tpl');
    $this->smarty->display('nav.tpl');
    $this->smarty->display('newEditTemp.tpl');
  }

//-------------------------------------------------------------------

  function crearEpi(){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->assign("session", 'admin');
    $this->smarty->assign("titulo", 'Crear Episodio');
    $this->smarty->assign("dir", 'nuevoEpi/creado');
    $this->smarty->assign("id_episodio", '');
    $this->smarty->assign("id_temporada", '');
    $this->smarty->assign("nombre", '');
    $this->smarty->assign("duracion", '');
    $this->smarty->assign("detalles", '');
    $this->smarty->assign("nro_episodio", '');
    $this->smarty->display('header.tpl');
    $this->smarty->display('nav.tpl');
    $this->smarty->display('newEditEpi.tpl');
  }

  function editarEpi($id_episodio, $id_temporada, $nombre, $duracion, $detalles, $nro_episodio){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->assign("session", 'admin');
    $this->smarty->assign("titulo", 'Editar Episodios');
    $this->smarty->assign("dir", 'editarEpi/editado');
    $this->smarty->assign("id_episodio", $id_episodio);
    $this->smarty->assign("id_temporada", $id_temporada);
    $this->smarty->assign("nombre", $nombre);
    $this->smarty->assign("duracion", $duracion);
    $this->smarty->assign("detalles", $detalles);
    $this->smarty->assign("nro_episodio", $nro_episodio);
    $this->smarty->display('header.tpl');
    $this->smarty->display('nav.tpl');
    $this->smarty->display('newEditEpi.tpl');
  }

}
?>
