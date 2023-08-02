<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}ref/marca">Lista marcas</a></li>
        <li class="active">Nueva marca</li>
    </ol>
<h3>Nueva marca</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear esta nueva marca?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
{/literal}
<div class="col-md-4">
<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar" />    
    <div class="form-group">
         <label class="control-label">Nombre:</label>  
         <input class="form-control" type="text" name="nom" value="{$datos.nom|default:""}" placeholder="Ingrese nueva marca"/>       
    </div>    
    <p>
        {if $_acl->permiso('crear_marca')}
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>
        {/if}
    </p>
</form>
        <br/>
        <p><a class="btn btn-default" href="{$_layoutParams.root}ref/marca"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div>