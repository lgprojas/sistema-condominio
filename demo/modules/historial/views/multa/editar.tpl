<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}historial/multa/indexMultas/{$v}/{$c}">Lista multas vivienda</a></li>
        <li class="active">Editar vivienda</li>
    </ol>
<h3>Editar multa</h3>
<h6>Calle/Block: {$dat.Nom_cb|upper}, N°: {$dat.Num_viv|upper}, N° Est: {$dat.Nom_esta|upper}</h6>
<br>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta multa?")) {
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
    <input type="hidden" name="cod" id="cod" value="{$datos.Cod_multa}" />
       <div class="row">
        <div class="form-group">
            <div class="col-sm-4 text-left">        
                <label class="control-label" style="margin: 5px;">Cód: </label>
            </div>
            <div class="col-sm-4">
                <input type="text" value="{$datos.Cod_multa}" class="form-control" disabled="disabled"/> 
            </div>
         </div>
       </div>
       <br>
       <div class="row">
          <div class="form-group">
             <div class="col-sm-4 text-left">
                 <label class="control-label">Fch multa:</label>
             </div>
             <div class="col-sm-4">
                 <input type="text" name="fchi" id="fchi" value="{$datos1.fchi|default:$datos.Fchi}" style="width: 100px;" placeholder="00-00-0000" class="form-control" readonly="readonly" required=""/>
             </div>
          </div>
       </div>
       <br>
       <div class="row">
          <div class="form-group">
             <div class="col-sm-4 text-left">
                 <label class="control-label">Fch pago:</label>
             </div>
             <div class="col-sm-4">
                 <input type="text" name="fchp" id="fchp" value="{$datos1.fchp|default:$datos.Fchp}" style="width: 100px;" placeholder="00-00-0000" class="form-control" readonly="readonly" required=""/>
             </div>
          </div>
       </div>
       <br>
       <div class="row">
          <div class="form-group">
            <div class="col-sm-4 text-left">     
                <label class="control-label">Monto: </label>    
            </div>
            <div class="col-sm-4">
                <input type="text" id="m" name="m" value="{$datos1.m|default:$datos.Total_multa}" class="form-control" placeholder="Escriba monto multa"/> 
            </div>
         </div>
       </div>
       <br>
       <div class="row">
          <div class="form-group">
            <div class="col-sm-4 text-left">
              <label class="control-label">Categoría multa: </label> 
            </div>
            <div class="col-sm-8">
                <select name="ctmul" id="ctmul" class="form-control" required="">   
                    {if $datos.Id_ctmul != 0}
                        <option value="{$datos.Id_ctmul}">{$datos.Nom_ctmul}</option>
                        {foreach from=$ctmul item=ct}
                            {if $ct.Id_ctmul != $datos.Id_ctmul}
                                <option value="{$ct.Id_ctmul}">{$ct.Nom_ctmul}</option>
                            {/if}
                        {/foreach}
                    {else}
                        <option value="">-Seleccione-</option>
                         {foreach from=$ctmul item=ct}
                            <option value="{$ct.Id_ctmul}">{$ct.Nom_ctmul}</option>
                         {/foreach}
                    {/if}            
                </select>
            </div>
          </div>
       </div>
       <br>
       <div class="row">
          <div class="form-group">
            <div class="col-sm-4 text-left">
              <label class="control-label">Subcategoría multa: </label> 
            </div>
            <div class="col-sm-6">
                <select name="tmul" id="tmul" class="form-control" required="">   
                    {if $datos.Id_tmul != 0}
                        <option value="{$datos.Id_tmul}">{$datos.Cod_tmul}</option>
                        {foreach from=$tmul item=tm}
                            {if $tm.Id_tmul != $datos.Id_tmul}
                                <option value="{$tm.Id_tmul}">{$tm.Cod_tmul}</option>
                            {/if}
                        {/foreach}
                    {else}
                        <option value="">-Seleccione-</option>
                         {foreach from=$tmul item=tm}
                            <option value="{$tm.Id_tmul}">{$tm.Cod_tmul}</option>
                         {/foreach}
                    {/if}            
                </select>
            </div>
          </div>
       </div>
       <br>
       <div class="row">
          <div class="form-group">
             <div class="col-sm-4 text-left">
                 <label class="control-label">Nota:</label>
             </div>
             <div class="col-sm-8">
                    <textarea name="nota" id="nota" class="form-control" placeholder="Ingrese detalle de la situación.." rows="4">{$datos1.nota|default:$datos.Nota_multa}</textarea>
             </div>
          </div>
       </div>       
       <br>
      <div class="row">
          <div class="form-group">
            <div class="col-sm-4 text-left">
              <label class="control-label">Estado multa: </label> 
            </div>
            <div class="col-sm-6">
                <select name="emul" id="emul" class="form-control" required="">   
                    {if $datos.Id_estmul != 0}
                        <option value="{$datos.Id_estmul}">{$datos.Nom_estmul}</option>
                        {foreach from=$emul item=em}
                            {if $em.Id_estmul != $datos.Id_estmul}
                                <option value="{$em.Id_estmul}">{$em.Nom_estmul}</option>
                            {/if}
                        {/foreach}
                    {else}
                        <option value="">-Seleccione-</option>
                         {foreach from=$emul item=em}
                            <option value="{$em.Id_estmul}">{$em.Nom_estmul}</option>
                         {/foreach}
                    {/if}            
                </select>
            </div>
          </div>
       </div>
    <br/>
    <br/>
    <p>
        <a class="btn btn-default" href="{$_layoutParams.root}historial/multa/indexMultas/{$v}/{$c}"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>
        {if $_acl->permiso('editar_multa')}<input type="submit" class="btn btn-small btn-primary" value="Editar" onclick='return cb(this);'/>{/if}
    </p>
    <br>
    <br>
    <br>
</form>
</div>
</div>