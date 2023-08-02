<?php /* Smarty version Smarty-3.1.11, created on 2017-05-21 15:52:40
         compiled from "C:\xampp\htdocs\munku\modules\lugar\views\administrar\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156365677353b2f1892-35402206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fac3661e8e0ad2fec58716c980375fb0843663af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\lugar\\views\\administrar\\editar.tpl',
      1 => 1495396347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156365677353b2f1892-35402206',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5677353b787db2_88738518',
  'variables' => 
  array (
    'datos' => 0,
    'position' => 0,
    'datos1' => 0,
    'cat' => 0,
    'ca' => 0,
    'scat' => 0,
    'sc' => 0,
    'ciu' => 0,
    'c' => 0,
    'sec' => 0,
    's' => 0,
    'fp' => 0,
    'p' => 0,
    'fe' => 0,
    'e' => 0,
    'eavi' => 0,
    'ea' => 0,
    'ilogo' => 0,
    '_layoutParams' => 0,
    'color' => 0,
    'datoslogo' => 0,
    'restantes' => 0,
    'totalImg' => 0,
    'ilugar' => 0,
    'datosimg' => 0,
    'idciu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5677353b787db2_88738518')) {function content_5677353b787db2_88738518($_smarty_tpl) {?><div class="container">
<h3>Editar lugar: </h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar este lugar?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function dl(formObj) {
                if(confirm("Desea eliminar el logo actual?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function sl(formObj) {
                if(confirm("Desea subir el nuevo logo?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function di(formObj) {
                if(confirm("Desea eliminar imagen?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function si(formObj) {
                if(confirm("Desea subir las imágenes?")) {
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
            center: new google.maps.LatLng(<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['Lat_lugar'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['position']->value['Lat_ciu'] : $tmp);?>
, <?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['Lon_lugar'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['position']->value['Lon_ciu'] : $tmp);?>
), 
            mapTypeId: google.maps.MapTypeId.ROADMAP
          });
          
        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: new google.maps.LatLng(<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['Lat_lugar'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['position']->value['Lat_ciu'] : $tmp);?>
, <?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['Lon_lugar'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['position']->value['Lon_ciu'] : $tmp);?>
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
            padding-bottom: 75%; /* This is the aspect ratio*/
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
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDAuvq9vsoRNGXyiqmkWQfxzUxfaoHaa6s" async defer></script>

<div class="col-lg-8">
<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <input type="hidden" name="ref" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Ref_lugar'];?>
" />
<fieldset>
<legend>Datos lugar</legend>
<div class="form-horizontal well col-lg-6 small">
    <div class="form-group">
        <label class="control-label">Ref. *</label> 
        <input class="form-control" type="text" name="ref" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['ref'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Ref_lugar'] : $tmp);?>
" placeholder="Ingrese código único del lugar" disabled=""/>       
    </div>    
    <div class="form-group">
        <label class="control-label">Título *</label>  
        <input class="form-control" type="text" name="tit" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['tit'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Tit_lugar'] : $tmp);?>
" placeholder="Ingrese título lugar"/>       
    </div>
    <div class="form-group">
    <label class="control-label">Categoría:</label>
        <select class="form-control" name="cat" id="cat">

            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_cat']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cat'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['ca'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ca']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ca']->key => $_smarty_tpl->tpl_vars['ca']->value){
$_smarty_tpl->tpl_vars['ca']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['ca']->value['Id_cat']!=$_smarty_tpl->tpl_vars['datos']->value['Id_cat']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['ca']->value['Nom_cat'];?>
</option>
                    <?php }?>
                <?php } ?>
            <?php }else{ ?>
                <option value="">-Seleccione-</option>
                             <?php  $_smarty_tpl->tpl_vars['ca'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ca']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ca']->key => $_smarty_tpl->tpl_vars['ca']->value){
$_smarty_tpl->tpl_vars['ca']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['ca']->value['Nom_cat'];?>
</option>
                             <?php } ?>
            <?php }?>
         </select>            
    </div>  
    <div class="form-group">
        <label class="control-label">Subcategoría:</label>
            <select class="form-control" name="scat" id="scat">

                <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_subcat']!=0){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_subcat'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_subcat'];?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['sc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sc']->key => $_smarty_tpl->tpl_vars['sc']->value){
