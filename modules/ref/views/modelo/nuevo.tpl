<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}ref/modelo">Lista modelos</a></li>
        <li class="active">Nuevo modelo</li>
    </ol>
<h3>Nuevo Modelo Vehículo</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear este nuevo Modelo de Vehículo?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
{/literal}
<div class="form-horizontal col-lg-3 small">
<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar" />
        <label class="control-label">Nombre:</label>  
         <input class="form-control" type="text" name="nom" value="{$datos.nom|default:""}" placeholder="Ingrese nombre modelo"/>       
         <label class="control-label">Marca: </label>
            <select name="marca" id="marca" class="form-control input-sm">
                <option value="">-Seleccione-</option>
                {foreach from=$marca item=c}
                    <option value="{$c.Id_marca}">{$c.Nom_marca}</option>
                {/foreach}
            </select>
        <br/>
    <p>
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>
    </p>
</form>
        <br/>
        <p><a class="btn btn-default" href="{$_layoutParams.root}ref/modelo"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div>