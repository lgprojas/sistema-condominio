<?php /* Smarty version Smarty-3.1.11, created on 2018-05-21 01:08:03
         compiled from "C:\xampp\htdocs\covecino\modules\historial\views\observacion\ajax\pagAjax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88785b01ecec0a56f0-96699210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82570a94cd03bc0279d6a8ee05b20f38f590f1f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\historial\\views\\observacion\\ajax\\pagAjax.tpl',
      1 => 1526873721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88785b01ecec0a56f0-96699210',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b01ecec204972_09715902',
  'variables' => 
  array (
    'obs' => 0,
    'sadmin' => 0,
    'color' => 0,
    'datos' => 0,
    'root' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b01ecec204972_09715902')) {function content_5b01ecec204972_09715902($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['obs']->value)&&count($_smarty_tpl->tpl_vars['obs']->value)){?>
<table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA; text-align: center;">Listado observaciones condominio</th>
    </thead>
    <thead style="background: #E6E6FA;"> 
        <td style="font-weight:bold;text-align: center;">Fch. obs</td>
        <td style="font-weight:bold;text-align: center;">Tipo obs</td>
        <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?><td style="font-weight:bold;text-align: center;">Condominio</td><?php }?>
        <td style="font-weight:bold;text-align: center;">Edit.</td>
        <td style="font-weight:bold;text-align: center;">Elim.</td>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['obs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Fchi_obs'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_tobs'];?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?><td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cond'];?>
</td><?php }?>
        <td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
historial/observacion/editObs/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Cond_encrypt'];?>
"></a></td>
        <td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
historial/observacion/delObs/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Cond_encrypt'];?>
" onclick='return cb(this);'></a></td>   
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>El condominio no posee observaciones.</strong></p>
<?php }?> 

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion1']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php }} ?>