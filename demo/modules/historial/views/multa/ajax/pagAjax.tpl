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
        {if $sadmin == 1}<td style="font-weight:bold;text-align: center;">Condominio</td>{/if}
        <td style="font-weight:bold;text-align: center;">Total/pag/pen</td>
        {if $_acl->permiso('ver_lista_multas')}<td style="font-weight:bold;text-align: center;">Ver</td>{/if}
    </thead>
{foreach item=datos from=$viv}
    
    {if $color == "#F5FFFA"}{assign var="color" value="none"}{else}{assign var="color" value="#F5FFFA"}{/if}
    <tr id="list" style="background:{$color}" onmouseover=style.background="#F0F8FF" onmouseout=style.background="{$color}">
        <td style="text-align: center;">{$datos.Id_viv}</td>
        <td>{$datos.Nom_cb}</td>
        <td style="text-align: center;">{$datos.Num_viv}</td>
        <td style="text-align: center;">{$datos.Id_esta|str_pad:2:'0':'left'}</td>
        {if $sadmin == 1}<td style="text-align: center;">{$datos.Nom_cond}</td>{/if}
        <td style="text-align: center;">
            <span class="totalmultas">{$datos.TotMultas|str_pad:2:'0':'left'}</span>
            <span class="pagmultas">{$datos.PagMultas|str_pad:2:'0':'left'}</span>
            <span class="penmultas">{$datos.PendMultas|str_pad:2:'0':'left'}</span>
        </td>
        {if $_acl->permiso('ver_lista_multas')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-book" href="{$root}historial/multa/verMultas/{$datos.Id_encrypt}/{$datos.Cond_encrypt}"></a></td>{/if}
    </tr>

{/foreach}
</table>
{else}
            <p><strong>No hay viviendas creadas.</strong></p>
{/if} 

{$paginacion1|default:""}