<?php /* Smarty version Smarty-3.1.11, created on 2015-05-12 03:36:05
         compiled from "C:\xampp\htdocs\vitritienda\modules\tienda\views\pedido\histp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4950554c43e05f57f5-01840005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59d598ba1a5850f6d09f9af66ec65621eabd8585' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitritienda\\modules\\tienda\\views\\pedido\\histp.tpl',
      1 => 1431394541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4950554c43e05f57f5-01840005',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_554c43e06fd628_16723235',
  'variables' => 
  array (
    '_datos' => 0,
    'histp' => 0,
    'color' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554c43e06fd628_16723235')) {function content_554c43e06fd628_16723235($_smarty_tpl) {?><div class="container">
<h3>Mi lista de pedidos procesados</h3>

<br />
<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['histp']->value)&&count($_smarty_tpl->tpl_vars['histp']->value)){?>
    <table class="table table-bordered h6">
    <thead>
        <th colspan="13" style="background: #E6E6FA;">Historial de pedidos</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Cód..</td>
        <td style="font-weight:bold;text-align: center;">Fch.</td>      
        <td style="font-weight:bold;text-align: center;">Estado</td>      
        <td style="font-weight:bold;text-align: center;">Detalle</td>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['histp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_pedh'];?>
</td>     
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Fch_pedh'];?>
</td>  
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_estp'];?>
</td>  
        <td style="text-align: center;"><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tienda/pedido/verDetallePed/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_pedh'];?>
"><i class="glyphicon glyphicon-list" title="Ver detalle"></i></a></td>
    </tr>
<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay pedidos procesados!</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  

</div><?php }} ?>