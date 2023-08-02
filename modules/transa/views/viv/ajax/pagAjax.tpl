{if isset($viv) && count($viv)}
    <table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA; text-align: center;">Listado viviendas</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Id</td> 
        <td style="font-weight:bold;text-align: center;">C/T</td>
        <td style="font-weight:bold;text-align: center;">N°</td>
        <td style="font-weight:bold;text-align: center;">N° Est.</td>
        <td style="font-weight:bold;text-align: center;">Condominio</td>
        {if $_acl->permiso('editar_viv')}<td style="font-weight:bold;text-align: center;">Edit.</td>{/if}
        {if $_acl->permiso('elim_viv')}<td style="font-weight:bold;text-align: center;">Elim.</td>{/if}
    </thead>
{foreach item=datos from=$viv}
    
    {if $color == "#F5FFFA"}{assign var="color" value="none"}{else}{assign var="color" value="#F5FFFA"}{/if}
    <tr id="list" style="background:{$color}" onmouseover=style.background="#F0F8FF" onmouseout=style.background="{$color}">
        <td style="text-align: center;">{$datos.Id_viv}</td>
        <td>{$datos.Nom_cb}</td>
        <td style="text-align: center;">{$datos.Num_viv}</td>
        <td style="text-align: center;">{$datos.Id_esta|str_pad:2:'0':$smarty.const.STR_PAD_LEFT}</td>
        <td>{$datos.Nom_cond}</td>
        {if $_acl->permiso('editar_viv')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="{$root}transa/viv/editViv/{$datos.Id_encrypt}"></a></td>{/if}
        {if $_acl->permiso('elim_viv')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="{$root}transa/viv/delViv/{$datos.Id_encrypt}" onclick='return cb(this);'></a></td>{/if}   
    </tr>

{/foreach}
</table>
{else}
            <p><strong>No hay viviendas creadas.</strong></p>
{/if} 

{$paginacion1|default:""}