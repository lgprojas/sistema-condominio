<div class="container">
<h3>Buscar Vivienda</h3>
<div class="container">
<div class="col-md-4">
<form name="form1" method="post">
    <div class="col-lg-10">
    <input type="hidden" name="buscar" value="1" />
    {if $select == "777"}
    <div class="form-group">
        <label class="control-label">Condominio:</label>
        <select name="cond" id="cond" class="form-control">   
                <option value="">-Seleccione-</option>
                {foreach from=$cond item=co}
                    <option value="{$co.Id_cond}">{$co.Nom_cond}</option>
                {/foreach}
        </select>
    </div>
    {else}
        <input type="hidden" id="cond" name="cond" value="{$co}"/>
    {/if}
    <div class="form-group">
        <label class="control-label">Calle/Torre: </label>
        <select name="cb" id="cb" class="form-control">
            <option value="">-Seleccione-</option>
            {foreach from=$cb item=c}
                <option value="{$c.Id_cb}">{$c.Nom_cb}</option>
            {/foreach}
        </select>
    </div>
    <div class="form-group">
        <label class="control-label">N°: </label>
        <select name="num" id="num" class="form-control">
        </select>
    </div> 
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
        <th colspan="2" style="background: #E6E6FA; text-align: center;">Detalle Vivienda</th>
    </thead>
    <tbody>
        <tr>
            <td>Calle/Block:</td><td>{$dat.Nom_cb|upper}</td>   
        </tr>
        <tr>
            <td>N° vivienda:</td><td>{$dat.Num_viv|upper}</td>
        </tr>
        <tr>
            <td>N° Est:</td><td>{$dat.Nom_esta|upper}</td>
        </tr>  
    </tbody>
    <thead>
        <th colspan="2" style="background: #E6E6FA; text-align: center;">Detalle propietario</th>
    </thead>
    <tbody>
        <tr>
            <td>RUN:</td><td>{$dat1.Rut_per|upper}</td>   
        </tr>
        <tr>
            <td>1er Nom:</td><td>{$dat1.Nom1_per|upper}</td>
        </tr>
        <tr>
            <td>2do Nom:</td><td>{$dat1.Nom2_per|upper}</td>
        </tr>
        <tr>
            <td>1er Ape:</td><td>{$dat1.Ape1_per|upper}</td>
        </tr>
        <tr>
            <td>2do Ape:</td><td>{$dat1.Ape2_per|upper}</td>
        </tr>
        <tr>
            <td>Estado:</td><td>{$dat1.Nom_estre|upper}</td>
        </tr>
    </tbody>
    {if isset($dat2) && !empty($dat2)}
    <thead>
        <th colspan="2" style="background: #E6E6FA; text-align: center;">Detalle titular</th>
    </thead>
    <tbody>
        <tr>
            <td>RUN:</td><td>{$dat2.Rut_per|upper}</td>   
        </tr>
        <tr>
            <td>1er Nom:</td><td>{$dat2.Nom1_per|upper}</td>
        </tr>
        <tr>
            <td>2do Nom:</td><td>{$dat2.Nom2_per|upper}</td>
        </tr>
        <tr>
            <td>1er Ape:</td><td>{$dat2.Ape1_per|upper}</td>
        </tr>
        <tr>
            <td>2do Ape:</td><td>{$dat2.Ape2_per|upper}</td>
        </tr>
    </tbody>
    {/if}
</table>
    
<table class="table table-bordered col-lg-12">
        <thead>
            <th colspan="2" style="background: #E6E6FA; text-align: center;">Multa</th>
        </thead>
    <tbody>
        <tr>
            <td style="text-align: center;">
                <a href="#" data-toggle="modal" id="limpiar_modal1" data-target="#modal_per" class="btn btn-default">
                    <i title="Aplicar multa a vivienda" class="glyphicon glyphicon-home"></i> Aplicar
                </a>
                    <div class="modal fade" id="modal_per" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Aplicar multa a vivienda:</h4>
                          <h6>Calle/Block: {$dat.Nom_cb|upper}, N°: {$dat.Num_viv|upper}, N° Est: {$dat.Nom_esta|upper}</h6>
                        </div>
                        <form name="form_modal1" id="form_modal1">
                        <div class="modal-body">      
                           <input type="hidden" name="addrelper" value="1" />
                           <input type="hidden" name="a" id="a" value="{$cond}" />
                           <input type="hidden" name="viv" id="viv" value="{$dat.Id_viv}" />
                       <div class="row">
                        <div class="form-group">
                            <div class="col-sm-4 text-left">        
                                <label class="control-label" style="margin: 5px;">Cód: </label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" id="cod" name="cod" class="form-control" placeholder="Escriba código multa"/> 
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
                                 <input type="text" name="fchi" id="fchi" value="{$datos1.fchi|default:""}" style="width: 100px;" placeholder="00-00-0000" class="form-control" readonly="readonly" required=""/>
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
                                    <textarea name="nota" id="nota" class="form-control" placeholder="Ingrese detalle de la situación.." rows="4"></textarea>
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
                                 <input type="text" name="fchp" id="fchp" value="{$datos1.fchp|default:""}" style="width: 100px;" placeholder="00-00-0000" class="form-control" readonly="readonly" required=""/>
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
                                <input type="text" id="m" name="m" class="form-control" placeholder="Escriba monto multa"/> 
                            </div>
                         </div>
                       </div>
                       <br>
                       <div class="row">
                          <div class="form-group">
                            <div class="col-sm-4 text-left">
                              <label class="control-label">Motivo multa: </label> 
                            </div>
                            <div class="col-sm-6">
                                <select name="tmul" id="tmul" class="form-control" required="">   
                                        <option value="">-Seleccione-</option>
                                        {foreach from=$tmul item=t}
                                            <option value="{$t.Id_tmul}">{$t.Nom_tmul}</option>
                                        {/foreach}
                                </select>
                            </div>
                          </div>
                       </div>
                          <div id="mssg" class="small">
                          </div>
                        </div>
                       <div class="clearfix"></div>
                        <div class="modal-footer">
                            <button type="button" id="btn_savem" class="btn btn-primary" style="margin: 5px;">Guardar</button>
                          <button type="button" id="limpiar_modal1" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                        </form>
                      </div>
                    </div>
                </div> 
            </td>
        </tr>
    </tbody>
    </table>
{/if} 
</div>
</div>
</div>
</div>