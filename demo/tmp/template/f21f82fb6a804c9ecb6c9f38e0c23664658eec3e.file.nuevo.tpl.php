<?php /* Smarty version Smarty-3.1.11, created on 2016-01-08 19:28:48
         compiled from "C:\xampp\htdocs\munku\modules\referen\views\sec\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22822568d9e460368e9-97257256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f21f82fb6a804c9ecb6c9f38e0c23664658eec3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\referen\\views\\sec\\nuevo.tpl',
      1 => 1452277605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22822568d9e460368e9-97257256',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_568d9e460f54f0_22421185',
  'variables' => 
  array (
    'reg' => 0,
    'r' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d9e460f54f0_22421185')) {function content_568d9e460f54f0_22421185($_smarty_tpl) {?><div class="container">
<h3>Nueva ciudad</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear este nuevo sector?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar" />
    <div class="form-horizontal col-lg-6 small">
    <label class="control-label">Región: </label>
        <select name="reg" id="reg" class="form-control input-sm">
            <option value="">-Seleccione región-</option>
            <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['Id_reg'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['Nom_reg'];?>
</option>
            <?php } ?>
        </select>
        <label class="control-label">Ciudad: </label>
        <select name="ciu" id="ciu" class="form-control input-sm">
            <option value="">--</option>
        </select>
         <label class="control-label">Cód. sector:</label>  
         <input class="form-control" type="text" name="csec" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['csec'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese código sector"/>       
       
         <label class="control-label">Sector:</label>  
         <input class="form-control" type="text" name="sec" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['sec'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese nombre sector"/>       
        <br/>
    <p>
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>
    </p>
</form>
        <br/>
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
referen/sec"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/volver.gif" width="30" height="20" title="Volver"/></a></p>
</div>
</div><?php }} ?>