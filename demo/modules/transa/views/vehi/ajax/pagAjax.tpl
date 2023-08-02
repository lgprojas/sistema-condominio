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
        {if $_acl->permiso('editar_vehi')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="{$root}transa/vehi/editVehi/{$datos.Id_encrypt}"></a></td>{/if}
        {if $_acl->permiso('elim_vehi')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="{$root}transa/vehi/delVehi/{$datos.Id_encrypt}" onclick='return cb(this);'></a></td>{/if}    
    </tr>

{/foreach}
</table>
{else}
            <p><strong>No hay vehículos registrados!</strong></p>
{/if}

{$paginacion1|default:""}