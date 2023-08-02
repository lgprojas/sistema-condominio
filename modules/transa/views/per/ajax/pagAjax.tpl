{if isset($per) && count($per)}
    <table class="table table-bordered">
    <thead>
        <th colspan="10" style="background: #E6E6FA;text-align: center;">Listado de personas</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Rut</td>
        <td style="font-weight:bold;text-align: center;">1er Apellido</td>      
        <td style="font-weight:bold;text-align: center;">2do Apellido</td>
        <td style="font-weight:bold;text-align: center;">Nombre</td>
        {if $sadmin == 1}<td style="font-weight:bold;text-align: center;">Condominio</td>{/if}
        {if $_acl->permiso('asoc_viv_per')}<td style="font-weight:bold;text-align: center;">Asoc. Viv.</td>{/if}
        {if $_acl->permiso('asoc_vehi_per')}<td style="font-weight:bold;text-align: center;">Asoc. Vehí.</td>{/if}
        {if $_acl->permiso('editar_per')}<td style="font-weight:bold;text-align: center;">Edit</td>{/if}
        {if $_acl->permiso('elim_per')}<td style="font-weight:bold;text-align: center;">Elim</td>{/if}
    </thead>
{foreach item=datos from=$per}
    
    {if $color == "#F5FFFA"}{assign var="color" value="none"}{else}{assign var="color" value="#F5FFFA"}{/if}
    <tr id="list" style="background:{$color}" onmouseover=style.background="#F0F8FF" onmouseout=style.background="{$color}">
        <td style="text-align: center;">{$datos.Rut_per}</td>
        <td>{$datos.Ape1_per}</td>        
        <td>{$datos.Ape2_per}</td>
        <td>{$datos.Nom1_per}</td>
        {if $sadmin == 1}<td style="text-align: center;">{$datos.Nom_cond}</td>{/if}
        {if $_acl->permiso('asoc_viv_per')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-home" href="{$root}transa/per/asocVivPer/{$datos.Id_encrypt}"></a></td>{/if}
        {if $_acl->permiso('asoc_vehi_per')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-road" href="{$root}transa/per/asocVehiPer/{$datos.Id_encrypt}"></a></td>{/if}        
        {if $_acl->permiso('editar_per')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="{$root}transa/per/editPer/{$datos.Id_encrypt}"></a></td>{/if}
        {if $_acl->permiso('elim_per')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="{$root}transa/per/delPer/{$datos.Id_encrypt}" onclick='return cb(this);'></a></td>{/if}    
    </tr>

{/foreach}
</table>
{else}
            <p><strong>No hay personas registradas!</strong></p>
{/if} 

{$paginacion1|default:""}