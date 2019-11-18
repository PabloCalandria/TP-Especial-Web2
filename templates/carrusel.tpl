<div class="offset-1 col-10 bg-dark">
	<div id="carouselCerveza" class="carousel" data-ride="carousel">
		<ol class="carousel-indicators">
			{$i=0}
			{foreach $Imagenes as $img}
				{if $i == 0}
					<li data-target="#carouselCerveza" data-slide-to="{$i}" class="active"></li>
				{else}
					<li data-target="#carouselCerveza" data-slide-to="{$i}"></li>
				{/if}
			{$i=$i+1}
			{/foreach}
		</ol>
		<div class="carousel-inner">
			{$j=0}
			{foreach $Imagenes as $img}
				{if $j == 0}
				<div class="carousel-item active">
					<img class="d-block w-100" src="../{$img->url}"/>
					<div class="carousel-caption">
						{if $admin}<a class="borra-cerveza" href='../deleteImagen/{$img->id_imagenes}/{$img->id_cerveza}'><i class="fas fa-trash-alt"></i></a>{/if}
					</div>
				</div>
				{$j=1}

				{else}
						<div class="carousel-item">
					<img class="d-block w-100" src="../{$img->url}"/>
					<div class="carousel-caption">
						{if $admin}<a class="borra-cerveza" href='../deleteImagen/{$img->id_imagenes}/{$img->id_cerveza}'><i class="fas fa-trash-alt"></i></a>{/if}
					</div>
				</div>
				{/if}
			{/foreach}
		</div>
		<a class="carousel-control-prev" href="#carouselCerveza" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselCerveza" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
{if $admin}
		<div class="agregarArchivo offset-2 col-8 my-1">
		<h1 class="agregarImagenTitulo">Ingrese la imagen de una cerveza:</h1>
			<form action="../agregarImagen/{$id}" method="post" enctype="multipart/form-data">
				<input type="file" class="form-control btn col-7 mt-3" name="img" multiple>
				<button type="submit" class="btn offset-1 mt-3">Agregar</button>
			</form> 
		</div>
{/if}