{include file="header.tpl"}

<div class="container-fluid bg-secondary">
    <div class="row">
            <div class="py-3 bg-dark listaProductos offset-lg-1 col-sm-8 col-lg-4">
                <ul>
                    {$titulo = null}
                    {foreach $Lista as $item}
                        <li>
                            {if $item->nombreEstilo != $titulo}
                                {$titulo = $item->nombreEstilo}
                                <h1>{$item->nombreEstilo}
                                    {if $admin}
                                        <a> / </a><a href='deleteStyle/{$item->id_estilo}'>Borrar</a>
                                    {/if}
                                </h1>

                                {foreach $Lista as $cerveza}
                                    <ul class="listaProductoElemento">
                                        {if $item->id_estilo == $cerveza->id_estilo}
                                            <td ><a class="link-unstyled" href='infoProduct/{$cerveza->id_cerveza}'>{$cerveza->nombreCerveza}</a></td>
                                            {if $admin}
                                                <td><a> / </a></td>
                                                <td><a href='deleteProduct/{$cerveza->id_cerveza}'>Borrar</a></td>
                                            {/if}
                                        {/if}
                                    </ul>
                                {/foreach}
                            {/if}
                        </li>                        
                    {/foreach}
                </ul>
            </div>
            <div class="py-3 bg-dark col-lg-6 col-sm-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/carouselImg1.jpg" class="d-block w-100" alt="Imagen de nuestras cervezas">
                        </div>
                        <div class="carousel-item">
                            <img src="images/carouselImg2.jpg" class="d-block w-100"
                                alt=" Otra imagen de nuestras cervezas">
                        </div>
                        <div class="carousel-item">
                            <img src="images/carouselImg3.jpg" class="d-block w-100"
                                alt="Imagen de nuestras cervezas con sus semillas">
                        </div>
                        <div class="carousel-item">
                            <img src="images/carouselImg4.jpg" class="d-block w-100" alt="Imagen de una cerveza nuestra">
                        </div>
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
            </div>
        </div>
    </div>

</div>

{if $admin}
    {include file="formProduct.tpl"}
    {include file="formStyle.tpl"}
{/if}

{include file="footer.tpl"}