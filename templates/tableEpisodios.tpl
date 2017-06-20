<div class="panel panel-default col-md-8 col-md-offset-2">
  <!-- Default panel contents -->
  <div class="panel-heading">Tabla de Episodios
    <a href="admin/logueado/sEpisodios/nuevoEpi">
    <span class="glyphicon glyphicon-send"></span></a>
  </div>
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
        <td>
          <form action="admin/logueado/sEpisodios/eliminarEpi" method="post">
              <input type="hidden" name='id_episodio' value="{$episodio['id_episodio']}">
              <button href="admin/logueado/sEpisodios/eliminarEpi" type="submit"
               class="glyphicon glyphicon-trash"></button>
          </form>
        </td>
        <td>
          <form action="admin/logueado/sEpisodios/editarEpi" method="post">
              <input type="hidden" name='id_episodio' value="{$episodio['id_episodio']}">
              <input type="hidden" name='id_temporada' value="{$episodio['id_temporada']}">
              <input type="hidden" name='nombre' value="{$episodio['nombre']}">
              <input type="hidden" name='duracion' value="{$episodio['duracion']}">
              <input type="hidden" name='detalles' value="{$episodio['detalles']}">
              <input type="hidden" name='nro_episodio' value="{$episodio['nro_episodio']}">
              <button href="admin/logueado/sEpisodios/editarEpi" type="submit"
               class="glyphicon glyphicon-wrench"></button>
          </form>
        </td>
    {/foreach}
  </table>
</div>
