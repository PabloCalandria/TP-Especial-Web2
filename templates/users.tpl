{include file="header.tpl"}

<div class="container-fluid bg-secondary">
    <div class="row">
        <div class="offset-lg-1 col-lg-10 col-sm-12 py-4 bg-dark">
            <table class="table table-bordered table-dark">
                <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">Admin</th>
                </tr>
                {foreach $Users as $info}
                    <tr>
                        <td>{$info->usuario}</td>
                        {if $info->admin == 1}
                            {if $Usuario != $info->usuario}
                                    <td>Si / <a href='deleteUser/{$info->id_usuario}'>Borrar</a></td>
                                {else}
                                    <td>Si</td>
                            {/if}
                        {else}
                            <td>No / <a href='darAdmin/{$info->id_usuario}'>Dar Admin</a> / <a href='deleteUser/{$info->id_usuario}'>Borrar</a></td>
                        {/if}
                    </tr>
                {/foreach}
            </table>
        </div>
    </div>
</div>

{include file="footer.tpl"}

