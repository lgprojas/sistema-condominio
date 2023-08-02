<?php /* Smarty version Smarty-3.1.11, created on 2017-04-25 16:47:26
         compiled from "C:\xampp\htdocs\munku\modules\lugar\views\catalogo\detalle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1338566dbb2b9003f4-73626345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49f87a74fcd955c4a2a00746101da2fa525289d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\lugar\\views\\catalogo\\detalle.tpl',
      1 => 1493153240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1338566dbb2b9003f4-73626345',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_566dbb2baabbf7_30938726',
  'variables' => 
  array (
    'lugar' => 0,
    'datos' => 0,
    'prodserv' => 0,
    '_layoutParams' => 0,
    'ps' => 0,
    'formaPago' => 0,
    'formaEntrega' => 0,
    'fp' => 0,
    'fe' => 0,
    'iproduno' => 0,
    'iprod' => 0,
    'ip' => 0,
    'codlpv' => 0,
    'refin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566dbb2baabbf7_30938726')) {function content_566dbb2baabbf7_30938726($_smarty_tpl) {?><div class="container">
<h3>Descripción del lugar</h3>
<br/>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lugar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    <h4><?php echo $_smarty_tpl->tpl_vars['datos']->value['Tit_lugar'];?>
</h4>
    <h5><?php echo $_smarty_tpl->tpl_vars['datos']->value['Dir_lugar'];?>
</h5>
    <h5 class="small">
    <?php if ($_smarty_tpl->tpl_vars['datos']->value['Nom_sec']){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_sec'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['datos']->value['Nom_ciu']){?>, <?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_ciu'];?>
<?php }?></h5>
<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['prodserv']->value!=0){?>
<hr class="">
<h4>Productos/ servicios</h4>
    <?php  $_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ps']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prodserv']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->key => $_smarty_tpl->tpl_vars['ps']->value){
$_smarty_tpl->tpl_vars['ps']->_loop = true;
?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/iconps/<?php echo $_smarty_tpl->tpl_vars['ps']->value['Nom_icops'];?>
.png" title="<?php echo $_smarty_tpl->tpl_vars['ps']->value['Nom_ps'];?>
"/>
    <?php } ?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['lugar']->value[0]['Fono_lugar']!=null||$_smarty_tpl->tpl_vars['lugar']->value[0]['Horario_lugar']!=null||$_smarty_tpl->tpl_vars['formaPago']->value[0]['Nom_fp']||$_smarty_tpl->tpl_vars['formaEntrega']->value[0]['Nom_fe']){?>
<hr class="">
<h4>Detalle</h4> 
<div class="col-md-12 small">   
<dl>
    <dd>
        <?php if ($_smarty_tpl->tpl_vars['lugar']->value[0]['Fono_lugar']!=null){?>Fono contacto: <?php echo $_smarty_tpl->tpl_vars['lugar']->value[0]['Fono_lugar'];?>
<?php }?>
    </dd>
    <dd>
        <?php if ($_smarty_tpl->tpl_vars['lugar']->value[0]['Horario_lugar']!=null){?>Horario: <?php echo $_smarty_tpl->tpl_vars['lugar']->value[0]['Horario_lugar'];?>
<?php }?>
    </dd>
</dl>
</div>
<?php if ($_smarty_tpl->tpl_vars['formaPago']->value[0]['Nom_fp']!=null){?>
    <ul>Formas de pago:</ul>
<div class="col-md-12 small">   
    <ul>
    <?php  $_smarty_tpl->tpl_vars['fp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formaPago']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fp']->key => $_smarty_tpl->tpl_vars['fp']->value){
$_smarty_tpl->tpl_vars['fp']->_loop = true;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['fp']->value['Nom_fp'];?>
</li>
    <?php } ?>
    </ul>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['formaEntrega']->value[0]['Nom_fe']!=null){?>
    <ul>Formas entregas:</ul>
<div class="col-md-12 small">   
    <ul>
    <?php  $_smarty_tpl->tpl_vars['fe'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fe']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formaEntrega']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fe']->key => $_smarty_tpl->tpl_vars['fe']->value){
$_smarty_tpl->tpl_vars['fe']->_loop = true;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['fe']->value['Nom_fe'];?>
</li>
    <?php } ?>
    </ul>
</div>
<?php }?>
<?php }?>
<?php if (count($_smarty_tpl->tpl_vars['iproduno']->value[0]['Nom_img'])){?>
<hr class="">
<h4>Imágenes lugar</h4> 
<dl class="images-detalle">
    <dt class="image-m">
        <a class="example-image-link" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagesLugar/originales/thumbs/thumb_l_<?php echo $_smarty_tpl->tpl_vars['iproduno']->value[0]['Nom_img'];?>
" data-lightbox="example-set" data-title="<?php echo $_smarty_tpl->tpl_vars['iproduno']->value[0]['Desc_img'];?>
">
            <img class="example-image" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagesLugar/originales/thumbs/thumb_m_<?php echo $_smarty_tpl->tpl_vars['iproduno']->value[0]['Nom_img'];?>
" alt=""/>
        </a>
    </dt>
    <br/>
    <dd class="image-ms">
        <?php  $_smarty_tpl->tpl_vars['ip'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ip']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['iprod']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ip']->key => $_smarty_tpl->tpl_vars['ip']->value){
$_smarty_tpl->tpl_vars['ip']->_loop = true;
?>
           <a class="example-image-link" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagesLugar/originales/thumbs/thumb_l_<?php echo $_smarty_tpl->tpl_vars['ip']->value['Nom_img'];?>
" data-lightbox="example-set" data-title="<?php echo $_smarty_tpl->tpl_vars['ip']->value['Desc_img'];?>
">
               <img class="example-image" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagesLugar/originales/thumbs/thumb_ms_<?php echo $_smarty_tpl->tpl_vars['ip']->value['Nom_img'];?>
" alt=""/>
           </a>
        <?php } ?>
    </dd>
</dl>
<?php }?>
<hr class="clear">
<br/>
<?php if ($_smarty_tpl->tpl_vars['codlpv']->value!=$_smarty_tpl->tpl_vars['lugar']->value[0]['Cod_subcat']){?>
<h3>¿Quiere más información?</h3>
<div class="col-md-4">
<form name="form1" class="" method="post" action="">
    <input type="hidden" value="1" name="enviar" />

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

</form>
<?php }?>
<br/>
<p><a class="btn btn-default" href="javascript:void(0);" onclick="history.go(-1);"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div>
<?php }} ?>