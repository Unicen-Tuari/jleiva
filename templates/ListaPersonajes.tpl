<div class="row"> <!-- Listado -->
  <div class="col-sm-12 col-md-12" id="ListadoPersj">
    <div class="PanelColor">
      <ul class= "listImg">
        {foreach from=$List_Pers item=$Pers}
          <li><a href="#Galeria{$Pers['id_personaje']}"><img  src="images/profile/{$Pers['titulo']}" class="img-circle ImgEvaluar" alt="{$Pers['detalles']}"></a></li>
        {/foreach}
      </ul>
    </div>
  </div>
</div>
<div class="row PanelColor"> <!-- Personajes -->
  <div class="col-xm-12 col-md-12">
    {foreach from=$List_Pers item=$Pers}
      <div id= "Galeria{$Pers['id_personaje']}" class="col-xm-12 col-md-6 well">
          <h1>{$Pers['detalles']}</h1>
          <img src="images/profile/{$Pers['titulo']}" class="img-rounded center-block" alt="{$Pers['detalles']}">
          <p>{$Pers['Descripcion']}</p>
      </div>
    {/foreach}
  </div>
</div>
