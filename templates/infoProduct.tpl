{include file='templates/header.tpl'}

<div class="container-fluid bg-secondary">

    <div class="row py-5 offset-1 col-lg-10 bg-dark">
        <table class="table table-bordered table-dark">
                <tr class="">
                    <th scope="col">Cont. Alc.</th>
                    <th scope="col">Ibu</th>
                    <th scope="col">O.G.</th>
                </tr>
                <tr>
                {$id = null}
                {foreach $Producto as $info}
                        <td>{$info->cont_alc}</td>
                        <td>{$info->ibu}</td>
                        <td>{$info->o_g}</td>
                        {if $id == null}
                            {$id = $info->id_cerveza} 
                        {/if}
                {/foreach}
                </tr>
        </table>
    </div>
    {if $admin}
        <div class="py-5 offset-1 col-lg-9 bg-dark">
            <form method="post" action="../editarProduct/{$id}" class="table-bordered table-dark">
                <div class="form-group">
                    <input type="number" class="form-control" name="cont_alc" placeholder="Contenido alcoholico">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="ibu" placeholder="Ibu">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="o_g" placeholder="O.G">
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    {/if}

</div>

{include file='templates/footer.tpl'}