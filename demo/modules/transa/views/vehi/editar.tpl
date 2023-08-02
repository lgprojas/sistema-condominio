<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}transa/vehi">Lista vehículo</a></li>
        <li class="active">Editar vehículo</li>
    </ol>
<h3>Editar vehículo</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar este vehículo?")) {
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
    <input type="hidden" name="id" value="{$datos.Id_vehi}" />
    {if $sadmin == 1}
    <fieldset>
    <legend>El Condominio</legend>
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
        <input type="text" name="cod" value="{$datos1.cod|default:$datos.Cod_vehi}" placeholder="Patente vehículo"  readonly="true" class="form-control"/></td>       
    </div>    
    <div class="form-group">
        <label class="control-label">Marca:</label>
        <select name="mar" id="mar" class="form-control">
            {if $datos.Id_marca != 0}
                <option value="{$datos.Id_marca}">{$datos.Nom_marca}</option>
                {foreach from=$mar item=ma}
                    {if $ma.Id_marca != $datos.Id_marca}
                        <option value="{$ma.Id_marca}">{$ma.Nom_marca}</option>
                    {/if}
                {/foreach}
            {else}
                <option value="">-Seleccione-</option>
                             {foreach from=$mar item=ma}
                                <option value="{$ma.Id_marca}">{$ma.Nom_marca}</option>
                             {/foreach}
            {/if}            
        </select>
    </div>  
    <div class="form-group">
        <label class="control-label">Modelo: </label>
        <select name="mod" id="mod" class="form-control">
            <option value="{$datos.Id_modelo}">{$datos.Nom_modelo}</option>
        </select>
    </div> 
    <div class="form-group">
        <label class="control-label">Nota:</label> 
        <textarea name="desc" rows="3" cols="2" placeholder="Nota adicional.." class="form-control">{$datos1.desc|default:$datos.Desc_vehi}</textarea>
    </div>
    </div>
    </fieldset>
        <br/>
        <p>
            <a href="{$_layoutParams.root}transa/vehi" class="btn btn-default"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>
            <input type="reset" value="Limpiar" class="btn btn-small btn-primary"/>
            {if $_acl->permiso('editar_vehi')}<input id="newcli" class="btn btn-small btn-primary" type="submit" value="Guardar" onclick='return cb(this);'/>{/if}            
        </p>
</form>
</div>
</div>