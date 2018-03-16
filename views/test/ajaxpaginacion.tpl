
<div class="well well-small">
    <form id="form1" class="form-inline">
        Nombre: <input type="text" name="nombre" id="nombre">
        <button type="button" id="btnEnviar" class="btn btn-dark"><i class="glyphicon glyphicon-share"></i></button>
        
    </form>
</div>
<div id="lista_registros">
<div class="container">
{if isset($datos)}
    <div class="container">
        <table class="table-condensed">
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>CIUDAD</th>
                    <th>EDAD</th>
                </tr>
            </thead>
            <tbody>
                {foreach item=row from=$datos}
                <tr>
                    <td> {$row.nombre } </td>
                    <td> {$row.ciudad } </td>
                    <td> {$row.edad } </td>
                </tr>
                {/foreach}
            </tbody>

        </table>
    </div>
{else}
    <h3>NO HAY REGISTROS</h3>
{/if}

{if isset($paginacion)} {$paginacion} {/if}

</div>
</div>    