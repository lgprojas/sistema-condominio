{if isset($obs) && count($obs)}
<table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA; text-align: center;">Listado observaciones condominio</th>
    </thead>
    <thead style="background: #E6E6FA;"> 
        <td style="font-weight:bold;text-align: center;">Fch. obs</td>
        <td style="font-weight:bold;text-align: center;">Tipo obs</td>
        {if $sadmin == 1}<td style="font-weight:bold;text-align: center;">Condominio</td>{/if}
        {if $_acl->permiso('editar_obs')}<td style="font-weight:bold;text-align: center;">Edit.</td>{/if}
        {if $_acl->permiso('elim_obs')}<td style="font-weight:bold;text-align: center;">Elim.</td>{/if}
    </thead>
{foreach item=datos from=$obs}
    {if $color == "#F5FFFA"}{assign var="color" value="none"}{else}{assign var="color" value="#F5FFFA"}{/if}
    <tr id="list" style="background:{$color}" onmouseover=style.background="#F0F8FF" onmouseout=style.background="{$color}">
        <td style="text-align: center;">{$datos.Fchi_obs}</td>
        <td style="text-align: center;">{$datos.Nom_tobs}</td>
        {if $sadmin == 1}<td style="text-align: center;">{$datos.Nom_cond}</td>{/if}
        {if $_acl->permiso('editar_obs')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="{$root}historial/observacion/editObs/{$datos.Id_encrypt}/{$datos.Cond_encrypt}"></a></td>{/if}
        {if $_acl->permiso('elim_obs')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="{$root}historial/observacion/delObs/{$datos.Id_encrypt}/{$datos.Cond_encrypt}" onclick='return cb(this);'></a></td>{/if}   
    </tr>

{/foreach}
</table>
{else}
            <p><strong>El condominio no posee observaciones.</strong></p>
{/if} 

{$paginacion1|default:""}