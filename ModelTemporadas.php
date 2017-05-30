<?php
class ModelTemporadas
{
  private $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
            .'dbname=db_SpaceDandy;charset=utf8',
            'root', '');
  }

  function GetTemporadas()
  {
    $consulta = $this->db->prepare("SELECT * FROM temporadas");
    $result = $consulta->execute();
    return $consulta->fetchAll();
  }

  function GetListaEpisodios($temporada)
  {
    $consulta = $this->db->prepare("SELECT * FROM listaepisodios WHERE id_temporada LIKE '$temporada'");
    $result = $consulta->execute();
    return $consulta->fetchAll();
  }
}
?>
