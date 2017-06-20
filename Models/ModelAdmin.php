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
}
 ?>
