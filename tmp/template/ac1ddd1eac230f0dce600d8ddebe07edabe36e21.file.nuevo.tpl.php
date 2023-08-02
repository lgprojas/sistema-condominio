<?php /* Smarty version Smarty-3.1.11, created on 2017-05-19 12:19:03
         compiled from "C:\xampp\htdocs\munku\modules\ref\views\ciu\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2884758ed17774f3eb9-24355140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac1ddd1eac230f0dce600d8ddebe07edabe36e21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\ref\\views\\ciu\\nuevo.tpl',
      1 => 1495210730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2884758ed17774f3eb9-24355140',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58ed17775c3063_12180095',
  'variables' => 
  array (
    'zoom' => 0,
    'position' => 0,
    'reg' => 0,
    'r' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ed17775c3063_12180095')) {function content_58ed17775c3063_12180095($_smarty_tpl) {?><div class="container">
<h3>Nueva ciudad</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear esta nueva ciudad?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>
    
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDAuvq9vsoRNGXyiqmkWQfxzUxfaoHaa6s" async defer></script>
    <script type="text/javascript">
    function initMap() {
          var map = new google.maps.Map(document.getElementById('mapa'), {
            zoom: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['zoom']->value)===null||$tmp==='' ? "11" : $tmp);?>
, 
            center: new google.maps.LatLng(<?php echo (($tmp = @$_smarty_tpl->tpl_vars['position']->value['lat'])===null||$tmp==='' ? "-29.90273501712325" : $tmp);?>
, <?php echo (($tmp = @$_smarty_tpl->tpl_vars['position']->value['lon'])===null||$tmp==='' ? "-71.25202417373657" : $tmp);?>
), 
            mapTypeId: google.maps.MapTypeId.ROADMAP
          });
          
        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: new google.maps.LatLng(<?php echo (($tmp = @$_smarty_tpl->tpl_vars['position']->value['lat'])===null||$tmp==='' ? "-29.90273501712325" : $tmp);?>
, <?php echo (($tmp = @$_smarty_tpl->tpl_vars['position']->value['lon'])===null||$tmp==='' ? "-71.25202417373657" : $tmp);?>
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

<div class="form-horizontal col-lg-6 small">
<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar" />
    <label class="control-label">Región: </label>
        <select name="reg" id="reg" class="form-control input-sm">
            <option value="">-Seleccione región-</option>
            <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['Id_reg'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['Nom_reg'];?>
</option>
            <?php } ?>
        </select>
        
         <label class="control-label">Ciudad:</label>  
         <input class="form-control" type="text" name="ciu" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['ciu'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese nueva ciudad"/>    
         <label class="control-label">Sigla Ciudad:</label>  
         <input class="form-control" type="text" name="sciu" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['sciu'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese sigla ciudad"/>       
         <br/>
        <div id="mapa" style="width: 500px; height: 400px;"></div>
        <label class="control-label">Latitud: </label><input type="text" name="lat" id="lat" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['lat'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Latitud" class="form-control input-sm"/>
        <label class="control-label">Longitud: </label><input type="text" name="lon" id="lon" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['lon'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Longitud" class="form-control input-sm"/>
        <br/>
    <p>
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>
    </p>
</form>
        <br/>
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/ciu"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/volver.gif" width="30" height="20" title="Volver"/></a></p>
</div>
</div><?php }} ?>