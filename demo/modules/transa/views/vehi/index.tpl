<div class="container">
<h3>Lista vehículos</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar este vehículo?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
{/literal}
{if $_acl->permiso('crear_vehi')}
<p><br/><a class="btn btn-default" href="{$_layoutParams.root}transa/vehi/newVehi"><img src="{$_layoutParams.root}public/img/all/new.png" width="15" height="15"/>Nuevo vehículo</a></p>
{/if}
<div class="well well-small row sm">
    <form id="form1" class="form-inline">
        {if $sadmin == 1}
        <div class="col-sm-4">
        <select id="co" name="co" class="form-control">
            <option value=""> - seleccione condominio - </option>
            {foreach from=$cond item=ps}
                <option value="{$ps.Id_cond}">{$ps.Nom_cond}</option>
            {/foreach}
        </select>
        </div>
        {else}
            <input type="hidden" id="co" name="co" value="{$co}"/>
        {/if}
        <div class="col-sm-4">
        <select id="cb" name="cb" class="form-control">
            <option value=""> - seleccione calle/block - </option>
            {foreach from=$cbl item=cb}
                <option value="{$cb.a}">{$cb.b}</option>
            {/foreach}
        </select>
        </div>
    </form>
</div>
<div id="lista_registros">
<form name="form1" method="post">
<input type="hidden" value="{$_datos.pagina1|default:""}" name="pagina1">
{if isset($vehi) && count($vehi)}
    <table class="table table-bordered">
    <thead>
        <th colspan="10" style="background: #E6E6FA;text-align: center;">Listado de vehículos</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Id</td>
        <td style="font-weight:bold;text-align: center;">Patente</td>
        <td style="font-weight:bold;text-align: center;width: 100px;">Marca</td>       
        <td style="font-weight:bold;text-align: center;width: 100px;">Modelo</td> 
        {if $sadmin == 1}<td style="font-weight:bold;text-align: center;width: 100px;">Condominio</td>{/if} 
        {if $_acl->permiso('editar_vehi')}<td style="font-weight:bold;text-align: center;">Edit.</td>{/if}
        {if $_acl->permiso('elim_vehi')}<td style="font-weight:bold;text-align: center;">Elim.</td>{/if}
    </thead>
{foreach item=datos from=$vehi}
    
    {if $color == "#F5FFFA"}{assign var="color" value="none"}{else}{assign var="color" value="#F5FFFA"}{/if}
    <tr id="list" style="background:{$color}" onmouseover=style.background="#F0F8FF" onmouseout=style.background="{$color}">
        <td>{$datos.Id_vehi}</td>
        <td>{$datos.Cod_vehi}</td>
        <td>{$datos.Nom_marca}</td> 
        <td>{$datos.Nom_modelo}</td>
        {if $sadmin == 1}<td>{$datos.Nom_cond}</td>{/if}
        {if $_acl->permiso('editar_vehi')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="{$_layoutParams.root}transa/vehi/editVehi/{$datos.Id_encrypt}"></a></td>{/if}
        {if $_acl->permiso('elim_vehi')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="{$_layoutParams.root}transa/vehi/delVehi/{$datos.Id_encrypt}" onclick='return cb(this);'></a></td>{/if}    
    </tr>

{/foreach}
</table>
{else}
            <p><strong>No hay vehículos registrados!</strong></p>
{/if} 
</form>
{if isset($paginacion1)}{$paginacion1}   {/if}  
</div>
{if $_acl->permiso('crear_vehi')}
<p><br/><a class="btn btn-default" href="{$_layoutParams.root}transa/vehi/newVehi"><img src="{$_layoutParams.root}public/img/all/new.png" width="15" height="15"/>Nuevo vehículo</a></p>
{/if}
</div>