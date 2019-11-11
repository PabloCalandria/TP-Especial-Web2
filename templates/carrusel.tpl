
{foreach $Imagenes as $img}
    <img src="../{$img->url}" width="200" height="200" />{if $admin}<a class="" href='../deleteImagen/{$img->id_imagenes}/{$img->id_cerveza}'>Borrar</a>{/if}
{/foreach}
{if $admin}
    <div class="container-fluid">
        <div class="row mb-5">
            <form action="../agregarImagen/{$id}" method="post" enctype="multipart/form-data" class="table-bordered table-dark">
                <button type="submit" class="btn col-2 offset-1 mt-3">Agregar</button>
                <input type="file" class="form-control btn col-7 mt-3" name="img" multiple>
            </form> 
        </div>
    </div>
{/if}