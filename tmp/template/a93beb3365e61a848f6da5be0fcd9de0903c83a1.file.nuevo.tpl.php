<?php /* Smarty version Smarty-3.1.11, created on 2015-08-24 01:57:10
         compiled from "C:\xampp\htdocs\vitricasas\modules\inmueble\views\administrar\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1903855b6f16483adc9-89106598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a93beb3365e61a848f6da5be0fcd9de0903c83a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitricasas\\modules\\inmueble\\views\\administrar\\nuevo.tpl',
      1 => 1440365643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1903855b6f16483adc9-89106598',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55b6f16497b9d3_64270600',
  'variables' => 
  array (
    'datos' => 0,
    'ttra' => 0,
    't' => 0,
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
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b6f16497b9d3_64270600')) {function content_55b6f16497b9d3_64270600($_smarty_tpl) {?><div class="container">
<h3>Nuevo inmueble</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear este nuevo inmueble?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<br/>
<form enctype="multipart/form-data" method="post">
    <input type="hidden" name="guardar" value="1" />
<fieldset>
<legend>Datos Inmueble</legend>
<div class="form-horizontal well col-lg-6 small">
    <label class="control-label">Ref: </label><input type="text" name="ref" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['ref'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese código único del aviso" class="form-control input-sm"/>
    <label class="control-label">Título: </label><input type="text" name="tit" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['tit'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese título del aviso" class="form-control input-sm"/>
    <label class="control-label">Tipo transacción:</label>
        <select name="ttra" id="ttra" class="form-control input-sm">
            <option value="">-Seleccione-</option>
            <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ttra']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['Id_ttran'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['Nom_ttran'];?>
</option>
            <?php } ?>
        </select>
    <label class="control-label">Tipo inmueble:</label>
        <select name="tin" id="tin" class="form-control input-sm">
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
        </select>
</div>
</fieldset>
<fieldset>
    <legend>Localización</legend>
    <div class="form-horizontal well col-lg-6 small">
        <label class="control-label">Dirección: </label><input type="text" name="dir" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['dir'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese dirección del inmueble" class="form-control input-sm"/>
        <label class="control-label">Ciudad: </label>
        <select name="ciu" id="ciu" class="form-control input-sm">
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
        </select>
        <label class="control-label">Población: </label>
        <select name="pob" id="pob" class="form-control input-sm">
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
        </select>
        <label class="control-label">Sector: </label>
        <select name="sec" id="sec" class="form-control input-sm">
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
        </select>
    </div>
</fieldset>
<fieldset>
    <legend>Información financiera</legend>
    <div class="form-horizontal well col-lg-6 small">
        <div class="form-horizontal well col-lg-3">
        <label class="control-label">Precio: </label><input type="text" name="prec" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['prec'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Precio" class="form-control input-sm"/>
        <label class="control-label">Cargas: </label><input type="text" name="carga" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['carga'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Carga" class="form-control input-sm"/>
        <label class="control-label">Impuestos: </label><input type="text" name="imp" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['imp'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Impuesto" class="form-control input-sm"/>    
        </div>
    </div>
</fieldset>
<fieldset>
    <legend>Detalle</legend>
    <div class="form-horizontal well col-lg-6 small">       
        <div class="col-sm-4">
            <label class="control-label">Estado del inmueble:</label>
            <select name="ein" id="ein" class="form-control input-sm">
                <option value="">-Seleccione-</option>
                <?php  $_smarty_tpl->tpl_vars['ei'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ei']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ein']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ei']->key => $_smarty_tpl->tpl_vars['ei']->value){
$_smarty_tpl->tpl_vars['ei']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['ei']->value['Id_ein'];?>
"><?php echo $_smarty_tpl->tpl_vars['ei']->value['Nom_ein'];?>
</option>
                <?php } ?>
            </select>
            <label class="control-label">Piso: </label><input type="text" name="piso" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['piso'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="" class="form-control input-sm"/>
            <div class="row">
            <div class="col-xs-8 col-xs-6 col-xs-6"><label class="control-label">N° de pisos: </label><input type="text" name="npisos" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['npisos'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="N° de pisos" class="form-control input-sm"/></div>
            <div class="col-xs-6 col-sm-6"><label class="control-label">N° habitaciones: </label><input type="text" name="nhab" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nhab'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="" class="form-control input-sm"/></div>    
            </div>
            <div class="row">
            <div class="col-xs-6 col-sm-6"><label class="control-label">N° dormitorios: </label><input type="text" name="ndor" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['ndor'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="" class="form-control input-sm"/></div>
            <div class="col-xs-6 col-sm-6"><label class="control-label">N° baños: </label><input type="text" name="nban" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nban'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="" class="form-control input-sm"/></div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="col-xs-6 col-sm-6"><label class="control-label">Mts habitable:</label><input type="text" name="mhab" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['mhab'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Mts habitables" class="form-control input-sm"/></div>
            <div class="col-xs-6 col-sm-6"><label class="control-label">Mts terreno: </label><input type="text" name="mterr" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['mterr'])===null||$tmp==='' ? '' : $tmp);?>
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
            <div class="extra"><input type="checkbox" name="extra[]" value="<?php echo $_smarty_tpl->tpl_vars['ex']->value['Id_extra'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['ex']->value['Nom_extra'];?>
</div>           
        <?php } ?>
    </div>
</fieldset>
<fieldset class="form-horizontal well">
    <legend>Descripción</legend>
    <div class="form-horizontal"> 
        <textarea class="form-control" name="desc"></textarea>
    </div>
</fieldset>
<fieldset class="form-horizontal well">
    <legend>Información publicación</legend>
    <div class="form-horizontal well col-lg-6 small"> 
        <label class="control-label">Estado publicación:</label>
            <select name="eavi" id="eavi" class="form-control input-sm">
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
            </select>
        <label class="control-label">Eslogan:</label>
            <select name="esl" id="esl" class="form-control input-sm">
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
            </select>
                <label class="control-label">Fch. creación: </label><input type="date" id="datepicker2" name="fchc" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['fchc'])===null||$tmp==='' ? '' : $tmp);?>
" readonly="readonly" style="width: 100px;margin: 15px;" placeholder="00-00-0000" class="form-control input-sm"/>        
                <label class="control-label">Fch. finalización: </label><input type="date" id="datepicker3" name="fchf" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['fchf'])===null||$tmp==='' ? '' : $tmp);?>
" readonly="readonly" style="width: 100px;margin: 15px;" placeholder="00-00-0000" class="form-control input-sm"/>    
    </div>
</fieldset>        
<fieldset>
<legend>Imágenes</legend>
<div class="form-horizontal well">
    <input type="file" name="image[]"/>
    <input type="file" name="image[]"/>
    <input type="file" name="image[]"/>
</div>
</fieldset>   
    <input id="newprod" class="btn btn-small btn-primary" type="submit" value="Guardar" onclick='return cb(this);'/>
</form>

</div><?php }} ?>