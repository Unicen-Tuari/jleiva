<div class="panel panel-default col-md-8 col-md-offset-2">
  <!-- Default panel contents -->
  <div class="panel-heading">Tabla de Usuarios</div>

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
        <td><a href="http://localhost/web-1/jleiva/admin/logueado/{$usuario['id_usuario']}">
            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
      </tr>
    {/foreach}
  </table>
</div>
