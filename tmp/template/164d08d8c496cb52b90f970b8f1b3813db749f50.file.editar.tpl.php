<?php /* Smarty version Smarty-3.1.11, created on 2017-11-27 04:36:28
         compiled from "C:\xampp\htdocs\icondo\modules\transa\views\per\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1194159dedeacc60688-38916262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '164d08d8c496cb52b90f970b8f1b3813db749f50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\transa\\views\\per\\editar.tpl',
      1 => 1511753780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1194159dedeacc60688-38916262',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59dedeacdaf303_92694335',
  'variables' => 
  array (
    'rut' => 0,
    'datos' => 0,
    'datos1' => 0,
    'cond' => 0,
    'co' => 0,
    'tper' => 0,
    'tp' => 0,
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
    'volver' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dedeacdaf303_92694335')) {function content_59dedeacdaf303_92694335($_smarty_tpl) {?><div class="container">
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
        <label class="control-label">Tipo persona:</label>
        <select name="tper" id="tper" class="form-control">

            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_tper']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_tper'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_tper'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['tp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tper']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tp']->key => $_smarty_tpl->tpl_vars['tp']->value){
$_smarty_tpl->tpl_vars['tp']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['tp']->value['Id_tper']!=$_smarty_tpl->tpl_vars['datos']->value['Id_tper']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['tp']->value['Id_tper'];?>
"><?php echo $_smarty_tpl->tpl_vars['tp']->value['Nom_tper'];?>
</option>
                    <?php }?>
                <?php } ?>
                <option value="">-Seleccione-</option>
            <?php }else{ ?>
                <option value="">-Seleccione-</option>
                             <?php  $_smarty_tpl->tpl_vars['tp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tper']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tp']->key => $_smarty_tpl->tpl_vars['tp']->value){
$_smarty_tpl->tpl_vars['tp']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['tp']->value['Id_tper'];?>
"><?php echo $_smarty_tpl->tpl_vars['tp']->value['Nom_tper'];?>
</option>
                             <?php } ?>
            <?php }?>            
        </select>
        </div> 
        <div class="form-group">
        <label class="control-label">Actividad:</label>
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
        
    <fieldset>
    <legend>Vivienda y relación</legend>
    <div class="form-horizontal well col-lg-12 small">
                <div class="form-group">
        <label class="control-label">Vivienda:</label>
        <select name="viv" id="viv" class="form-control">            
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_viv']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_viv'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cb'];?>
-<?php echo $_smarty_tpl->tpl_vars['datos']->value['Num_viv'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['viv']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['vv']->value['Id_viv']!=$_smarty_tpl->tpl_vars['datos']->value['Id_viv']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['Id_viv'];?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value['Nom_cb'];?>
-<?php echo $_smarty_tpl->tpl_vars['vv']->value['Num_viv'];?>
</option>
                    <?php }?>
                <?php } ?>
                <option value="">-Seleccione-</option>
            <?php }else{ ?>
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
            <?php }?>            
        </select>
        </div> 
        <div class="form-group">
        <label class="control-label">Relación con la vivienda:</label>
        <select name="trel" id="trel" class="form-control">
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_trel']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_trel'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_trel'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['tr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['trel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tr']->key => $_smarty_tpl->tpl_vars['tr']->value){
$_smarty_tpl->tpl_vars['tr']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['tr']->value['Id_trel']!=$_smarty_tpl->tpl_vars['datos']->value['Id_trel']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['tr']->value['Id_trel'];?>
"><?php echo $_smarty_tpl->tpl_vars['tr']->value['Nom_trel'];?>
</option>
                    <?php }?>
                <?php } ?>
                <option value="">-Seleccione-</option>
            <?php }else{ ?>
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
            <?php }?>            
        </select>
        </div>
    </div>
    </fieldset>
    <div class="form-group">
        <label class="control-label">Vehículo:</label>
        <select name="vehi" id="vehi" class="form-control">
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_vehi']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_vehi'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_marca'];?>
-<?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_modelo'];?>
 [<?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_vehi'];?>
]</option>
                <?php  $_smarty_tpl->tpl_vars['ve'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ve']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vehi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ve']->key => $_smarty_tpl->tpl_vars['ve']->value){
$_smarty_tpl->tpl_vars['ve']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['ve']->value['Id_vehi']!=$_smarty_tpl->tpl_vars['datos']->value['Id_vehi']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['ve']->value['Id_vehi'];?>
"><?php echo $_smarty_tpl->tpl_vars['ve']->value['Nom_marca'];?>
-<?php echo $_smarty_tpl->tpl_vars['ve']->value['Nom_modelo'];?>
 [<?php echo $_smarty_tpl->tpl_vars['ve']->value['Cod_vehi'];?>
]</option>
                    <?php }?>
                <?php } ?>
                <option value="">-Seleccione-</option>
            <?php }else{ ?>
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
            <?php }?>            
        </select>
        </div>
        <div class="form-group">
        <label class="control-label">Relación con el vehículo:</label>
        <select name="trelv" id="trelv" class="form-control">
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_trelv']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_trelv'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_trelv'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['trv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['trv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['trelv']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['trv']->key => $_smarty_tpl->tpl_vars['trv']->value){
$_smarty_tpl->tpl_vars['trv']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['trv']->value['Id_trelv']!=$_smarty_tpl->tpl_vars['datos']->value['Id_trelv']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['trv']->value['Id_trelv'];?>
"><?php echo $_smarty_tpl->tpl_vars['trv']->value['Nom_trelv'];?>
</option>
                    <?php }?>
                <?php } ?>
                <option value="">-Seleccione-</option>
            <?php }else{ ?>
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
            <?php }?>            
        </select>
        </div>
        <br/><br/>
    <p><?php if ($_smarty_tpl->tpl_vars['volver']->value==1){?>
            <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
buscar/run"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>    
       <?php }else{ ?>
            <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/per"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>    
       <?php }?>    
    <input type="reset" value="Limpiar" class="btn btn-small btn-primary"/>
    <input id="newcli" class="btn btn-small btn-primary" type="submit" value="Guardar" onclick='return cb(this);'/>
    </p>
    <br/>
</form>
</div>
</div><?php }} ?>