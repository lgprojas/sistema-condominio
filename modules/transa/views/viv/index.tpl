<div class="container">
<h3>Viviendas</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar esta vivienda?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
{/literal}
{if $_acl->permiso('crear_viv')}
    <p><br/><a class="btn btn-default" href="{$_layoutParams.root}transa/viv/newViv/"><i title="Nueva vivienda" class="glyphicon glyphicon-plus-sign"></i>  Nueva vivienda</a></p>
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
        {if $sadmin == 1}<td style="text-align: center;">{$datos.Nom_cond}</td>{/if}
        {if $_acl->permiso('editar_viv')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="{$_layoutParams.root}transa/viv/editViv/{$datos.Id_encrypt}"></a></td>{/if}
        {if $_acl->permiso('elim_viv')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="{$_layoutParams.root}transa/viv/delViv/{$datos.Id_encrypt}" onclick='return cb(this);'></a></td>{/if}   
    </tr>

{/foreach}
</table>
{else}
            <p><strong>No hay viviendas creadas.</strong></p>
{/if} 
</form>
{if isset($paginacion1)}{$paginacion1}   {/if}  
</div>
{if $_acl->permiso('crear_viv')}
<p><br/><a class="btn btn-default" href="{$_layoutParams.root}transa/viv/newViv/"><i title="Nueva vivienda" class="glyphicon glyphicon-plus-sign"></i>  Nueva vivienda</a></p>
{/if}
    <br/>
    <br/>
    <br/>
</div>