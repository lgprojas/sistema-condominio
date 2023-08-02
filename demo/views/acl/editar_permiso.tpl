<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}acl/permisos">Lista permisos</a></li>
        <li class="active">Editar permiso</li>
    </ol>
<h2>Editar Permiso</h2>
<form id="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Nombre permiso:</label>
            <input type="texto" name="nom_perm" value="{if isset($datos.Nom_perm)}{$datos.Nom_perm}{/if}" style="width:180px;" class="form-control"/>
        </div>
        <div class="form-group">
            <label class="control-label">Key permiso:</label>
            <textarea name="key_perm" class="form-control">{if isset($datos.Key_perm) }{$datos.Key_perm}{/if}</textarea>
        </div>  
    <p><a class="btn btn-default" href="{$_layoutParams.root}acl/permisos"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>  
        <input type="submit" class="btn btn-primary" value="Guardar" /></p>
    </div>
</form>
</div>