<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}transa/vehi">Lista vehículo</a></li>
        <li class="active">Nuevo vehículo</li>
    </ol>
<h3>Nuevo vehículo</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear este nuevo vehículo?")) {
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
    {if $sadmin == 1}
    <fieldset>
    <legend>El Condominio</legend>
    <div class="form-horizontal well col-lg-12 small">
    <div class="form-group">
        <label class="control-label">Condominio:</label>
        <select name="cond" class="form-control">
                {foreach from=$cond item=co}
                    <option value="{$co.Id_cond}">{$co.Nom_cond}</option>
                {/foreach}
        </select>
    </div>
    </div>
    </fieldset>
    {else}
    <input type="hidden" id="cond" name="cond" value="{$co}"/>
    {/if}
    <fieldset>
    <legend>El Vehículo</legend>
    <div class="form-horizontal well col-lg-12 small">
    <div class="form-group">
        <label class="control-label">Patente:</label>  
        <input type="text" name="cod" value="{$datos.cod|default:$cod}" placeholder="Patente" class="form-control"/>      
    </div>    
    <div class="form-group">
        <label class="control-label">Marca: </label>
        <select name="mar" id="mar" class="form-control">
            <option value="">-Seleccione-</option>
            {foreach from=$mar item=m}
                <option value="{$m.Id_marca}">{$m.Nom_marca}</option>
            {/foreach}
        </select>
    </div>
    <div class="form-group">
        <label class="control-label">Modelo: </label>
        <select name="mod" id="mod" class="form-control">
        </select>
    </div>   
    <div class="form-group">
        <label class="control-label">Nota:</label> 
        <textarea name="desc" rows="3" cols="2" placeholder="Nota adicional.." class="form-control"></textarea>
    </div>
    </div>
    </fieldset>
        <br/>
        <br/>
        <p>{if $volver == 1}
                <a href="{$_layoutParams.root}buscar/patente" class="btn btn-default"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>
            {else}
                <a href="{$_layoutParams.root}transa/vehi" class="btn btn-default"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>
            {/if}
            <input type="reset" value="Limpiar" class="btn btn-small btn-primary"/>
            {if $_acl->permiso('crear_vehi')}<input id="newcli" class="btn btn-small btn-primary" type="submit" value="Guardar" onclick='return cb(this);'/>{/if}            
        </p>
        <br/>
        <br/>
</form>
</div>
</div>