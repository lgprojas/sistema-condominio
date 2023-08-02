<?php /* Smarty version Smarty-3.1.11, created on 2018-05-19 12:53:10
         compiled from "C:\xampp\htdocs\covecino\modules\historial\views\multa\ajax\pagAjax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:282825b00416dbe6472-60792493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cba1afc03dec17fe03bb02c46c94f1a911df1893' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\historial\\views\\multa\\ajax\\pagAjax.tpl',
      1 => 1526745112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282825b00416dbe6472-60792493',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b00416dd36943_51520519',
  'variables' => 
  array (
    'viv' => 0,
    'sadmin' => 0,
    'color' => 0,
    'datos' => 0,
    'root' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b00416dd36943_51520519')) {function content_5b00416dd36943_51520519($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['viv']->value)&&count($_smarty_tpl->tpl_vars['viv']->value)){?>
    <table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA; text-align: center;">Listado viviendas</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Id</td> 
        <td style="font-weight:bold;text-align: center;">C/T</td>
        <td style="font-weight:bold;text-align: center;">N°</td>
        <td style="font-weight:bold;text-align: center;">N° Est.</td>
        <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?><td style="font-weight:bold;text-align: center;">Condominio</td><?php }?>
        <td style="font-weight:bold;text-align: center;">Ver</td>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['viv']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_viv'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cb'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Num_viv'];?>
</td>
        <td style="text-align: center;"><?php echo str_pad($_smarty_tpl->tpl_vars['datos']->value['Id_esta'],2,'0',@STR_PAD_LEFT);?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?><td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cond'];?>
</td><?php }?>
        <td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-book" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
historial/multa/verMultas/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Cond_encrypt'];?>
"></a></td>
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay viviendas creadas.</strong></p>
<?php }?> 

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion1']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php }} ?>