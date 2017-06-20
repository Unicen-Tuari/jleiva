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

  function GetUsuarios(){
    $consulta = $this->db->prepare("SELECT * FROM usuario");
    $result = $consulta->execute();
    return $consulta->fetchAll();
  }

  function getTemporadas(){
    $consulta = $this->db->prepare("SELECT * FROM temporadas");
    $result = $consulta->execute();
    return $consulta->fetchAll();
  }

  function getEpisodios(){
    $consulta = $this->db->prepare("SELECT * FROM listaepisodios");
    $result = $consulta->execute();
    return $consulta->fetchAll();
  }

  function cargarUsuario($id_usuario, $email, $password){
    $consulta = $this->db->prepare("INSERT INTO usuario(id_usuario, email, password)
                                    VALUES ('$id_usuario', '$email', '$password')");
    $result = $consulta->execute();
  }

  function eliminarUsuario($id_usuario){
    $sentencia = $this->db->prepare("DELETE FROM usuario WHERE id_usuario=?");
    $sentencia->execute(array($id_usuario));
  }

  function editarUsuario($idsafe, $id_usuario, $password, $email){
    $sentencia = $this->db->prepare("UPDATE usuario SET id_usuario='$id_usuario', password='$password', email='$email' WHERE id_usuario=?");
    $sentencia->execute(array($idsafe));
  }
//---------------------------------------------
  function cargarTemp($id_temp, $cant_caps, $detalles){
    $consulta = $this->db->prepare("INSERT INTO temporadas(id_temp, cant_caps, detalles)
                                    VALUES ('$id_temp', '$cant_caps', '$detalles')");
    $result = $consulta->execute();
  }

  function eliminarTemp($id_temp){
    $sentencia = $this->db->prepare("DELETE FROM temporadas WHERE id_temp=?");
    $sentencia->execute(array($id_temp));
  }

  function editarTemp($idsafe, $id_temp, $cant_caps, $detalles){
    $sentencia = $this->db->prepare("UPDATE temporadas SET id_temp='$id_temp', cant_caps='$cant_caps', detalles='$detalles' WHERE id_temp=?");
    $sentencia->execute(array($idsafe));
  }
//------------------------------------------------------------
function cargarEpi($id_episodio, $id_temporada, $nombre, $duracion, $detalles, $nro_episodio){
  $consulta = $this->db->prepare("INSERT INTO listaEpisodios(id_episodio, id_temporada, nombre, duracion, detalles, nro_episodio)
                                  VALUES ('$id_episodio', '$id_temporada', '$nombre','$duracion', '$detalles', '$nro_episodio')");
  $result = $consulta->execute();
}

function eliminarEpi($id_epi){
  $sentencia = $this->db->prepare("DELETE FROM listaEpisodios WHERE id_episodio=?");
  $sentencia->execute(array($id_epi));
}

function editarEpi($idsafe, $id_episodio, $id_temporada, $nombre, $duracion, $detalles, $nro_episodio){
  $sentencia = $this->db->prepare("UPDATE listaEpisodios SET id_episodio='$id_episodio', id_temporada='$id_temporada', nombre='$nombre',
                                                              duracion='$duracion', detalles='$detalles', nro_episodio='$nro_episodio'
                                                        WHERE id_episodio=?");
  $sentencia->execute(array($idsafe));
}
}
 ?>
