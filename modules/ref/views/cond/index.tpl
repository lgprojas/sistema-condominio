<div class="container">
<h3>Condominios</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar este condominio?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
{/literal}
{if $_acl->permiso('crear_cond')}
<p><a class="btn btn-default" href="{$_layoutParams.root}ref/cond/newCond"><img src="{$_layoutParams.root}public/img/all/new.png" width="15" height="15"/>Nuevo Condominio</a></p>
{/if}
<form name="form1" method="post">
<input type="hidden" value="{$_datos.pagina1|default:""}" name="pagina1">
{if isset($cond) && count($cond)}
    <table class="table table-bordered small">
    <thead>
        <th colspan="9" style="background: #E6E6FA;text-align: center;">Listado Condominios</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Nombre</td>        
        <td style="font-weight:bold;text-align: center;">Inmobiliaria</td> 
        <td style="font-weight:bold;text-align: center;">Ciudad</td> 
        {if $_acl->permiso('editar_conf_cond')}<td style="font-weight:bold;text-align: center;">Config.</td>{/if}
        {if $_acl->permiso('editar_cond')}<td style="font-weight:bold;text-align: center;">Edit.</td>{/if}
        {if $_acl->permiso('elim_cond')}<td style="font-weight:bold;text-align: center;">Elim.</td>{/if}
    </thead>
{foreach item=datos from=$cond}
    
    {if $color == "#F5FFFA"}{assign var="color" value="none"}{else}{assign var="color" value="#F5FFFA"}{/if}
    <tr id="list" style="background:{$color}" onmouseover=style.background="#F0F8FF" onmouseout=style.background="{$color}">
        <td>{$datos.Nom_cond}</td>
        <td>{$datos.Nom_inm}</td>
        <td>{$datos.Nom_ciu}</td>
        {if $_acl->permiso('editar_conf_cond')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-cog" href="{$_layoutParams.root}ref/cond/editConfigCond/{$datos.Id_encrypt}"></a></td>{/if}        
        {if $_acl->permiso('editar_cond')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="{$_layoutParams.root}ref/cond/editCond/{$datos.Id_encrypt}"></a></td>{/if}
        {if $_acl->permiso('elim_cond')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="{$_layoutParams.root}ref/cond/delCond/{$datos.Id_encrypt}" onclick='return cb(this);'></a></td>{/if}    
    </tr>

{/foreach}
</table>
{else}
            <p><strong>No hay Condominios registrados</strong></p>
{/if} 
</form>
{if isset($paginacion1)}{$paginacion1}   {/if}  
{if $_acl->permiso('crear_cond')}
<p><br/><a class="btn btn-default" href="{$_layoutParams.root}ref/cond/newCond"><img src="{$_layoutParams.root}public/img/all/new.png" width="15" height="15"/>Nuevo Condominio</a></p>
{/if}
<br/>
<br/>
<br/>
</div>