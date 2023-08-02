<?php /* Smarty version Smarty-3.1.11, created on 2017-04-11 18:10:10
         compiled from "C:\xampp\htdocs\munku\modules\ref\views\scat\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2817058eba5c9310695-78595706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9c627c7e9bc122f221908979be7a3a45ac51d2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\ref\\views\\scat\\nuevo.tpl',
      1 => 1491947852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2817058eba5c9310695-78595706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58eba5c93ac7f9_45086529',
  'variables' => 
  array (
    'cat' => 0,
    'ca' => 0,
    'datos' => 0,
    'ico' => 0,
    'i' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58eba5c93ac7f9_45086529')) {function content_58eba5c93ac7f9_45086529($_smarty_tpl) {?><div class="container">
<h3>Nueva subcategoría</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear esta nueva subcategoría?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<div class="form-horizontal col-lg-3 small">
<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar" />
    <label class="control-label">Categoría: </label>
        <select name="cat" id="" class="form-control input-sm">
            <option value="">-Seleccione categoría-</option>
            <?php  $_smarty_tpl->tpl_vars['ca'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ca']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ca']->key => $_smarty_tpl->tpl_vars['ca']->value){
$_smarty_tpl->tpl_vars['ca']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['ca']->value['Nom_cat'];?>
</option>
            <?php } ?>
        </select>       
         <label class="control-label">Subcategoría:</label>  
         <input class="form-control" type="text" name="scat" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['scat'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese nueva subcategoría"/>       
         
         <label class="control-label">Icono: </label>
        <select name="ico" id="ico" class="form-control input-sm">
            <option value="">-Seleccione icono-</option>
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ico']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['Id_ico'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['Nom_ico'];?>
</option>
            <?php } ?>
        </select><br/>
        
        <fieldset>
            <legend>Subcategoría especial</legend>
            <div class="form-horizontal well col-lg-12 small">
                <div class="input-group">
                    <label>Categoría:</label>
                        <select name="" id="cat" class="form-control input-sm">
                            <option value="">-Seleccione categoría-</option>
                            <?php  $_smarty_tpl->tpl_vars['ca'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ca']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ca']->key => $_smarty_tpl->tpl_vars['ca']->value){
$_smarty_tpl->tpl_vars['ca']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['ca']->value['Nom_cat'];?>
</option>
                            <?php } ?>
                        </select>
                </div>
                <div>
                    <label class="control-label">Producto/servicio: </label>
                    <select name="ps" id="ps" class="form-control input-sm">
                        <option value="">--</option>
                    </select>
                </div>               
            </div>
        </fieldset>
        
        <br/><br/>
    <p>
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>
    </p>
</form>
        <br/>
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/scat"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/volver.gif" width="30" height="20" title="Volver"/></a></p>
</div>
</div><?php }} ?>