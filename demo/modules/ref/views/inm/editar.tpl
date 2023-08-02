<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}ref/inm">Lista inmobiliarias</a></li>
        <li class="active">Editar inmobiliaria</li>
    </ol>
<h3>Editar inmobiliaria</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta inmobiliaria?")) {
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
        <label class="control-label">Código:</label>
        <input class="form-control" type="text" name="cod" value="{$datos.Cod_inm}" readonly=""/>
    </div>
    <div class="form-group">
        <label class="control-label">Nombre:</label>
        <input class="form-control" type="text" name="inm" value="{if isset($datos.Nom_inm)}{$datos.Nom_inm}{/if}" placeholder="Ingrese inmobiliaria"/>
    </div>
    {if $_acl->permiso('editar_inm')}
    <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>
    {/if}
</form>
         <br/>
         <p><a class="btn btn-default" href="{$_layoutParams.root}ref/inm"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div>