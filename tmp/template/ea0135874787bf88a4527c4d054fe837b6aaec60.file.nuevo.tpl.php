<?php /* Smarty version Smarty-3.1.11, created on 2017-05-19 15:16:17
         compiled from "C:\xampp\htdocs\munku\modules\ref\views\sec\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1493358fe18ef89ca21-77829416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea0135874787bf88a4527c4d054fe837b6aaec60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\ref\\views\\sec\\nuevo.tpl',
      1 => 1495221368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1493358fe18ef89ca21-77829416',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58fe18efa77dd9_97625484',
  'variables' => 
  array (
    'zoom' => 0,
    'position' => 0,
    'reg' => 0,
    'r' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
    'idciu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fe18efa77dd9_97625484')) {function content_58fe18efa77dd9_97625484($_smarty_tpl) {?><div class="container">
<h3>Nuevo sector</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear este nuevo sector?")) {
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
            zoom: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['zoom']->value)===null||$tmp==='' ? "14" : $tmp);?>
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
    <style>
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

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar" />
    <div class="form-horizontal col-lg-3 small">
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
        <label class="control-label">Ciudad: </label>
        <select name="ciu" id="ciu" class="form-control input-sm">
            <option value="">--</option>
        </select>
         <label class="control-label">Cód. sector:</label>  
         <input class="form-control" type="text" name="csec" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['csec'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese código sector"/>       
       
         <label class="control-label">Sector:</label>  
         <input class="form-control" type="text" name="sec" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['sec'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese nombre sector"/>       
        
         <br/>
    </div>
    <div class="clearfix"></div>
    <?php if ($_smarty_tpl->tpl_vars['position']->value['Lat_ciu']!='0.000000'&&$_smarty_tpl->tpl_vars['position']->value['Lon_ciu']!='0.000000'){?>
    <div class="col-lg-5">
         <div id="mapa" class="mapax" style="width: 100%;height: 500px;"></div>
    </div>
    <div class="col-lg-3">
         <label class="control-label">Latitud: </label>
         <input type="text" name="lat" id="lat" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['lat'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Latitud" class="form-control input-sm"/>
         
         <label class="control-label">Longitud: </label>
         <input type="text" name="lon" id="lon" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['lon'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Longitud" class="form-control input-sm"/>
         <br/>
    </div>
    <?php }else{ ?>
        <p style="color:red;">Ciudad no posee coordenadas, informar a Administrador.</p>
    <?php }?>
         <div class="clearfix"></div>
         <br/>
         <div class="col-lg-3">
    <p>
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>
    </p>
</form>
        <br/>
        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/sec/listsec/<?php echo $_smarty_tpl->tpl_vars['idciu']->value;?>
"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>