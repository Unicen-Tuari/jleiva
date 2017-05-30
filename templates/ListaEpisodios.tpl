<div class="col-sm-12 col-md-12 Fondo " id="Episodios"> <!-- Episodios -->
    <h1>Episodios</h1>
    <table class="TableEpisodios center">
      <tr>
        <th>Episodios</th>
        <th>Duracion</th>
      </tr>
      {foreach from=$List_Epis item=$Episodio}
        <tr>
          <td><a href="Episodio{$Episodio['nro_episodio']}">{$Episodio['nro_episodio']}-{$Episodio['nombre']}</a></td>
          <td>{$Episodio['duracion']}</td>
        </tr>
      {/foreach}
    </table>
</div>
