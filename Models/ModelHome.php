<?php
class ModelHome
{
  private $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
            .'dbname=db_SpaceDandy;charset=utf8',
            'root', '');
  }

  function GetGaleriaImg()
  {
    $consulta = $this->db->prepare("SELECT * FROM GaleriaImg");
    $result = $consulta->execute();
    return $consulta->fetchAll();
  }

  function GetListaPersonajes()
  {
    $consulta = $this->db->prepare("SELECT * FROM ListaPersonajes");
    $result = $consulta->execute();
    return $consulta->fetchAll();
  }
}
 ?>
