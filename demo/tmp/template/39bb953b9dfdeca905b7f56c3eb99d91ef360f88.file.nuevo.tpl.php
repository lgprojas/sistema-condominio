<?php /* Smarty version Smarty-3.1.11, created on 2018-05-23 18:44:46
         compiled from "C:\xampp\htdocs\covecino\modules\transa\views\per\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54595a2cd17ac090f9-67735232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39bb953b9dfdeca905b7f56c3eb99d91ef360f88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\transa\\views\\per\\nuevo.tpl',
      1 => 1526339156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54595a2cd17ac090f9-67735232',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a2cd17b4ede65_58706312',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'run' => 0,
    'cond' => 0,
    'co' => 0,
    'estre' => 0,
    'er' => 0,
    'act' => 0,
    'ac' => 0,
    'volver' => 0,
    '_acl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2cd17b4ede65_58706312')) {function content_5a2cd17b4ede65_58706312($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/per">Lista personas</a></li>
        <li class="active">Nueva persona</li>
    </ol>
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
        <input type="text" name="rut" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['rut'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['run']->value : $tmp);?>
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
        <select name="cond" id="cond" class="form-control">   
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
        <label class="control-label">Estado: <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Si la persona vive o no en el condiminio."></i></label>
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
        <label class="control-label">Actividad en el condominio: <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Si realiza alguna función o trabajo en el condominio. La persona puede o no residir en el condominio para esta opción."></i></label>
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
    <br/>
    <p>
       <?php if ($_smarty_tpl->tpl_vars['volver']->value==1){?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
buscar/run" class="btn btn-default"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>
       <?php }else{ ?>
            <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/per"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>    
       <?php }?>
    <input type="reset" value="Limpiar" class="btn btn-small btn-primary"/>
    <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_per')){?><input id="newcli" class="btn btn-small btn-primary" type="submit" value="Guardar" onclick='return cb(this);'/><?php }?>
    </p>
</form>
    <br>
    <br>
</div>
</div><?php }} ?>