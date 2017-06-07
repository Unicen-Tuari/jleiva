<?php
require_once('Controllers/ControllerHome.php');
include_once "config/config_app.php";

if(!isset($_GET['action']) ) {
  $ControllerHome = new ControllerHome();
  $ControllerHome->mostrarHome();
}else{
  echo "ACTION ES ".$_GET['action'];
  $params = explode('/',$_GET['action']);
  var_dump($params);
    if ($_GET['action'] == '' || $_GET['action'] == ConfigApp::$HOME){
      // Home del sitio
      echo "ACTION ES ".$_GET['action'];
      $ControllerHome = new ControllerHome();
      $ControllerHome->mostrarHome();
    }
}
?>
