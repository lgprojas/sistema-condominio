<?php /* Smarty version Smarty-3.1.11, created on 2023-08-16 15:09:07
         compiled from "C:\xampp\htdocs\condominio\modules\encuesta\views\index\items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62778995564dd1ed35c1587-89017210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e354e41f0e0ae585bd2e14f92e8a7846c7a1f9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\condominio\\modules\\encuesta\\views\\index\\items.tpl',
      1 => 1521355489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62778995564dd1ed35c1587-89017210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_acl' => 0,
    'items' => 0,
    'ca' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_64dd1ed3735c76_74034869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64dd1ed3735c76_74034869')) {function content_64dd1ed3735c76_74034869($_smarty_tpl) {?><div class="container">
<h3>Ítems encuesta</h3>

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

<br/>
<div>
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_item')){?>
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
<?php }?>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['items']->value)&&count($_smarty_tpl->tpl_vars['items']->value)){?>
<table class="table table-bordered">
    <thead style="background: #E6E6FA;">
        <th style="text-align: center;">ID</th>
        <th style="text-align: center;">Ítems</th>
        <th style="text-align: center;">Adjunto</th>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_item')){?><th style="text-align: center;">Edit</th><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_item')){?><th style="text-align: center;">Elim</th><?php }?>
    </thead>
    
    <?php  $_smarty_tpl->tpl_vars['ca'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ca']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ca']->key => $_smarty_tpl->tpl_vars['ca']->value){
$_smarty_tpl->tpl_vars['ca']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_iencu'];?>
</td>
            <td><?php echo substr($_smarty_tpl->tpl_vars['ca']->value['Nom_iencu'],0,30);?>
...</td>
            <td style="text-align: center;">
            <?php if (isset($_smarty_tpl->tpl_vars['ca']->value['Est_adj'])&&count($_smarty_tpl->tpl_vars['ca']->value['Est_adj'])){?>
                <?php echo $_smarty_tpl->tpl_vars['ca']->value['Est_adj'];?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/files/<?php echo $_smarty_tpl->tpl_vars['ca']->value['Adj_iencu'];?>
" target="_blank" class="btn btn-success btn-sm" style="margin:2px;">
                    <i title="Archivo adjunto" class="glyphicon glyphicon-floppy-saved"></i>
                </a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuesta/index/deleteFileItemEncu/<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_Xencu'];?>
/<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_Xiencu'];?>
" class="btn btn-danger btn-sm" onclick='return en(this);' style="margin:2px;">
                    <i title="Archivo adjunto" class="glyphicon glyphicon-floppy-remove"></i>
                </a>
            <?php }else{ ?>
                <form form="form-<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_encu'];?>
-<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_iencu'];?>
" method="post" enctype="multipart/form-data">
                <input type="hidden" name="subirfile" value="1" />
                <input type="hidden" name="item" value="<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_iencu'];?>
" />
                <label for="file-<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_encu'];?>
-<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_iencu'];?>
"> 
                    <span title="Archivo adjunto" id="estado-file-<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_encu'];?>
-<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_iencu'];?>
" class="btn btn-default glyphicon glyphicon-open" style="margin:2px;"></span>
                    <input type="file" id="file-<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_encu'];?>
-<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_iencu'];?>
" name="archivo" class="btn btn-default" style="display: none;" value="Ver" onChange="ver(this);"/>                      
                    <input type="submit" id="btn-file-<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_encu'];?>
-<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_iencu'];?>
" class="btn btn-default glyphicon glyphicon-upload" value="Subir" style="display: none;"/>                                               
                </label>
                </form>
            <?php }?>
            </td>
            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_item')){?>
            <td><a href="#" data-toggle="modal" style="margin: 45%;" data-target="#modal_<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_iencu'];?>
"><i title="Editar" class="glyphicon glyphicon-edit"></i></a>
            <div class="modal fade" id="modal_<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_iencu'];?>
" role="dialog">
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
                               <input type="hidden" name="iditem" value="<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_iencu'];?>
" />                              
                               <div class="form-group">
                                 <label class="control-label">Ítem</label>
                                 <input type="text" name="item" value="<?php echo $_smarty_tpl->tpl_vars['ca']->value['Nom_iencu'];?>
" class="form-control" placeholder="Ítem" required=""/>
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
            <?php }?>         
            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_item')){?><td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuesta/index/deleteItemEncu/<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_Xencu'];?>
/<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_Xiencu'];?>
" onclick='return dc(this);'><i title="Eliminar" class="glyphicon glyphicon-trash"></i></a></td><?php }?>            
        </tr>        
    <?php } ?>
    
</table>
<?php }else{ ?>
    <br/>
    <p><i title="Info" class="glyphicon glyphicon-info-sign"></i> No ha agregado ítem a la encuesta.</p>
<?php }?>

 <br/>
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_item')){?>
 <p><a class="btn btn-default" href="#" data-toggle="modal" data-target="#modal_new">
                    <i title="Agregar nueva encuesta" class="glyphicon glyphicon-list-alt"></i> Nuevo ítem
    </a></p>
<?php }?> 
<br/>
 <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuesta/index"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
<?php }} ?>