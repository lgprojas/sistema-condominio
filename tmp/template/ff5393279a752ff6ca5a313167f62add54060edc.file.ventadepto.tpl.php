<?php /* Smarty version Smarty-3.1.11, created on 2015-08-22 18:06:04
         compiled from "C:\xampp\htdocs\vitricasas\modules\inmueble\views\catalogo\ventadepto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3071955cc0f8e4d6b05-23218097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff5393279a752ff6ca5a313167f62add54060edc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitricasas\\modules\\inmueble\\views\\catalogo\\ventadepto.tpl',
      1 => 1440259556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3071955cc0f8e4d6b05-23218097',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55cc0f8e5d7859_32571409',
  'variables' => 
  array (
    '_datos' => 0,
    'prod' => 0,
    'color' => 0,
    '_layoutParams' => 0,
    'datos' => 0,
    'ex' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cc0f8e5d7859_32571409')) {function content_55cc0f8e5d7859_32571409($_smarty_tpl) {?><div class="container">
<h3>Venta inmueble tipo Depto</h3>
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
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <dl class="contenedorv" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <dt class="titulo">
        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
inmueble/catalogo/verDetalleProd/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_in'];?>
">
            <strong>
                <?php echo $_smarty_tpl->tpl_vars['datos']->value['Tit_in'];?>

            </strong> (Ref. <?php echo $_smarty_tpl->tpl_vars['datos']->value['Ref_in'];?>
)
        </a>
        </dt>
        <?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Nom_img'])&&count($_smarty_tpl->tpl_vars['datos']->value['Nom_img'])){?>
            <dt class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagesInm/originales/thumbs/thumb_m_<?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_img'];?>
"/></dt>
        <?php }?>
        <dd>
            <span class="slogan"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_eslogan'];?>
 </span>
             Precio :
            <strong> $ <?php echo $_smarty_tpl->tpl_vars['datos']->value['Prec_in'];?>
 </strong>           
                <span class="extras">
                    <?php if (!empty($_smarty_tpl->tpl_vars['datos']->value['Extras'])){?>
                        <br>
                        <strong>Extras : </strong>
                        <?php  $_smarty_tpl->tpl_vars['ex'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ex']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datos']->value['Extras']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['ex']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['ex']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['ex']->key => $_smarty_tpl->tpl_vars['ex']->value){
$_smarty_tpl->tpl_vars['ex']->_loop = true;
 $_smarty_tpl->tpl_vars['ex']->iteration++;
 $_smarty_tpl->tpl_vars['ex']->last = $_smarty_tpl->tpl_vars['ex']->iteration === $_smarty_tpl->tpl_vars['ex']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['extras']['last'] = $_smarty_tpl->tpl_vars['ex']->last;
?>
                           <?php echo $_smarty_tpl->tpl_vars['ex']->value['Nom_extra'];?>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['extras']['last']){?><span>, </span><?php }else{ ?><span>.</span><?php }?>
                        <?php } ?>
                    <?php }?>
                </span>
            <br>
            <a title="Detalle" href="#"> Detalle </a>
        </dd>
    </dl>
<?php } ?>
</div>
<?php }else{ ?>
            <p><strong>No hay inmuebles a la venta!</strong></p>
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