<?php /* Smarty version Smarty-3.1.11, created on 2017-04-10 12:47:26
         compiled from "C:\xampp\htdocs\munku\modules\ref\views\catps\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2661058ebb654dec467-10558572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '831392f84157ff37debf7acc5dc9baed4a70831c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\ref\\views\\catps\\nuevo.tpl',
      1 => 1491842838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2661058ebb654dec467-10558572',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58ebb654e74c60_98277158',
  'variables' => 
  array (
    'datos' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ebb654e74c60_98277158')) {function content_58ebb654e74c60_98277158($_smarty_tpl) {?><div class="container">
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
         <input class="form-control" type="text" name="catps" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['catps'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese nueva categoría"/>       
    </div>    
    <p>
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>
    </p>
</form>
        <br/>
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/catps"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/volver.gif" width="30" height="20" title="Volver"/></a></p>
</div>
</div><?php }} ?>