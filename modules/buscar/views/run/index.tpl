<div class="container">
<h3>Buscar RUN</h3>

{literal}
    <script type="text/javascript">
    function rv(formObj) {
                if(confirm("¿Registrar la visita?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
{/literal}
<div class="container">
<div class="col-md-4">
<form name="form1" method="post">
    <div class="col-lg-10">
    <input type="hidden" name="buscar" value="1" />
    <div class="form-group">
            <label class="control-label">RUN: </label>
            <input type="text" name="run" class="form-control" />
    </div>
    {if $select == "777"}
    <div class="form-group">
        <label class="control-label">Condominio:</label>
        <select name="cond" id="cond" class="form-control">   
                <option value="">-Seleccione-</option>
                {foreach from=$allcond item=co}
                    <option value="{$co.Id_cond}">{$co.Nom_cond}</option>
                {/foreach}
        </select>
    </div>
    {else}
        <input type="hidden" id="cond" name="cond" value="{$co}"/>
    {/if}
    <button type="submit" id="new" class="btn btn-primary" style="margin: 15px;">Buscar</button>
    </div>
</form>
</div>
</div>
<div class="container">
<div class="col-md-4">
{if isset($dat) && !empty($dat)}
    <table class="table table-bordered">
    <thead>
        <th colspan="2" style="background: #E6E6FA; text-align: center;">Detalle Persona</th>
    </thead>
    <tbody>
        <tr>
            <td>RUN:</td>
            <td><strong style="font-family: serif; font-size: 20px;">{$dat.Rut_per|upper}</strong></td>   
        </tr>
        <tr>
            <td>1er Nom:</td><td>{$dat.Nom1_per|upper}</td>
        </tr>
        <tr>
            <td>2do Nom:</td><td>{$dat.Nom2_per|upper}</td>
        </tr>
        <tr>
            <td>1er Ape:</td><td>{$dat.Ape1_per|upper}</td>
        </tr>
        <tr>
            <td>2do Ape:</td><td>{$dat.Ape2_per|upper}</td>
        </tr>   
    </tbody>
    </table>
    {if isset($dat1) && !empty($dat1)}    
    <table class="table table-bordered">
    <thead>
        <th colspan="2" style="background: #E6E6FA; text-align: center;">Es propietario</th>
    </thead>
    <tbody>
        <tr>
            <td>Viv asociada:</td><td>{$dat1.Nom_cb|upper}-{$dat1.Num_viv|upper}</td>
        </tr>
        <tr>
            <td>Estacionamiento:</td><td>{$dat1.Nom_esta|upper}</td>
        </tr>
        <tr>
            <td>Condominio:</td><td>{$dat1.Nom_cond|upper}</td>
        </tr>
    </tbody>
    </table>
    {/if}
    
    {if isset($dat4) && !empty($dat4)}
    <table class="table table-bordered">
    <thead>
        <th colspan="2" style="background: #E6E6FA; text-align: center;">Posee vehículo</th>
    </thead>
    <tbody>
        <tr>
            <td>Patente:</td><td>{$dat4.Cod_vehi|upper}</td>   
        </tr>
        <tr>
            <td>Marca:</td><td>{$dat4.Nom_marca|upper}</td>
        </tr>
        <tr>
            <td>Modelo:</td><td>{$dat4.Nom_modelo|upper}</td>
        </tr>
        <tr>
            <td>Detalle:</td><td>{$dat4.Desc_vehi}</td>   
        </tr>  
    </tbody>
    </table>
    {/if}
    
<fieldset>
    <legend>Registro relación</legend>
    
    <table class="table table-bordered col-lg-12">
        <thead>
            <th colspan="2" style="background: #E6E6FA; text-align: center;">Relacionar</th>
        </thead>
    <thead>
        <th style="background: #E6E6FA; text-align: center;">Vivienda</th>
        <th style="background: #E6E6FA; text-align: center;">Vehículo</th>
    </thead>
    <tbody>
        <tr>
            <td style="text-align: center;">
                <a href="#" data-toggle="modal" id="limpiar_modal1" data-target="#modal_viv" class="btn btn-default">
                    <i title="Asociar a vivienda" class="glyphicon glyphicon-home"></i> Asociar
                </a>
                    <div class="modal fade" id="modal_viv" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Asociar a una vivienda:</h4>
                          <h6>{$ca.Ape1_alum} {$ca.Ape2_alum} {$ca.Nom1_alum} {$ca.Nom2_alum}</h6>
                        </div>
                        <form name="form_modal1" id="form_modal1">
                        <div class="modal-body">      
                           <input type="hidden" name="addrelviv" value="1" />
                           <input type="hidden" name="co" id="co" value="{$cond}" />
                           <input type="hidden" name="per" id="per" value="{$idper}" />
                          <div class="row">
                              <div class="col-lg-3" style="margin: 5px;">Vivienda: </div> 
                              <div class="col-lg-5">
                                  <select name="aviv" id="aviv" class="form-control" required="">   
                                        <option value="">-Seleccione-</option>
                                        {foreach from=$allvivfilt item=v}
                                            <option value="{$v.Id_viv}">{$v.Nom_cb} - {$v.Num_viv}</option>
                                        {/foreach}
                                </select>
                              </div>
                          </div>
                          <br>
                          <div class="row">
                              <div class="col-lg-3" style="margin: 5px;">Tipo relación: </div> 
                              <div class="col-lg-5">
                                <select name="trel" id="trel" class="form-control" required="">   
                                </select>
                              </div>
                          </div>
                          <br>
                          <div id="mssg" class="small">
                          </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="btn_save1" class="btn btn-primary" style="margin: 5px;">Guardar</button>
                          <button type="button" id="limpiar_modal1" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                        </form>
                      </div>
                    </div>
                    </div> 
            </td>
            <td style="text-align: center;">
                <a href="#" data-toggle="modal" id="limpiar_modal2" data-target="#modal_vehi"class="btn btn-default">
                    <i title="Asociar a vehículo" class="glyphicon glyphicon-road"></i> Asociar
                </a>
                    <div class="modal fade" id="modal_vehi" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Asociar a un vehículo:</h4>
                          <h6>{$ca.Ape1_alum} {$ca.Ape2_alum} {$ca.Nom1_alum} {$ca.Nom2_alum}</h6>
                        </div>
                        <form name="form_modal2" id="form_modal2">
                        <div class="modal-body">      
                           <input type="hidden" name="addrelvehi" value="1" />
                           <input type="hidden" name="co" id="co" value="{$cond}" />
                           <input type="hidden" name="per" value="{$idper}" />
                          <div class="row">
                              <div class="col-lg-3" style="margin: 5px;">Vehículo: </div> 
                              <div class="col-lg-5">
                                <select name="avehi" id="avehi" class="form-control" required="">   
                                        <option value="">-Seleccione-</option>
                                        {foreach from=$allvehifilt item=ve}
                                            <option value="{$ve.Id_vehi}">[{$ve.Cod_vehi}] {$ve.Nom_marca} {$ve.Nom_modelo}</option>
                                        {/foreach}
                                </select>
                              </div>
                          </div>
                          <br>
                          <div class="row">
                              <div class="col-lg-3" style="margin: 5px;">Tipo relación: </div> 
                              <div class="col-lg-5">
                                <select name="trelv" id="trelv" class="form-control" required="">   
                                </select>
                              </div>
                          </div>
                          <br>
                          <div id="mssg2" class="small">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" id="btn_save2" class="btn btn-primary" style="margin: 5px;">Guardar</button>
                          <button type="button" id="limpiar_modal2" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                        </form>
                      </div>
                    </div>
                    </div> 
            </td>
        </tr>
    </tbody>
    </table>
    <legend>Registro visita</legend>
    <div class="form-horizontal well col-lg-12 small">
    <div class="form-group">
        <input type="hidden" name="per" value="{$idper}" />
        <input type="hidden" name="co" id="co" value="{$cond}" />
        <label class="control-label">Vivienda</label>  
            <select id="selviv" name="selviv" class="form-control input-sm">
                <option value="">-Seleccione-</option>
                {foreach from=$allVivRelPer item=sva}
                    <option value="{$sva.Id_viv}">{$sva.Nom_cb} {$sva.Num_viv}</option>
                {/foreach}
            </select>
    </div>
    <div class="form-group">
        <label class="control-label">Motivo</label>  
            <select id="selact" name="selact" class="form-control input-sm">
                <option value="">-Seleccione-</option>
                {foreach from=$actext item=sac}
                    <option value="{$sac.Id_actext}">{$sac.Nom_actext}</option>
                {/foreach}
            </select>
    </div>
    <div class="form-group">
        <label class="control-label">Vehículo</label>  
            <select id="selvehi" name="selvehi" class="form-control input-sm">
                <option value="">-Seleccione-</option>
                {foreach from=$allVehiRelPer item=vrp}
                    <option value="{$vrp.Cod_vehi|upper}">[{$vrp.Cod_vehi|upper}] {$vrp.Nom_marca|upper} - {$vrp.Nom_modelo|upper}</option>
                {/foreach}
            </select>
    </div>
    <div class="form-group">
        <label class="control-label"><input type="checkbox" name="seleprop" id="eprop"/> Est. viv</label> 
    </div>    
    <div class="form-group">
        <label class="control-label"><input type="checkbox" name="selevisita" id="evisita"/> Est. visita</label> 
    </div>
    <br>
    <div class="form-group">
            <div class="col-lg-2"><button class="selboton btn btn-default btn-sm">Registrar</button></div>
    </div>
    <div class="form-group">
        <div class="col-lg-12 text-center" id="registrado"></div>
    </div>          
    </div>
</fieldset>
{/if} 
<br/>
<br/>
</div>
</div>
</div>
</div>