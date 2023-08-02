{if isset($cb) && count($cb)}
    <table class="table table-bordered small">
    <thead>
        <th colspan="9" style="background: #E6E6FA;text-align: center;">Listado Calles/blocks</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Nombre</td>        
        <td style="font-weight:bold;text-align: center;">Condominio</td> 
        {if $_acl->permiso('editar_cb')}<td style="font-weight:bold;text-align: center;">Edit.</td>{/if}
        {if $_acl->permiso('elim_cb')}<td style="font-weight:bold;text-align: center;">Elim.</td>{/if}
    </thead>
{foreach item=datos from=$cb}
    
    {if $color == "#F5FFFA"}{assign var="color" value="none"}{else}{assign var="color" value="#F5FFFA"}{/if}
    <tr id="list" style="background:{$color}" onmouseover=style.background="#F0F8FF" onmouseout=style.background="{$color}">
        <td>{$datos.Nom_cb}</td>
        <td>{$datos.Nom_cond}</td>
        {if $_acl->permiso('editar_cb')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="{$root}ref/cb/editCB/{$datos.Id_encrypt}"></a></td>{/if}
        {if $_acl->permiso('elim_cb')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="{$root}ref/cb/delCB/{$datos.Id_encrypt}" onclick='return cb(this);'></a></td>{/if}    
    </tr>

{/foreach}
</table>
{else}
            <p><strong>No hay Calles/blocks registrados</strong></p>
{/if} 

{$paginacion1|default:""}