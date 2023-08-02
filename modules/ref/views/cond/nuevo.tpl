<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}ref/cond">Lista condominios</a></li>
        <li class="active">Nuevo condominio</li>
    </ol>
<h3>Nuevo condominio</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear este nuevo condominio?")) {
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
         <input class="form-control" type="text" name="nom" value="{$datos.nom|default:""}" placeholder="Ingrese nombre condominio"/>       
         <label class="control-label">Dirección:</label>  
         <input class="form-control" type="text" name="dir" value="{$datos.dir|default:""}" placeholder="Ingrese dirección condominio"/>
         <label class="control-label">Inmobiliaria: </label>
            <select name="inm" id="inm" class="form-control input-sm">
                <option value="">-Seleccione-</option>
                {foreach from=$inm item=i}
                    <option value="{$i.Id_inm}">{$i.Nom_inm}</option>
                {/foreach}
            </select>
        <label class="control-label">Ciudad: </label>
            <select name="ciu" id="ciu" class="form-control input-sm">
                <option value="">-Seleccione-</option>
                {foreach from=$ciu item=c}
                    <option value="{$c.Id_ciu}">{$c.Nom_ciu}</option>
                {/foreach}
            </select>
        <br/>
    <p>
        {if $_acl->permiso('crear_cond')}
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>
        {/if}
    </p>
</form>
        <br/>
        <p><a class="btn btn-default" href="{$_layoutParams.root}ref/cond"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div>