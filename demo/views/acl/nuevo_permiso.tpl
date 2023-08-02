<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}acl/permisos">Lista permisos</a></li>
        <li class="active">Nuevo permiso</li>
    </ol>
<h2>Nuevo Permiso</h2>

<form name="form1" action="" method="post">
    <input type="hidden" name="guardar" value="1" />
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Nombre permiso:</label>
            <input type="text" name="nom_perm" value="{$datos.nom_perm|default:""}" class="form-control"/>
        </div> 
        <div class="form-group">
            <label class="control-label">Key permiso: </label>
            <input type="text" name="key_perm" value="{$datos.key_perm|default:""}" class="form-control"/>
        </div>
    
        <p><a class="btn btn-default" href="{$_layoutParams.root}acl/permisos"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>   
            <input type="submit" value="Guardar" class="btn btn-primary"/></p>
    </div>
</form>
</div>