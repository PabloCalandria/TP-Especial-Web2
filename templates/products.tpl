{include file="header.tpl"}

<div class="row">
        <div class="py-3 bg-dark listaProductos offset-lg-1 col-sm-8 col-lg-4">
            <ul>
                <li>
                    <h1>Rubias</h1>
                    <ul class="listaProductoElemento">
                        <li>Kolsch</li>
                        <li>Honey Beer</li>
                        <li>Playa Grande</li>
                        <li>Ipa</li>
                    </ul>
                </li>
                <li>
                    <h1>Rojas</h1>
                    <ul class="listaProductoElemento">
                        <li>Scotch</li>
                        <li>Barley Wine</li>
                        <li>Sudestada</li>
                    </ul>
                </li>
                <li>
                    <h1>Negras</h1>
                    <ul class="listaProductoElemento">
                        <li>Porter</li>
                        <li>Cream Stout</li>
                        <li>Imperial Stout</li>
                    </ul>
                </li>
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

{include file="footer.tpl"}