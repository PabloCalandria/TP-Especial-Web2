{include file='templates/header.tpl'}


<table class="table table-bordered table-dark">
        <tr class="">
            <th scope="col">Cont. Alc.</th>
            <th scope="col">Ibu</th>
            <th scope="col">O.G.</th>
            <th></th>
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
        <tfoot>
            <form method="post" action="../editarProduct/{$id}" class="table-bordered table-dark">
                <div class="form-group">
                    <input type="number" class="form-control" name="cont_alc" placeholder="cont_alc">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="ibu" placeholder="ibu">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="o_g" placeholder="o_g">
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </tfoot> 
</table>

{include file='templates/footer.tpl'}
