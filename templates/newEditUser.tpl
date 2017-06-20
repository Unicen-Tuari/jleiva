<div class="row Fondo"> <!--C y E -->
  <div class="col-xm-12 col-md-8 col-md-offset-2 PanelColor well"> <!-- Comentarios -->
    <form action="admin/logueado/sUsuarios/{$dir}" method="post">
      <h1>{$titulo}</h1>
      <h4>id_usuario:</h4>
      <div class="form-group">
         <input  type="hidden" class="form-control" name="id_safe" value="{$id_usuario}">
         <input  type="text" class="form-control" name="id_usuario" value="{$id_usuario}">
      </div>
      <h4>e-mail:</h4>
      <div class="form-group">
         <input type="text" class="form-control" name="email" value="{$email}">
      </div>
      <h4>password:</h4>
      <div class="form-group">
         <input  type="text" class="form-control" name="password" value="{$password}">
      </div>
      <button href="admin/logueado/sUsuarios/{$dir}" type="submit" class="center-block btn">Subir</button>
    </form>
  </div>
</div>
