<?php /* Smarty version Smarty-3.1.11, created on 2015-05-12 03:23:48
         compiled from "C:\xampp\htdocs\vitritienda\modules\tienda\views\pedido\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27880554b689858c386-96813718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e0e11311a7a5432512414873d8b7f0076df0aa0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitritienda\\modules\\tienda\\views\\pedido\\index.tpl',
      1 => 1431393806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27880554b689858c386-96813718',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_554b68986f5e08_13339439',
  'variables' => 
  array (
    '_datos' => 0,
    'mispedidos' => 0,
    'color' => 0,
    'datos' => 0,
    'level' => 0,
    '_layoutParams' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554b68986f5e08_13339439')) {function content_554b68986f5e08_13339439($_smarty_tpl) {?><div class="container">
<h3>Mi lista de pedidos activos</h3>

<br />
<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['mispedidos']->value)&&count($_smarty_tpl->tpl_vars['mispedidos']->value)){?>
    <table class="table table-bordered h6">
    <thead>
        <th colspan="13" style="background: #E6E6FA;">Lista de pedidos</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Cód..</td>
        <td style="font-weight:bold;text-align: center;">Fch.</td>      
        <td style="font-weight:bold;text-align: center;">Estado</td>      
        <td style="font-weight:bold;text-align: center;">Detalle</td>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mispedidos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
        <?php if ($_smarty_tpl->tpl_vars['level']->value==1){?> 
            <td style="text-align: center;"><a href='<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tienda/pedido/editEstPed/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_pedh'];?>
'><i class="glyphicon glyphicon-edit" title="Editar estado"></i> <?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_estp'];?>
</a></td>
        <?php }else{ ?>
            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_estp'];?>
</td> 
        <?php }?>
            <td style="text-align: center;"><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tienda/pedido/verDetallePed/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_pedh'];?>
"><i class="glyphicon glyphicon-list" title="Ver detalle"></i></a></td>
    </tr>
<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay pedidos registrados!</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  

</div><?php }} ?>