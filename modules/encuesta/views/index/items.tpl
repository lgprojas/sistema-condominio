<div class="container">
<h3>Ítems encuesta</h3>
{literal}
    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Desea agregar este nuevo ítem?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function ed(formObj) {
                if(confirm("¿Desea editar este ítem?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function dc(formObj) {
                if(confirm("¿Desea quitar este ítem de su lista?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function en(formObj) {
                if(confirm("¿Desea quitar este archivo del ítem?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
{/literal}
<br/>
<div>
{if $_acl->permiso('crear_item')}
<p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#modal_new"><i title="Agregar nuevo ítem encuesta" class="glyphicon glyphicon-list-alt"></i> Nuevo ítem</a></p><br/>
                    <div class="modal fade" id="modal_new" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Nuevo ítem de la encuesta:</h4>
                          <h6>Detalle</h6>
                        </div>
                        <form name="form1" method="post">
                        <div class="modal-body">      
                            <div class="col-lg-6">
                               <input type="hidden" name="guardar" value="1" />
                               <div class="form-group">
                                 <label class="control-label">ítem</label>
                                 <input type="text" name="item" class="form-control" placeholder="Ítem" required=""/>
                               </div>
                            </div>
                               <br/>
                          </div>
                        <br/>
                        <div class="modal-footer">
                          <button type="reset" class="btn btn-default">Limpiar</button>
                          <input type="submit" id="btn_save" class="btn btn-primary" style="margin: 5px;" value="Guardar" onclick='return cb(this);'/>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                        </form>
  </div>
</div>
</div>
{/if}
</div>
{if isset($items) && count($items)}
<table class="table table-bordered">
    <thead style="background: #E6E6FA;">
        <th style="text-align: center;">ID</th>
        <th style="text-align: center;">Ítems</th>
        <th style="text-align: center;">Adjunto</th>
        {if $_acl->permiso('editar_item')}<th style="text-align: center;">Edit</th>{/if}
        {if $_acl->permiso('elim_item')}<th style="text-align: center;">Elim</th>{/if}
    </thead>
    
    {foreach item=ca from=$items}
        <tr>
            <td>{$ca.Id_iencu}</td>
            <td>{$ca.Nom_iencu|substr:0:30}...</td>
            <td style="text-align: center;">
            {if isset($ca.Est_adj) && count($ca.Est_adj)}
                {$ca.Est_adj}
                <a href="{$_layoutParams.root}public/files/{$ca.Adj_iencu}" target="_blank" class="btn btn-success btn-sm" style="margin:2px;">
                    <i title="Archivo adjunto" class="glyphicon glyphicon-floppy-saved"></i>
                </a>
                <a href="{$_layoutParams.root}encuesta/index/deleteFileItemEncu/{$ca.Id_Xencu}/{$ca.Id_Xiencu}" class="btn btn-danger btn-sm" onclick='return en(this);' style="margin:2px;">
                    <i title="Archivo adjunto" class="glyphicon glyphicon-floppy-remove"></i>
                </a>
            {else}
                <form form="form-{$ca.Id_encu}-{$ca.Id_iencu}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="subirfile" value="1" />
                <input type="hidden" name="item" value="{$ca.Id_iencu}" />
                <label for="file-{$ca.Id_encu}-{$ca.Id_iencu}"> 
                    <span title="Archivo adjunto" id="estado-file-{$ca.Id_encu}-{$ca.Id_iencu}" class="btn btn-default glyphicon glyphicon-open" style="margin:2px;"></span>
                    <input type="file" id="file-{$ca.Id_encu}-{$ca.Id_iencu}" name="archivo" class="btn btn-default" style="display: none;" value="Ver" onChange="ver(this);"/>                      
                    <input type="submit" id="btn-file-{$ca.Id_encu}-{$ca.Id_iencu}" class="btn btn-default glyphicon glyphicon-upload" value="Subir" style="display: none;"/>                                               
                </label>
                </form>
            {/if}
            </td>
            {if $_acl->permiso('editar_item')}
            <td><a href="#" data-toggle="modal" style="margin: 45%;" data-target="#modal_{$ca.Id_iencu}"><i title="Editar" class="glyphicon glyphicon-edit"></i></a>
            <div class="modal fade" id="modal_{$ca.Id_iencu}" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Editar ítem encuesta:</h4>
                          <h6>Detalle</h6>
                        </div>
                        <form name="form2" method="post">
                        <div class="modal-body">      
                            <div class="col-lg-6">
                               <input type="hidden" name="update" value="1" />
                               <input type="hidden" name="iditem" value="{$ca.Id_iencu}" />                              
                               <div class="form-group">
                                 <label class="control-label">Ítem</label>
                                 <input type="text" name="item" value="{$ca.Nom_iencu}" class="form-control" placeholder="Ítem" required=""/>
                               </div>
                            </div>
                               <br/>
                          </div>
                        <br/>
                        <div class="modal-footer">
                          <button type="reset" class="btn btn-default">Limpiar</button>
                          <input type="submit" id="btn_save" class="btn btn-primary" style="margin: 5px;" value="Guardar" onclick='return ed(this);'/>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                        </form>
              </div>
            </div>
            </div>            
            </td>
            {/if}         
            {if $_acl->permiso('elim_item')}<td style="text-align: center;"><a href="{$_layoutParams.root}encuesta/index/deleteItemEncu/{$ca.Id_Xencu}/{$ca.Id_Xiencu}" onclick='return dc(this);'><i title="Eliminar" class="glyphicon glyphicon-trash"></i></a></td>{/if}            
        </tr>        
    {/foreach}
    
</table>
{else}
    <br/>
    <p><i title="Info" class="glyphicon glyphicon-info-sign"></i> No ha agregado ítem a la encuesta.</p>
{/if}

 <br/>
{if $_acl->permiso('crear_item')}
 <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#modal_new">
                    <i title="Agregar nueva encuesta" class="glyphicon glyphicon-list-alt"></i> Nuevo ítem
    </a></p>
{/if} 
<br/>
 <p><a class="btn btn-default" href="{$_layoutParams.root}encuesta/index"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
