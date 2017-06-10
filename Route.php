<?php
require_once('Controllers/ControllerHome.php');
require_once('Controllers/ControllerTemporadas.php');
require_once('Controllers/ControllerEpisodios.php');
include_once ('config/config_app.php');

function parseUrl($url){
  $arrData = explode("/",$url);
  if (isset($arrData[0])){
    $arrInfo[configApp::$NRO_TEMP] = $arrData[0];
  }
  if (isset($arrData[1])){
    $arrInfo[configApp::$NRO_EPI] = $arrData[1];
  }
  return $arrInfo;
}

function Elegir_Epi($url){
  switch ($url[configApp::$NRO_EPI]){
    case configApp::$E_UNO:
      $ControllerEpi1 = new ControllerEpisodios();
      $ControllerEpi1->mostrarEpisodio();
    break;
    default:
      echo 'Episodio invalido';
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

    switch ($url[configApp::$NRO_TEMP]){
      case configApp::$TEMPORADA1:
        if(!isset($url[configApp::$NRO_EPI])){
          $ControllerTemp1 = new ControllerTemporadas();
          $ControllerTemp1->mostrarTemporada();
        }else{
          Elegir_Epi($url);
        }
      break;
      case configApp::$TEMPORADA2:
        if(!isset($url[configApp::$NRO_EPI])){
          $ControllerTemp2 = new ControllerTemporadas();
          $ControllerTemp2->mostrarTemporada();
        }else{
          Elegir_Epi($url);
        }
      break;
      default:
        echo 'Temporada invalida';
      break;
    }
  }
}

/*
echo "ACTION ES ".$_REQUEST[configApp::$ACTION];
$params = explode('/',$_REQUEST[configApp::$ACTION]);
var_dump($params);
*/
?>
