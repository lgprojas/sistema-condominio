<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}acl/roles">Lista roles</a></li>
        <li class="active">Administrar permisos rol</li>
    </ol>
<h2>Administrar permisos rol</h2>

<h3>Rol: {$roles.Nom_role}</h3>

<p>Permisos</p>

<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    
    {if isset($permisos) && count($permisos)}
        <table class="table table-bordered">
            <tr>
                <th style="text-align: center;">Permiso</th>
                <th style="text-align: center;">Habilitado</th>
                <th style="text-align: center;">Denegado</th>
                <th style="text-align: center;">Ignorar</th>
            </tr>
            {foreach item=pr from=$permisos}
                <tr>
                    <td>{$pr.nombre}</td>
                    <td style="text-align: center;"><input type="radio" name="perm_{$pr.id}" value="1" {if ($pr.valor == 1)} checked="checked" {/if} /></td>
                    <td style="text-align: center;"><input type="radio" name="perm_{$pr.id}" value="" {if ($pr.valor == "")} checked="checked" {/if} /></td>
                    <td style="text-align: center;"><input type="radio" name="perm_{$pr.id}" value="x" {if ($pr.valor === "x")} checked="checked" {/if} />
                    </td>
                </tr>
                {/foreach}
        </table>
        {/if}
        <p><a class="btn btn-default" href="{$_layoutParams.root}acl/roles"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>   <input type="submit" value="Guardar" class="btn btn-primary" /></p>
</form>
</div>