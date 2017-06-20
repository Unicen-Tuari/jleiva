<div class="panel panel-default col-md-8 col-md-offset-2">
  <!-- Default panel contents -->
  <div class="panel-heading">Tabla de Temporadas
    <a href="admin/logueado/sTemporadas/nuevaTemp">
    <span class="glyphicon glyphicon-send"></span></a>
  </div>

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
        <td>
          <form action="admin/logueado/sTemporadas/eliminarTemp" method="post">
              <input type="hidden" name='id_temp' value="{$temporada['id_temp']}">
              <button href="admin/logueado/sTemporadas/eliminarTemp" type="submit"
               class="glyphicon glyphicon-trash"></button>
          </form>
        </td>
        <td>
          <form action="admin/logueado/sTemporadas/editarTemp" method="post">
              <input type="hidden" name='id_temp' value="{$temporada['id_temp']}">
              <input type="hidden" name='cant_caps' value="{$temporada['cant_caps']}">
              <input type="hidden" name='detalles' value="{$temporada['detalles']}">
              <button href="admin/logueado/sTemporadas/editarTemp" type="submit"
               class="glyphicon glyphicon-wrench"></button>
          </form>
        </td>
    {/foreach}
  </table>
</div>
