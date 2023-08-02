<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}usuarios">Lista usuarios</a></li>
        <li class="active">Registro usuario</li>
    </ol>
<h2>Registro usuario</h2>
<br/>
<form name="form1" class="" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">RUN: </label><input type="text" name="run" value="{$datos.run|default:""}" placeholder="Ingrese RUN" class="form-control"/>        
        </div>
        <div class="form-group">
            <label class="control-label">Nombre: </label><input type="text" name="nombre" value="{$datos.nombre|default:""}" placeholder="Ingrese su nombre" class="form-control"/>      
        </div>    
        <div class="form-group">
            <label class="control-label">Usuario: </label><input type="text" name="usuario" value="{$datos.usuario|default:""}" placeholder="Ingrese nombre usuario (RUN)" class="form-control"/>       
        </div>   
        <div class="form-group">
            <label class="control-label">Email: </label><input type="text" name="email" value="{$datos.email|default:""}" placeholder="Ingrese email" class="form-control"/>       
        </div> 
        <div class="form-group">
            <label class="control-label">Contraseña: </label><input type="password" name="pass" placeholder="Ingrese constraseña" class="form-control"/>    
        </div>   
        <div class="form-group">
            <label class="control-label">Confirmar: </label><input type="password" name="confirmar" placeholder="Reingrese contraseña" class="form-control"/>       
        </div>  
        {if $rolGestor == "1"}
        <div class="form-group">
            <label class="control-label">Condominio:</label>
            <select name="cond" id="cond" class="form-control">   
                <option value="">-Seleccione-</option>
                {foreach from=$cond item=c}
                    <option value="{$c.Id_cond}">{$c.Nom_cond}</option>
                {/foreach}
            </select>
        </div>
        {/if}
        <div class="form-group">
            <label class="control-label">Persona: <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Lista sólo personas que no poseen actualmente un usuario."></i></label>
            <select name="per" id="per" class="form-control">   
            </select>
        </div>
        <div class="form-group">
            <label class="control-label">Role: <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Lista sólo Roles definidos por el comité."></i></label>
            <select name="role" id="role" class="form-control">   
            </select>
        </div>            
        <div class="form-group">
            <label class="control-label">Estado:</label>
            <select name="estusu" class="form-control">   
                    {foreach from=$estusu item=e}
                        <option value="{$e.Id_estusu}">{$e.Nom_estusu}</option>
                    {/foreach}
            </select>
        </div> 
        <div class="form-group">            
            <p><a class="btn btn-default" href="{$_layoutParams.root}usuarios"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>   <input class="btn btn-small btn-primary" type="submit" value="Crear" /></p>
        </div>
    </div>
</form>
</div>

 