$_smarty_tpl->tpl_vars['sc']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['sc']->value['Id_subcat']!=$_smarty_tpl->tpl_vars['datos']->value['Id_subcat']){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['sc']->value['Id_subcat'];?>
"><?php echo $_smarty_tpl->tpl_vars['sc']->value['Nom_subcat'];?>
</option>
                        <?php }?>
                    <?php } ?>
                <?php }else{ ?>
                    <option value="">-Seleccione-</option>
                                 <?php  $_smarty_tpl->tpl_vars['sc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sc']->key => $_smarty_tpl->tpl_vars['sc']->value){
$_smarty_tpl->tpl_vars['sc']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['sc']->value['Id_subcat'];?>
"><?php echo $_smarty_tpl->tpl_vars['sc']->value['Nom_subcat'];?>
</option>
                                 <?php } ?>
                <?php }?>
             </select>            
    </div>  
</div>
</fieldset>
<fieldset>
    <legend>Localización</legend>
    <div class="form-horizontal well col-lg-6 small">
    <div class="form-group">
        <label class="control-label">Dirección *</label> 
        <input class="form-control" type="text" name="dir" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['dir'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Dir_lugar'] : $tmp);?>
" placeholder="Ingrese dirección inmueble"/>       
    </div>
    <div class="form-group">
            <label class="control-label">Ciudad: </label>
            <select name="ciu" id="ciu" class="form-control input-sm">
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
    </div>                                   
    <div class="form-group">
        <label class="control-label">Sector: </label>
        <select name="sec" id="sec" class="form-control input-sm">
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_sec']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_sec'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_sec'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sec']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['s']->value['Id_sec']!=$_smarty_tpl->tpl_vars['datos']->value['Id_sec']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value['Id_sec'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['Nom_sec'];?>
</option>
                    <?php }?>
                <?php } ?>
            <?php }else{ ?>
                <option value="">-Seleccione-</option>
                             <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sec']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value['Id_sec'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['Nom_sec'];?>
</option>
                             <?php } ?>
            <?php }?>            
         </select>
         <br/>
         <div id="mapa" class="mapax" style="width: 100%;height: 500px;"></div>
         <label class="control-label">Latitud: </label><input type="text" name="lat" id="lat" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['lati'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Lat_lugar'] : $tmp);?>
" placeholder="Latitud" class="form-control input-sm"/>
         <label class="control-label">Longitud: </label><input type="text" name="lon" id="lon"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['long'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Lon_lugar'] : $tmp);?>
" placeholder="Longitud" class="form-control input-sm"/>
    </div> 
</div>
</fieldset>
<fieldset>
    <legend>Información de contacto</legend>
    <div class="form-horizontal well col-lg-10 small">
        <div class="form-horizontal well col-lg-4">
        <label class="control-label">Fono: </label><input type="text" name="fono" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['fono'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Fono_lugar'] : $tmp);?>
" placeholder="Fono" class="form-control input-sm"/>
        </div>
        <div class="form-horizontal well col-lg-8">
        <label class="control-label">Horario: </label><input type="text" name="horario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['horario'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Horario_lugar'] : $tmp);?>
" placeholder="Horario" class="form-control input-sm"/>
        <label class="control-label">URL Sitio: </label><input type="text" name="url" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['url'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Url_lugar'] : $tmp);?>
" placeholder="URL" class="form-control input-sm"/>    
        </div>
    </div>
</fieldset>   
<fieldset>
    <legend>Detalle adicional</legend>
    <div class="form-horizontal well col-lg-6 small">       
        <div class="col-lg-10">
            <label class="control-label">Forma de pago:</label>
            <div>   
                <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>            
                    <?php if ($_smarty_tpl->tpl_vars['p']->value['tickeado']==1){?>
                        <div class="extra"  style="background-color: green">
                            <input type="checkbox" name="fpago[]" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['Id_fp'];?>
" checked="checked"/> <?php echo $_smarty_tpl->tpl_vars['p']->value['Nom_fp'];?>

                        </div>  
                    <?php }else{ ?>
                        <div class="extra">
                            <input type="checkbox" name="fpago[]" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['Id_fp'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['p']->value['Nom_fp'];?>

                        </div>  
                    <?php }?>           
                <?php } ?>
            </div>
            <label class="control-label">Forma de entrega:</label>
            <div>   
                <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fe']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>            
                    <?php if ($_smarty_tpl->tpl_vars['e']->value['tickeado']==1){?>
                        <div class="extra"  style="background-color: green">
                            <input type="checkbox" name="fentrega[]" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['Id_fe'];?>
" checked="checked"/> <?php echo $_smarty_tpl->tpl_vars['e']->value['Nom_fe'];?>

                        </div>  
                    <?php }else{ ?>
                        <div class="extra">
                            <input type="checkbox" name="fentrega[]" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['Id_fe'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['e']->value['Nom_fe'];?>

                        </div>  
                    <?php }?>           
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
                <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_eavi']!=0){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_eavi'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_eavi'];?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['ea'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ea']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eavi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ea']->key => $_smarty_tpl->tpl_vars['ea']->value){
$_smarty_tpl->tpl_vars['ea']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['ea']->value['Id_eavi']!=$_smarty_tpl->tpl_vars['datos']->value['Id_eavi']){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['ea']->value['Id_eavi'];?>
"><?php echo $_smarty_tpl->tpl_vars['ea']->value['Nom_eavi'];?>
</option>
                        <?php }?>
                    <?php } ?>
                <?php }else{ ?>
                    <option value="">-Seleccione-</option>
                     <?php  $_smarty_tpl->tpl_vars['ea'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ea']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eavi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ea']->key => $_smarty_tpl->tpl_vars['ea']->value){
$_smarty_tpl->tpl_vars['ea']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['ea']->value['Id_eavi'];?>
"><?php echo $_smarty_tpl->tpl_vars['ea']->value['Nom_eavi'];?>
</option>
                     <?php } ?>
                <?php }?>
            </select>  
                <label class="control-label">Fch. creación: </label><input type="date" id="datepicker1" name="fchc" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['fchc'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['fchc'] : $tmp);?>
