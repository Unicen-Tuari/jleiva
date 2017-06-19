<div class="panel panel-default col-md-8 col-md-offset-2">
  <!-- Default panel contents -->
  <div class="panel-heading">Tabla de Episodios</div>

  <!-- Table -->
  <table class="table">
    <tr>
      <th>#</th>
      <th>Temporada</th>
      <th>Nombre</th>
      <th>duracion</th>
      <th>detalles</th>
      <th>nro_episodio</th>
    </tr>
    {foreach from=$listaEpisodios item=$episodio}
      <tr>
        <td>{$episodio['id_episodio']}</td>
        <td>{$episodio['id_temporada']}</td>
        <td>{$episodio['nombre']}</td>
        <td>{$episodio['duracion']}</td>
        <td>{$episodio['detalles']}</td>
        <td>{$episodio['nro_episodio']}</td>
        <td><a href="http://localhost/web-1/jleiva/admin/logueado/{$usuario['id_usuario']}">
            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
      </tr>
    {/foreach}
  </table>
</div>
