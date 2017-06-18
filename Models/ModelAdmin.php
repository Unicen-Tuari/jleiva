<?php
class ModelAdmin
{
  private $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
            .'dbname=db_SpaceDandy;charset=utf8',
            'root', '');
  }

  function GetUsuarios()
  {
    $consulta = $this->db->prepare("SELECT * FROM usuario");
    $result = $consulta->execute();
    return $consulta->fetchAll();
  }
}
 ?>
