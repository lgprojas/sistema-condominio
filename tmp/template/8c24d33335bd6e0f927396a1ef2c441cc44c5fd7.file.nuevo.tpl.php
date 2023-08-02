<?php /* Smarty version Smarty-3.1.11, created on 2017-12-03 00:56:28
         compiled from "C:\xampp\htdocs\icondo\modules\transa\views\per\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118059ded9c688f686-73478259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c24d33335bd6e0f927396a1ef2c441cc44c5fd7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\transa\\views\\per\\nuevo.tpl',
      1 => 1512258341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118059ded9c688f686-73478259',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59ded9c6e24f49_21623487',
  'variables' => 
  array (
    'datos' => 0,
    'cond' => 0,
    'co' => 0,
    'estre' => 0,
    'er' => 0,
    'act' => 0,
    'ac' => 0,
    'viv' => 0,
    'vv' => 0,
    'trel' => 0,
    'tr' => 0,
    'vehi' => 0,
    've' => 0,
    'trelv' => 0,
    'trv' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ded9c6e24f49_21623487')) {function content_59ded9c6e24f49_21623487($_smarty_tpl) {?><div class="container">
<h3>Nueva persona</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear esta nueva persona?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<div class="col-md-4">
<form name="form1" method="post" action="">
<input type="hidden" value="1" name="guardar" />    
    <div class="form-group">
        <label class="control-label">Rut:</label>
        <input type="text" name="rut" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['rut'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ej: 0198981-4" autofocus="" class="form-control"/>         
    </div>
    <div class="form-group">
        <label class="control-label">Primer Nombre:</label>  
        <input type="text" name="nom1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nom1'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese primer nombre" class="form-control"/></td>       
    </div>
    <div class="form-group">
        <label class="control-label">Segundo Nombre:</label>  
        <input type="text" name="nom2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nom2'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese segundo nombre"class="form-control"/></td>       
    </div>
    <div class="form-group">
        <label class="control-label">Primer apellido:</label>
        <input type="text" name="ape1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['ape1'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese primer apellido" class="form-control"/></td>       
    </div>
    <div class="form-group">
        <label class="control-label">Segundo apellido:</label>
        <input type="text" name="ape2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['ape2'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese segundo apellido" class="form-control"/></td>       
    </div>
    <div class="form-group">
        <label class="control-label">Fono:</label>
        <input type="text" name="fono" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['fono'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese fono" class="form-control"/></td>       
    </div>
    <fieldset>
    <legend>Condominio y relación</legend>
    <div class="form-horizontal well col-lg-12 small">
    <div class="form-group">
        <label class="control-label">Condominio:</label>
        <select name="cond" class="form-control">   
                <option value="">-Seleccione-</option>
                <?php  $_smarty_tpl->tpl_vars['co'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['co']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cond']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['co']->key => $_smarty_tpl->tpl_vars['co']->value){
$_smarty_tpl->tpl_vars['co']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['co']->value['Id_cond'];?>
"><?php echo $_smarty_tpl->tpl_vars['co']->value['Nom_cond'];?>
</option>
                <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label class="control-label">Estado:</label>
        <select name="estre" class="form-control">   
                <option value="">-Seleccione-</option>
                <?php  $_smarty_tpl->tpl_vars['er'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['er']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estre']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['er']->key => $_smarty_tpl->tpl_vars['er']->value){
$_smarty_tpl->tpl_vars['er']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['er']->value['Id_estre'];?>
"><?php echo $_smarty_tpl->tpl_vars['er']->value['Nom_estre'];?>
</option>
                <?php } ?>
        </select>
    </div>        
    <div class="form-group">
        <label class="control-label">Actividad en el condominio:</label>
        <select name="act" class="form-control">
                <?php  $_smarty_tpl->tpl_vars['ac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ac']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['act']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ac']->key => $_smarty_tpl->tpl_vars['ac']->value){
$_smarty_tpl->tpl_vars['ac']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['ac']->value['Id_act'];?>
"><?php echo $_smarty_tpl->tpl_vars['ac']->value['Nom_act'];?>
</option>
                <?php } ?>
        </select>
    </div> 
    </div>
    </fieldset>
    <fieldset>
    <legend>Vivienda y relación</legend>
    <div class="form-horizontal well col-lg-12 small">
    <div class="form-group">
        <label class="control-label">Vivienda:</label>
        <select name="viv" class="form-control">   
                <option value="">-Seleccione-</option>
                <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['viv']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['Id_viv'];?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value['Nom_cb'];?>
-<?php echo $_smarty_tpl->tpl_vars['vv']->value['Num_viv'];?>
</option>
                <?php } ?>
        </select>
    </div> 
    <div class="form-group">
        <label class="control-label">Relación con la vivienda:</label>
        <select name="trel" class="form-control">
                <option value="">-Seleccione-</option>
                <?php  $_smarty_tpl->tpl_vars['tr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['trel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tr']->key => $_smarty_tpl->tpl_vars['tr']->value){
$_smarty_tpl->tpl_vars['tr']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['tr']->value['Id_trel'];?>
"><?php echo $_smarty_tpl->tpl_vars['tr']->value['Nom_trel'];?>
</option>
                <?php } ?>
        </select>
    </div> 
    </div>
    </fieldset>
    <fieldset>
    <legend>Vehículo</legend>
    <div class="form-horizontal well col-lg-12 small">
    <div class="form-group">
        <label class="control-label">Vehículo:</label>
        <select name="vehi" class="form-control">   
                <option value="">-Seleccione-</option>
                <?php  $_smarty_tpl->tpl_vars['ve'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ve']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vehi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ve']->key => $_smarty_tpl->tpl_vars['ve']->value){
$_smarty_tpl->tpl_vars['ve']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['ve']->value['Id_vehi'];?>
"><?php echo $_smarty_tpl->tpl_vars['ve']->value['Nom_marca'];?>
-<?php echo $_smarty_tpl->tpl_vars['ve']->value['Nom_modelo'];?>
[<?php echo $_smarty_tpl->tpl_vars['ve']->value['Cod_vehi'];?>
]</option>
                <?php } ?>
        </select>
    </div> 
    <div class="form-group">
        <label class="control-label">Relación con vehículo:</label>
        <select name="trelv" class="form-control">   
                <option value="">-Seleccione-</option>
                <?php  $_smarty_tpl->tpl_vars['trv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['trv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['trelv']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['trv']->key => $_smarty_tpl->tpl_vars['trv']->value){
$_smarty_tpl->tpl_vars['trv']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['trv']->value['Id_trelv'];?>
"><?php echo $_smarty_tpl->tpl_vars['trv']->value['Nom_trelv'];?>
</option>
                <?php } ?>
        </select>
    </div> 
    </div>
    </fieldset>
    <br/>
    <p>
    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/per"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>    
    <input type="reset" value="Limpiar" class="btn btn-small btn-primary"/>
    <input id="newcli" class="btn btn-small btn-primary" type="submit" value="Guardar" onclick='return cb(this);'/>
    </p>
</form>
</div>
</div><?php }} ?>