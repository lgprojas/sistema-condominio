<?php /* Smarty version Smarty-3.1.11, created on 2017-05-19 16:25:11
         compiled from "C:\xampp\htdocs\munku\modules\ref\views\sec\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:325158eec5fcb02337-32080243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5345d097fa5b463897c03834e160d8f8f9769a3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\ref\\views\\sec\\editar.tpl',
      1 => 1495225505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325158eec5fcb02337-32080243',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58eec5fcc96a67_50489444',
  'variables' => 
  array (
    'nomsec' => 0,
    'nomciu' => 0,
    'zoom' => 0,
    'datos' => 0,
    'reg' => 0,
    'r' => 0,
    'ciu' => 0,
    'c' => 0,
    'position' => 0,
    '_layoutParams' => 0,
    'idciu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58eec5fcc96a67_50489444')) {function content_58eec5fcc96a67_50489444($_smarty_tpl) {?><div class="container">
<h4>Editar sector <?php echo $_smarty_tpl->tpl_vars['nomsec']->value['Nom_sec'];?>
</h4>
<h5>Comuna: <?php echo $_smarty_tpl->tpl_vars['nomciu']->value['Nom_ciu'];?>
</h5>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar este sector?")) {
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
            center: new google.maps.LatLng(
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Lat_sec']!='0.000000'&&$_smarty_tpl->tpl_vars['datos']->value['Lon_sec']!='0.000000'){?> 
                      <?php echo $_smarty_tpl->tpl_vars['datos']->value['Lat_sec'];?>
, 
                      <?php echo $_smarty_tpl->tpl_vars['datos']->value['Lon_sec'];?>
 
                   <?php }else{ ?>
                       -29.90273501712325,//position.coords.latitude,
                       -71.25202417373657//position.coords.longitude  
                   <?php }?>   
                    ), 
            mapTypeId: google.maps.MapTypeId.ROADMAP
          });
          
        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: new google.maps.LatLng(
                   <?php if ($_smarty_tpl->tpl_vars['datos']->value['Lat_sec']!='0.000000'&&$_smarty_tpl->tpl_vars['datos']->value['Lon_sec']!='0.000000'){?> 
                      <?php echo $_smarty_tpl->tpl_vars['datos']->value['Lat_sec'];?>
, 
                      <?php echo $_smarty_tpl->tpl_vars['datos']->value['Lon_sec'];?>
 
                   <?php }else{ ?>
                       -29.90273501712325,//position.coords.latitude,
                       -71.25202417373657//position.coords.longitude  
                   <?php }?>)
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
    <input type="hidden" name="guardar" value="1" />
    <div class="form-horizontal col-lg-3 small">
        <label class="control-label">Región:</label>
            <select class="form-control" name="reg" id="reg">
                <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_reg']!=0){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_reg'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_reg'];?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['r']->value['Id_reg']!=$_smarty_tpl->tpl_vars['datos']->value['Id_reg']){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['Id_reg'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['Nom_reg'];?>
</option>
                        <?php }?>
                    <?php } ?>
                <?php }else{ ?>
                    <option value="">-Seleccione-</option>
                                 <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['Id_reg'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['Nom_reg'];?>
</option>
                                 <?php } ?>
                <?php }?>
             </select>            
        <label class="control-label">Ciudad:</label>
            <select class="form-control" name="ciu" id="ciu">
                <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_ciu']!=0){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_ciu'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_ciu'];?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ciu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['c']->value['Id_ciu']!=$_smarty_tpl->tpl_vars['datos']->value['Id_ciu']){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_ciu'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_ciu'];?>
</option>
                        <?php }?>
                    <?php } ?>
                <?php }else{ ?>
                    <option value="">-Seleccione-</option>
                                 <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ciu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_ciu'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_ciu'];?>
</option>
                                 <?php } ?>
                <?php }?>
             </select>
        <label class="control-label">Cód. sector:</label>
        <input class="form-control" type="text" name="csec" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Cod_sec'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_sec'];?>
<?php }?>" disabled=""/>
        
        <label class="control-label">Sector:</label>
        <input class="form-control" type="text" name="sec" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Nom_sec'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_sec'];?>
<?php }?>" placeholder="Ingrese nombre sector"/>
            <br/>
    </div>
    <div class="clearfix"></div>
    <?php if ($_smarty_tpl->tpl_vars['position']->value['Lat_ciu']!='0.000000'&&$_smarty_tpl->tpl_vars['position']->value['Lon_ciu']!='0.000000'){?>
    <div class="col-lg-5">
         <div id="mapa" class="mapax" style="width: 100%;height: 500px;"></div>
    </div>
    <div class="col-lg-3">
        <label class="control-label">Latitud:</label>
        <input class="form-control" type="text" name="lat" id="lat" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Lat_sec'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Lat_sec'];?>
<?php }?>" placeholder="Ingrese latitud sector"/>
        
        <label class="control-label">Longitud:</label>
        <input class="form-control" type="text" name="lon" id="lon" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Lon_sec'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Lon_sec'];?>
<?php }?>" placeholder="Ingrese longitud sector"/>
            <br/>
    </div>
    <?php }else{ ?>
        <p style="color:red;">Ciudad no posee coordenadas, informar a Administrador.</p>
    <?php }?>
     <div class="clearfix"></div>
         <br/>
     <div class="col-lg-3">
    <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>
     </div>
     <br/>
</form>
         <br/>
         <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/listsec/<?php echo $_smarty_tpl->tpl_vars['idciu']->value;?>
"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>