<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}ref/marca">Lista marcas</a></li>
        <li class="active">Editar marca</li>
    </ol>
<h3>Editar marca</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta marca?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
{/literal}
<div class="col-md-4">
<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <div class="form-group">
        <label class="control-label">Nombre:</label>
        <input class="form-control" type="text" name="nom" value="{if isset($datos.Nom_marca)}{$datos.Nom_marca}{/if}" placeholder="Ingrese marca"/>
    </div>
    {if $_acl->permiso('editar_marca')}
    <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>
    {/if}
</form>
         <br/>
         <p><a class="btn btn-default" href="{$_layoutParams.root}ref/marca"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div>