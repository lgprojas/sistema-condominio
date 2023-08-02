<?php /* Smarty version Smarty-3.1.11, created on 2014-05-29 23:32:01
         compiled from "C:\xampp\htdocs\scp_vm\modules\ver\views\his\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105455387a75127bdf7-22503137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24957661b00cfa4f0a2af2602bd6313c4a04b8b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\scp_vm\\modules\\ver\\views\\his\\index.tpl',
      1 => 1401399087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105455387a75127bdf7-22503137',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_datos' => 0,
    'pen' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5387a75139ee78_54755933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5387a75139ee78_54755933')) {function content_5387a75139ee78_54755933($_smarty_tpl) {?><div id="content">
<h3>Historial de préstamos</h3>

<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['pen']->value)&&count($_smarty_tpl->tpl_vars['pen']->value)){?>
    <table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA;text-align: center;">Listado historico de movimientos</th>
        </thead>
    <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Solicitante</td>
        <td style="font-weight:bold;text-align: center;">Periférico</td>        
        <td style="font-weight:bold;text-align: center;">Fch. registro</td>
        <td style="font-weight:bold;text-align: center;">Fch. reserva</td>
        <td style="font-weight:bold;text-align: center;">Estado</td>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pen']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_usu'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_prod'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Fch_sreserva'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Fch_reserva'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_estp'];?>
</td>
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay periféricos entregados o liberados</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  
<p> </p>
<br/>

</div><?php }} ?>