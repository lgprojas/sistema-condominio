<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}ref/cond">Lista condominios</a></li>
        <li class="active">Editar condominio</li>
    </ol>
<h3>Editar condominio</h3>
<h4>{$datos.Nom_cond}</h4>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar este condominio?")) {
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
        <input class="form-control" type="text" name="nom" value="{if isset($datos.Nom_cond)}{$datos.Nom_cond}{/if}" placeholder="Ingrese nombre condominio"/>
        <label class="control-label">Dirección:</label>
        <input class="form-control" type="text" name="dir" value="{if isset($datos.Dir_cond)}{$datos.Dir_cond}{/if}" placeholder="Ingrese dirección condominio"/>
        <label class="control-label">Inmobiliaria:</label>
            <select class="form-control" name="inm" id="inm">

                {if $datos.Id_inm != 0}
                    <option value="{$datos.Id_inm}">{$datos.Nom_inm}</option>
                    {foreach from=$inm item=i}
                        {if $i.Id_inm != $datos.Id_inm}
                            <option value="{$i.Id_inm}">{$i.Nom_inm}</option>
                        {/if}
                    {/foreach}
                {else}
                    <option value="">-Seleccione-</option>
                     {foreach from=$inm item=i}
                        <option value="{$i.Id_inm}">{$i.Nom_inm}</option>
                     {/foreach}
                {/if}
             </select>            
        <label class="control-label">Ciudad:</label>
            <select class="form-control" name="ciu" id="ciu">
                {if $datos.Id_ciu != 0}
                    <option value="{$datos.Id_ciu}">{$datos.Nom_ciu}</option>
                    {foreach from=$ciu item=c}
                        {if $c.Id_ciu != $datos.Id_ciu}
                            <option value="{$c.Id_ciu}">{$c.Nom_ciu}</option>
                        {/if}
                    {/foreach}
                {else}
                    <option value="">-Seleccione-</option>
                     {foreach from=$ciu item=c}
                        <option value="{$c.Id_ciu}">{$c.Nom_ciu}</option>
                     {/foreach}
                {/if}
             </select> 
        <br/>
    {if $_acl->permiso('editar_cond')}
        <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>
    {/if}
</form>
         <br/><br/>
        <p><a class="btn btn-default" href="{$_layoutParams.root}ref/cond"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div>