<?php /* Smarty version Smarty-3.1.11, created on 2018-05-10 01:33:36
         compiled from "C:\xampp\htdocs\covecino\modules\transa\views\per\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:268435a2d71001e7b59-92328386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d0040e8408256e8197383d307e761f7248ad070' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\transa\\views\\per\\editar.tpl',
      1 => 1525926788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268435a2d71001e7b59-92328386',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a2d71007c8f53_74024732',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'rut' => 0,
    'datos' => 0,
    'datos1' => 0,
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
<?php if ($_valid && !is_callable('content_5a2d71007c8f53_74024732')) {function content_5a2d71007c8f53_74024732($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/per">Lista personas</a></li>
        <li class="active">Editar persona</li>
    </ol>
<h3>Editar persona: </h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta persona?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<?php echo $_smarty_tpl->tpl_vars['rut']->value;?>

<div class="col-md-4">
<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <input type="hidden" name="rut" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Rut_per'];?>
" />
    <div class="form-group">
        <label class="control-label">Rut:</label>
        <input type="text" name="rutper" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['rut'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Rut_per'] : $tmp);?>
" class="form-control" disabled="disabled"/>         
    </div>
    <div class="form-group">
        <label class="control-label">Primer Nombre:</label>  
        <input type="text" name="nom1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['nom1'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Nom1_per'] : $tmp);?>
" placeholder="Ingrese primer nombre" class="form-control"/></td>       
    </div>
    <div class="form-group">
        <label class="control-label">Segundo Nombre:</label>  
        <input type="text" name="nom2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['nom2'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Nom2_per'] : $tmp);?>
" placeholder="Ingrese segundo nombre" class="form-control"/></td>       
    </div>
    <div class="form-group">
        <label class="control-label">Primer apellido:</label>
        <input type="text" name="ape1" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['ape1'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Ape1_per'] : $tmp);?>
" placeholder="Ingrese primer apellido" class="form-control"/></td>       
    </div>
    <div class="form-group">
        <label class="control-label">Segundo apellido:</label>
        <input type="text" name="ape2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['ape2'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Ape2_per'] : $tmp);?>
" placeholder="Ingrese segundo apellido" class="form-control"/></td>       
    </div>
    <div class="form-group">
        <label class="control-label">Fono:</label>
        <input type="text" name="fono" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['fono'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Fono_per'] : $tmp);?>
" placeholder="Ingrese fono" class="form-control"/></td>       
    </div>
    <fieldset>
    <legend>Condominio y relación</legend>
    <div class="form-horizontal well col-lg-12 small">
        <div class="form-group">
        <label class="control-label">Condominio:</label>
        <select name="cond" id="cond" class="form-control">
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_cond']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_cond'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cond'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['co'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['co']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cond']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['co']->key => $_smarty_tpl->tpl_vars['co']->value){
$_smarty_tpl->tpl_vars['co']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['co']->value['Id_cond']!=$_smarty_tpl->tpl_vars['datos']->value['Id_cond']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['co']->value['Id_cond'];?>
"><?php echo $_smarty_tpl->tpl_vars['co']->value['Nom_cond'];?>
</option>
                    <?php }?>
                <?php } ?>
            <?php }else{ ?>
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
            <?php }?>            
        </select>
        </div>
        <div class="form-group">
        <label class="control-label">Estado: <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Si la persona vive o no en el condiminio."></i></label>
        <select name="estre" id="estre" class="form-control">

            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_estre']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_estre'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_estre'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['er'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['er']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estre']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['er']->key => $_smarty_tpl->tpl_vars['er']->value){
$_smarty_tpl->tpl_vars['er']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['er']->value['Id_estre']!=$_smarty_tpl->tpl_vars['datos']->value['Id_estre']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['er']->value['Id_estre'];?>
"><?php echo $_smarty_tpl->tpl_vars['er']->value['Nom_estre'];?>
</option>
                    <?php }?>
                <?php } ?>
                <option value="">-Seleccione-</option>
            <?php }else{ ?>
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
            <?php }?>            
        </select>
        </div> 
        <div class="form-group">
        <label class="control-label">Actividad: <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Si realiza alguna función o trabajo en el condominio. La persona puede o no residir en el condominio para esta opción."></i></label>
        <select name="act" id="act" class="form-control">

            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_act']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_act'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_act'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['ac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ac']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['act']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ac']->key => $_smarty_tpl->tpl_vars['ac']->value){
$_smarty_tpl->tpl_vars['ac']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['ac']->value['Id_act']!=$_smarty_tpl->tpl_vars['datos']->value['Id_act']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['ac']->value['Id_act'];?>
"><?php echo $_smarty_tpl->tpl_vars['ac']->value['Nom_act'];?>
</option>
                    <?php }?>
                <?php } ?>
                <option value="">-Seleccione-</option>
            <?php }else{ ?>
                <option value="">-Seleccione-</option>
                             <?php  $_smarty_tpl->tpl_vars['ac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ac']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['act']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ac']->key => $_smarty_tpl->tpl_vars['ac']->value){
$_smarty_tpl->tpl_vars['ac']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['ac']->value['Id_act'];?>
"><?php echo $_smarty_tpl->tpl_vars['ac']->value['Nom_act'];?>
</option>
                             <?php } ?>
            <?php }?>            
        </select>
        </div>
    </div>
    </fieldset>
        <br/><br/>
    <p><?php if ($_smarty_tpl->tpl_vars['volver']->value==1){?>
            <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
buscar/run"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>    
       <?php }else{ ?>
            <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/per"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>    
       <?php }?>    
    <input type="reset" value="Limpiar" class="btn btn-small btn-primary"/>
    <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_per')){?><input id="newcli" class="btn btn-small btn-primary" type="submit" value="Guardar" onclick='return cb(this);'/><?php }?>
    </p>
    <br/>
</form>
</div>
</div><?php }} ?>