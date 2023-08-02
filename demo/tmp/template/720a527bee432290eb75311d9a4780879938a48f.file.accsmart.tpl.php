<?php /* Smarty version Smarty-3.1.11, created on 2015-06-07 21:08:57
         compiled from "C:\xampp\htdocs\vitritienda\modules\tienda\views\catalogo\accsmart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1927854c7ebe9da1453-00907133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '720a527bee432290eb75311d9a4780879938a48f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitritienda\\modules\\tienda\\views\\catalogo\\accsmart.tpl',
      1 => 1433704130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1927854c7ebe9da1453-00907133',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_54c7ebe9e61c92_42028100',
  'variables' => 
  array (
    '_datos' => 0,
    'prod' => 0,
    'color' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c7ebe9e61c92_42028100')) {function content_54c7ebe9e61c92_42028100($_smarty_tpl) {?><div class="container">
<h3>Accesorios smartphones</h3>
<br/>

<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['prod']->value)&&count($_smarty_tpl->tpl_vars['prod']->value)){?>
<div id="col-lg-12">
    
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prod']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>   
    
   <div class="producto" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
       <div class="cod">Cod:<?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_prod'];?>
</div>
       <div class="imagen_ext">
          <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tienda/catalogo/verDetalleProd/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_prod'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_prod'];?>
">    
            <div class="description"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_prod'];?>
</div>
          </a>
            <p class="texto"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Desc_prod'];?>
</p> 
            <div class="imagen_inter">
                <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagestienda/originales/thumbs/thumb_m_<?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_img'];?>
"/>
            </div>
        </div>           
            <div class="titleprice">
                <div class="textohead">Precio</div>
                <div class="price">$<?php echo $_smarty_tpl->tpl_vars['datos']->value['Preini_prod'];?>
</div>  
                <div id="estado">
                    <input type="hidden" id="id" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_prod'];?>
"/>
                    <div>
                        <a style="width: auto;font-size: 10px; height: 25px;" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tienda/catalogo/verDetalleProd/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_prod'];?>
" class="btn btn-small btn-warning">
                            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Ver
                        </a>          
                    </div>
                </div>
            </div>
    </div>

<?php } ?>
</div>
<?php }else{ ?>
            <p><strong>No hay productos registrados!</strong></p>
<?php }?> 
</form>
<div class="row">
    <div class="col-md-12"> </div>
</div>
<div class="paginacion col-lg-12">
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  
</div>
</div><?php }} ?>