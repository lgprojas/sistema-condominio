<div class="container">
<h3>Modelos Vehículos</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar este Modelo?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
{/literal}
{if $_acl->permiso('crear_modelo')}
<p><a class="btn btn-default" href="{$_layoutParams.root}ref/modelo/newModelo"><img src="{$_layoutParams.root}public/img/all/new.png" width="15" height="15"/>Nuevo Modelo</a></p>
{/if}
<div class="well well-small row sm">
    <form id="form1" class="form-inline">
        <div class="col-sm-4">
            <label class="control-label">Modelo: <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Escriba nombre modelo"></label>
        <button type="button" id="btnEnviar" class="btn"><i class=" glyphicon glyphicon-search"></i></button>
        </div>
        <div class="col-sm-4">
        <select id="marca" name="marca" class="form-control">
            <option value=""> - seleccione marca - </option>
            {foreach from=$marca item=ps}
                <option value="{$ps.Id_marca}">{$ps.Nom_marca}</option>
            {/foreach}
        </select>
        </div>
    </form>
</div>
<div id="lista_registros">
<form name="form1" method="post">
<input type="hidden" value="{$_datos.pagina1|default:""}" name="pagina1">
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
        {if $_acl->permiso('editar_modelo')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="{$_layoutParams.root}ref/modelo/editModelo/{$datos.Id_encrypt}"></a></td>{/if}
        {if $_acl->permiso('elim_modelo')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="{$_layoutParams.root}ref/modelo/delModelo/{$datos.Id_encrypt}" onclick='return cb(this);'></a></td>{/if}    
    </tr>

{/foreach}
</table>
{else}
            <p><strong>No hay registro</strong></p>
{/if} 
</form>
{if isset($paginacion1)}{$paginacion1}   {/if}  
{if $_acl->permiso('crear_modelo')}
<p><br/><a class="btn btn-default" href="{$_layoutParams.root}ref/modelo/newModelo"><img src="{$_layoutParams.root}public/img/all/new.png" width="15" height="15"/>Nuevo Modelo</a></p>
{/if}
<br/>
<br/>
<br/>
</div>
</div>