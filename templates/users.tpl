{include file="header.tpl"}

<div class="container-fluid bg-secondary">
    <div class="row">
        <div class="offset-lg-1 col-lg-10 col-sm-12 py-4 bg-dark col-auto">
            <table class="table table-bordered table-dark">
                <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">Es administrador?</th>
                    <th scope="col">Dar permisos</th>
                    <th scope="col">Borrar Usuario</th>
                </tr>
                {foreach $Users as $info}
                    <tr>
                        <td>{$info->usuario}</td>
                        {if $info->admin == 1}
                            {if $Usuario != $info->usuario}
                                <td>Si</td>
                                <td><a class="text-danger" href='quitarAdmin/{$info->id_usuario}'><i class="fas fa-times"></i></a> </td>
                                <td class="text-center"><a class="text-danger" href='deleteUser/{$info->id_usuario}'><i class="fas fa-trash-alt"></i></a></td>
                            {else}
                                <td>Si</td>
                                <td></td>
                                <td></td>
                            {/if}
                        {else}
                            <td>No</td>
                            <td><a class="text-success" href='darAdmin/{$info->id_usuario}'><i class="fas fa-check"></i></a></td>
                            <td class="text-center"><a class="text-danger" href='deleteUser/{$info->id_usuario}'><i class="fas fa-trash-alt"></i></a></td>
                        {/if}
                    </tr>
                {/foreach}
            </table>
        </div>
    </div>
</div>

{include file="footer.tpl"}

