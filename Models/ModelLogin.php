<?php
class ModelLogin
{
  private $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
            .'dbname=db_SpaceDandy;charset=utf8',
            'root', '');
  }

  function GetUsuario($email)
  {
    $consulta = $this->db->prepare("SELECT password FROM usuario
                                    WHERE email = ?");
    $result = $consulta->execute(array($email));
    return $consulta->fetch();
  }

}
 ?>
