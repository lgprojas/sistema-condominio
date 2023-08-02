<?php /* Smarty version Smarty-3.1.11, created on 2015-05-21 21:39:45
         compiled from "C:\xampp\htdocs\vitritienda\modules\tienda\views\pedido\detalle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1146355515680962592-16152956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f29d1788d02da55c4203ac8fe996341212f22b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitritienda\\modules\\tienda\\views\\pedido\\detalle.tpl',
      1 => 1432237178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1146355515680962592-16152956',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55515680a8ead4_34988908',
  'variables' => 
  array (
    '_datos' => 0,
    'dped' => 0,
    'color' => 0,
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55515680a8ead4_34988908')) {function content_55515680a8ead4_34988908($_smarty_tpl) {?><div class="container">
<h3>Detalle del pedido</h3>


<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['dped']->value)&&count($_smarty_tpl->tpl_vars['dped']->value)){?>
    <table class="table table-bordered h6">
    <thead>
        <th colspan="13" style="background: #E6E6FA;">Listado productos</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Img</td>
        <td style="font-weight:bold;text-align: center;">Cód</td>      
        <td style="font-weight:bold;text-align: center;">Nom</td>      
        <td style="font-weight:bold;text-align: center;">Cant</td>
        <td style="font-weight:bold;text-align: center;">Prec</td>
        <td style="font-weight:bold;text-align: center;">Stock</td>
        <td style="font-weight:bold;text-align: center;">Acción</td>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dped']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td style="text-align: center;"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagestienda/originales/thumbs/thumb_s_<?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_img'];?>
"/></td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_prod'];?>
</td>     
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_prod'];?>
</td>  
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Cant_prod'];?>
</td>  
        <td style="text-align: center;">$<?php echo $_smarty_tpl->tpl_vars['datos']->value['Preini_prod'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Stock_prod'];?>
</td>
        <td>            
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_eitemp']==1){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tienda/pedido/updateStock/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_dped'];?>
/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_pedh'];?>
" class="btn btn-small btn-warning" <?php if ($_smarty_tpl->tpl_vars['datos']->value['Stock']=='false'){?>disabled="disabled"<?php }?> >
                    <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> En espera
                </a>
            <?php }else{ ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tienda/pedido/updateStock/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_dped'];?>
/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_pedh'];?>
" class="btn btn-small btn-success">
                    <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> Procesado
                </a>
            <?php }?>
        </td>
    </tr>
<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>El pedido no posee productos!</strong></p>
<?php }?> 


</div><?php }} ?>