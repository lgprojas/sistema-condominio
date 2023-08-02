<?php /* Smarty version Smarty-3.1.11, created on 2016-01-06 02:38:51
         compiled from "C:\xampp\htdocs\munku\modules\referen\views\cat\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24096568c7007ee24d3-06365761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3da39bf86bd64ddba7a600160bdc57f5eb7e1e6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\referen\\views\\cat\\nuevo.tpl',
      1 => 1452044324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24096568c7007ee24d3-06365761',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_568c7008029773_58693932',
  'variables' => 
  array (
    'datos' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568c7008029773_58693932')) {function content_568c7008029773_58693932($_smarty_tpl) {?><div class="container">
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
referen/cat"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/volver.gif" width="30" height="20" title="Volver"/></a></p>
</div><?php }} ?>