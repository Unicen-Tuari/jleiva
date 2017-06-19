<div class="panel panel-default col-md-8 col-md-offset-2">
  <!-- Default panel contents -->
  <div class="panel-heading">Tabla de Temporadas</div>

  <!-- Table -->
  <table class="table">
    <tr>
      <th>#</th>
      <th>cantCaps</th>
      <th>detalles</th>
    </tr>
    {foreach from=$listaTemporadas item=$temporada}
      <tr>
        <td>{$temporada['id_temp']}</td>
        <td>{$temporada['cant_caps']}</td>
        <td>{$temporada['detalles']}</td>
        <td><a href="http://localhost/web-1/jleiva/admin/logueado/{$usuario['id_usuario']}">
            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
      </tr>
    {/foreach}
  </table>
</div>
