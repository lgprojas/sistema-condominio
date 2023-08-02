<?php /* Smarty version Smarty-3.1.11, created on 2015-05-08 02:09:17
         compiled from "C:\xampp\htdocs\vitritienda\modules\tienda\views\carro\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33935534755bbdbd59-72292899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcab341285a417e4117a919e0c72750ff10a2ba6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitritienda\\modules\\tienda\\views\\carro\\index.tpl',
      1 => 1431043708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33935534755bbdbd59-72292899',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5534755c095467_36702831',
  'variables' => 
  array (
    '_datos' => 0,
    'carro' => 0,
    'color' => 0,
    '_layoutParams' => 0,
    'datos' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5534755c095467_36702831')) {function content_5534755c095467_36702831($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\vitritienda\\libs\\smarty\\libs\\plugins\\function.math.php';
?><div class="container">
<h3>Productos en carro</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Desea quitar este producto de la lista?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function ep(formObj) {
                if(confirm("¿Desea enviar este pedido para ser procesado?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>


<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['carro']->value)&&count($_smarty_tpl->tpl_vars['carro']->value)){?>
    <table class="table table-bordered h6">
    <thead>
        <th colspan="13" style="background: #E6E6FA;">Listado productos</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Img</td>
        <td style="font-weight:bold;text-align: center;">Cód</td>      
        <td style="font-weight:bold;text-align: center;">Nom</td>      
        <td style="font-weight:bold;text-align: center;">Cant.</td>
        <td style="font-weight:bold;text-align: center;">Precio</td>
        <td style="font-weight:bold;text-align: center;">Subtotal</td>
        <td style="font-weight:bold;text-align: center;">Elim</td>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carro']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr class="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td style="text-align: center;"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagestienda/originales/thumbs/thumb_s_<?php echo $_smarty_tpl->tpl_vars['datos']->value['Image'];?>
"/></td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod'];?>
</td>     
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nombre'];?>
</td>  
        <td style="text-align: center;">
            <input type="number" min="1" max="50" name="cant" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Cant'];?>
" style="width: 40px;" 
            data-precio="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Precio'];?>
" 
            data-id="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id'];?>
" 
            class="cantidad" onKeypress="return valNum(event);"/>
        </td>  
        <td style="text-align: center;">$<?php echo $_smarty_tpl->tpl_vars['datos']->value['Precio'];?>
</td>
        <td class="producto" style="text-align: center;"><span class="subtotal-<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id'];?>
">$<?php echo smarty_function_math(array('equation'=>"x * y",'x'=>$_smarty_tpl->tpl_vars['datos']->value['Cant'],'y'=>$_smarty_tpl->tpl_vars['datos']->value['Precio']),$_smarty_tpl);?>
</span></td>
        <td style="text-align: center;"><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tienda/carro/deleteProdCarro/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id'];?>
" onclick='return cb(this);'><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/eliminar.png" width="15" height="15"/></a></td>    
    </tr>

<?php } ?>
</table>
<div>
    <p style="text-align: right;" id="total">Total: <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</p>
</div>
<div style="text-align: center;">
    <a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tienda/carro/carroToPedido/"  onclick='return ep(this);'><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Enviar pedido</a>
</div>
<?php }else{ ?>
    <br />
    <p><strong>El carro está vacio!</strong></p>
            
<?php }?> 
</form>

</div><?php }} ?>