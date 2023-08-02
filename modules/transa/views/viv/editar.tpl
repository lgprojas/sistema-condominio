<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}transa/viv">Lista viviendas</a></li>
        <li class="active">Editar vivienda</li>
    </ol>
<h3>Editar vivienda</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta vivienda?")) {
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
    {if $sadmin == 1}
    <fieldset>
    <legend>El Condominio</legend>
    <div class="form-horizontal well col-lg-12 small">
    <div class="form-group">
        <label class="control-label">Condominio:</label>
        <select  name="cond" id="cond" class="form-control">
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
    <legend>La Vivienda</legend>
    <div class="form-horizontal well col-lg-12 small">
    <div class="form-group">
        <label class="control-label">Número vivienda:</label>
        <input class="form-control" type="text" name="num" value="{if isset($datos.Num_viv)}{$datos.Num_viv}{/if}" placeholder="Ingrese número vivienda" />
    </div>
    <div class="form-group">
        <label class="control-label">Calle/block:</label>
        <select name="cb" id="cb" class="form-control">            
            {if $datos.Id_cb != 0}
                <option value="{$datos.Id_cb}">{$datos.Nom_cb}</option>
                {foreach from=$calleblock item=cb}
                    {if $cb.Id_cb != $datos.Id_cb}
                        <option value="{$cb.Id_cb}">{$cb.Nom_cb}</option>
                    {/if}
                {/foreach}
                <option value=""></option>
            {else}
                <option value="">-Seleccione-</option>
                             {foreach from=$calleblock item=cb}
                                <option value="{$cb.Id_cb}">{$cb.Nom_cb}</option>
                             {/foreach}
            {/if}            
        </select>
    </div>       
    <div class="form-group">
        <label class="control-label">Estacionamiento:</label>
        <select  name="esta" id="esta" class="form-control">
            {if $datos.Id_esta != 0}
                <option value=""></option>
                <option selected="" value="{$datos.Id_esta}">{$datos.Id_esta|str_pad:2:'0':$smarty.const.STR_PAD_LEFT}</option>
                {for $c=1 to 600}
                    {if $c != $datos.Id_esta}
                        <option value="{$c}">{$c|str_pad:2:'0':$smarty.const.STR_PAD_LEFT}</option>
                    {/if}
                {/for}
            {else}
                <option value="">-Seleccione-</option>                         
                {for $c=1 to 600}
                        <option value="{$c}">{$c|str_pad:2:'0':$smarty.const.STR_PAD_LEFT}</option>
                {/for}
            {/if}     
        </select>
    </div> 
    </div>
    </fieldset>
    <br/>
    <br/>
    <p>
        <a class="btn btn-default" href="{$_layoutParams.root}transa/viv"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>
        {if $_acl->permiso('editar_viv')}<input type="submit" class="btn btn-small btn-primary" value="Editar" onclick='return cb(this);'/>{/if}
    </p>
    <br>
    <br>
    <br>
</form>
</div>
</div>