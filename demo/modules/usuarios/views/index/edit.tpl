<div class="container">
<h3>Editar usuario: </h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar este usuario")) {
                    return true;                     
                } else {
                    return false;
                }
    </script>
{/literal}

<div class="col-lg-4">
<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <input type="hidden" name="id" value="{$datos.Id_usu}" />
    <div class="form-group">
        <label class="control-label">Rut *</label> 
        <input class="form-control" type="text" name="rut" value="{$datos1.rut|default:$datos.Rut_usu}" placeholder="Ingrese Rut usuario"/>       
    </div>    
    <div class="form-group">
        <label class="control-label">Nombre *</label>  
        <input class="form-control" type="text" name="nom" value="{$datos1.nom|default:$datos.Nom_usu}" placeholder="Ingrese nombre personal del usuario"/>       
    </div>
    <div class="form-group">
        <label class="control-label">Nombre usuario *</label> 
        <input class="form-control" type="text" name="usu" value="{$datos1.usu|default:$datos.Usu_usu}" placeholder="Ingrese nombre de usuario"/>       
    </div>    

    <div class="form-group">
        <label class="control-label">Contraseña *</label>  
        <input class="form-control" type="text" name="pass" value="{$datos1.pass|default:""}" placeholder="Ingrese nueva contraseña usuario"/>       
    </div>      
    <div class="form-group">
        <label class="control-label">Email *</label>  
        <input class="form-control" type="text" name="email" value="{$datos1.email|default:$datos.Email_usu}" placeholder="Ingrese email usuario"/>       
    </div>      
    <div class="form-group">
        <label class="control-label">Condominio: </label>
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
    </div>
    <div class="form-group">
        <label class="control-label">Persona: </label>
            <select class="form-control" name="per" id="per">

                {if $datos.Id_per != 0}
                    <option value="{$datos.Id_per}">{$datos.Ape1_per} {$datos.Ape2_per} {$datos.Nom1_per}</option>
                    {foreach from=$per item=p}
                        {if $p.Id_per != $datos.Id_per}
                            <option value="{$p.Id_per}">{$p.Ape1_per} {$p.Ape2_per} {$p.Nom1_per}</option>
                        {/if}
                    {/foreach}
                {else}
                    <option value="">-Seleccione-</option>
                                 {foreach from=$per item=p}
                                    <option value="{$p.Id_per}">{$p.Ape1_per} {$p.Ape2_per} {$p.Nom1_per}</option>
                                 {/foreach}
                {/if}
             </select>            
    </div>
   <div class="form-group">
        <label class="control-label">Rol: </label>
            <select class="form-control" name="role" id="role">

                {if $datos.Id_role != 0}
                    <option value="{$datos.Id_role}">{$datos.Nom_role}</option>
                    {foreach from=$rol item=r}
                        {if $r.Id_role != $datos.Id_role}
                            <option value="{$r.Id_role}">{$r.Nom_role}</option>
                        {/if}
                    {/foreach}
                {else}
                    <option value="">-Seleccione-</option>
                                 {foreach from=$rol item=r}
                                    <option value="{$r.Id_role}">{$r.Nom_role}</option>
                                 {/foreach}
                {/if}
             </select>            
    </div>
    <div class="form-group">
        <label class="control-label">Estado: </label>
            <select class="form-control" name="est" id="est">

                {if $datos.Id_estusu != 0}
                    <option value="{$datos.Id_estusu}">{$datos.Nom_estusu}</option>
                    {foreach from=$est item=e}
                        {if $e.Id_estusu != $datos.Id_estusu}
                            <option value="{$e.Id_estusu}">{$e.Nom_estusu}</option>
                        {/if}
                    {/foreach}
                {else}
                    <option value="">-Seleccione-</option>
                                 {foreach from=$est item=e}
                                    <option value="{$e.Id_estusu}">{$e.Nom_estusu}</option>
                                 {/foreach}
                {/if}
             </select>            
    </div>
 <br/>
 <p><a class="btn btn-default" href="{$_layoutParams.root}usuarios"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>
     <input type="submit" class="btn btn-small btn-primary" value="Editar" onclick='return cb(this);'/></p>

</form>
</div>
</div>
             