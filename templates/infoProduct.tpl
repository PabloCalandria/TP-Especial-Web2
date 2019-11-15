{include file='templates/header.tpl'}

<div class="container-fluid bg-secondary">

    <div class="row py-5 offset-1 col-lg-10 bg-dark">
        <table class="table table-bordered table-dark">
                <tr class="">
                    <th scope="col">Cont. Alc.</th>
                    <th scope="col">Ibu</th>
                    <th scope="col">O.G.</th>
                    <th scope="col">Estilo</th>
                </tr>
                <tr>
                {$id = null}
                {foreach $Producto as $info}
                        <td>{$info->cont_alc}</td>
                        <td>{$info->ibu}</td>
                        <td>{$info->o_g}</td>
                        <td>{$info->nombreEstilo}</td>
                        {$id = $info->id_cerveza}
                {/foreach}
                {include file='templates/carrusel.tpl'}
                </tr>
        </table>
    </div>
    {include file='templates/comentarios.tpl'}
    {if $admin}
        <div class="py-5 offset-1 col-lg-10 bg-dark">
            <form method="post" action="../editarProduct/{$id}" class="table-bordered table-dark">
                <div class="row">
                    {foreach $Producto as $info}
                        <div class="form-group col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
                            <label class="">Contenido Alcoholico:</label>
                            <input type="number" class="form-control" name="cont_alc" value="{$info->cont_alc}">
                        </div>
                        <div class="form-group col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
                            <label class="">IBU:</label>
                            <input type="number" class="form-control" name="ibu"value="{$info->ibu}">
                        </div>
                        <div class="form-group col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
                            <label class="">O.G:</label>
                            <input type="number" class="form-control" name="o_g"value="{$info->o_g}">
                        </div>
                        <div class="form-group col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
                            <button type="submit" class="btn col-4 offset-4"
                                id="btnContacto">Editar</button>
                        </div>
                    {/foreach}
                </div>
            </form>
        </div>
    {/if}

</div>

{include file='templates/footer.tpl'}
