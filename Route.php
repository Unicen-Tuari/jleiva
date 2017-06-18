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
      $arrInfo[configApp::$LOGUEADO] = $arrData[1];
    }
  }
  if (isset($arrData[2])){
    $arrInfo[configApp::$NRO_TEMP] = $arrData[2];//-nroTemporada
  }
  if (isset($arrData[3])){
    $arrInfo[configApp::$EPISODIO] = $arrData[3];//-episodio
  }
  if (isset($arrData[4])){
    $arrInfo[configApp::$NRO_EPI] = $arrData[4];//-nroEpisodio
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

function gestionAdmin($url){

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
