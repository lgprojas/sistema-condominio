<?php /* Smarty version Smarty-3.1.11, created on 2017-05-19 16:23:04
         compiled from "C:\xampp\htdocs\munku\modules\ref\views\sec\addcoor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3010858eef4c6a71e10-65292027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '748769170b3daf98160b3a0dae631290e79086fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\ref\\views\\sec\\addcoor.tpl',
      1 => 1495225379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3010858eef4c6a71e10-65292027',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58eef4c6b6db34_18699662',
  'variables' => 
  array (
    'nomsec' => 0,
    'nomciu' => 0,
    'zoom' => 0,
    'position' => 0,
    'datos' => 0,
    'coords' => 0,
    'color' => 0,
    '_layoutParams' => 0,
    'datos1' => 0,
    'ctto' => 0,
    'bod' => 0,
    'idciu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58eef4c6b6db34_18699662')) {function content_58eef4c6b6db34_18699662($_smarty_tpl) {?><div class="container">
<h4>Coordenadas sector <?php echo $_smarty_tpl->tpl_vars['nomsec']->value['Nom_sec'];?>
</h4>
<h5>Comuna: <?php echo $_smarty_tpl->tpl_vars['nomciu']->value['Nom_ciu'];?>
</h5>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea agregar esta nueva coordenada?")) {
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

<br/>
<?php if ($_smarty_tpl->tpl_vars['position']->value['Lat_ciu']!='0.000000'&&$_smarty_tpl->tpl_vars['position']->value['Lon_ciu']!='0.000000'){?>
<form enctype="multipart/form-data" method="post">
    <input type="hidden" name="guardar" value="1" />
<div class="row">
    <div class="col-md-5"><div id="mapa" class="mapax" style="width: 100%;height: 500px;"></div></div><br/>
    <div class="col-md-2"><label class="control-label">Latitud: </label><input type="text" name="lat" id="lat" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['lat'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Latitud" class="form-control input-sm"/></div>
    <div class="col-md-2"><label class="control-label">Longitud: </label><input type="text" name="lon" id="lon" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['lon'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Longitud" class="form-control input-sm"/></div>
    <div class="col-md-3"><input style="margin: 10px;" id="newprod" class="btn btn-small btn-primary" type="submit" value="Guardar" onclick='return cb(this);'/></div>
</div>
<br/>
</form>
<?php }else{ ?>
        <p style="color:red;">Ciudad no posee coordenadas, informar a Administrador.</p>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['coords']->value)&&count($_smarty_tpl->tpl_vars['coords']->value)){?><!--que si existe posts y además que tenga por lo menos 1 -->
    <table class="table table-bordered">
    <thead>
        <tr>
        <th colspan="9" style="background: #E6E6FA;text-align: center;">COORDENADAS SECTOR</th>
        </tr>
        <tr style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Id</td>
        <td style="font-weight:bold;text-align: center;">Latitud</td>
        <td style="font-weight:bold;text-align: center;">Longitud</td>        
        <td style="font-weight:bold;text-align: center;">Elim.</td>
        </tr>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['coords']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list1" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover="this.style.backgroundColor='#F0F8FF';" onmouseout="this.style.background='<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
';">
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_csec'];?>
</td>  
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Lat_csec'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Lon_csec'];?>
</td>
        <td style="text-align: center;"><a class="glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ssinguia/sguia/elim_sprod/<?php echo $_smarty_tpl->tpl_vars['datos1']->value['Id_sprod'];?>
/<?php echo $_smarty_tpl->tpl_vars['ctto']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['bod']->value;?>
" onclick='return sal(this);'></a></td>
    </tr>
<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No posee coordenadas aún!</strong></p>
<?php }?>
<br/><br/>
<p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/sec/listsec/<?php echo $_smarty_tpl->tpl_vars['idciu']->value;?>
"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>

</div>        <?php }} ?>