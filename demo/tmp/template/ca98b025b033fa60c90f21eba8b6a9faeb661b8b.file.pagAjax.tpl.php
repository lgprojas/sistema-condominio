<?php /* Smarty version Smarty-3.1.11, created on 2018-05-16 13:50:04
         compiled from "C:\xampp\htdocs\covecino\modules\info\views\index\ajax\pagAjax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:234975acc289a25b120-70118402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca98b025b033fa60c90f21eba8b6a9faeb661b8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\info\\views\\index\\ajax\\pagAjax.tpl',
      1 => 1526489392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234975acc289a25b120-70118402',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5acc289a340d25_01410248',
  'variables' => 
  array (
    'info' => 0,
    'sadmin' => 0,
    '_acl' => 0,
    'color' => 0,
    'datos' => 0,
    'root' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acc289a340d25_01410248')) {function content_5acc289a340d25_01410248($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['info']->value)&&count($_smarty_tpl->tpl_vars['info']->value)){?>
    <table class="table table-bordered small">
    <thead>
        <th colspan="9" style="background: #E6E6FA;text-align: center;">Listado Informativo</th>
    </thead>
    <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Nombre</td>        
        <td style="font-weight:bold;text-align: center;">Fch. publicación</td> 
        <td style="font-weight:bold;text-align: center;">Fch. cierre</td> 
        <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?><td style="font-weight:bold;text-align: center;">Condominio</td><?php }?>
        <td style="font-weight:bold;text-align: center;">Ver</td>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_info')){?><td style="font-weight:bold;text-align: center;">Edit.</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_info')){?><td style="font-weight:bold;text-align: center;">Elim.</td><?php }?>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_info'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Fch_cinfo'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Fch_tinfo'];?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?><td style="font-weight:bold;text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cond'];?>
</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('ver_info')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-search" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
info/index/verInfo/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"></a></td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_info')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
info/index/editInfo/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"></a></td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_info')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
info/index/delInfo/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
" onclick='return cb(this);'></a></td><?php }?>    
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay Informativos registrados</strong></p>
<?php }?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion1']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php }} ?>