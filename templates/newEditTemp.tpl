<div class="row Fondo">
  <div class="col-xm-12 col-md-8 col-md-offset-2 PanelColor well">
    <form action="admin/logueado/sTemporadas/{$dir}" method="post">
      <h1>{$titulo}</h1>
      <h4>#</h4>
      <div class="form-group">
         <input  type="hidden" class="form-control" name="id_safe" value="{$id_temp}">
         <input  type="text" class="form-control" name="id_temp" value="{$id_temp}">
      </div>
      <h4>cant_caps:</h4>
      <div class="form-group">
         <input type="text" class="form-control" name="cant_caps" value="{$cant_caps}">
      </div>
      <h4>detalles:</h4>
      <div class="form-group">
         <input  type="text" class="form-control" name="detalles" value="{$detalles}">
      </div>
      <button href="admin/logueado/sTemporadas/{$dir}" type="submit" class="center-block btn">Subir</button>
    </form>
  </div>
</div>
