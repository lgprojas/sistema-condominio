<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}ref/cond">Lista condominios</a></li>
        <li class="active">Configuración condominio</li>
    </ol>
<h3>Editar configuración condominio</h3>
<h4>{$datos.Nom_cond}</h4>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta configuración?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
{/literal}
<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <div class="form-horizontal col-lg-3 small">
        <label class="control-label">¿Quiénes votan?:</label>
            <select class="form-control" name="tv" id="tv">
                {if $datos.Id_tv != 0}
                    <option value="{$datos.Id_tv}">{$datos.Nom_tv}</option>
                    {foreach from=$tipovot item=i}
                        {if $i.Id_tv != $datos.Id_tv}
                            <option value="{$i.Id_tv}">{$i.Nom_tv}</option>
                        {/if}
                    {/foreach}
                {else}
                    <option value="">-Seleccione-</option>
                     {foreach from=$tipovot item=i}
                        <option value="{$i.Id_tv}">{$i.Nom_tv}</option>
                     {/foreach}
                {/if}
             </select>            
        <br/>
    {if $_acl->permiso('editar_conf_cond')}
        <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>
    {/if}
</form>
         <br/><br/><br/>
        <p><a class="btn btn-default" href="{$_layoutParams.root}ref/cond"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div>