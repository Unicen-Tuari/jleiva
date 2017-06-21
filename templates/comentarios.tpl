<div class="row"> <!--C y E -->
  <div class="col-xm-12 col-md-6 col-md-offset-1 PanelColor well" id="Comentarios"> <!-- Comentarios -->
    <form action="ControllerComentarios.php" method="get">
      <h1>Comentarios</h1>
      <div class="form-group">
        <input type="text" class="form-control" name="nombre" placeholder="Name(Dandy)">
      </div>
      <div class="form-group">
        <textarea class="form-control" rows="5" name="comentario" placeholder="Comentario"></textarea>
      </div>
      <button href="#" type="submit" class="center-block btn">Publicar</button>
    </form>
  </div>
  <div class="col-xm-10 col-xm-offset-1 col-md-4 PanelColor well"> <!-- Evaluar -->
    <h1>Te gusto?</h1>
    <img src="css/images/Dude.png" class="img-circle center-block ImgEvaluar" alt="Ups!">
    <div class="center">
      <button type="button" class="btn">Me gusta</button>
      <button type="button" class="btn pull-right">Que feo eso</button>
    </div>
  </div>
</div>

<div class="row"> <!--Caja de comentarios -->
    <div class="col-xm-12 col-md-10 col-md-offset-1">
      {foreach from=$List_Comentarios item=$Comentario}
        <div class="center-block panel-white panel-shadow post well">
            <div class="post-heading">
                <div class="pull-left image">
                    <img src="images/profile/ProfileDandy.jpg" class="img-circle avatar" alt="UserProfileImage">
                </div>
                <div class="pull-left meta">
                    <div>
                        <a href="#"><b>{$Comentario['nombre']}</b></a>
                    </div>
                </div>
            </div>
            <div class="post-description LetraBlanca">
                <p>{$Comentario['comentario']}</p>
                <div class="stats">
                    <a href="#" class="btn btn-default stat-item"> 2 </a>
                    <a href="#" class="btn btn-default stat-item"> 12 </a>
                </div>
            </div>
        </div>
      {/foreach}
    </div>
</div><!-- container-fluid -->
