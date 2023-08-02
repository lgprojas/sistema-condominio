<div class="container">
<h3>Marcas Vehículos</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar esta marca de vehículo?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
{/literal}
{if $_acl->permiso('crear_marca')}
<p><a class="btn btn-default" href="{$_layoutParams.root}ref/marca/newMarca"><img src="{$_layoutParams.root}public/img/all/new.png" width="15" height="15"/>Nueva marca</a></p>
{/if}
<form name="form1" method="post">
<input type="hidden" value="{$_datos.pagina1|default:""}" name="pagina1">
{if isset($marca) && count($marca)}
    <table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA;text-align: center;">Listado marcas</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Id</td>
        <td style="font-weight:bold;text-align: center;">Nombre</td>        
        {if $_acl->permiso('editar_marca')}<td style="font-weight:bold;text-align: center;">Edit.</td>{/if}
        {if $_acl->permiso('elim_marca')}<td style="font-weight:bold;text-align: center;">Elim.</td>{/if}
    </thead>
{foreach item=datos from=$marca}
    
    {if $color == "#F5FFFA"}{assign var="color" value="none"}{else}{assign var="color" value="#F5FFFA"}{/if}
    <tr id="list" style="background:{$color}" onmouseover=style.background="#F0F8FF" onmouseout=style.background="{$color}">
        <td>{$datos.Id_marca}</td>
        <td>{$datos.Nom_marca}</td>
        {if $_acl->permiso('editar_marca')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="{$_layoutParams.root}ref/marca/editMarca/{$datos.Id_encrypt}"></a></td>{/if}
        {if $_acl->permiso('elim_marca')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="{$_layoutParams.root}ref/marca/delMarca/{$datos.Id_encrypt}" onclick='return cb(this);'></a></td>{/if}    
    </tr>

{/foreach}
</table>
{else}
            <p><strong>No hay marcas</strong></p>
{/if} 
</form>
{if isset($paginacion1)}{$paginacion1}   {/if}  
{if $_acl->permiso('crear_marca')}
<p><br/><a class="btn btn-default" href="{$_layoutParams.root}ref/marca/newMarca"><img src="{$_layoutParams.root}public/img/all/new.png" width="15" height="15"/>Nueva marca</a></p>
{/if}
<br/>
<br/>
<br/>
</div>