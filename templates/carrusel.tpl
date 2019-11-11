
{foreach $Imagenes as $img}
    <a href='../deleteImagen/{$img->id_imagenes}/{$img->id_cerveza}'>Borrar</a><img src="../{$img->url}" width="200" height="200" />
{/foreach}

{*<div class="py-3 bg-dark col-lg-6 col-sm-8">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            {$total = 0}
            {foreach $Imagenes as $img}
                <li data-target="#carouselExampleIndicators" data-slide-to="{$total}" class=""></li>
                {$total++}
            {/foreach}
        </ol>
        <div class="carousel-inner">
            {foreach $Imagenes as $img}
                <div class="carousel-item active">
                    <img src="../{$img->url}" class="d-block w-25">
                </div>
            {/foreach}
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>*}