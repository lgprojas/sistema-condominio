<div class="container">
    <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}historial/observacion">Lista observaciones</a></li>
        <li class="active">Editar observación</li>
    </ol>
<h3>Editar observación</h3>
<h6></h6>
<br>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta observación?")) {
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
    <input type="hidden" name="id" id="id" value="{$datos.Id_obs}" />
       <div class="row">
          <div class="form-group">
             <div class="col-sm-4 text-left">
                 <label class="control-label">Fch. obs.:</label>
             </div>
             <div class="col-sm-4">
                 <input type="datetime" name="fchi" id="fchi"  value="{$datos1.fchi|default:$datos.Fchi}" style="width: 160px;" placeholder="00-00-0000 HH:mm:ss" class="form-control" readonly="readonly" required=""/>
             </div>
          </div>
       </div>
       <br>
       <div class="row">
          <div class="form-group">
             <div class="col-sm-4 text-left">
                 <label class="control-label">Detalle:</label>
             </div>
             <div class="col-sm-8">
                    <textarea name="nota" id="nota" class="form-control" placeholder="Ingrese detalle de la situación.." rows="4">{$datos1.nota|default:$datos.Nota_obs}</textarea>
             </div>
          </div>
       </div>       
       <br>
       <div class="row">
          <div class="form-group">
            <div class="col-sm-4 text-left">
              <label class="control-label">Tipo situación: </label> 
            </div>
            <div class="col-sm-8">
                <select name="tobs" id="tobs" class="form-control" required="">   
                    {if $datos.Id_tobs != 0}
                        <option value="{$datos.Id_tobs}">{$datos.Nom_tobs}</option>
                        {foreach from=$tobs item=t}
                            {if $t.Id_tobs != $datos.Id_tobs}
                                <option value="{$t.Id_tobs}">{$t.Nom_tobs}</option>
                            {/if}
                        {/foreach}
                    {else}
                        <option value="">-Seleccione-</option>
                         {foreach from=$tobs item=t}
                            <option value="{$t.Id_tobs}">{$t.Nom_tobs}</option>
                         {/foreach}
                    {/if}            
                </select>
            </div>
          </div>
       </div>
       <br>
    <br/>
    <br/>
    <p>
        <a class="btn btn-default" href="{$_layoutParams.root}historial/observacion"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>
        {if $_acl->permiso('editar_obs')}<input type="submit" class="btn btn-small btn-primary" value="Editar" onclick='return cb(this);'/>{/if}
    </p>
    <br>
    <br>
    <br>
</form>
</div>
</div>