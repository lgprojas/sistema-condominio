<div class="container">

<h3>Buscar Patente</h3>



<div class="container">

<div class="col-md-4">

<form name="form1" method="post">

    <div class="col-lg-10">

    <input type="hidden" name="buscar" value="1" />

    <div class="form-group">

            <label class="control-label">Patente: </label>

            <input type="text" name="cod" class="form-control" />

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

        <th colspan="2" style="background: #E6E6FA; text-align: center;">Detalle vehículo</th>

    </thead>

    <tbody>

        <tr>

            <td>Patente:</td><td>{$dat.Cod_vehi|upper}</td>   

        </tr>

        <tr>

            <td>Marca:</td><td>{$dat.Nom_marca|upper}</td>

        </tr>

        <tr>

            <td>Modelo:</td><td>{$dat.Nom_modelo|upper}</td>

        </tr>

        <tr>

            <td>Detalle:</td><td>{$dat.Desc_vehi}</td>   

        </tr>              

    </tbody> 

    </table>

      

    {if isset($datp) && !empty($datp)}

    <table class="table table-bordered">

    <thead>

        <th colspan="2" style="background: #E6E6FA; text-align: center;">Propietario vehículo</th>

    </thead>

    <tbody>

        <tr>

            <td>Propietario:</td><td>{$datp.Nom1_per|upper} {$datp.Ape1_per|upper} {$datp.Ape2_per|upper}</td>

        </tr>

    </tbody>

    </table>

    {else}

    <table class="table table-bordered">

    <thead>

        <th colspan="2" style="background: #E6E6FA; text-align: center;">Propietario vehículo</th>

    </thead>

    <tbody>

        <tr>

            <td>Propietario:</td><td>Sin propietario asociado.</td>

        </tr>

    </tbody>

    </table>

    {/if}



{if isset($dat1) && !empty($dat1)}

    <table class="table table-bordered">

    <thead>

        <th colspan="2" style="background: #E6E6FA; text-align: center;">Vivienda propietario</th>

    </thead>

    <tbody>

        <tr>

            <td>Viv asociada:</td><td>{$dat1.Nom_cb|upper}-{$dat1.Num_viv|upper}</td>

        </tr>

        <tr>

            <td>Estacionamiento:</td><td>{if isset($dat3) && !empty($dat3)}{$dat3.Nom_esta|upper}{/if}</td>

        </tr>

        <tr>

            <td>Condominio:</td><td>{$dat4.Nom_cond|upper}</td>

        </tr>

    </tbody>

    </table>



<table class="table table-bordered">

    <thead>

        <th colspan="2" style="background: #E6E6FA; text-align: center;">Detalle vivienda</th>

    </thead>

    <tbody>

        <tr>

            <td>Propietario viv:</td><td>{if isset($dat2) && !empty($dat2)}{$dat2.Nom1_per|upper} {$dat2.Ape1_per|upper} {$dat2.Ape2_per|upper}{else}Sin propietario definido{/if}</td>

        </tr>

    </tbody>

</table>

{/if}



{if isset($perAsoc) && !empty($perAsoc)}

    <table class="table table-bordered small">

    <thead>

        <th colspan="9" style="background: #E6E6FA;text-align: center;">Personas asociadas al vehículo</th>

        </thead>

        <thead style="background: #E6E6FA;">    

        <td style="font-weight:bold;text-align: center;">Nombre</td>

        <td style="font-weight:bold;text-align: center;">Viv relacionadas</td>

        <td style="font-weight:bold;text-align: center;">Motivo visita</td>

        <td style="font-weight:bold;text-align: center;">Est. viv</td>

        <td style="font-weight:bold;text-align: center;">Est. visita</td>

        <td></td>

    </thead>

{foreach item=datos from=$perAsoc}

    

    {if $color == "#F5FFFA"}{assign var="color" value="none"}{else}{assign var="color" value="#F5FFFA"}{/if}

    <tr id="{$datos.Id_per}" style="background:{$color}" onmouseover=style.background="#F0F8FF" onmouseout=style.background="{$color}">

        <td style="font-size: 10px;">

            <input type="hidden" id="vehi" value="{$dat.Cod_vehi|upper}" />

            <input type="hidden" id="per_{$datos.Id_per}" value="{$datos.Id_per}" />

            <input type="hidden" id="usu" value="{$usu}" />

            <input type="hidden" id="co" value="{$cond}" />            

            <span data-toggle="tooltip" data-placement="top" title="{$datos.Rut_per}">

                {$datos.Nom1_per|upper} {$datos.Ape1_per|upper} {$datos.Ape2_per|upper}

            </span>

        </td>

        <td>

            <select id="vivasoc_{$datos.Id_per}" name="vivasoc" class="form-control input-sm" style="width: 110px;">

                <option value="">-Seleccione-</option>

                {foreach from=$datos.Vivasoc_per item=vap}

                    <option value="{$vap.Id_viv}">{$vap.Nom_cb} {$vap.Num_viv}</option>

                {/foreach}

            </select>

        </td>

        <td>

            <select id="actext_{$datos.Id_per}" name="actext" class="form-control input-sm" style="min-width: 140px;">

                <option value="">-Seleccione-</option>

                {foreach from=$actext item=ac}

                    <option value="{$ac.Id_actext}">{$ac.Nom_actext}</option>

                {/foreach}

            </select>

        </td>

        <td style="text-align: center;"><input type="checkbox" name="eprop_{$datos.Id_per}" id="eprop"/></td>

        <td style="text-align: center;"><input type="checkbox" name="evisita_{$datos.Id_per}" id="evisita"/></td>

        <td style="text-align: center;"><div id="rega_{$datos.Id_per}"><button class="boton btn btn-default btn-sm">Registrar</button></div></td>

    </tr>

