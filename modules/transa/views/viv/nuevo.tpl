<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}transa/viv">Lista viviendas</a></li>
        <li class="active">Nueva vivienda</li>
    </ol>
<h3>Nueva vivienda</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear esta nueva vivienda?")) {
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
        <select name="cond" id="cond" class="form-control">
                <option value="">-Seleccione-</option>
                {foreach from=$cond item=c}
                    <option value="{$c.Id_cond}">{$c.Nom_cond}</option>
                {/foreach}
        </select>
    </div>  
    </div>
    </fieldset>
    {else}
    <input type="hidden" id="cond" name="cond" value="{$co}"/>
    {/if}
    <fieldset>
    <legend>La Vivienda</legend>
    <div class="form-horizontal well col-lg-12 small">
    <div class="form-group">
         <label class="control-label">Número vivienda: </label>
         <input class="form-control" type="text" name="num" value="{$datos.num|default:""}" placeholder="Ingrese número vivienda"/>      
    </div>
    <div class="form-group">
        <label class="control-label">Calle/Block:</label>
        <select name="cb" id="cb" class="form-control">   
                <option value="">-Seleccione-</option>
                {foreach from=$calleblock item=cb}
                    <option value="{$cb.Id_cb}">{$cb.Nom_cb}</option>
                {/foreach}
        </select>
    </div>   
    <div class="form-group">
        <label class="control-label">Estacionamiento:</label>
        <select name="esta" class="form-control">  
                <option value="">-Seleccione-</option>
                {for $c=1 to 600}
                        <option value="{$c}">{$c|str_pad:2:'0':$smarty.const.STR_PAD_LEFT}</option>
                {/for}
        </select>
    </div>   
    </div>
    </fieldset>
    <br/>
    <br/>
    <br/>
    <br/>
    <p>
        <a class="btn btn-default" href="{$_layoutParams.root}transa/viv"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>
        <input type="reset" value="Limpiar" class="btn btn-small btn-primary"/>
        {if $_acl->permiso('crear_viv')}<input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>{/if}     
    </p>
    <br/>
    <br/>
    <br/>
</form>
</div>
</div>