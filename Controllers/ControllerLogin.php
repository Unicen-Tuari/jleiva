<?php
require_once('Views/ViewLogin.php');
require_once('Models/ModelLogin.php');
require_once('Controllers/ControllerAdmin.php');

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

    //$cifrada = password_hash($password, PASSWORD_BCRYPT);
    //var_dump($cifrada);
    //echo '<br>';
    $usuario = $this->modelo->GetUsuario($email);
    //echo $usuario["password"];
    //echo '<br>';
    //echo $password;
    //echo '<br>';
    //var_dump($usuario);
    $cifrada = password_hash($usuario["password"], PASSWORD_BCRYPT);
    //echo '<br>';
    //var_dump($cifrada);
    if (password_verify($password, $cifrada)){
      session_start();
      $_SESSION["logueado"] = true;
      $Admin = new ControllerAdmin;
      $Admin->mostrarAdmin();
      session_destroy();
    }else{
      echo "MANDASTE FRUTA";
    }
  }


}
?>
