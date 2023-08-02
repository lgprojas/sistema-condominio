<?php /* Smarty version Smarty-3.1.11, created on 2015-08-30 23:45:35
         compiled from "C:\xampp\htdocs\vitricasas\modules\inmueble\views\administrar\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1294955da394a3283b4-69036813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bd7ec7cfdd6c41a47a2070435c07abd5663ba76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitricasas\\modules\\inmueble\\views\\administrar\\editar.tpl',
      1 => 1440971129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1294955da394a3283b4-69036813',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55da394a6b8991_17278559',
  'variables' => 
  array (
    'datos' => 0,
    'datos1' => 0,
    'ttran' => 0,
    'tr' => 0,
    'tin' => 0,
    'ti' => 0,
    'ciu' => 0,
    'c' => 0,
    'pob' => 0,
    'p' => 0,
    'sec' => 0,
    's' => 0,
    'ein' => 0,
    'ei' => 0,
    'extra' => 0,
    'ex' => 0,
    'eavi' => 0,
    'ea' => 0,
    'esl' => 0,
    'es' => 0,
    'iin' => 0,
    'color' => 0,
    '_layoutParams' => 0,
    'datosimg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55da394a6b8991_17278559')) {function content_55da394a6b8991_17278559($_smarty_tpl) {?><div class="container">
<h3>Editar inmueble: </h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar este inmueble?")) {
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

<div class="col-lg-8">
<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <input type="hidden" name="cod" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Ref_in'];?>
" />
<fieldset>
<legend>Datos Inmueble</legend>
<div class="form-horizontal well col-lg-6 small">
    <div class="form-group">
        <label class="control-label">Ref. *</label> 
        <input class="form-control" type="text" name="ref" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['cod'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Ref_in'] : $tmp);?>
" placeholder="Ingrese Ref producto" disabled=""/>       
    </div>    
    <div class="form-group">
        <label class="control-label">Título *</label>  
        <input class="form-control" type="text" name="tit" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['tit'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Tit_in'] : $tmp);?>
" placeholder="Ingrese nombre producto"/>       
    </div>
    <div class="form-group">
    <label class="control-label">Tipo transacción:</label>
        <select class="form-control" name="ttra" id="ttra">

            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_ttran']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_ttran'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_ttran'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['tr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ttran']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tr']->key => $_smarty_tpl->tpl_vars['tr']->value){
$_smarty_tpl->tpl_vars['tr']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['tr']->value['Id_ttran']!=$_smarty_tpl->tpl_vars['datos']->value['Id_ttran']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['tr']->value['Id_ttran'];?>
"><?php echo $_smarty_tpl->tpl_vars['tr']->value['Nom_ttran'];?>
</option>
                    <?php }?>
                <?php } ?>
            <?php }else{ ?>
                <option value="">-Seleccione-</option>
                             <?php  $_smarty_tpl->tpl_vars['tr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ttran']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tr']->key => $_smarty_tpl->tpl_vars['tr']->value){
$_smarty_tpl->tpl_vars['tr']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['tr']->value['Id_ttran'];?>
"><?php echo $_smarty_tpl->tpl_vars['tr']->value['Nom_ttran'];?>
</option>
                             <?php } ?>
            <?php }?>
         </select>            
    </div>  
    <div class="form-group">
        <label class="control-label">Tipo inmueble:</label>
            <select class="form-control" name="tin" id="tin">

                <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_tin']!=0){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_tin'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_tin'];?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['ti'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ti']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ti']->key => $_smarty_tpl->tpl_vars['ti']->value){
$_smarty_tpl->tpl_vars['ti']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['ti']->value['Id_tin']!=$_smarty_tpl->tpl_vars['datos']->value['Id_tin']){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['ti']->value['Id_tin'];?>
"><?php echo $_smarty_tpl->tpl_vars['ti']->value['Nom_tin'];?>
</option>
                        <?php }?>
                    <?php } ?>
                <?php }else{ ?>
                    <option value="">-Seleccione-</option>
                                 <?php  $_smarty_tpl->tpl_vars['ti'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ti']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ti']->key => $_smarty_tpl->tpl_vars['ti']->value){
$_smarty_tpl->tpl_vars['ti']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['ti']->value['Id_tin'];?>
"><?php echo $_smarty_tpl->tpl_vars['ti']->value['Nom_tin'];?>
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
        <input class="form-control" type="text" name="dir" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['dir'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Dir_in'] : $tmp);?>
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
        <label class="control-label">Población: </label>
        <select name="pob" id="pob" class="form-control input-sm">
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_pob']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_pob'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_pob'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pob']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['p']->value['Id_pob']!=$_smarty_tpl->tpl_vars['datos']->value['Id_pob']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['Id_pob'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['Nom_pob'];?>
</option>
                    <?php }?>
                <?php } ?>
            <?php }else{ ?>
                <option value="">-Seleccione-</option>
                             <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pob']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['Id_pob'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['Nom_pob'];?>
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
    </div> 
</div>
</fieldset>
<fieldset>
    <legend>Información financiera</legend>
    <div class="form-horizontal well col-lg-6 small">
        <div class="form-horizontal well col-lg-5">         
            <label class="control-label">Precio: </label><input type="text" name="prec" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['prec'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Prec_in'] : $tmp);?>
" placeholder="Precio" class="form-control input-sm"/>
            <label class="control-label">Cargas: </label><input type="text" name="carga" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['carga'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Carg_in'] : $tmp);?>
" placeholder="Carga" class="form-control input-sm"/>
            <label class="control-label">Impuestos: </label><input type="text" name="imp" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['imp'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Imp_in'] : $tmp);?>
" placeholder="Impuesto" class="form-control input-sm"/>           
        </div>
    </div>
</fieldset>         
<fieldset>
    <legend>Detalle</legend>
    <div class="form-horizontal well col-md-4 small">       
        <div class="form-group well-sm small">
            <label class="control-label">Estado del inmueble:</label>
            <select name="ein" id="ein" class="form-control input-sm">
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_ein']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_ein'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_ein'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['ei'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ei']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ein']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ei']->key => $_smarty_tpl->tpl_vars['ei']->value){
$_smarty_tpl->tpl_vars['ei']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['ei']->value['Id_ein']!=$_smarty_tpl->tpl_vars['datos']->value['Id_ein']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['ei']->value['Id_ein'];?>
"><?php echo $_smarty_tpl->tpl_vars['ei']->value['Nom_ein'];?>
</option>
                    <?php }?>
                <?php } ?>
            <?php }else{ ?>
                <option value="">-Seleccione-</option>
                             <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ein']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['ei']->value['Id_ein'];?>
"><?php echo $_smarty_tpl->tpl_vars['ei']->value['Nom_ein'];?>
</option>
                             <?php } ?>
            <?php }?>            
         </select>
            <label class="control-label">Piso: </label><input type="text" name="piso" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['piso'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Piso_in'] : $tmp);?>
" placeholder="" class="form-control input-sm"/>
            <div class="row">
            <div class="col-xs-8 col-xs-6 col-xs-6"><label class="control-label">N° de pisos: </label><input type="text" name="npisos" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['npisos'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Npiso_in'] : $tmp);?>
" placeholder="N° de pisos" class="form-control input-sm"/></div>
            <div class="col-xs-6 col-sm-6"><label class="control-label">N° habitaciones: </label><input type="text" name="nhab" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['nhab'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Nhab_in'] : $tmp);?>
" placeholder="" class="form-control input-sm"/></div>    
            </div>
            <div class="row">
            <div class="col-xs-6 col-sm-6"><label class="control-label">N° dormitorios: </label><input type="text" name="ndor" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['ndor'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Ndor_in'] : $tmp);?>
" placeholder="" class="form-control input-sm"/></div>
            <div class="col-xs-6 col-sm-6"><label class="control-label">N° baños: </label><input type="text" name="nban" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['nban'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Nba_in'] : $tmp);?>
" placeholder="" class="form-control input-sm"/></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6"><label class="control-label">Mts habitable:</label><input type="text" name="mhab" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['mhab'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Mtsh_in'] : $tmp);?>
" placeholder="Mts habitables" class="form-control input-sm"/></div>
            <div class="col-xs-6 col-sm-6"><label class="control-label">Mts terreno: </label><input type="text" name="mterr" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['mterr'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Mtst_in'] : $tmp);?>
" placeholder="Mts terreno" class="form-control input-sm"/></div>
            <!--<label class="control-label">Fch. Disponibilidad: </label><input type="text" id="datepicker1" name="fchdis" value="" placeholder="" class="form-control input-sm"/>    -->
        </div>    
    </div>
</fieldset>
<fieldset class="content-extra">
    <legend>Extras</legend>
    <div>   
        <?php  $_smarty_tpl->tpl_vars['ex'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ex']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['extra']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ex']->key => $_smarty_tpl->tpl_vars['ex']->value){
$_smarty_tpl->tpl_vars['ex']->_loop = true;
?>            
            <?php if ($_smarty_tpl->tpl_vars['ex']->value['tickeado']==1){?>
                <div class="extra"  style="background-color: green">
                    <input type="checkbox" name="extra[]" value="<?php echo $_smarty_tpl->tpl_vars['ex']->value['Id_extra'];?>
" checked="checked"/> <?php echo $_smarty_tpl->tpl_vars['ex']->value['Nom_extra'];?>

                </div>  
            <?php }else{ ?>
                <div class="extra">
                    <input type="checkbox" name="extra[]" value="<?php echo $_smarty_tpl->tpl_vars['ex']->value['Id_extra'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['ex']->value['Nom_extra'];?>

                </div>  
            <?php }?>           
        <?php } ?>
    </div>
</fieldset>         
<fieldset class="form-horizontal well">
    <legend>Descripción</legend>
    <div class="form-horizontal"> 
        <textarea class="form-control" name="desc"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['desc'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Desc_in'] : $tmp);?>
</textarea>
    </div>
</fieldset>         
<fieldset class="form-horizontal well">
    <legend>Información publicación</legend>
    <div class="form-horizontal well col-lg-6 small"> 
        <label class="control-label">Estado publicación:</label>
            <select name="eavi" id="eavi" class="form-control input-sm">
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_eaviso']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_eaviso'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_eaviso'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['ea'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ea']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eavi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ea']->key => $_smarty_tpl->tpl_vars['ea']->value){
$_smarty_tpl->tpl_vars['ea']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['ea']->value['Id_eaviso']!=$_smarty_tpl->tpl_vars['datos']->value['Id_eaviso']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['ea']->value['Id_eaviso'];?>
"><?php echo $_smarty_tpl->tpl_vars['ea']->value['Nom_eaviso'];?>
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
                                <option value="<?php echo $_smarty_tpl->tpl_vars['ea']->value['Id_eaviso'];?>
"><?php echo $_smarty_tpl->tpl_vars['ea']->value['Nom_eaviso'];?>
</option>
                             <?php } ?>
            <?php }?>            
            </select>
        <label class="control-label">Eslogan:</label>
            <select name="esl" id="esl" class="form-control input-sm">
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_eaviso']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_eslogan'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_eslogan'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['es'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['es']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['esl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['es']->key => $_smarty_tpl->tpl_vars['es']->value){
$_smarty_tpl->tpl_vars['es']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['es']->value['Id_eslogan']!=$_smarty_tpl->tpl_vars['datos']->value['Id_eslogan']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['es']->value['Id_eslogan'];?>
"><?php echo $_smarty_tpl->tpl_vars['es']->value['Nom_eslogan'];?>
</option>
                    <?php }?>
                <?php } ?>
            <?php }else{ ?>
                <option value="">-Seleccione-</option>
                             <?php  $_smarty_tpl->tpl_vars['es'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['es']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['esl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['es']->key => $_smarty_tpl->tpl_vars['es']->value){
$_smarty_tpl->tpl_vars['es']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['es']->value['Id_eslogan'];?>
"><?php echo $_smarty_tpl->tpl_vars['es']->value['Nom_eslogan'];?>
</option>
                             <?php } ?>
            <?php }?>           
            </select>
                <label class="control-label">Fch. creación: </label><input type="date" id="datepicker2" name="fchc" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['fchc'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['fchc'] : $tmp);?>
" readonly="readonly" style="width: 100px;margin: 15px;" placeholder="00-00-0000" class="form-control input-sm"/>        
                <label class="control-label">Fch. finalización: </label><input type="date" id="datepicker3" name="fchf" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['fchf'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['fchf'] : $tmp);?>
" readonly="readonly" style="width: 100px;margin: 15px;" placeholder="00-00-0000" class="form-control input-sm"/>    
    </div>
</fieldset>              
 <br/>
    <input id="editin" class="btn btn-small btn-primary" type="submit" value="Guardar" onclick='return cb(this);'/>

</form>         
 <br/>         
 <div class="form-horizontal well-sm">        
  <fieldset>
    <legend>Imágenes</legend>
    <form name="form2" enctype="multipart/form-data" method="post">
        <input type="hidden" name="subirimg" value="1" />
        <input type="hidden" name="refin" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Ref_in'];?>
" />
        <div class="form-group well small">
            <input type="file" name="img[]"/>
            <input type="file" name="img[]"/>
            <input type="file" name="img[]"/>
            <br/>
             <input id="newimg" class="btn btn-small btn-primary" type="submit" value="Subir imagen" onclick='return si(this);'/>    
        </div>
    </form> 
<?php if (isset($_smarty_tpl->tpl_vars['iin']->value)&&count($_smarty_tpl->tpl_vars['iin']->value)){?>
<?php  $_smarty_tpl->tpl_vars['datosimg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datosimg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['iin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datosimg']->key => $_smarty_tpl->tpl_vars['datosimg']->value){
$_smarty_tpl->tpl_vars['datosimg']->_loop = true;
?>
    
    <div class="producto" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <div class="imagen_ext">
            <div class="imagen_inter">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagesInm/originales/thumbs/thumb_ms_<?php echo $_smarty_tpl->tpl_vars['datosimg']->value['Nom_img'];?>
"/>             
                    
            </div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
inmueble/administrar/delImageIn/<?php echo $_smarty_tpl->tpl_vars['datosimg']->value['Id_img'];?>
/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Ref_in'];?>
/<?php echo $_smarty_tpl->tpl_vars['datosimg']->value['Nom_img'];?>
" onclick='return di(this);'>
                    <i title="eliminar" class="glyphicon glyphicon-trash"> </i>
                </a>
        </div>

    </div>
<?php } ?>
<?php }else{ ?>
            <p><strong>No posee imagen</strong></p>
<?php }?> 
    </fieldset>
 </div>
    
         <br/>
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tienda/administrar"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/volver.gif" width="30" height="20" title="Volver"/></a></p>
</div>
</div><?php }} ?>