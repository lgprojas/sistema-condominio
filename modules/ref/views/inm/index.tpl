<div class="container">
<h3>Inmobiliarias</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar esta inmobiliaria?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
{/literal}
{if $_acl->permiso('crear_inm')}
<p><a class="btn btn-default" href="{$_layoutParams.root}ref/inm/newInm"><img src="{$_layoutParams.root}public/img/all/new.png" width="15" height="15"/>Nueva inmobiliaria</a></p>
{/if}
<form name="form1" method="post">
<input type="hidden" value="{$_datos.pagina1|default:""}" name="pagina1">
{if isset($inm) && count($inm)}
    <table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA;">Listado inmobiliarias</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Id</td>
        <td style="font-weight:bold;text-align: center;">Nombre</td>        
        {if $_acl->permiso('editar_inm')}<td style="font-weight:bold;text-align: center;">Edit.</td>{/if}
        {if $_acl->permiso('elim_inm')}<td style="font-weight:bold;text-align: center;">Elim.</td>{/if}
    </thead>
{foreach item=datos from=$inm}
    
    {if $color == "#F5FFFA"}{assign var="color" value="none"}{else}{assign var="color" value="#F5FFFA"}{/if}
    <tr id="list" style="background:{$color}" onmouseover=style.background="#F0F8FF" onmouseout=style.background="{$color}">
        <td>{$datos.Id_inm}</td>
        <td>{$datos.Nom_inm}</td>
        {if $_acl->permiso('editar_inm')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="{$_layoutParams.root}ref/inm/editInm/{$datos.Id_encrypt}"></a></td>{/if}
        {if $_acl->permiso('elim_inm')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="{$_layoutParams.root}ref/inm/delInm/{$datos.Id_encrypt}" onclick='return cb(this);'></a></td>{/if}    
    </tr>

{/foreach}
</table>
{else}
            <p><strong>No hay inmobiliarias</strong></p>
{/if} 
</form>
{if isset($paginacion1)}{$paginacion1}   {/if}  
{if $_acl->permiso('crear_inm')}
<p><br/><a class="btn btn-default" href="{$_layoutParams.root}ref/inm/newInm"><img src="{$_layoutParams.root}public/img/all/new.png" width="15" height="15"/>Nueva inmobiliaria</a></p>
{/if}
<br/>
<br/>
<br/>
</div>