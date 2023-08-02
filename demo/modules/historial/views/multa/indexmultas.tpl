<div class="container">
       <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}historial/multa/">Lista viviendas</a></li>
        <li class="active">Multas vivienda</li>
       </ol>
<h3>Multas de la vivienda</h3>
<h4>Calle/Block: {$dat.Nom_cb|upper}, N°: {$dat.Num_viv|upper}, N° Est: {$dat.Nom_esta|upper}</h4>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar esta multa?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
{/literal}
<br>
{if $_acl->permiso('crear_multa')}
<p>
<a href="#" data-toggle="modal" id="limpiar_modal1" data-target="#modal_per" class="btn btn-default">
    <i title="Aplicar multa a vivienda" class="glyphicon glyphicon-plus"></i> Nueva Multa
</a>                    
</p>
{/if}
<div id="lista_registros">
<form name="form1" method="post">
<input type="hidden" value="{$_datos.pagina1|default:""}" name="pagina1">
{if isset($multas) && count($multas)}
<table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA; text-align: center;">Listado multas viviendas</th>
    </thead>
    <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Cód</td> 
        <td style="font-weight:bold;text-align: center;">Fch. multa</td>
        <td style="font-weight:bold;text-align: center;">Tipo multa</td>
        <td style="font-weight:bold;text-align: center;">Estado</td>
        <td style="font-weight:bold;text-align: center;">Fch. pago</td>
        {if $_acl->permiso('editar_multa')}<td style="font-weight:bold;text-align: center;">Edit.</td>{/if}
        {if $_acl->permiso('elim_multa')}<td style="font-weight:bold;text-align: center;">Elim.</td>{/if}
    </thead>
{foreach item=datos from=$multas}
    {if $color == "#F5FFFA"}{assign var="color" value="none"}{else}{assign var="color" value="#F5FFFA"}{/if}
    <tr id="list" style="background:{$color}" onmouseover=style.background="#F0F8FF" onmouseout=style.background="{$color}">
        <td style="text-align: center;">{$datos.Cod_multa}</td>
        <td style="text-align: center;">{$datos.Fchi_multa}</td>
        <td style="text-align: center;">{$datos.Cod_tmul}</td>
        <td style="text-align: center;">{$datos.Nom_estmul}</td>
        <td style="text-align: center;">{$datos.Fchp_multa}</td>
        {if $_acl->permiso('editar_multa')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="{$_layoutParams.root}historial/multa/editMulta/{$datos.Id_encrypt}/{$Idviv_encrypt}/{$Cond_encrypt}"></a></td>{/if}
        {if $_acl->permiso('elim_multa')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="{$_layoutParams.root}historial/multa/delMulta/{$datos.Id_encrypt}/{$Idviv_encrypt}/{$Cond_encrypt}" onclick='return cb(this);'></a></td>{/if}   
    </tr>

{/foreach}
</table>
{else}
            <p><strong>La vivienda no posee multas.</strong></p>
{/if} 
</form>
{if isset($paginacion1)}{$paginacion1}   {/if}  
</div>
{if $_acl->permiso('crear_multa')}
<p>
<a href="#" data-toggle="modal" id="limpiar_modal1" data-target="#modal_per" class="btn btn-default">
    <i title="Aplicar multa a vivienda" class="glyphicon glyphicon-plus"></i> Nueva Multa
</a>
    <br><br>
<a class="btn btn-default" href="{$_layoutParams.root}historial/multa/"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>


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
              <label class="control-label">Categoría multa: </label> 
            </div>
            <div class="col-sm-6">
                <select name="ctmul" id="ctmul" class="form-control" required="">   
                        <option value="">-Seleccione-</option>
                        {foreach from=$ctmul item=ct}
                            <option value="{$ct.Id_ctmul}">{$ct.Nom_ctmul}</option>
                        {/foreach}
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
                <select name="tmul" id="tmul" class="form-control">
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
</p>
{/if}
    <br/>
    <br/>
    <br/>
</div>