<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}ref/inm">Lista inmobiliarias</a></li>
        <li class="active">Nueva inmobiliaria</li>
    </ol>
<h3>Nueva inmobiliaria</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear esta nueva inmobiliaria?")) {
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
         <label class="control-label">Código:</label>  
         <input class="form-control" type="text" name="cod" value="{$datos.cod|default:""}" placeholder="Ingrese código inmobiliaria"/>       
    </div>
    <div class="form-group">
         <label class="control-label">Nombre:</label>  
         <input class="form-control" type="text" name="inm" value="{$datos.inm|default:""}" placeholder="Ingrese nueva inmobiliaria"/>       
    </div>    
    <p>
        {if $_acl->permiso('crear_inm')}
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>
        {/if}
    </p>
</form>
        <br/>
        <p><a class="btn btn-default" href="{$_layoutParams.root}ref/inm"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div>