<?php
class ModelTareas
{
  private $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
            .'dbname=dbSpaceDandy;charset=utf8',
            'root', '');
  }

  function GetEpisodios($temporada)
  {
    $consulta = $this->db->prepare("SELECT * FROM '$temporada'");
    $result = $consulta->execute();
    return $consulta->fetchAll();
  }
}
?>
