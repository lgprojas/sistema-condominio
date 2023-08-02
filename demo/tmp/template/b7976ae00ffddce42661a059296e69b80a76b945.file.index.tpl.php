<?php /* Smarty version Smarty-3.1.11, created on 2014-06-26 16:23:41
         compiled from "C:\xampp\htdocs\scp_vm\modules\ver\views\pen\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:301695387a2072b2ac4-12782682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7976ae00ffddce42661a059296e69b80a76b945' => 
    array (
      0 => 'C:\\xampp\\htdocs\\scp_vm\\modules\\ver\\views\\pen\\index.tpl',
      1 => 1403792612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301695387a2072b2ac4-12782682',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5387a2073bae77_29696523',
  'variables' => 
  array (
    '_datos' => 0,
    'pen' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5387a2073bae77_29696523')) {function content_5387a2073bae77_29696523($_smarty_tpl) {?><div id="content">
<h3>Periféricos reservados para préstamo</h3>

<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['pen']->value)&&count($_smarty_tpl->tpl_vars['pen']->value)){?>
    <table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA;text-align: center;">Listado reservas</th>
        </thead>
    <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Usu.</td>
        <td style="font-weight:bold;text-align: center;">Perif.</td>        
        <td style="font-weight:bold;text-align: center;">Fch. reg.</td>
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
            <p><strong>No hay periféricos pendientes</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  
<p> </p>
<br/>

</div><?php }} ?>