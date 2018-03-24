<div class="row">
    <div class="col-md-4">
        <h2>Usuarios</h2>
    </div>
    <div class=" col-md-8">
        <form action="{$_layoutParams.root}usuarios" method="POST" class="form-horizontal">
            <div class="form-group">
                <div class=" col-md-6 pull-right">
                <input class="form-control" type="text" name="share" id="share" placeholder="Share"/>
                </div>
                
                
            </div>
            <div class="form-group">
                <div class="col-md-6 pull-right">
                    <input class=" btn btn-info" type="submit" value="Share"/>
                </div>
            </div>
        </form>
    </div>
</div>


{if isset($usuarios) && count($usuarios)}
    <table class="table table-bordered table-striped table-condensed">
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Role</th>
            <th></th>
            <th></th>
        </tr>
        
        {foreach from=$usuarios item=us}
        <tr>
            <td>{$us.id}</td>
            <td>{$us.usuario}</td>
            <td>{$us.role}</td>
            <td>
                <a href="{$_layoutParams.root}usuarios/index/permisos/{$us.id}">
                   Permisos
                </a>
            </td>
            <td>
                <a href="{$_layoutParams.root}usuarios/index/eliminarUsuario/{Cifrado::encryption($us.id)}" >Eliminar</a>
            </td>
        </tr>
            
        {/foreach}
    </table>
{/if}