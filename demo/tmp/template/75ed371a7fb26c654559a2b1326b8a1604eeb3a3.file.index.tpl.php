<?php /* Smarty version Smarty-3.1.11, created on 2014-05-29 22:41:16
         compiled from "C:\xampp\htdocs\scp_vm\modules\ver\views\stper\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164835387906713a562-14319169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75ed371a7fb26c654559a2b1326b8a1604eeb3a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\scp_vm\\modules\\ver\\views\\stper\\index.tpl',
      1 => 1401396070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164835387906713a562-14319169',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5387906723bc13_23894771',
  'variables' => 
  array (
    '_datos' => 0,
    'perif' => 0,
    'color' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5387906723bc13_23894771')) {function content_5387906723bc13_23894771($_smarty_tpl) {?><div id="content">
<h3>Periféricos</h3>

<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['perif']->value)&&count($_smarty_tpl->tpl_vars['perif']->value)){?>
    <table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA;">Listado periféricos</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Id</td>
        <td style="font-weight:bold;text-align: center;">Nombre</td>        
        <td style="font-weight:bold;text-align: center;">Stock</td>        
        <td style="font-weight:bold;text-align: center;">Editar</td>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['perif']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_prod'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_prod'];?>
</td>
        <td style="font-weight:bold;text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Stock_prod'];?>
</td>
        <td style="text-align: center;"><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ver/stper/editStock/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_prod'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/ver.gif" width="10" height="12"/></a></td>
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay periféricos creados</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  

</div><?php }} ?>