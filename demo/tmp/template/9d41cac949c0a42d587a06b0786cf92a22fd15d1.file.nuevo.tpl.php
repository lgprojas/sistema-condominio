<?php /* Smarty version Smarty-3.1.11, created on 2017-04-17 01:06:31
         compiled from "C:\xampp\htdocs\munku\modules\ref\views\cat\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1061658f44d5744c956-78655932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d41cac949c0a42d587a06b0786cf92a22fd15d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\ref\\views\\cat\\nuevo.tpl',
      1 => 1491842903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1061658f44d5744c956-78655932',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58f44d5768da92_03258131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f44d5768da92_03258131')) {function content_58f44d5768da92_03258131($_smarty_tpl) {?><div class="container">
<h3>Nueva categoría</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear esta nueva categoría?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<div class="form-horizontal col-lg-4 small">
<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar" />    
    <div class="form-group">
         <label class="control-label">Tipo producto:</label>  
         <input class="form-control" type="text" name="cat" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cat'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese nueva categoría"/>       
    </div>    
    <p>
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>
    </p>
</form>
        <br/>
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cat"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/volver.gif" width="30" height="20" title="Volver"/></a></p>
</div>
</div><?php }} ?>