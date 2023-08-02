{if isset($modelo) && count($modelo)}
    <table class="table table-bordered small">
    <thead>
        <th colspan="9" style="background: #E6E6FA;text-align: center;">Listado Modelos</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Nombre</td>        
        <td style="font-weight:bold;text-align: center;">Marca</td> 
        {if $_acl->permiso('editar_modelo')}<td style="font-weight:bold;text-align: center;">Edit.</td>{/if}
        {if $_acl->permiso('elim_modelo')}<td style="font-weight:bold;text-align: center;">Elim.</td>{/if}
    </thead>
{foreach item=datos from=$modelo}
    
    {if $color == "#F5FFFA"}{assign var="color" value="none"}{else}{assign var="color" value="#F5FFFA"}{/if}
    <tr id="list" style="background:{$color}" onmouseover=style.background="#F0F8FF" onmouseout=style.background="{$color}">
        <td>{$datos.Nom_modelo}</td>
        <td>{$datos.Nom_marca}</td>
        {if $_acl->permiso('editar_modelo')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="{$root}ref/modelo/editModelo/{$datos.Id_encrypt}"></a></td>{/if}
        {if $_acl->permiso('elim_modelo')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="{$root}ref/modelo/delModelo/{$datos.Id_encrypt}" onclick='return cb(this);'></a></td>{/if}    
    </tr>

{/foreach}
</table>
{else}
            <p><strong>No hay Modelos registrados</strong></p>
{/if} 

{$paginacion1|default:""}