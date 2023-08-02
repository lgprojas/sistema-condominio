<?php /* Smarty version Smarty-3.1.11, created on 2015-08-22 16:32:07
         compiled from "C:\xampp\htdocs\vitricasas\modules\inmueble\views\catalogo\detalle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3024555d0bf454f75d3-07279648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9785de294a5a95168fa41a94a48b777083a74f60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitricasas\\modules\\inmueble\\views\\catalogo\\detalle.tpl',
      1 => 1440253920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3024555d0bf454f75d3-07279648',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55d0bf4559b004_81760592',
  'variables' => 
  array (
    'prod' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
    'iprod' => 0,
    'extras' => 0,
    'ex' => 0,
    'refin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d0bf4559b004_81760592')) {function content_55d0bf4559b004_81760592($_smarty_tpl) {?><div class="container">
<h3>Detalle del inmueble</h3>

<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prod']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    <h4><?php echo $_smarty_tpl->tpl_vars['datos']->value['Tit_in'];?>
</h4>
    <h5><?php echo $_smarty_tpl->tpl_vars['datos']->value['Dir_in'];?>
</h5>
    <h5 class="small"><?php if ($_smarty_tpl->tpl_vars['datos']->value['Nom_pob']){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_pob'];?>
<?php }?>
    <?php if ($_smarty_tpl->tpl_vars['datos']->value['Nom_sec']){?>-<?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_sec'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['datos']->value['Nom_ciu']){?>, <?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_ciu'];?>
<?php }?></h5>
<?php } ?>

<hr>
    <dl class="images-detalle">
        <dt class="image-m">
            <a class="lb_one" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagesInm/originales/thumbs/thumb_l_<?php echo $_smarty_tpl->tpl_vars['iprod']->value[0]['Nom_img'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagesInm/originales/thumbs/thumb_m_<?php echo $_smarty_tpl->tpl_vars['iprod']->value[0]['Nom_img'];?>
"/>
            </a>
        </dt>
        <dd class="image-ms">
            <a class="lb_one" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagesInm/originales/thumbs/thumb_l_<?php echo $_smarty_tpl->tpl_vars['iprod']->value[1]['Nom_img'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagesInm/originales/thumbs/thumb_ms_<?php echo $_smarty_tpl->tpl_vars['iprod']->value[1]['Nom_img'];?>
"/>
            </a>
            <a class="lb_one" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagesInm/originales/thumbs/thumb_l_<?php echo $_smarty_tpl->tpl_vars['iprod']->value[2]['Nom_img'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagesInm/originales/thumbs/thumb_ms_<?php echo $_smarty_tpl->tpl_vars['iprod']->value[2]['Nom_img'];?>
"/>
            </a>
        </dd>
    </dl> 
<br/>            
<hr class="clear">
<h4>Información financiera</h4> 
<div class="col-md-12 small">   
    <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prod']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
        <dl>
            <dt></dt>
            <dd>
                <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_ttran']==1){?>
                    <label>Valor venta: $ <?php echo $_smarty_tpl->tpl_vars['datos']->value['Prec_in'];?>
</label>
                <?php }else{ ?>
                     <label>Valor arriendo: $ <?php echo $_smarty_tpl->tpl_vars['datos']->value['Prec_in'];?>
 /mes</label>
                <?php }?>
            </dd>
            <dd>
                Carga: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Carg_in'];?>

            </dd>
            <dd>
                Impuesto: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Imp_in'];?>

            </dd>
        </dl>
    <?php } ?>
</div>
<hr class="">
<h4>Detalle</h4> 
<div class="col-md-12 small">   
    <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prod']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
        <dl>
            <dd>
                Estado inmueble: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_ein'];?>

            </dd>
            <dd>
                N° habitaciones: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Nhab_in'];?>

            </dd>
            <dd>
                N° dormitorios: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Ndor_in'];?>

            </dd>
            <dd>
                N° baños: <?php echo $_smarty_tpl->tpl_vars['datos']->value['Nba_in'];?>

            </dd>
            <dt>
                <br/>Nota:
            </dt>
            <dd>
                <?php echo $_smarty_tpl->tpl_vars['datos']->value['Desc_in'];?>

            </dd>
        </dl>
    <?php } ?>
</div>
<hr class="">
<h4>Extras</h4> 
<div class="col-md-12 small">  
    <ul>
        <?php  $_smarty_tpl->tpl_vars['ex'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ex']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['extras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ex']->key => $_smarty_tpl->tpl_vars['ex']->value){
$_smarty_tpl->tpl_vars['ex']->_loop = true;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['ex']->value['Nom_extra'];?>
</li>
        <?php } ?>
    </ul>
    <br/>
</div>
<br/>
<h3>¿Quiere más información?</h3>
<form name="form1" class="" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Nombre: </label><input type="text" name="nom" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nom'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese nombre" class="form-control"/>        
        </div>
        <div class="form-group">
            <label class="control-label">Correo electrónico: </label><input type="text" name="ema" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['ema'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese email" class="form-control"/>      
        </div>    
        <div class="form-group">
            <label class="control-label">Teléfono: </label><input type="text" name="fono" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['fono'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese fono" class="form-control"/>       
        </div>   
        <div class="form-group">
            <label class="control-label">Asunto: </label><input type="text" name="ref" value="Ref: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['ref'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['refin']->value : $tmp);?>
" placeholder="Ingrese Ref." class="form-control"/>       
        </div> 
        <div class="form-group">
            <label class="control-label">Mensaje: </label>
            <textarea name="mens" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['mens'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="su mensaje..." class="form-control"></textarea>
        </div> 
        <div class="form-group">            
            <input class="btn btn-small btn-primary" type="submit" value="Enviar" />
        </div>
    </div>
</form>
</div><?php }} ?>