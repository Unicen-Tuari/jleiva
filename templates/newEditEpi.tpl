<div class="row Fondo">
  <div class="col-xm-12 col-md-8 col-md-offset-2 PanelColor well">
    <form action="admin/logueado/sEpisodios/{$dir}" method="post">
      <h1>{$titulo}</h1>
      <h4>#</h4>
      <div class="form-group">
         <input  type="hidden" class="form-control" name="id_safe" value="{$id_episodio}">
         <input  type="text" class="form-control" name="id_episodio" value="{$id_episodio}">
      </div>
      <h4>id_temporada:</h4>
      <div class="form-group">
         <input type="text" class="form-control" name="id_temporada" value="{$id_temporada}">
      </div>
      <h4>nombre:</h4>
      <div class="form-group">
         <input  type="text" class="form-control" name="nombre" value="{$nombre}">
      </div>
      <h4>duracion:</h4>
      <div class="form-group">
         <input  type="text" class="form-control" name="duracion" value="{$duracion}">
      </div>
      <h4>detalles:</h4>
      <div class="form-group">
         <input  type="text" class="form-control" name="detalles" value="{$detalles}">
      </div>
      <h4>nro_episodio:</h4>
      <div class="form-group">
         <input  type="text" class="form-control" name="nro_episodio" value="{$nro_episodio}">
      </div>
      <button href="admin/logueado/sEpisodios/{$dir}" type="submit" class="center-block btn">Subir</button>
    </form>
  </div>
</div>
