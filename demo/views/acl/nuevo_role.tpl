<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}acl/roles">Lista roles</a></li>
        <li class="active">Nuevo rol</li>
    </ol>
<h2>Nuevo Rol</h2>

<form name="form1" action="" method="post">
    <input type="hidden" name="guardar" value="1" /> 
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Role:</label> 
            <input type="text" name="role" value="{$datos.role|default:""}" class="form-control"/>
        </div> 
        <p><a class="btn btn-default" href="{$_layoutParams.root}acl/roles"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>   <input type="submit" value="Guardar" class="btn btn-primary"/></p>
    </div>
</form>
</div>