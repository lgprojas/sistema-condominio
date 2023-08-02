<?php /* Smarty version Smarty-3.1.11, created on 2015-06-07 21:15:37
         compiled from "C:\xampp\htdocs\vitritienda\modules\tienda\views\catalogo\detalle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132554d134c1ae9f76-83669215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '022a3468d0aa3747ee0a0688e3d39e3dc274eefa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitritienda\\modules\\tienda\\views\\catalogo\\detalle.tpl',
      1 => 1433704428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132554d134c1ae9f76-83669215',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_54d134c1bee002_15596621',
  'variables' => 
  array (
    'dprod' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
    'iprod' => 0,
    'datosimg' => 0,
    'color' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d134c1bee002_15596621')) {function content_54d134c1bee002_15596621($_smarty_tpl) {?><div class="container">
<h3>Detalle del producto</h3>

<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dprod']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    <h3><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_prod'];?>
</h3>
    <h4><?php echo $_smarty_tpl->tpl_vars['datos']->value['Desc_prod'];?>
</h4>
<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_eprod']==1){?>
<form action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tienda/carro/index/" method="post">
    <div>
        <input type="hidden" name="alcarro" value="1" />
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_prod'];?>
" />
        <input style="width: 33px;" type="number" name="cant" min="1" max="10" value="1" />
        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
        <input type="submit" class="btn btn-small btn-warning" name="enviar" value="Añadir a carro" />
    </div>
</form>
<?php }?>

    <hr>
<?php  $_smarty_tpl->tpl_vars['datosimg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datosimg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['iprod']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datosimg']->key => $_smarty_tpl->tpl_vars['datosimg']->value){
$_smarty_tpl->tpl_vars['datosimg']->_loop = true;
?>
    <a class="lb_one" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagestienda/originales/thumbs/thumb_l_<?php echo $_smarty_tpl->tpl_vars['datosimg']->value['Nom_img'];?>
">
    <div class="producto" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <div class="imagen_ext">
            <div class="imagen_inter">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagestienda/originales/thumbs/thumb_m_<?php echo $_smarty_tpl->tpl_vars['datosimg']->value['Nom_img'];?>
"/>             
            </div>
        </div>
            <div class="zoom">
                <i class="glyphicon glyphicon-zoom-in"> </i>
            </div>
    </div>
    </a>
<?php } ?>

</div><?php }} ?>