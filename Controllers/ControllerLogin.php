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
    $usuario = $this->modelo->GetUsuario($email);
    $cifrada = password_hash($usuario["password"], PASSWORD_BCRYPT);
    echo $password;
    if (password_verify($password, $cifrada)){
      session_start();
      $_SESSION['logueado'] = true;
      header('Location: http://127.0.0.1/web-1/jleiva/admin/logueado');
      //session_destroy();
    }else{
      echo "MANDASTE FRUTA";
      header('Location: http://127.0.0.1/web-1/jleiva/admin');
    }
  }

  function verificaSession(){
    return $_SESSION['logueado'];
  }

}
?>
