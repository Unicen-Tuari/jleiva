<?php
class ModelEpisodios
{
  private $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
            .'dbname=db_SpaceDandy;charset=utf8',
            'root', '');
  }

  function GetEpisodios($temporada, $episodio)
  {
    $consulta = $this->db->prepare("SELECT * FROM listaepisodios");
    $result = $consulta->execute();
    return $consulta->fetchAll();
  }
}

?>
