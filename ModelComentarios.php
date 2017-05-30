<?php
class ModelComentarios
{
  private $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
            .'dbname=db_SpaceDandy;charset=utf8',
            'root', '');
  }

  function GetComentariosxTemp($temporada)
  {
    $consulta = $this->db->prepare("SELECT * FROM comentarios_temp
                                    WHERE id_temporada LIKE '$temporada'");
    $result = $consulta->execute();
    return $consulta->fetchAll();
  }

  function GetComentariosxEpisodio($temporada, $episodio)
  {
    $consulta = $this->db->prepare("SELECT * FROM comentarios_episodio
                                    WHERE (id_temp LIKE '$temporada'
                                    AND id_episodio LIKE '$episodio'");
    $result = $consulta->execute();
    return $consulta->fetchAll();
  }

  function Guardar_Comentario($nombre, $comentario)
  {
    $consulta = $this->db->prepare("INSERT INTO comentarios_temp(id_comentario, nombre, comentario, id_temporada)
                                  VALUES ('', '$nombre', '$comentario', 1)");
    $result = $consulta->execute();
    header('Location: ControllerTemporadas.php');
  }
}
 ?>
