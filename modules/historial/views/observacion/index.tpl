<div class="container">
       <ol class="breadcrumb">
        <li><a href="{$_layoutParams.root}historial/observacion/">Lista observaciones</a></li>
        <li class="active">Observaciones condominio</li>
       </ol>
<h3>Observaciones condominio</h3>
{if $_acl->permiso('elim_obs')}
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar esta observación?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
{/literal}
{/if}
<br>
{if $_acl->permiso('crear_obs')}
<p>
<a href="#" data-toggle="modal" id="limpiar_modal1" data-target="#modal_obs" class="btn btn-default">
    <i title="Crear observación condominio" class="glyphicon glyphicon-plus"></i> Nueva observación
</a>                    
</p>
{/if}
<div class="well well-small row sm">
    <form id="form1" class="form-inline">
        {if $sadmin == 1}
        <div class="col-sm-4">
        <select id="c" name="c" class="form-control">
            <option value=""> - seleccione condominio - </option>
            {foreach from=$cond item=ps}
                <option value="{$ps.Id_cond}">{$ps.Nom_cond}</option>
            {/foreach}
        </select>
        </div>
        {/if}
    </form>
</div>
<div id="lista_registros">
<form name="form1" method="post">
<input type="hidden" value="{$_datos.pagina1|default:""}" name="pagina1">
{if isset($obs) && count($obs)}
<table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA; text-align: center;">Listado observaciones condominio</th>
    </thead>
    <thead style="background: #E6E6FA;"> 
        <td style="font-weight:bold;text-align: center;">Fch. obs</td>
        <td style="font-weight:bold;text-align: center;">Tipo obs</td>
        {if $sadmin == 1}<td style="font-weight:bold;text-align: center;">Condominio</td>{/if}
        {if $_acl->permiso('editar_obs')}<td style="font-weight:bold;text-align: center;">Edit.</td>{/if}
        {if $_acl->permiso('elim_obs')}<td style="font-weight:bold;text-align: center;">Elim.</td>{/if}
    </thead>
{foreach item=datos from=$obs}
    {if $color == "#F5FFFA"}{assign var="color" value="none"}{else}{assign var="color" value="#F5FFFA"}{/if}
    <tr id="list" style="background:{$color}" onmouseover=style.background="#F0F8FF" onmouseout=style.background="{$color}">
        <td style="text-align: center;">{$datos.fchi}</td>
        <td style="text-align: center;">{$datos.Nom_tobs}</td>
        {if $sadmin == 1}<td style="text-align: center;">{$datos.Nom_cond}</td>{/if}
        {if $_acl->permiso('editar_obs')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="{$_layoutParams.root}historial/observacion/editObs/{$datos.Id_encrypt}/{$datos.Cond_encrypt}"></a></td>{/if}
        {if $_acl->permiso('elim_obs')}<td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="{$_layoutParams.root}historial/observacion/delObs/{$datos.Id_encrypt}/{$datos.Cond_encrypt}" onclick='return cb(this);'></a></td>{/if}   
    </tr>

{/foreach}
</table>
{else}
            <p><strong>El condominio no posee observaciones.</strong></p>
{/if} 
</form>
{if isset($paginacion1)}{$paginacion1}   {/if}  
</div>
{if $_acl->permiso('crear_obs')}
<p>
<a href="#" data-toggle="modal" id="limpiar_modal1" data-target="#modal_obs" class="btn btn-default">
    <i title="Crear observación condominio" class="glyphicon glyphicon-plus"></i> Nueva Observación
</a>
    <br><br>
<a class="btn btn-default" href="{$_layoutParams.root}historial/observacion/"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>


<div class="modal fade" id="modal_obs" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nueva observación en el condominio</h4>
          <h6></h6>
        </div>
        <form name="form_modal1" id="form_modal1">
        <div class="modal-body">      
           <input type="hidden" name="add" value="1" />
           <input type="hidden" name="a" id="a" value="{$cond}" />
           <input type="hidden" name="viv" id="viv" value="{$dat.Id_viv}" />
        {if $sadmin == 1}
        <div class="row">
        <div class="form-group">
            <div class="col-sm-4 text-left">
                <label class="control-label">Condominio:</label>
            </div>
            <div class="col-sm-4">
                <select name="co" id="co" class="form-control">   
                        <option value="">-Seleccione-</option>
                        {foreach from=$cond item=co}
                            <option value="{$co.Id_cond}">{$co.Nom_cond}</option>
                        {/foreach}
                </select>
            </div>
        </div>
        </div>
        <br>
        {else}
            <input type="hidden" id="co" name="co" value="{$co}"/>
        {/if}
       <div class="row">
          <div class="form-group">
             <div class="col-sm-4 text-left">
                 <label class="control-label">Fch obs:</label>
             </div>
             <div class="col-sm-4">
                 <input type="text" name="fchi" id="fchi" value="{$datos1.fchi|default:""}" style="width: 160px;" placeholder="00-00-0000 HH:mm" class="form-control" readonly="readonly" required=""/>
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
                    <textarea name="n" id="n" class="form-control" placeholder="Ingrese detalle de la situación.." rows="4"></textarea>
             </div>
          </div>
       </div>       
       <br>
       <div class="row">
          <div class="form-group">
            <div class="col-sm-4 text-left">
              <label class="control-label">Tipo observación: </label> 
            </div>
            <div class="col-sm-6">
                <select name="tobs" id="tobs" class="form-control" required="">   
                        <option value="">-Seleccione-</option>
                        {foreach from=$tobs item=t}
                            <option value="{$t.Id_tobs}">{$t.Nom_tobs}</option>
                        {/foreach}
                </select>
            </div>
          </div>
       </div>
        <br>
          <div id="mssg" class="small">
          </div>
        </div>
       <div class="clearfix"></div>
        <div class="modal-footer">
            <button type="button" id="btn_saveobs" class="btn btn-primary" style="margin: 5px;">Guardar</button>
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