" readonly="readonly" style="width: 100px;margin: 15px;" placeholder="00-00-0000" class="form-control input-sm"/>        
                <label class="control-label">Fch. finalización: </label><input type="date" id="datepicker2" name="fchf" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['fchf'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['fchf'] : $tmp);?>
" readonly="readonly" style="width: 100px;margin: 15px;" placeholder="00-00-0000" class="form-control input-sm"/>    
    </div>
</fieldset>         
 <br/>
    <input id="editin" class="btn btn-small btn-primary" type="submit" value="Guardar" onclick='return cb(this);'/>

</form>         
 <br/>         
 <div class="form-horizontal well small col-lg-8">        
  <fieldset>
    <legend>Imagen logo</legend>
    <?php if (count($_smarty_tpl->tpl_vars['ilogo']->value)==0){?>
    <form name="form2" enctype="multipart/form-data" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lugar/administrar/subirLogoEdit">
        <input type="hidden" name="subirlogo" value="1" />
        <input type="hidden" name="reflug" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Ref_lugar'];?>
" />
        <div class="form-group well small">
            <input type="file" name="logo[]"/>
            <br/>
             <input id="newimg" class="btn btn-small btn-primary" type="submit" value="Subir imagen" onclick='return sl(this);'/>    
        </div>
    </form> 
    <?php }else{ ?>
        <p>La opción de subir un nuevo logo se activa al borrar el actual.</p>
    <?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['ilogo']->value)&&count($_smarty_tpl->tpl_vars['ilogo']->value)){?>
<?php  $_smarty_tpl->tpl_vars['datoslogo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datoslogo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ilogo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datoslogo']->key => $_smarty_tpl->tpl_vars['datoslogo']->value){
$_smarty_tpl->tpl_vars['datoslogo']->_loop = true;
?>
    
    <div class="producto" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <div class="imagen_ext">
            <div class="imagen_lugarter">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/logoLugar/originales/thumbs/thumb_ms_<?php echo $_smarty_tpl->tpl_vars['datoslogo']->value['Nom_logo'];?>
"/>             
                    
            </div>
                <a class="btn btn-info" style="margin-top: 5px;" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lugar/administrar/delImageLogo/<?php echo $_smarty_tpl->tpl_vars['datoslogo']->value['Id_logo'];?>
/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Ref_lugar'];?>
/<?php echo $_smarty_tpl->tpl_vars['datoslogo']->value['Nom_logo'];?>
" onclick='return dl(this);'>
                    <i title="eliminar" class="glyphicon glyphicon-trash"> </i>
                </a>
        </div>

    </div>
<?php } ?>
<?php }else{ ?>
            <p><strong>No posee logo el lugar</strong></p>
<?php }?> 
    </fieldset>
 </div>
    <div class="clearfix"></div>
 <div class="form-horizontal well small col-lg-8">        
  <fieldset>
    <legend>Imágenes lugar</legend>
    <form name="form2" enctype="multipart/form-data" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lugar/administrar/subirImgsEdit">
        <input type="hidden" name="subirimg" value="1" />
        <input type="hidden" name="reflug" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Ref_lugar'];?>