{/foreach}

</table>

<table class="table table-bordered col-lg-12">

        <thead>

            <th colspan="2" style="background: #E6E6FA; text-align: center;">Relacionar</th>

        </thead>

    <thead>

        <th style="background: #E6E6FA; text-align: center;">Persona</th>

    </thead>

    <tbody>

        <tr>

            <td style="text-align: center;">

                <a href="#" data-toggle="modal" id="limpiar_modal1" data-target="#modal_per" class="btn btn-default">

                    <i title="Asociar a vivienda" class="glyphicon glyphicon-home"></i> Asociar

                </a>

                    <div class="modal fade" id="modal_per" role="dialog">

                    <div class="modal-dialog">

                      <div class="modal-content">

                        <div class="modal-header">

                          <button type="button" class="close" data-dismiss="modal">&times;</button>

                          <h4 class="modal-title">Asociar a una vivienda:</h4>

                          <h6>{$ca.Ape1_alum} {$ca.Ape2_alum} {$ca.Nom1_alum} {$ca.Nom2_alum}</h6>

                        </div>

                        <form name="form_modal1" id="form_modal1">

                        <div class="modal-body">      

                           <input type="hidden" name="addrelper" value="1" />

                           <input type="hidden" name="a" id="a" value="{$cond}" />

                           <input type="hidden" name="vehi" id="vehi" value="{$dat.Cod_vehi|upper}" />

                       <div class="col-lg">

                        <div class="form-group">

                            <div class="col">        

                                <label class="control-label" style="margin: 5px" for="perco">Nombre: </label>    

                            </div>

                            <div class="col ml-auto">

                                <input type="text" id="perco" name="perco" class="form-control" placeholder="Escriba nombre persona"/> 

                            </div>

                         </div>                     

                          <div class="form-group">

                              <div class="col" style="margin: 5px;">Tipo relación: </div> 

                              <div class="col">

                                <select name="trelv" id="trelv" class="form-control" required="">   

                                        <option value="">-Seleccione-</option>

                                        {foreach from=$relvehi item=trv}

                                            <option value="{$trv.Id_trelv}">{$trv.Nom_trelv}</option>

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

                            <button type="button" id="btn_savepp" class="btn btn-primary" style="margin: 5px;">Guardar</button>

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

<div class="clearfix"></div>

<fieldset>

    <legend>Registro avanzado

        <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Registro de visita en el caso que una persona relacionada a esta patente quiera visitar otra vivienda con la cual aún no posee relación."></i>

    </legend>

    <div class="form-horizontal well col-lg-10 small">

    <div class="form-group">

        <label class="control-label">Nombre persona</label>  

        <select id="selper" name="selper" class="form-control input-sm">

                <option value="">-Seleccione-</option>

                {foreach from=$perAsoc item=spa}

                    <option value="{$spa.Id_per}">{$spa.Nom1_per|upper} {$spa.Nom2_per|upper} {$spa.Ape1_per|upper} {$spa.Ape2_per|upper}</option>

                {/foreach}

            </select>

    </div>

    <div class="form-group">

        <label class="control-label">Vivienda</label>  

            <select id="selviv" name="selviv" class="form-control input-sm">

                <option value="">-Seleccione-</option>

                {foreach from=$allviv item=sva}

                    <option value="{$sva.Id_viv}">{$sva.Nom_cb} {$sva.Num_viv}</option>

                {/foreach}

            </select>

    </div>

    <div class="form-group">

        <label class="control-label">Relación vivienda

        <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Debe establecer la relación que tiene la persona con la vivienda seleccionada."></i>

        </label>  

            <select id="selrviv" name="selrviv" class="form-control input-sm">

                <option value="">-Seleccione-</option>

                {foreach from=$relviv item=srv}

                    <option value="{$srv.Id_trel}">{$srv.Nom_trel}</option>

                {/foreach}

            </select>

    </div>

    <div class="form-group">

        <label class="control-label">Actividad

        <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Observación del fin de la visita al condominio."></i>

        </label>  

            <select id="selact" name="selact" class="form-control input-sm">

                <option value="">-Seleccione-</option>

                {foreach from=$actext item=sac}

                    <option value="{$sac.Id_actext}">{$sac.Nom_actext}</option>

                {/foreach}

            </select>

    </div>

    <div id="estac" class="well">

        <label class="control-label h4">Estacionamiento

        <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Sólo se establece para el responsable de estacionar el vehículo."></i>

        </label>  

        <div class="form-group">

            <label class="control-label"><input type="checkbox" name="seleprop" id="eprop"/> Vivienda</label> 

        </div>    

        <div class="form-group">

            <label class="control-label"><input type="checkbox" name="selevisita" id="evisita"/> Visita</label> 

        </div>

    </div>

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

<br/>

{/if}

</div>

</div>

</div>