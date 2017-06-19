{include file="header.tpl" title=foo}
<nav class="navbar navbar-default SinMargen">
  <div class="container-fluid FondoBarra">
    <div class="navbar-header">
      <a class="navbar-brand" href=''>Space Dandy</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Temporadas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="spaceDandy/temporada/1">1</a></li>
            <li><a href="spaceDandy/temporada/2">2</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="spaceDandy/temporada/1">Especial</a></li>
          </ul>
        </li>
      </ul>
      {if $session == user}
      <ul class="nav navbar-nav navbar-right">
        <li class= 'dropdown-menu-right'><a href="admin">Admin</a></li>
      </ul>
      {else}
      <ul class="nav navbar-nav navbar-right">
        <li class= 'dropdown-menu-right'><a href="admin/logueado/logout">Logout</a></li>
      </ul>
      {/if}
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  <div class="container-fluid"><!-- container-fluid -->
</nav>
