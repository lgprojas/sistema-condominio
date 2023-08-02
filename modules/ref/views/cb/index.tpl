<div class="container">
<h3>Calles/Blocks</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar esta Calle/block?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
{/literal}
{if $_acl->permiso('crear_cb')}
<p><a class="btn btn-default" href="{$_layoutParams.root}ref/cb/newCB"><img src="{$_layoutParams.root}public/img/all/new.png" width="15" height="15"/>Nueva Calle/block</a></p>
{/if}
{if $sadmin == 1}
<div class="well well-small row sm">
       <div class="col-sm-4">
         <label class="control-label">Condominio</label>
         <select id="co" name="co" class="form-control">
                <option value="">-Seleccione-</option>   
                {foreach from=$cond item=c}
                    <option value="{$c.Id_cond}">{$c.Nom_cond}</option>
                {/foreach}
          </select>
        </div>                  
</div>
{/if}
<div id="lista_registros">
<form name="form2" method="post">
<input type="hidden" value="{$_datos.pagina1|default:""}" name="pagina1">
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
        {if $_acl->permiso('editar_cb')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="{$_layoutParams.root}ref/cb/editCB/{$datos.Id_encrypt}"></a></td>{/if}
        {if $_acl->permiso('elim_cb')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="{$_layoutParams.root}ref/cb/delCB/{$datos.Id_encrypt}" onclick='return cb(this);'></a></td>{/if}    
    </tr>

{/foreach}
</table>
{else}
            <p><strong>No hay Calles/blocks registrados</strong></p>
{/if} 
</form>
{if isset($paginacion1)}{$paginacion1}   {/if} 
{if $_acl->permiso('crear_cb')}
<p><br/><a class="btn btn-default" href="{$_layoutParams.root}ref/cb/newCB"><img src="{$_layoutParams.root}public/img/all/new.png" width="15" height="15"/>Nueva Calle/block</a></p>
{/if}
<br/>
<br/>
<br/>
</div>
</div>