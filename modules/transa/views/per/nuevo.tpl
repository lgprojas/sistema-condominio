<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}transa/per">Lista personas</a></li>
        <li class="active">Nueva persona</li>
    </ol>
<h3>Nueva persona</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear esta nueva persona?")) {
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
        <label class="control-label">Rut:</label>
        <input type="text" name="rut" value="{$datos.rut|default:$run}" placeholder="Ej: 01198981-4" autofocus="" class="form-control"/>         
    </div>
    <div class="form-group">
        <label class="control-label">Primer Nombre:</label>  
        <input type="text" name="nom1" value="{$datos.nom1|default:""}" placeholder="Ingrese primer nombre" class="form-control"/></td>       
    </div>
    <div class="form-group">
        <label class="control-label">Segundo Nombre:</label>  
        <input type="text" name="nom2" value="{$datos.nom2|default:""}" placeholder="Ingrese segundo nombre"class="form-control"/></td>       
    </div>
    <div class="form-group">
        <label class="control-label">Primer apellido:</label>
        <input type="text" name="ape1" value="{$datos.ape1|default:""}" placeholder="Ingrese primer apellido" class="form-control"/></td>       
    </div>
    <div class="form-group">
        <label class="control-label">Segundo apellido:</label>
        <input type="text" name="ape2" value="{$datos.ape2|default:""}" placeholder="Ingrese segundo apellido" class="form-control"/></td>       
    </div>
    <div class="form-group">
        <label class="control-label">Fono:</label>
        <input type="text" name="fono" value="{$datos.fono|default:""}" placeholder="Ingrese fono" class="form-control"/></td>       
    </div>
    <fieldset>
    <legend>Condominio y relación</legend>
    <div class="form-horizontal well col-lg-12 small">
    <div class="form-group">
        <label class="control-label">Condominio:</label>
        <select name="cond" id="cond" class="form-control">   
                <option value="">-Seleccione-</option>
                {foreach from=$cond item=co}
                    <option value="{$co.Id_cond}">{$co.Nom_cond}</option>
                {/foreach}
        </select>
    </div>
    <div class="form-group">
        <label class="control-label">Estado: <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Si la persona vive o no en el condiminio."></i></label>
        <select name="estre" class="form-control">   
                <option value="">-Seleccione-</option>
                {foreach from=$estre item=er}
                    <option value="{$er.Id_estre}">{$er.Nom_estre}</option>
                {/foreach}
        </select>
    </div>        
    <div class="form-group">
        <label class="control-label">Actividad en el condominio: <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Si realiza alguna función o trabajo en el condominio. La persona puede o no residir en el condominio para esta opción."></i></label>
        <select name="act" class="form-control">
                {foreach from=$act item=ac}
                    <option value="{$ac.Id_act}">{$ac.Nom_act}</option>
                {/foreach}
        </select>
    </div> 
    </div>
    </fieldset>
    <br/>
    <p>
       {if $volver == 1}
            <a href="{$_layoutParams.root}buscar/run" class="btn btn-default"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>
       {else}
            <a class="btn btn-default" href="{$_layoutParams.root}transa/per"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>    
       {/if}
    <input type="reset" value="Limpiar" class="btn btn-small btn-primary"/>
    {if $_acl->permiso('crear_per')}<input id="newcli" class="btn btn-small btn-primary" type="submit" value="Guardar" onclick='return cb(this);'/>{/if}
    </p>
</form>
    <br>
    <br>
</div>
</div>