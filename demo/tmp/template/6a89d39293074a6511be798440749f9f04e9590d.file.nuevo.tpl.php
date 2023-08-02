<?php /* Smarty version Smarty-3.1.11, created on 2017-05-27 23:44:46
         compiled from "C:\xampp\htdocs\munku\modules\lugar\views\administrar\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39365670ebe5d668b1-14463569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a89d39293074a6511be798440749f9f04e9590d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\lugar\\views\\administrar\\nuevo.tpl',
      1 => 1495299896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39365670ebe5d668b1-14463569',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5670ebe60dbe17_86587627',
  'variables' => 
  array (
    'datos' => 0,
    'position' => 0,
    'cat' => 0,
    'ca' => 0,
    'ciu' => 0,
    'c' => 0,
    'fpago' => 0,
    'fp' => 0,
    'fentrega' => 0,
    'fe' => 0,
    'eavi' => 0,
    'ea' => 0,
    '_layoutParams' => 0,
    'idciu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5670ebe60dbe17_86587627')) {function content_5670ebe60dbe17_86587627($_smarty_tpl) {?><div class="container">
<h3>Nuevo lugar</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear este nuevo lugar?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
    
    <script type="text/javascript">
    function initMap() {
          var map = new google.maps.Map(document.getElementById('mapa'), {
            zoom: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['zoom'])===null||$tmp==='' ? "14" : $tmp);?>
, 
            center: new google.maps.LatLng(<?php echo (($tmp = @$_smarty_tpl->tpl_vars['position']->value['Lat_ciu'])===null||$tmp==='' ? "-29.90273501712325" : $tmp);?>
, <?php echo (($tmp = @$_smarty_tpl->tpl_vars['position']->value['Lon_ciu'])===null||$tmp==='' ? "-71.25202417373657" : $tmp);?>
), 
            mapTypeId: google.maps.MapTypeId.ROADMAP
          });
          
        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: new google.maps.LatLng(<?php echo (($tmp = @$_smarty_tpl->tpl_vars['position']->value['Lat_ciu'])===null||$tmp==='' ? "-29.90273501712325" : $tmp);?>
, <?php echo (($tmp = @$_smarty_tpl->tpl_vars['position']->value['Lon_ciu'])===null||$tmp==='' ? "-71.25202417373657" : $tmp);?>
)
        });
        
        marker.addListener('click', toggleBounce);
        marker.addListener('dragend', function(event){
            document.getElementById("lat").value = this.getPosition().lat();
            document.getElementById("lon").value = this.getPosition().lng();
        });
        
        function toggleBounce(){
        if (marker.getAnimation() !== null){
            marker.setAnimation(null);
        }else{
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }
    }
    window.onload = initMap;
    </script>
    <style type="text/css">
        .google-maps {
            position: relative;
            padding-bottom: 75%; 
            height: 0;
            overflow: hidden;
        }
        .google-maps .mapax {
            position: absolute;
            top: 0;
            left: 0;
            width: 100% !important;
            height: 100% !important;
        }
    </style>

<br/>
<form name="form1" enctype="multipart/form-data" method="post">
    <input type="hidden" name="guardar" value="1" />
    <input type="hidden" name="zoom" value="18" />
<fieldset>
<legend>Descripción lugar</legend>
<div class="form-horizontal well col-lg-6 small">
    <label class="control-label">Ref: </label><input type="text" name="ref" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['ref'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese código único del lugar" class="form-control input-sm"/>
    <label class="control-label">Título: </label><input type="text" name="tit" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['tit'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese título del lugar" class="form-control input-sm"/>
        <label class="control-label">Categoría: </label>
        <select name="cat" id="cat" class="form-control input-sm">
            <option value="">-Seleccione categoría-</option>
            <?php  $_smarty_tpl->tpl_vars['ca'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ca']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ca']->key => $_smarty_tpl->tpl_vars['ca']->value){
$_smarty_tpl->tpl_vars['ca']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['ca']->value['Nom_cat'];?>
</option>
            <?php } ?>
        </select>
        <label class="control-label">Subcategoría: </label>
        <select name="scat" id="scat" class="form-control input-sm">
            <option value="">--</option>
        </select>
</div>
</fieldset>
<fieldset>
    <legend>Localización</legend>
    <div class="form-horizontal well col-lg-6 small">
        <label class="control-label">Dirección: </label><input type="text" name="dir" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['dir'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese dirección del lugar" class="form-control input-sm"/>
        <label class="control-label">Ciudad: </label>
        <select name="ciu" id="ciu" class="form-control input-sm">
            <option value="">-Seleccione ciudad-</option>
            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ciu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_ciu'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_ciu'];?>
</option>
            <?php } ?>
        </select>
        <label class="control-label">Sector: </label>
        <select name="sec" id="sec" class="form-control input-sm">
            <option value="">--</option>
        </select>
        <br/>
        <div id="mapa" class="mapax" style="width: 100%;height: 500px;"></div>
        <label class="control-label">Latitud: </label><input type="text" name="lat" id="lat" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['lat'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Latitud" class="form-control input-sm"/>
        <label class="control-label">Longitud: </label><input type="text" name="lon" id="lon" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['lon'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Longitud" class="form-control input-sm"/>
    </div>
</fieldset>
<fieldset>
    <legend>Información de contacto</legend>
    <div class="form-horizontal well col-lg-6 small">
        <div class="form-horizontal well col-lg-4">
        <label class="control-label">Fono: </label><input type="text" name="fono" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['fono'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Fono" class="form-control input-sm"/>
        </div>
        <div class="form-horizontal well col-lg-8">
        <label class="control-label">Horario: </label><input type="text" name="horario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['horario'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Horario" class="form-control input-sm"/>
        <label class="control-label">URL Sitio: </label><input type="text" name="url" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['url'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="URL" class="form-control input-sm"/>    
        </div>
    </div>
</fieldset>
<fieldset>
    <legend>Detalle adicional</legend>
    <div class="form-horizontal well col-lg-6 small">       
        <div class="col-lg-4">
            <label class="control-label">Forma de pago:</label>
            <div>   
                    <?php  $_smarty_tpl->tpl_vars['fp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fpago']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fp']->key => $_smarty_tpl->tpl_vars['fp']->value){
$_smarty_tpl->tpl_vars['fp']->_loop = true;
?>
                        <div class="extra"><input type="checkbox" name="fpago[]" value="<?php echo $_smarty_tpl->tpl_vars['fp']->value['Id_fp'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['fp']->value['Nom_fp'];?>
</div>           
                    <?php } ?>
            </div>
            <label class="control-label">Forma de entrega:</label>
            <div>   
                    <?php  $_smarty_tpl->tpl_vars['fe'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fe']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fentrega']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fe']->key => $_smarty_tpl->tpl_vars['fe']->value){
$_smarty_tpl->tpl_vars['fe']->_loop = true;
?>
                        <div class="extra"><input type="checkbox" name="fentrega[]" value="<?php echo $_smarty_tpl->tpl_vars['fe']->value['Id_fe'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['fe']->value['Nom_fe'];?>
</div>           
                    <?php } ?>
            </div>
        </div>    
    </div>
</fieldset>
<fieldset>
    <legend>Información publicación</legend>
    <div class="form-horizontal well col-lg-6 small"> 
        <label class="control-label">Estado publicación:</label>
            <select name="eavi" id="eavi" class="form-control input-sm">
                <?php  $_smarty_tpl->tpl_vars['ea'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ea']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eavi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ea']->key => $_smarty_tpl->tpl_vars['ea']->value){
$_smarty_tpl->tpl_vars['ea']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['ea']->value['Id_eavi'];?>
"><?php echo $_smarty_tpl->tpl_vars['ea']->value['Nom_eavi'];?>
</option>
                <?php } ?>
            </select>
                <label class="control-label">Fch. creación: </label><input data-role="date" data-inline="true" id="datepicker1" name="fchc" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['fchc'])===null||$tmp==='' ? '' : $tmp);?>
" readonly="readonly" style="width: 100px;margin: 15px;" placeholder="00-00-0000" class="form-control input-sm"/>        
                <label class="control-label">Fch. finalización: </label><input data-role="date" data-inline="true" id="datepicker2" name="fchf" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['fchf'])===null||$tmp==='' ? '' : $tmp);?>
" readonly="readonly" style="width: 100px;margin: 15px;" placeholder="00-00-0000" class="form-control input-sm"/>    
    </div>
</fieldset>   
<fieldset>
<legend>Logo lugar</legend>
<div class="form-horizontal well">
    <input type="file" name="logo[]"/>
</div>
</fieldset> 
<fieldset>
<legend>Imágenes lugar</legend>
<div class="form-horizontal well col-lg-4">
    <label class="control-label"><input type="file" name="image[]"/></label>
        <input type="text" name="uno" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['uno'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Texto primera imagen" class="form-control input-sm"/>
    <label class="control-label"><input type="file" name="image[]"/></label>
        <input type="text" name="dos" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['dos'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Texto segunda imagen" class="form-control input-sm"/>
    <label class="control-label"><input type="file" name="image[]"/></label>
        <input type="text" name="tres" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['tres'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Texto tercera imagen" class="form-control input-sm"/>
</div>
</fieldset>   
    <input id="newprod" class="btn btn-small btn-primary" type="submit" value="Guardar" onclick='return cb(this);'/>
</form>
<br/>
<p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lugar/administrar/index/<?php echo $_smarty_tpl->tpl_vars['idciu']->value;?>
"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDAuvq9vsoRNGXyiqmkWQfxzUxfaoHaa6s" async defer></script>
    <?php }} ?>