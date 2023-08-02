<?php /* Smarty version Smarty-3.1.11, created on 2017-05-07 13:15:54
         compiled from "C:\xampp\htdocs\munku\modules\maps\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3211658b4c6f02e27f4-80165869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4900b2bf3ee966072b15c83bb5d6e1d14e683c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\maps\\views\\index\\index.tpl',
      1 => 1494086587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3211658b4c6f02e27f4-80165869',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58b4c6f06099a1_25720677',
  'variables' => 
  array (
    'cat' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b4c6f06099a1_25720677')) {function content_58b4c6f06099a1_25720677($_smarty_tpl) {?><div class="container">
<h3>Seleccione lugar</h3>

    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDAuvq9vsoRNGXyiqmkWQfxzUxfaoHaa6s&callback=initMap" async defer></script>
    <script type="text/javascript"> onload = function () { var e = document.getElementById("refreshed"); if (e.value == "no") e.value = "yes"; else { e.value = "no"; location.reload(); } }</script>
    <script>
        function initMap(){
        navigator.geolocation.getCurrentPosition(fn_ok, fn_error, {maximumAge:6000, timeout:5000, enableHighAccuracy: true});
        var divMapa = document.getElementById('mapa');
        
            function fn_error(){
                switch(error.code)
                {
		case error.PERMISSION_DENIED:
			alert('ERROR: User denied access to track physical position!');
		break;

		case error.POSITION_UNAVAILABLE:
			alert("ERROR: There is a problem getting the position of the device!");
		break;

		case error.TIMEOUT:
			alert("ERROR: The application timed out trying to get the position of the device!");
		break;

		default:
			alert("ERROR: Unknown problem!");
		break;
                }
            }
            
            function fn_ok(respuesta){
                //mostrar_objeto(respuesta.coords);
                var lat = respuesta.coords.latitude;
                var lon = respuesta.coords.longitude;
                //var coordenada = lat+', '+lon;
                
                var gLatLon = new google.maps.LatLng(lat, lon);//convierte a objeto de goo
                var objConfig = {
                    zoom: 17,
                    center: gLatLon
                }
                
                var gMapa = new google.maps.Map(divMapa, objConfig);//creamos el mapa(dónde, config) renderiza
                var objConfigMarker = {
                    position: gLatLon,
                    map: gMapa,
                    title: "Posicionado"
                }
                
                var gMarker = new google.maps.Marker(objConfigMarker);
                 
            }
        }
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


<form name="form1" method="post">
    <input type="hidden" id="refreshed" value="no">
    <input type="hidden" name="buscar" value="1" />
<div class="row">
<div class="col-md-3">
    <label class="control-label" for="tags">Sector: </label>    
    <input type="text" id="tags" name="sec" class="form-control" placeholder="Escriba sector"/>                      
</div>
    <div class="col-md-3">
        <label class="control-label">Categoría: </label>
        <select name="cat" id="cat" class="form-control">
            <option value="">-Seleccione-</option>
            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_cat'];?>
</option>
            <?php } ?>
        </select>
    </div>
    <div class="col-md-3">
        <label class="control-label">Subcategoría: </label>
        <select name="scat" id="scat" class="form-control">
        </select>
    </div>
<div class="col-md-3">
    <button  type="submit" id="btn_save" class="btn btn-primary" style="margin: 10px;">Buscar</button>
</div>
</div>
</form>
        <br/>
        <div class="google-maps">
            <div id="mapa" class="mapax" style="width: 100%;height: 500px;"></div>
        </div>
</div><?php }} ?>