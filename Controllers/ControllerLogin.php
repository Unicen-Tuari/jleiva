<?php
require_once('Views/ViewLogin.php');
require_once('Models/ModelLogin.php');
require_once('Controllers/ControllerAdmin.php');

require_once('config/configUrl.php');

class ControllerLogin
{
  private $vista;
  private $modelo;

  function __construct()
  {
      $this->vista = new ViewLogin();
      $this->modelo = new ModelLogin();
  }

 function mostrarLogin(){

   $this->vista->mostrarLogin();
 }

 function logueame(){
    $error = array();

    if(isset($_POST["email"]) && strlen(trim($_POST["email"])) > 0){
      $email = $_POST["email"];
    }
    if(isset($_POST["password"]) && strlen(trim($_POST["password"])) > 0){
      $password = $_POST["password"];
    }
    $usuario = $this->modelo->GetUsuario($email);
    $hash = password_hash($usuario["password"], PASSWORD_BCRYPT);
    if (password_verify($password, $hash)){
      session_start();
      $_SESSION['logueado'] = true;
      header("Location:".ConfigUrl::$BASE_URL."/admin/logueado");
    }else{
      header("Location:".ConfigUrl::$BASE_URL."/admin");
    }
  }

}
?>
