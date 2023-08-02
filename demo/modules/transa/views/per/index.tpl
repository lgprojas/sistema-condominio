<div class="container">
<h3>Lista personas</h3>
{if $_acl->permiso('elim_per')}
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar esta persona?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
{/literal}
{/if}
{if $_acl->permiso('crear_per')}
<p><br/><a class="btn btn-default" href="{$_layoutParams.root}transa/per/newPer"><img src="{$_layoutParams.root}public/img/all/new.png" width="15" height="15"/>Nueva persona</a></p>
{/if}
<div class="well well-small row sm">
    <form id="form1" class="form-inline">
        <div class="col-sm-4">
            <label class="control-label">Apellido: <input type="text" name="ape" id="ape" class="form-control" placeholder="Escriba primer apellido"></label>
        <button type="button" id="btnEnviar" class="btn"><i class=" glyphicon glyphicon-search"></i></button>
        </div>
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
        {if $_acl->permiso('ver_asoc_viv_per')}<td style="font-weight:bold;text-align: center;">Asoc. Viv.</td>{/if}
        {if $_acl->permiso('ver_asoc_vehi_per')}<td style="font-weight:bold;text-align: center;">Asoc. Vehí.</td>{/if}
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
        {if $_acl->permiso('ver_asoc_viv_per')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-home" href="{$_layoutParams.root}transa/per/asocVivPer/{$datos.Id_encrypt}"></a></td>{/if}
        {if $_acl->permiso('ver_asoc_vehi_per')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-road" href="{$_layoutParams.root}transa/per/asocVehiPer/{$datos.Id_encrypt}"></a></td>{/if}
        {if $_acl->permiso('editar_per')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="{$_layoutParams.root}transa/per/editPer/{$datos.Id_encrypt}"></a></td>{/if}
        {if $_acl->permiso('elim_per')}
        <td style="text-align: center;">
            {if $datos.Posee_recurso == 0}
                <a class="btn btn-small glyphicon glyphicon-trash" href="{$_layoutParams.root}transa/per/delPer/{$datos.Id_encrypt}/{$datos.Cond_encrypt}" onclick='return cb(this);'></a>    
            {else}
                <i title="Bloqueado Posee Vivienda o vehículo asignado" class="glyphicon glyphicon-lock"></i>
            {/if}
        </td>
        {/if}
    </tr>

{/foreach}
</table>
{else}
            <p><strong>No hay personas registradas!</strong></p>
{/if} 
</form>
{if isset($paginacion1)}{$paginacion1}   {/if} 
</div>
{if $_acl->permiso('crear_per')}
<p><br/><a class="btn btn-default" href="{$_layoutParams.root}transa/per/newPer"><img src="{$_layoutParams.root}public/img/all/new.png" width="15" height="15"/>Nueva persona</a></p>
{/if}
</div>