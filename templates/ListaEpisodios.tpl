<div class="panel panel-default col-md-8 col-md-offset-2 Fondo "> <!-- Episodios -->
    <div class="panel-heading">Tabla de Episodios</div>
    <table class="Table">
      <tr>
        <th>Episodios</th>
        <th>Duracion</th>
      </tr>
      {foreach from=$List_Epis item=$Episodio}
        <tr>
          <td><a href="{$temporada}/{$Episodio['id_episodio']}">{$Episodio['nro_episodio']}-{$Episodio['nombre']}</a></td>
          <td>{$Episodio['duracion']}</td>
        </tr>
      {/foreach}
    </table>
</div>
