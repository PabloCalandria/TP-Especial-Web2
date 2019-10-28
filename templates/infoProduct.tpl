{include file='header.tpl'}

<table class="table table-bordered table-dark">
        <tr class="">
            <th scope="col">Cont. Alc.</th>
            <th scope="col">Ibu</th>
            <th scope="col">O.G.</th>
            <th></th>
        </tr>
        <tr>
        {foreach $Producto as $info}
                <td>{$info->cont_alc}</td>
                <td>{$info->ibu}</td>
                <td>{$info->o_g}</td>
        {/foreach}
        </tr>
        <tfoot>
            <tr>
                <th><input class="form-control" name="Cont_alc" type="text" value="1%"></th>
                <th><input class="form-control" name="Ibu" type="number" value="1"></th>
                <th><input class="form-control" name="O_g" type="number" value="1"></th>
                <a href=""><td></td></a>
            </tr>
        </tfoot> 
</table>

{include file='footer.tpl'}
