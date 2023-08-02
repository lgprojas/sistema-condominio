<div class="container">
<h3>Encuestas</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Desea agregar esta nueva encuesta?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function en(formObj) {
                if(confirm("¿Desea editar estado de esta encuesta?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function ed(formObj) {
                if(confirm("¿Desea editar esta encuesta?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function dc(formObj) {
                if(confirm("¿Desea quitar esta encuesta de su lista?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
{/literal}
<br/>
<div>
{if $_acl->permiso('crear_encu')}
    <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#modal_new"><i title="Agregar nueva encuesta" class="glyphicon glyphicon-list-alt"></i> Nueva encuesta</a></p>
    <br/>
{/if}
    <div class="modal fade" id="modal_new" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nueva encuesta:</h4>
          <h6>Detalle</h6>
        </div>
        <form name="form1" method="post">
        <div class="modal-body">      
            <div class="col-lg-6">
               <input type="hidden" name="guardar" value="1" />
               {if $ifcond != 1}
                   <input type="hidden" name="cond" value="{$cond}" />
               {else}
                <div class="form-group">
                 <label class="control-label">Condominio</label>
                 <select name="cond" class="form-control" required="">
                        <option value="">-Seleccione-</option>   
                        {foreach from=$cond item=c}
                            <option value="{$c.Id_cond}">{$c.Nom_cond}</option>
                        {/foreach}
                  </select>
                </div> 
               {/if}
               <div class="form-group">
                 <label class="control-label">Pregunta <i class="glyphicon glyphicon-info-sign small" data-toggle="tooltip" data-placement="top" title="Se refiere a la pregunta que todos deberán responder de la encuesta."></i></label>
                 <input type="text" name="encuesta" class="form-control" placeholder="Pregunta" required=""/>
               </div>
               <div class="form-group">
                 <label class="control-label">Fch termino</label>
                 <input type="text" name="fcht" id="datepicker1" value="{$datos1.fcht|default:""}" style="width: 100px;" placeholder="00-00-0000" class="form-control" readonly="readonly" required=""/>
               </div>
            </div>
               <br/>
          </div>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <div class="modal-footer">
          <button type="reset" class="btn btn-default">Limpiar</button>
          <input type="submit" id="btn_save" class="btn btn-primary" style="margin: 5px;" value="Guardar" onclick='return cb(this);'/>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
        </form>
  </div>
</div>
</div>
</div>
{if $sadmin == 1}
<div class="well well-small row sm">
       <div class="col-sm-4">
         <label class="control-label">Condominio</label>
         <select id="co" name="co" class="form-control">
                <option value="">-Seleccione-</option>   
                {foreach from=$cond item=c}
                    <option value="{$c.Id_cond}">{$c.Nom_cond}</option>
                {/foreach}
          </select>
        </div>                  
</div>
{/if}
<div id="lista_registros">
<form name="form2" method="post">
<input type="hidden" value="{$_datos.pagina1|default:""}" name="pagina1">
{if isset($encuestas) && count($encuestas)}
<table class="table table-bordered">
    <thead style="background: #E6E6FA;">
        <th style="text-align: center;">ID</th>
        <th style="text-align: center;">Pregunta</th>
        <th style="text-align: center;">Fch inicio</th>
        <th style="text-align: center;">Fch termino</th>
        <th style="text-align: center;">Condominio</th>
        {if $_acl->permiso('edit_est_encu')}<th style="text-align: center;">Est</th>{/if}
        {if $_acl->permiso('ver_items')}<th style="text-align: center;">Opc.</th>{/if}
        {if $_acl->permiso('editar_encu')}<th style="text-align: center;">Edit</th>{/if}
        {if $_acl->permiso('ver_votos_encu')}<th style="text-align: center;">Votos</th>{/if}
        {if $_acl->permiso('elim_encu')}<th style="text-align: center;">Elim</th>{/if}
    </thead>
    
    {foreach item=ca from=$encuestas}
        <tr>
            <td>{$ca.Id_encu}</td>
            <td>{$ca.Nom_encu|substr:0:30}...</td>
            <td>{$ca.Fchi_encu|date_format:"%d-%m-%Y"}</td>
            <td>{$ca.Fcht_encu|date_format:"%d-%m-%Y"}</td>
            <td>{$ca.Nom_cond}</td>
            {if $_acl->permiso('edit_est_encu')}
            <td style="text-align: center;">
            {if $ca.Id_estencu== 1}
                <a href="{$_layoutParams.root}encuesta/index/editEstEncu/{$ca.Id_encrypt}" onclick='return en(this);'>
                    <img src="{$_layoutParams.root}public/img/all/estrella_cpromo.png" width="15" height="15" data-toggle="tooltip" data-placement="top" title="Activada/desactivada para ser respondida."/>
                </a>
            {else}
                <a href="{$_layoutParams.root}encuesta/index/editEstEncu/{$ca.Id_encrypt}" onclick='return en(this);'>
                    <img src="{$_layoutParams.root}public/img/all/estrella_spromo.png" width="15" height="15" data-toggle="tooltip" data-placement="top" title="Activada/desactivada para ser respondida."/> 
                </a>
            {/if}
            </td>
            {/if}
            {if $_acl->permiso('ver_items')}<td style="text-align: center;"><a href="{$_layoutParams.root}encuesta/index/addItems/{$ca.Id_encrypt}"><i data-toggle="tooltip" data-placement="top" title="Los ítems u opciones que tendrá la encuesta para ser respondida." class="glyphicon glyphicon-list-alt"></i></a></td>{/if}                       
            {if $_acl->permiso('editar_encu')}<td><a href="#" data-toggle="modal" style="margin: 30%;" data-target="#modal_{$ca.Id_encu}"><i title="Editar" class="glyphicon glyphicon-edit"></i></a>
            <div class="modal fade" id="modal_{$ca.Id_encu}" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Editar encuesta:</h4>
                          <h6>Detalle</h6>
                        </div>
                        <form name="form2" method="post">
                        <div class="modal-body">      
                            <div class="col-lg-6">
                               <input type="hidden" name="update" value="1" />
                               <input type="hidden" name="idencu" value="{$ca.Id_encu}" />
                               {if $ifcond != 1}
                                   <input type="hidden" name="cond" value="{$cond}" />
                               {else}
                                <div class="form-group">
                                 <label class="control-label">Condominio</label>
                                 <select class="form-control" name="cond" id="cond">
                                {if {$ca.Id_cond} != 0}
                                    <option value="{$ca.Id_cond}">{$ca.Nom_cond}</option>
                                    {foreach from=$cond item=co}
                                        {if $co.Id_cond != $ca.Id_cond}
                                            <option value="{$co.Id_cond}">{$co.Nom_cond}</option>
                                        {/if}
                                    {/foreach}
                                {else}
                                    <option value="">-Seleccione-</option>
                                    {foreach from=$cond item=co}
                                        <option value="{$co.Id_cond}">{$co.Nom_cond}</option>
                                    {/foreach}
                                {/if}
                                </select> 
                                </div> 
                               {/if}
                               <div class="form-group">
                                 <label class="control-label">Pregunta</label>
                                 <input type="text" name="encuesta" value="{$ca.Nom_encu}" class="form-control" placeholder="Pregunta" required=""/>
                               </div>
                               <div class="form-group">
                                 <label class="control-label">Fch termino</label>
                                 <input type="text" name="fcht" class="datepicker2 form-control" value="{$ca.Fcht_encu|date_format:"%d-%m-%Y"|default:"00-00-0000"}" style="width: 100px;" placeholder="00-00-0000" class="form-control" readonly="readonly" required=""/>
                               </div>
                            </div>
                               <br/>
                          </div>
                        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                        <div class="modal-footer">
                          <button type="reset" class="btn btn-default">Limpiar</button>
                          <input type="submit" id="btn_save" class="btn btn-primary" style="margin: 5px;" value="Guardar" onclick='return ed(this);'/>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                        </form>
              </div>
            </div>
            </div>            
            </td>{/if}       
            {if $_acl->permiso('ver_votos_encu')}<td style="text-align: center;"><a href="{$_layoutParams.root}encuesta/index/estVotaEncu/{$ca.Id_encrypt}/{$ca.Cond_encrypt}" ><i data-toggle="tooltip" data-placement="top" title="Ver votación de la encuesta." class="glyphicon glyphicon-stats"></i></a></td>{/if}
            {if $_acl->permiso('elim_encu')}<td style="text-align: center;"><a href="{$_layoutParams.root}encuesta/index/deleteEncu/{$ca.Id_encrypt}" onclick='return dc(this);'><i title="Eliminar" class="glyphicon glyphicon-trash"></i></a></td>{/if}            
        </tr>        
    {/foreach}
    
</table>
{else}
    <br/>
    <p><i title="Info" class="glyphicon glyphicon-info-sign"></i> No ha agregado encuestas.</p>
{/if}
</form>
{if isset($paginacion1)}{$paginacion1}   {/if}  
</div>
 <br/>
 {if $_acl->permiso('crear_encu')}
 <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#modal_new">
                    <i title="Agregar nueva encuesta" class="glyphicon glyphicon-list-alt"></i> Nueva encuesta
    </a></p><br/>
 {/if}
 </div>
