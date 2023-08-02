<?php /* Smarty version Smarty-3.1.11, created on 2018-05-15 11:02:36
         compiled from "C:\xampp\htdocs\covecino\modules\transa\views\vehi\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174665a2dd10b80b766-09632991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de6ff2c8f83955be4ed059b89da4b832d5e37aeb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\transa\\views\\vehi\\editar.tpl',
      1 => 1526392937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174665a2dd10b80b766-09632991',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a2dd10b8bb2c4_84247555',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'sadmin' => 0,
    'cond' => 0,
    'co' => 0,
    'datos1' => 0,
    'mar' => 0,
    'ma' => 0,
    '_acl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2dd10b8bb2c4_84247555')) {function content_5a2dd10b8bb2c4_84247555($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/vehi">Lista vehículo</a></li>
        <li class="active">Editar vehículo</li>
    </ol>
<h3>Editar vehículo</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar este vehículo?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<div class="col-md-4">
<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_vehi'];?>
" />
    <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?>
    <fieldset>
    <legend>El Condominio</legend>
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
    </div>
    </fieldset>
    <?php }else{ ?>
    <input type="hidden" id="cond" name="cond" value="<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
"/>
    <?php }?>
    <fieldset>
    <legend>El Vehículo</legend>
    <div class="form-horizontal well col-lg-12 small">
    <div class="form-group">
        <label class="control-label">Patente:</label>  
        <input type="text" name="cod" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['cod'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Cod_vehi'] : $tmp);?>
" placeholder="Patente vehículo"  readonly="true" class="form-control"/></td>       
    </div>    
    <div class="form-group">
        <label class="control-label">Marca:</label>
        <select name="mar" id="mar" class="form-control">
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_marca']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_marca'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_marca'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['ma'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ma']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ma']->key => $_smarty_tpl->tpl_vars['ma']->value){
$_smarty_tpl->tpl_vars['ma']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['ma']->value['Id_marca']!=$_smarty_tpl->tpl_vars['datos']->value['Id_marca']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['ma']->value['Id_marca'];?>
"><?php echo $_smarty_tpl->tpl_vars['ma']->value['Nom_marca'];?>
</option>
                    <?php }?>
                <?php } ?>
            <?php }else{ ?>
                <option value="">-Seleccione-</option>
                             <?php  $_smarty_tpl->tpl_vars['ma'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ma']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ma']->key => $_smarty_tpl->tpl_vars['ma']->value){
$_smarty_tpl->tpl_vars['ma']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['ma']->value['Id_marca'];?>
"><?php echo $_smarty_tpl->tpl_vars['ma']->value['Nom_marca'];?>
</option>
                             <?php } ?>
            <?php }?>            
        </select>
    </div>  
    <div class="form-group">
        <label class="control-label">Modelo: </label>
        <select name="mod" id="mod" class="form-control">
            <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_modelo'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_modelo'];?>
</option>
        </select>
    </div> 
    <div class="form-group">
        <label class="control-label">Nota:</label> 
        <textarea name="desc" rows="3" cols="2" placeholder="Nota adicional.." class="form-control"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['desc'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Desc_vehi'] : $tmp);?>
</textarea>
    </div>
    </div>
    </fieldset>
        <br/>
        <p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/vehi" class="btn btn-default"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>
            <input type="reset" value="Limpiar" class="btn btn-small btn-primary"/>
            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_vehi')){?><input id="newcli" class="btn btn-small btn-primary" type="submit" value="Guardar" onclick='return cb(this);'/><?php }?>            
        </p>
</form>
</div>
</div><?php }} ?>