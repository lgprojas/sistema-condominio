{if isset($info) && count($info)}
    <table class="table table-bordered small">
    <thead>
        <th colspan="9" style="background: #E6E6FA;text-align: center;">Listado Informativo</th>
    </thead>
    <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Nombre</td>        
        <td style="font-weight:bold;text-align: center;">Fch. publicación</td> 
        <td style="font-weight:bold;text-align: center;">Fch. cierre</td> 
        {if $sadmin == 1}<td style="font-weight:bold;text-align: center;">Condominio</td>{/if}
        <td style="font-weight:bold;text-align: center;">Ver</td>
        {if $_acl->permiso('editar_info')}<td style="font-weight:bold;text-align: center;">Edit.</td>{/if}
        {if $_acl->permiso('elim_info')}<td style="font-weight:bold;text-align: center;">Elim.</td>{/if}
    </thead>
{foreach item=datos from=$info}
    
    {if $color == "#F5FFFA"}{assign var="color" value="none"}{else}{assign var="color" value="#F5FFFA"}{/if}
    <tr id="list" style="background:{$color}" onmouseover=style.background="#F0F8FF" onmouseout=style.background="{$color}">
        <td>{$datos.Nom_info}</td>
        <td style="text-align: center;">{$datos.Fch_cinfo}</td>
        <td style="text-align: center;">{$datos.Fch_tinfo}</td>
        {if $sadmin == 1}<td style="font-weight:bold;text-align: center;">{$datos.Nom_cond}</td>{/if}
        {if $_acl->permiso('ver_info')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-search" href="{$root}info/index/verInfo/{$datos.Id_encrypt}"></a></td>{/if}
        {if $_acl->permiso('editar_info')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="{$root}info/index/editInfo/{$datos.Id_encrypt}"></a></td>{/if}
        {if $_acl->permiso('elim_info')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="{$root}info/index/delInfo/{$datos.Id_encrypt}" onclick='return cb(this);'></a></td>{/if}    
    </tr>

{/foreach}
</table>
{else}
            <p><strong>No hay Informativos registrados</strong></p>
{/if}

{$paginacion1|default:""}