<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}ref/modelo">Lista modelos</a></li>
        <li class="active">Editar modelo</li>
    </ol>
<h3>Editar modelo</h3>
<h4>{$datos.Nom_modelo}</h4>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta modelo?")) {
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
        <input class="form-control" type="text" name="nom" value="{if isset($datos.Nom_modelo)}{$datos.Nom_modelo}{/if}" placeholder="Ingrese nombre modelo"/>
        <label class="control-label">Marca:</label>
            <select class="form-control" name="marca" id="marca">
                {if $datos.Id_marca != 0}
                    <option value="{$datos.Id_marca}">{$datos.Nom_marca}</option>
                    {foreach from=$marca item=c}
                        {if $c.Id_marca != $datos.Id_marca}
                            <option value="{$c.Id_marca}">{$c.Nom_marca}</option>
                        {/if}
                    {/foreach}
                {else}
                    <option value="">-Seleccione-</option>
                     {foreach from=$marca item=c}
                        <option value="{$c.Id_marca}">{$c.Nom_marca}</option>
                     {/foreach}
                {/if}
             </select>            
        <br/>
    {if $_acl->permiso('editar_modelo')}    
    <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>
    {/if}
</form>
         <br/><br/>
        <p><a class="btn btn-default" href="{$_layoutParams.root}ref/modelo"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div>