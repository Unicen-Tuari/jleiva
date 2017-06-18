<?php
require_once('Views/ViewComentarios.php');
require_once('Models/ModelComentarios.php');

class ControllerComentarios
{
  private $vista;
  private $modelo;

  function __construct()
  {
      $this->vista = new ViewComentarios();
      $this->modelo = new ModelComentarios();
  }

 function ArmarComentariosxTemp($temporada){
   $Arr_List_Comentarios = $this->modelo->GetComentariosxTemp($temporada);
   $this->vista->MostrarComentarios($Arr_List_Comentarios);
 }

 function ArmarComentariosxEpisodio($temporada, $episodio){
   $Arr_List_Comentarios = $this->modelo->GetComentariosxTemp
                                        ($temporada, $episodio);
   $this->vista->MostrarComentarios($Arr_List_Comentarios);
 }


}

if(isset($_GET["nombre"]) && isset($_GET["comentario"])){
  $nombre = $_GET["nombre"];
  $comentario = $_GET["comentario"];
  $modelo = new ModelComentarios();
  $modelo->Guardar_Comentario($nombre, $comentario);
  header('Location: http://127.0.0.1/web-1/jleiva/spaceDandy/temporada/1');
}
?>
