<?php /* Smarty version Smarty-3.1.11, created on 2016-01-06 16:04:50
         compiled from "C:\xampp\htdocs\munku\modules\referen\views\scat\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8701568cb51f72c966-38181611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a47d3553906ba21872f687ba484ecdc2799aa762' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\referen\\views\\scat\\nuevo.tpl',
      1 => 1452090250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8701568cb51f72c966-38181611',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_568cb51f7c2493_83922172',
  'variables' => 
  array (
    'cat' => 0,
    'ca' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568cb51f7c2493_83922172')) {function content_568cb51f7c2493_83922172($_smarty_tpl) {?><div class="container">
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

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar" />
    <div class="form-horizontal col-lg-6 small">
    <label class="control-label">Categoría: </label>
        <select name="cat" id="cat" class="form-control input-sm">
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
        <br/>
    <p>
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>
    </p>
</form>
        <br/>
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
referen/scat"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/volver.gif" width="30" height="20" title="Volver"/></a></p>
</div>
</div><?php }} ?>