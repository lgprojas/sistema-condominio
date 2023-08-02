<?php /* Smarty version Smarty-3.1.11, created on 2018-05-15 21:13:38
         compiled from "C:\xampp\htdocs\covecino\modules\encuesta\views\index\ajax\pagAjax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47295afb77b2a34a66-77450996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb8b522d028667d43bc5b6291a4f5b990b5d1fbd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\encuesta\\views\\index\\ajax\\pagAjax.tpl',
      1 => 1526427908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47295afb77b2a34a66-77450996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'encuestas' => 0,
    '_acl' => 0,
    'ca' => 0,
    'root' => 0,
    'ifcond' => 0,
    'cond' => 0,
    'co' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5afb77b2b635a5_37181582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afb77b2b635a5_37181582')) {function content_5afb77b2b635a5_37181582($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\covecino\\libs\\smarty\\libs\\plugins\\modifier.date_format.php';
?><?php if (isset($_smarty_tpl->tpl_vars['encuestas']->value)&&count($_smarty_tpl->tpl_vars['encuestas']->value)){?>
<table class="table table-bordered">
    <thead style="background: #E6E6FA;">
        <th style="text-align: center;">ID</th>
        <th style="text-align: center;">Pregunta</th>
        <th style="text-align: center;">Fch inicio</th>
        <th style="text-align: center;">Fch termino</th>
        <th style="text-align: center;">Condominio</th>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('edit_est_encu')){?><th style="text-align: center;">Est</th><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('ver_items')){?><th style="text-align: center;">Opc.</th><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_encu')){?><th style="text-align: center;">Edit</th><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('ver_votos_encu')){?><th style="text-align: center;">Votos</th><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_encu')){?><th style="text-align: center;">Elim</th><?php }?>
    </thead>
    
    <?php  $_smarty_tpl->tpl_vars['ca'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ca']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['encuestas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ca']->key => $_smarty_tpl->tpl_vars['ca']->value){
$_smarty_tpl->tpl_vars['ca']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_encu'];?>
</td>
            <td><?php echo substr($_smarty_tpl->tpl_vars['ca']->value['Nom_encu'],0,30);?>
...</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ca']->value['Fchi_encu'],"%d-%m-%Y");?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ca']->value['Fcht_encu'],"%d-%m-%Y");?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['ca']->value['Nom_cond'];?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('edit_est_encu')){?>
            <td style="text-align: center;">
            <?php if ($_smarty_tpl->tpl_vars['ca']->value['Id_estencu']==1){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
encuesta/index/editEstEncu/<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_encrypt'];?>
" onclick='return en(this);'>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
public/img/all/estrella_cpromo.png" width="15" height="15" data-toggle="tooltip" data-placement="top" title="Activada/desactivada para ser respondida."/>
                </a>
            <?php }else{ ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
encuesta/index/editEstEncu/<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_encrypt'];?>
" onclick='return en(this);'>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
public/img/all/estrella_spromo.png" width="15" height="15" data-toggle="tooltip" data-placement="top" title="Activada/desactivada para ser respondida."/> 
                </a>
            <?php }?>
            </td>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('ver_items')){?><td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
encuesta/index/addItems/<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_encrypt'];?>
"><i data-toggle="tooltip" data-placement="top" title="Los ítems u opciones que tendrá la encuesta para ser respondida." class="glyphicon glyphicon-list-alt"></i></a></td><?php }?>                       
            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_encu')){?><td><a href="#" data-toggle="modal" style="margin: 30%;" data-target="#modal_<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_encu'];?>
"><i title="Editar" class="glyphicon glyphicon-edit"></i></a>
            <div class="modal fade" id="modal_<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_encu'];?>
" role="dialog">
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
                               <input type="hidden" name="idencu" value="<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_encu'];?>
" />
                               <?php if ($_smarty_tpl->tpl_vars['ifcond']->value!=1){?>
                                   <input type="hidden" name="cond" value="<?php echo $_smarty_tpl->tpl_vars['cond']->value;?>
" />
                               <?php }else{ ?>
                                <div class="form-group">
                                 <label class="control-label">Condominio</label>
                                 <select class="form-control" name="cond" id="cond">
                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_cond'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=0){?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_cond'];?>
"><?php echo $_smarty_tpl->tpl_vars['ca']->value['Nom_cond'];?>
</option>
                                    <?php  $_smarty_tpl->tpl_vars['co'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['co']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cond']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['co']->key => $_smarty_tpl->tpl_vars['co']->value){
$_smarty_tpl->tpl_vars['co']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['co']->value['Id_cond']!=$_smarty_tpl->tpl_vars['ca']->value['Id_cond']){?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['co']->value['Id_cond'];?>
"><?php echo $_smarty_tpl->tpl_vars['co']->value['Nom_cond'];?>
</option>
                                        <?php }?>
                                    <?php } ?>
                                <?php }else{ ?>
                                    <option value="">-Seleccione-</option>
                                    <?php  $_smarty_tpl->tpl_vars['co'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['co']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cond']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['co']->key => $_smarty_tpl->tpl_vars['co']->value){
$_smarty_tpl->tpl_vars['co']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['co']->value['Id_cond'];?>
"><?php echo $_smarty_tpl->tpl_vars['co']->value['Nom_cond'];?>
</option>
                                    <?php } ?>
                                <?php }?>
                                </select> 
                                </div> 
                               <?php }?>
                               <div class="form-group">
                                 <label class="control-label">Pregunta</label>
                                 <input type="text" name="encuesta" value="<?php echo $_smarty_tpl->tpl_vars['ca']->value['Nom_encu'];?>
" class="form-control" placeholder="Pregunta" required=""/>
                               </div>
                               <div class="form-group">
                                 <label class="control-label">Fch termino</label>
                                 <input type="text" name="fcht" class="datepicker2 form-control" value="<?php echo (($tmp = @smarty_modifier_date_format($_smarty_tpl->tpl_vars['ca']->value['Fcht_encu'],"%d-%m-%Y"))===null||$tmp==='' ? "00-00-0000" : $tmp);?>
" style="width: 100px;" placeholder="00-00-0000" class="form-control" readonly="readonly" required=""/>
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
            </td><?php }?>       
            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('ver_votos_encu')){?><td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
encuesta/index/estVotaEncu/<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_encrypt'];?>
/<?php echo $_smarty_tpl->tpl_vars['ca']->value['Cond_encrypt'];?>
" ><i data-toggle="tooltip" data-placement="top" title="Ver votación de la encuesta." class="glyphicon glyphicon-stats"></i></a></td><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_encu')){?><td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
encuesta/index/deleteEncu/<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_encrypt'];?>
" onclick='return dc(this);'><i title="Eliminar" class="glyphicon glyphicon-trash"></i></a></td><?php }?>            
        </tr>        
    <?php } ?>
    
</table>
<?php }else{ ?>
    <br/>
    <p><i title="Info" class="glyphicon glyphicon-info-sign"></i> No ha agregado encuestas.</p>
<?php }?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion1']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php }} ?>