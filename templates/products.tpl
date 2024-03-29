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
                            </h1>
                            {foreach $Lista as $cerveza}
                                <ul class="listaProductoElemento">
                                    {if $item->id_estilo == $cerveza->id_estilo}
                                        <li><a class="link-unstyled" href='infoProduct/{$cerveza->id_cerveza}'>{$cerveza->nombreCerveza}</a>
                                        {if $admin}
                                            <a> / </a>
                                            <a href='deleteProduct/{$cerveza->id_cerveza}'>Borrar</a>
                                        {/if}
                                        </li>
                                    {/if}
                                </ul>
                            {/foreach}
                        {/if}
                    </li>                        
                {/foreach}
                {if $admin}
                    <hr></hr>
                    <li>
                    <h1>ESTILOS</h1>
                        <ul class="listaProductoElemento">
                            {foreach $Estilos as $item}
                                <li> <a>{$item->nombre}<a> / </a><a href='deleteStyle/{$item->id_estilo}'>Borrar</a><li>
                            {/foreach}
                        </ul>    
                    </li>
                {/if}
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
    {if $admin}
        <div class="row">
            <div class="offset-lg-1 col-lg-10 col-sm-12 py-4">
                <div class="row">
                    <div class="offset-1 col-10">
                        {include file="formProduct.tpl"}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset-lg-1 col-lg-10 col-sm-12 py-4">
                <div class="row">
                    <div class="offset-1 col-10">
                        {include file="formStyle.tpl"}
                    </div>
                </div>
            </div>
        </div>
    {/if}
</div>


{include file="footer.tpl"}