" />
        <div class="form-group well small">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['subir'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['subir']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['name'] = 'subir';
$_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['restantes']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['subir']['total']);
?>
                <input type="file" name="image[]"/>
                <input type="text" name="<?php if ($_smarty_tpl->tpl_vars['restantes']->value==1){?>tres<?php }elseif($_smarty_tpl->tpl_vars['restantes']->value==2){?>dos<?php }elseif($_smarty_tpl->tpl_vars['restantes']->value==3){?>uno<?php }else{ ?>cuatro<?php }?>" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['uno'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Texto primera imagen" class="form-control input-sm"/>
            <?php endfor; endif; ?>
            <?php if ($_smarty_tpl->tpl_vars['restantes']->value!=0){?>
            <br/>
                <input id="newimg" class="btn btn-small btn-primary" type="submit" value="Subir imagen" onclick='return si(this);'/>    
            <?php }else{ ?>
                <p>Cantidad máxima de imágenes es de <?php echo $_smarty_tpl->tpl_vars['totalImg']->value;?>
 y se encuentra completa. La opción de subir un nueva imagen se activa al borrar alguna de las actuales.</p>
            <?php }?>
        </div>
    </form> 
<?php if (isset($_smarty_tpl->tpl_vars['ilugar']->value)&&count($_smarty_tpl->tpl_vars['ilugar']->value)){?>
<?php  $_smarty_tpl->tpl_vars['datosimg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datosimg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ilugar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['datosimg']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['datosimg']->key => $_smarty_tpl->tpl_vars['datosimg']->value){
$_smarty_tpl->tpl_vars['datosimg']->_loop = true;
 $_smarty_tpl->tpl_vars['datosimg']->iteration++;
?>
    <div class="producto" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <div class="imagen_ext">
            <div class="imagen_lugarter">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagesLugar/originales/thumbs/thumb_ms_<?php echo $_smarty_tpl->tpl_vars['datosimg']->value['Nom_img'];?>
"/>             
                    <input type="text" name="<?php if ($_smarty_tpl->tpl_vars['datosimg']->iteration==1){?>uno<?php }elseif($_smarty_tpl->tpl_vars['datosimg']->iteration==2){?>dos<?php }elseif($_smarty_tpl->tpl_vars['datosimg']->iteration==3){?>tres<?php }else{ ?>cuatro<?php }?>" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['tres'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datosimg']->value['Desc_img'] : $tmp);?>
" placeholder="Texto tercera imagen" class="form-control input-sm"/>
                    <br/>
            </div>
                    <a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lugar/administrar/delImageLugar/<?php echo $_smarty_tpl->tpl_vars['datosimg']->value['Id_img'];?>
/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Ref_lugar'];?>
/<?php echo $_smarty_tpl->tpl_vars['datosimg']->value['Nom_img'];?>
" onclick='return di(this);'>
                    <i title="eliminar" class="glyphicon glyphicon-trash"></i>
                    </a>
        </div>

    </div>
<?php } ?>
<?php }else{ ?>
            <p><strong>No posee imagen el lugar</strong></p>
<?php }?> 
    </fieldset>
 </div>
    <div class="clearfix"></div>
         <br/>
         <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lugar/administrar/index/<?php echo $_smarty_tpl->tpl_vars['idciu']->value;?>
"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>