<div class="container">
<h3>Lista de usuarios</h3>
<br/>
<!--{*if Session::accesoViewEstricto(array('usuario'))}
            
        <p><a href="{$_layoutParams.root}post/nuevo">Agregar Posts..</a></p>

{/if*}-->
{if $_acl->permiso('crear_usu')}
<p><br/><a class="btn btn-default" href="{$_layoutParams.root}usuarios/registro"><img src="{$_layoutParams.root}public/img/all/new.png" width="15" height="15"/>Nuevo usuario</a></p>
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
{if isset($usuarios) && count($usuarios)}
<table class="table table-bordered">
    <thead style="background: #E6E6FA;">
        <th style="text-align: center;">ID</th>
        <th style="text-align: center;">Usuario</th>
        <th style="text-align: center;">Role</th>
        <th style="text-align: center;">Condominio</th>
        <th style="text-align: center;">Est.</th>
        {if $_acl->permiso('editar_usu')}<th style="text-align: center;">Editar</th>{/if}
        {if $_acl->permiso('editar_perm_usu')}<th style="text-align: center;">Permisos</th>{/if}
        {if $_acl->permiso('elim_usu')}<th style="text-align: center;">Elim</th>{/if}
    </thead>
    </tr>
    
    {foreach item=us from=$usuarios}
        {if $color == "#F5FFFA"}{assign var="color" value="none"}{else}{assign var="color" value="#F5FFFA"}{/if}
        <tr id="list" style="background:{$color}" onmouseover=style.background="#F0F8FF" onmouseout=style.background="{$color}">
            <td>{$us.Id_usu}</td>
            <td>{$us.Nom_usu}</td>
            <td>{$us.Nom_role}</td>
            <td style="text-align: center;">{if $us.Nom_cond == ""}Ninguno{else}{$us.Nom_cond}{/if}</td>
            <td style="text-align: center;">{if $us.Id_estusu == 1}<span class="label label-success"><i title="Activado" class="glyphicon glyphicon-user"></i></span>{else}<span class="label label-danger"><i title="Desactivado" class="glyphicon glyphicon-user"></i></span>{/if}</td>
            {if $_acl->permiso('editar_usu')}<td style="text-align: center;"><a href="{$_layoutParams.root}usuarios/index/editUsu/{$us.Id_encrypt}"><i title="Editar datos usuario" class="glyphicon glyphicon-edit"></i></a></td>{/if}
            {if $_acl->permiso('editar_perm_usu')}<td style="text-align: center;">{if $us.Sin_perm == "0"}<a href="{$_layoutParams.root}usuarios/index/permisos/{$us.Id_usu}"><i title="Ver permisos" class="glyphicon glyphicon-tasks"></i></a>{else}<i title="Rol sin permisos" class="glyphicon glyphicon-lock"></i>{/if}</td>{/if}
            {if $_acl->permiso('elim_usu')}<td style="text-align: center;"><a href="{$_layoutParams.root}usuarios/index/elimUsu/{$us.Id_encrypt}"><i title="Elimininar usuario" class="glyphicon glyphicon-trash"></i></a></td>{/if}
        </tr>        
    {/foreach}
    
</table>
{else}
            <p><strong>No hay usuarios registrados!</strong></p>
{/if} 
</form>
{if isset($paginacion1)}{$paginacion1}   {/if}  
</div>
{if $_acl->permiso('crear_usu')}
<p><br/><a class="btn btn-default" href="{$_layoutParams.root}usuarios/registro"><img src="{$_layoutParams.root}public/img/all/new.png" width="15" height="15"/>Nuevo usuario</a></p>
{/if}
</div>