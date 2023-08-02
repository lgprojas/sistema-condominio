<?php /* Smarty version Smarty-3.1.11, created on 2016-02-14 01:56:19
         compiled from "C:\xampp\htdocs\munku\modules\lugar\views\catalogo\lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20805566c4787b6eb92-18431624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e928e0ac5885585b7ffe32736764412030cd304' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\lugar\\views\\catalogo\\lista.tpl',
      1 => 1455408939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20805566c4787b6eb92-18431624',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_566c47880701d0_88169084',
  'variables' => 
  array (
    '_datos' => 0,
    'lugar' => 0,
    'color' => 0,
    '_layoutParams' => 0,
    'datos' => 0,
    'ex' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566c47880701d0_88169084')) {function content_566c47880701d0_88169084($_smarty_tpl) {?><div class="container">
<h3>Lista de lugares</h3>
<br/>
<div class="slideshow" 
    data-cycle-fx=carousel
    data-cycle-timeout=2000
    data-cycle-carousel-visible=4
    >
    <img src="http://malsup.github.io/images/beach1.jpg">
    <img src="http://malsup.github.io/images/beach2.jpg">
    <img src="http://malsup.github.io/images/beach3.jpg">
    <img src="http://malsup.github.io/images/beach4.jpg">
    <img src="http://malsup.github.io/images/beach5.jpg">
    <img src="http://malsup.github.io/images/beach6.jpg">
    <img src="http://malsup.github.io/images/beach7.jpg">
    <img src="http://malsup.github.io/images/beach8.jpg">
    <img src="http://malsup.github.io/images/beach9.jpg">
</div>

<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['lugar']->value)&&count($_smarty_tpl->tpl_vars['lugar']->value)){?>
<div id="col-lg-12">
    
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lugar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>   
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <dl class="contenedorv" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <dt class="titulo">
        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lugar/catalogo/verDetalleLugar/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_lugar'];?>
">
            <strong>
                <?php echo $_smarty_tpl->tpl_vars['datos']->value['Tit_lugar'];?>

            </strong> (Ref. <?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_lugar'];?>
)
        </a>
        </dt>
        <?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Nom_logo'])&&count($_smarty_tpl->tpl_vars['datos']->value['Nom_logo'])){?>
            <dt class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/logoLugar/originales/thumbs/thumb_ms_<?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_logo'];?>
"/></dt>
        <?php }?>
        <dd>
            <span class="slogan"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Dir_lugar'];?>
 </span>
             Teléfono :
            <strong>  <?php echo $_smarty_tpl->tpl_vars['datos']->value['Fono_lugar'];?>
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
            <?php echo $_smarty_tpl->tpl_vars['datos']->value['Is_open'];?>

            <?php echo $_smarty_tpl->tpl_vars['datos']->value['uno'];?>

            <br/>
            <a title="Detalle" href="#"> Detalle </a>
        </dd>
    </dl>
<?php } ?>
</div>
<?php }else{ ?>
            <p><strong>No hay lugar aún!</strong></p>
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