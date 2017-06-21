<nav class="navbar navbar-default FondoBarra" >
  <div class="container-fluid ">
    <div class="navbar-header">
      <a class="navbar-brand" href='spaceDandy'>Space Dandy</a>
    </div>
      <ul class="nav navbar-nav">
        <li class= 'dropdown-menu-right'><a href="spaceDandy/temporada/1">Temporada-1</a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li class= 'dropdown-menu-right'><a href="spaceDandy/temporada/2">Temporada-2</a></li>
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
