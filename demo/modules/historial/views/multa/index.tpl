<div class="container">
<h3>Multas</h3>
{literal}
    <style>
        .totalmultas{
            color: white;
            padding: 5px;
            background-color: orange;
            text-shadow: -1px -1px 1px #292322, 1px 1px 1px #292322, -1px 1px 1px #292322, 1px -1px 1px #292322;
	    border-radius: 50%;
        }
        .pagmultas{
            color: white;
            padding: 5px;
            background-color: #32CD32;
            text-shadow: -1px -1px 1px #292322, 1px 1px 1px #292322, -1px 1px 1px #292322, 1px -1px 1px #292322;
	    border-radius: 50%;
        }
        .penmultas{
            color: white;
            padding: 5px;
            background-color: #ff8566;
            text-shadow: -1px -1px 1px #292322, 1px 1px 1px #292322, -1px 1px 1px #292322, 1px -1px 1px #292322;
	    border-radius: 50%;
        }
    </style>
{/literal}
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
        <td style="text-align: center;">{$datos.Id_esta|str_pad:2:'0':$smarty.const.STR_PAD_LEFT}</td>
        {if $sadmin == 1}<td style="text-align: center;">{$datos.Nom_cond}</td>{/if}
        <td style="text-align: center;">
            <span class="totalmultas">{$datos.TotMultas|str_pad:2:'0':'left'}</span>
            <span class="pagmultas">{$datos.PagMultas|str_pad:2:'0':'left'}</span>
            <span class="penmultas">{$datos.PendMultas|str_pad:2:'0':'left'}</span>
        </td>
        {if $_acl->permiso('ver_lista_multas')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-book" href="{$_layoutParams.root}historial/multa/indexMultas/{$datos.Id_encrypt}/{$datos.Cond_encrypt}"></a></td>{/if}
    </tr>

{/foreach}
</table>
{else}
            <p><strong>No hay viviendas creadas.</strong></p>
{/if} 
</form>
{if isset($paginacion1)}{$paginacion1}   {/if}  
</div>
    <br/>
    <br/>
    <br/>
</div>