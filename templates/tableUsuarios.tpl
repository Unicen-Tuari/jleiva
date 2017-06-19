<div class="panel panel-default col-md-8 col-md-offset-2">
  <!-- Default panel contents -->
  <div class="panel-heading">Tabla de Usuarios
    <a href="admin/logueado/sUsuarios/nuevoUsuario">
    <span class="glyphicon glyphicon-send"></span></a>
  </div>

  <!-- Table -->
  <table class="table">
    <tr>
      <th>#</th>
      <th>e-mail</th>
      <th>password</th>
    </tr>
    {foreach from=$listaUsuarios item=$usuario}
      <tr>
        <td>{$usuario['id_usuario']}</td>
        <td>{$usuario['email']}</td>
        <td>{$usuario['password']}</td>
        <td>
          <form action="admin/logueado/sUsuarios/eliminarUsuario" method="post">
              <input type="hidden" name='id_usuario' value="{$usuario['id_usuario']}">
              <button href="admin/logueado/sUsuarios/eliminarUsuario" type="submit"
               class="glyphicon glyphicon-trash"></button>
          </form>
        </td>
        <td>
          <form action="admin/logueado/sUsuarios/editarUsuario" method="post">
              <input type="hidden" name='id_usuario' value="{$usuario['id_usuario']}">
              <input type="hidden" name='email' value="{$usuario['email']}">
              <input type="hidden" name='password' value="{$usuario['password']}">
              <button href="admin/logueado/sUsuarios/editarUsuario" type="submit"
               class="glyphicon glyphicon-wrench"></button>
          </form>
        </td>
      </tr>
    {/foreach}
  </table>
</div>
