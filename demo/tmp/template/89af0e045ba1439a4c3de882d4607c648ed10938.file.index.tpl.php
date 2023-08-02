<?php /* Smarty version Smarty-3.1.11, created on 2017-05-26 13:42:13
         compiled from "C:\xampp\htdocs\munku\modules\maps\views\mapa\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2074058f59b35195cc3-10224011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89af0e045ba1439a4c3de882d4607c648ed10938' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\maps\\views\\mapa\\index.tpl',
      1 => 1495499387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2074058f59b35195cc3-10224011',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58f59b35300906_27195055',
  'variables' => 
  array (
    'lpv' => 0,
    'latlon' => 0,
    'ce' => 0,
    'lugares' => 0,
    'l' => 0,
    '_layoutParams' => 0,
    'pse' => 0,
    'sec' => 0,
    'scat' => 0,
    'csec' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f59b35300906_27195055')) {function content_58f59b35300906_27195055($_smarty_tpl) {?>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDAuvq9vsoRNGXyiqmkWQfxzUxfaoHaa6s" async defer></script>
    <script>
    function initMap() {
          var map = new google.maps.Map(document.getElementById('mapa'), {
            zoom: <?php if ($_smarty_tpl->tpl_vars['lpv']->value!=1){?>14<?php }else{ ?>12<?php }?>,
            center: <?php  $_smarty_tpl->tpl_vars['ce'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ce']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['latlon']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ce']->key => $_smarty_tpl->tpl_vars['ce']->value){
$_smarty_tpl->tpl_vars['ce']->_loop = true;
?> { lat: <?php echo $_smarty_tpl->tpl_vars['ce']->value['Lat_sec'];?>
, lng: <?php echo $_smarty_tpl->tpl_vars['ce']->value['Lon_sec'];?>
 }<?php } ?> , 
            mapTypeId: google.maps.MapTypeId.ROADMAP
          });
          
          
          //Define marcadores
          
                <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lugares']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
                    var objHTML_<?php echo $_smarty_tpl->tpl_vars['l']->value['Id_lugar'];?>
 = '<div id="contenedor" style="width:350px;">' + 
                                                              '<div class="head-name">' + 
                                                                '<div class="head-title"><?php echo $_smarty_tpl->tpl_vars['l']->value['Tit_lugar'];?>
</div>' +
                                                                '<div class="subtitle">Dirección:</div>' + 
                                                                    '<p style="font-size:10px;"> <?php echo $_smarty_tpl->tpl_vars['l']->value['Dir_lugar'];?>
.</p>' + 
                                                              '</div>' + 
                                                              '<div class="head-logo"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/logoLugar/originales/thumbs/thumb_s_<?php echo $_smarty_tpl->tpl_vars['l']->value['Nom_logo'];?>
" /></div>' +  
                                                              '<p style="clear: left;"></p>' +
                                                              <?php if ($_smarty_tpl->tpl_vars['lpv']->value!=1){?>
                                                              '<div class="">' +
                                                                  <?php if ($_smarty_tpl->tpl_vars['l']->value['Horario_lugar']!=''){?>
                                                                  '<div class="subtitle">Horario Atención:</div>' + 
                                                                    '<p><?php echo $_smarty_tpl->tpl_vars['l']->value['Horario_lugar'];?>
</p>' +     
                                                                  <?php }?>
                                                                    '<div>' +
                                                                    <?php if ($_smarty_tpl->tpl_vars['l']->value['PSLugar']==0){?>
                                                                        '<br/>' +
                                                                    <?php }else{ ?>                                                                  
                                                                        <?php  $_smarty_tpl->tpl_vars['pse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['l']->value['PSLugar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pse']->key => $_smarty_tpl->tpl_vars['pse']->value){
$_smarty_tpl->tpl_vars['pse']->_loop = true;
?>                                                                                                                                                     
                                                                           '<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/iconps/<?php echo $_smarty_tpl->tpl_vars['pse']->value['Nom_icops'];?>
.png" title="<?php echo $_smarty_tpl->tpl_vars['pse']->value['Nom_ps'];?>
"/>' +                                                                                
                                                                        <?php } ?>
                                                                    <?php }?>                
                                                                    '</div>' +
                                                                <?php }?>                         
                                                                  '<h6>Ver más información: <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lugar/catalogo/verDetalleLugar/<?php echo $_smarty_tpl->tpl_vars['l']->value['Id_lugar'];?>
/<?php echo $_smarty_tpl->tpl_vars['sec']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['scat']->value;?>
/">Detalle</a></h6>' +
                                                              '</div>' + 
                                                              '<br/>' +
                                                              '<div class=""></div>' + 
                                                           '</div>';
                                                  
                    var marker_<?php echo $_smarty_tpl->tpl_vars['l']->value['Id_lugar'];?>
 = new google.maps.Marker({ position: new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['l']->value['Lat_lugar'];?>
, <?php echo $_smarty_tpl->tpl_vars['l']->value['Lon_lugar'];?>
), map:map, title:"<?php echo $_smarty_tpl->tpl_vars['l']->value['Tit_lugar'];?>
", optimized: false })
                    marker_<?php echo $_smarty_tpl->tpl_vars['l']->value['Id_lugar'];?>
.setIcon('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/icon/<?php echo $_smarty_tpl->tpl_vars['l']->value['Nom_ico'];?>
.png');
                    var gIW_<?php echo $_smarty_tpl->tpl_vars['l']->value['Id_lugar'];?>
 = new google.maps.InfoWindow({ content: objHTML_<?php echo $_smarty_tpl->tpl_vars['l']->value['Id_lugar'];?>
, maxWidth: 350 });
                    google.maps.event.addListener(marker_<?php echo $_smarty_tpl->tpl_vars['l']->value['Id_lugar'];?>
,'click',function(){
                       gIW_<?php echo $_smarty_tpl->tpl_vars['l']->value['Id_lugar'];?>
.open(mapa, marker_<?php echo $_smarty_tpl->tpl_vars['l']->value['Id_lugar'];?>
);
                   });
                   
                    google.maps.event.addListener(map, 'click', function() {
                       gIW_<?php echo $_smarty_tpl->tpl_vars['l']->value['Id_lugar'];?>
.close();
                    });
                <?php } ?>       
          
          // Define the LatLng coordinates for the polygon's path.
          <?php if ($_smarty_tpl->tpl_vars['lpv']->value!=1){?>
            
              var sectorCoords = [
            
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['csec']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['c']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['c']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['c']->iteration++;
 $_smarty_tpl->tpl_vars['c']->last = $_smarty_tpl->tpl_vars['c']->iteration === $_smarty_tpl->tpl_vars['c']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['sec']['last'] = $_smarty_tpl->tpl_vars['c']->last;
?>
                    { lat: <?php echo $_smarty_tpl->tpl_vars['c']->value['Lat_csec'];?>
, lng: <?php echo $_smarty_tpl->tpl_vars['c']->value['Lon_csec'];?>
 } 
                               <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['sec']['last']){?>,<?php }?>
                <?php } ?>
            
              ];

              // Construct the polygon.
              var sector = new google.maps.Polygon({
                paths: sectorCoords,
                strokeColor: '#FF0000',
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: '#FF0000',
                fillOpacity: 0.35,
              });
              sector.setMap(map);
            
           <?php }?>
       
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

<div class="container">
    <br/><br/>
    <div id="mapa" class="mapax" style="width: 100%;height: 500px;">
            Cargando..
    </div>
    <br/>
    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
maps"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>
</div>
<?php }} ?>