<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}ref/cb">Lista calles/blocks</a></li>
        <li class="active">Nueva calle/block</li>
    </ol>
<h3>Nueva calle/block</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear esta nueva calle/block?")) {
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
         <input class="form-control" type="text" name="nom" value="{$datos.nom|default:""}" placeholder="Ingrese nombre calle/block"/>       
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
        <br/>
    <p>
        {if $_acl->permiso('crear_cb')}
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>
        {/if}
    </p>
</form>
        <br/>
        <p><a class="btn btn-default" href="{$_layoutParams.root}ref/cb"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div>