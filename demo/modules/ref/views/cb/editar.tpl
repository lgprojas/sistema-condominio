<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}ref/cb">Lista calles/blocks</a></li>
        <li class="active">Editar calle/block</li>
    </ol>
<h3>Editar calle/block</h3>
<h4>{$datos.Nom_cb}</h4>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta calle/block?")) {
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
        <label class="control-label">Nombre:</label>
        <input class="form-control" type="text" name="nom" value="{if isset($datos.Nom_cb)}{$datos.Nom_cb}{/if}" placeholder="Ingrese nombre calle/block"/>
        {if $sadmin == 1}
        <label class="control-label">Condominio:</label>
            <select class="form-control" name="cond" id="cond">
                {if $datos.Id_cond != 0}
                    <option value="{$datos.Id_cond}">{$datos.Nom_cond}</option>
                    {foreach from=$cond item=c}
                        {if $c.Id_cond != $datos.Id_cond}
                            <option value="{$c.Id_cond}">{$c.Nom_cond}</option>
                        {/if}
                    {/foreach}
                {else}
                    <option value="">-Seleccione-</option>
                     {foreach from=$cond item=c}
                        <option value="{$c.Id_cond}">{$c.Nom_cond}</option>
                     {/foreach}
                {/if}
             </select>   
        {else}
        <input type="hidden" id="cond" name="cond" value="{$co}"/>
        {/if} 
        <br/>
    <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>
</form>
         <br/><br/>
        <p><a class="btn btn-default" href="{$_layoutParams.root}ref/cb"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div>