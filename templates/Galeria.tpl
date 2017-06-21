<div class="row"> <!-- Imagenes -->
  <div class="col-xm-12 col-md-12" id="Galeria">
    <div id="myCarouselImg" class="carousel slide CarouselWidth center-block panel" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          {foreach from=$Cant_Img item=$nro}
                  {if $nro == 0}
                    <li data-target="#myCarouselImg" data-slide-to="{$Img['id_img']}" class="active"></li>
                  {else}
                    <li data-target="#myCarouselImg" data-slide-to="{$Img['id_img']}"></li>
                  {/if}
          {/foreach}
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          {foreach from=$Arr_Galeria item=$Img}
              {if $Img['id_img'] == 1}
                <div class="item active">
                  <img src="images/galeria/{$Img['titulo']}" alt="{$Img['detalles']}">
                </div>
              {else}
                <div class="item">
                  <img src="images/galeria/{$Img['titulo']}" alt="{$Img['detalles']}">
                </div>
              {/if}
          {/foreach}
       </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarouselImg" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarouselImg" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
  </div>
</div>
