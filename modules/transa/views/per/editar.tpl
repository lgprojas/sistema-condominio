<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}transa/per">Lista personas</a></li>
        <li class="active">Editar persona</li>
    </ol>
<h3>Editar persona: </h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta persona?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
{/literal}
{$rut}
<div class="col-md-4">
<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <input type="hidden" name="rut" value="{$datos.Rut_per}" />
    <div class="form-group">
        <label class="control-label">Rut:</label>
        <input type="text" name="rutper" value="{$datos1.rut|default:$datos.Rut_per}" class="form-control" disabled="disabled"/>         
    </div>
    <div class="form-group">
        <label class="control-label">Primer Nombre:</label>  
        <input type="text" name="nom1" value="{$datos1.nom1|default:$datos.Nom1_per}" placeholder="Ingrese primer nombre" class="form-control"/></td>       
    </div>
    <div class="form-group">
        <label class="control-label">Segundo Nombre:</label>  
        <input type="text" name="nom2" value="{$datos1.nom2|default:$datos.Nom2_per}" placeholder="Ingrese segundo nombre" class="form-control"/></td>       
    </div>
    <div class="form-group">
        <label class="control-label">Primer apellido:</label>
        <input type="text" name="ape1" value="{$datos1.ape1|default:$datos.Ape1_per}" placeholder="Ingrese primer apellido" class="form-control"/></td>       
    </div>
    <div class="form-group">
        <label class="control-label">Segundo apellido:</label>
        <input type="text" name="ape2" value="{$datos1.ape2|default:$datos.Ape2_per}" placeholder="Ingrese segundo apellido" class="form-control"/></td>       
    </div>
    <div class="form-group">
        <label class="control-label">Fono:</label>
        <input type="text" name="fono" value="{$datos1.fono|default:$datos.Fono_per}" placeholder="Ingrese fono" class="form-control"/></td>       
    </div>
    <fieldset>
    <legend>Condominio y relación</legend>
    <div class="form-horizontal well col-lg-12 small">
        <div class="form-group">
        <label class="control-label">Condominio:</label>
        <select name="cond" id="cond" class="form-control">
            {if $datos.Id_cond != 0}
                <option value="{$datos.Id_cond}">{$datos.Nom_cond}</option>
                {foreach from=$cond item=co}
                    {if $co.Id_cond != $datos.Id_cond}
                        <option value="{$co.Id_cond}">{$co.Nom_cond}</option>
                    {/if}
                {/foreach}
            {else}
                <option value="">-Seleccione-</option>
                             {foreach from=$cond item=co}
                                <option value="{$co.Id_cond}">{$co.Nom_cond}</option>
                             {/foreach}
            {/if}            
        </select>
        </div>
        <div class="form-group">
        <label class="control-label">Estado: <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Si la persona vive o no en el condiminio."></i></label>
        <select name="estre" id="estre" class="form-control">

            {if $datos.Id_estre != 0}
                <option value="{$datos.Id_estre}">{$datos.Nom_estre}</option>
                {foreach from=$estre item=er}
                    {if $er.Id_estre != $datos.Id_estre}
                        <option value="{$er.Id_estre}">{$er.Nom_estre}</option>
                    {/if}
                {/foreach}
                <option value="">-Seleccione-</option>
            {else}
                <option value="">-Seleccione-</option>
                             {foreach from=$estre item=er}
                                <option value="{$er.Id_estre}">{$er.Nom_estre}</option>
                             {/foreach}
            {/if}            
        </select>
        </div> 
        <div class="form-group">
        <label class="control-label">Actividad: <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Si realiza alguna función o trabajo en el condominio. La persona puede o no residir en el condominio para esta opción."></i></label>
        <select name="act" id="act" class="form-control">

            {if $datos.Id_act != 0}
                <option value="{$datos.Id_act}">{$datos.Nom_act}</option>
                {foreach from=$act item=ac}
                    {if $ac.Id_act != $datos.Id_act}
                        <option value="{$ac.Id_act}">{$ac.Nom_act}</option>
                    {/if}
                {/foreach}
                <option value="">-Seleccione-</option>
            {else}
                <option value="">-Seleccione-</option>
                             {foreach from=$act item=ac}
                                <option value="{$ac.Id_act}">{$ac.Nom_act}</option>
                             {/foreach}
            {/if}            
        </select>
        </div>
    </div>
    </fieldset>
        <br/><br/>
    <p>{if $volver == 1}
            <a class="btn btn-default" href="{$_layoutParams.root}buscar/run"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>    
       {else}
            <a class="btn btn-default" href="{$_layoutParams.root}transa/per"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>    
       {/if}    
    <input type="reset" value="Limpiar" class="btn btn-small btn-primary"/>
    {if $_acl->permiso('editar_per')}<input id="newcli" class="btn btn-small btn-primary" type="submit" value="Guardar" onclick='return cb(this);'/>{/if}
    </p>
    <br/>
</form>
</div>
</div>