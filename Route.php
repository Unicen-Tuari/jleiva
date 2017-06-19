<?php
require_once('Controllers/ControllerLogin.php');
require_once('Controllers/ControllerHome.php');
require_once('Controllers/ControllerTemporadas.php');
require_once('Controllers/ControllerEpisodios.php');
include_once ('config/config_app.php');

function parseUrl($url){
  $arrData = explode("/",$url);
  if (isset($arrData[0])){
    $arrInfo[configApp::$RESOURCE] = $arrData[0];//admin-spaceDandy
  }
  if (isset($arrData[1])){
    if($arrData[1] == configApp::$TEMPORADA){
      $arrInfo[configApp::$TEMPORADA] = $arrData[1];
    }else{
      $arrInfo[configApp::$LOGIN] = $arrData[1];
    }
  }
  if (isset($arrData[2])){
    if(is_numeric($arrData[2])){
      $arrInfo[configApp::$NRO_TEMP] = $arrData[2];
    }else{
      $arrInfo[configApp::$SESSIONES_ADMIN] = $arrData[2];
    }
  }
  if (isset($arrData[3])){
    if($arrData[3] == configApp::$EPISODIO){
      $arrInfo[configApp::$EPISODIO] = $arrData[3];
    }else{
      $arrInfo[configApp::$TASK] = $arrData[3];
    }
  }
  if (isset($arrData[4])){
    if(is_numeric($arrData[4])){
      $arrInfo[configApp::$NRO_EPI] = $arrData[4];
    }else{
      $arrInfo[configApp::$TASK_VERIF] = $arrData[4];
    }
  }
  return $arrInfo;
}

function gestionUsuario($url){
  if (!isset($url[configApp::$EPISODIO])){
    $controllerTemp = new ControllerTemporadas();
    $controllerTemp->mostrarTemporada($url[configApp::$NRO_TEMP]);
    $controllerComen = new ControllerComentarios();
    $controllerComen->ArmarComentariosxTemp($url[configApp::$NRO_TEMP]);
  }else{
    $controllerEpi = new ControllerEpisodios();
    $controllerEpi->mostrarEpisodio($url[configApp::$NRO_EPI]);
    $controllerComen = new ControllerComentarios();
    $controllerComen->ArmarComentariosxEpisodio($url[configApp::$NRO_TEMP],
                                                $url[configApp::$NRO_EPI]);
  }
}

function verificarTarea($url){
  switch ($url[configApp::$TASK_VERIF]) {
    case configApp::$NEW_USER_C:
      $controllerAdmin = new ControllerAdmin();
      $controllerAdmin->cargarUsuario();
    break;

    case configApp::$EDIT_USER_E:
      $controllerAdmin = new ControllerAdmin();
      $controllerAdmin->subirEditado();
    break;

  }
}

function tareasUsuario($url){
  switch ($url[configApp::$TASK]) {
    case configApp::$NEW_USER:
      if(!isset($url[configApp::$TASK_VERIF])){
        $controllerAdmin = new ControllerAdmin();
        $controllerAdmin->crearUsuario();
      }else{
        verificarTarea($url);
      }
    break;

    case configApp::$EDIT_USER:
      if(!isset($url[configApp::$TASK_VERIF])){
        $controllerAdmin = new ControllerAdmin();
        $controllerAdmin->editarUsuario();
      }else{
        verificarTarea($url);
      }
    break;

    case configApp::$DELETE_USER:
      $controllerAdmin = new ControllerAdmin();
      $controllerAdmin->eliminarUsuario();
    break;
  }
}

function sectorAdmin($url){
  switch ($url[configApp::$SESSIONES_ADMIN]){
    case configApp::$ADMIN_U:
      if(!isset($url[configApp::$TASK])){
        $controllerAdmin = new ControllerAdmin();
        $controllerAdmin->sessionUsuarios();
      }else{
        tareasUsuario($url);
      }
    break;

    case configApp::$ADMIN_T:
      $controllerAdmin = new ControllerAdmin();
      $controllerAdmin->sessionTemporadas();
    break;

    case configApp::$ADMIN_E:
      $controllerAdmin = new ControllerAdmin();
      $controllerAdmin->sessionEpisodios();
    break;
    case configApp::$LOGOUT:
      $controllerAdmin = new ControllerAdmin();
      $controllerAdmin->terminarSession();
    break;
  }
}

function gestionAdmin($url){
  if (!isset($url[configApp::$LOGIN])){
    $controllerLogin = new ControllerLogin();
    $controllerLogin->mostrarLogin();
  }else
  switch ($url[configApp::$LOGIN]){

    case configApp::$LOGUEAME:
      $controllerLogin = new ControllerLogin();
      $controllerLogin->logueame();
    break;

    case configApp::$LOGUEADO:
        if(!isset($url[configApp::$SESSIONES_ADMIN])){
          $controllerAdmin = new ControllerAdmin();
          $controllerAdmin->mostrarAdmin();
        }else{
          sectorAdmin($url);
        }
    break;
  }
}

if(!isset($_REQUEST[configApp::$ACTION])) {
  $ControllerHome = new ControllerHome();
  $ControllerHome->mostrarHome();
}else{
  if ($_REQUEST[configApp::$ACTION] == configApp::$HOME){
    // Home del sitio
    $ControllerHome = new ControllerHome();
    $ControllerHome->mostrarHome();
  }else{
    $url = parseUrl($_REQUEST[configApp::$ACTION]);
    switch ($url[configApp::$RESOURCE]){
      case configApp::$USER:
        gestionUsuario($url);
        break;

      case configApp::$ADMIN:
        gestionAdmin($url);
        break;
    }
  }
}
?>
