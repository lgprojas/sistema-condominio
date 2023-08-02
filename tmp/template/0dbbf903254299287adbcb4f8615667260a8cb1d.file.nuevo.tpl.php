<?php /* Smarty version Smarty-3.1.11, created on 2017-11-17 04:23:16
         compiled from "C:\xampp\htdocs\icondo\modules\transa\views\viv\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304165a0a51a9f2c8f6-21334247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dbbf903254299287adbcb4f8615667260a8cb1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\transa\\views\\viv\\nuevo.tpl',
      1 => 1510888986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304165a0a51a9f2c8f6-21334247',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a0a51aa0efcc9_72394743',
  'variables' => 
  array (
    'datos' => 0,
    'calleblock' => 0,
    'cb' => 0,
    'esta' => 0,
    'e' => 0,
    'cond' => 0,
    'c' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0a51aa0efcc9_72394743')) {function content_5a0a51aa0efcc9_72394743($_smarty_tpl) {?><div class="container">
<h3>Nueva vivienda</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear esta nueva vivienda?")) {
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
         <label class="control-label">Número vivienda: </label>
         <input class="form-control" type="text" name="num" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['num'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese número vivienda"/>      
    </div>
    <div class="form-group">
        <label class="control-label">Calle/Block:</label>
        <select name="calleblock" class="form-control">   
                <option value="">-Seleccione-</option>
                <?php  $_smarty_tpl->tpl_vars['cb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['calleblock']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cb']->key => $_smarty_tpl->tpl_vars['cb']->value){
$_smarty_tpl->tpl_vars['cb']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['cb']->value['Id_cb'];?>
"><?php echo $_smarty_tpl->tpl_vars['cb']->value['Nom_cb'];?>
</option>
                <?php } ?>
        </select>
    </div>   
    <div class="form-group">
        <label class="control-label">Estacionamiento:</label>
        <select name="esta" class="form-control">  
                <option value="">-Seleccione-</option>
                <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['esta']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value['Id_esta'];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['Nom_esta'];?>
</option>
                <?php } ?>
        </select>
    </div>     
    <div class="form-group">
        <label class="control-label">Condominio:</label>
        <select name="cond" class="form-control">
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cond']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_cond'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_cond'];?>
</option>
                <?php } ?>
        </select>
    </div>   
    <br/>
    <br/>
    <p>
        <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/viv"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>
        <input type="reset" value="Limpiar" class="btn btn-small btn-primary"/>
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>       
    </p>
</form>
        <br/>
        <p></p>
</div>
</div><?php }} ?>