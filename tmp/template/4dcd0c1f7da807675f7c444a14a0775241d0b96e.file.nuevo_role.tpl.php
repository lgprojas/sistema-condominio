<?php /* Smarty version Smarty-3.1.11, created on 2018-05-10 01:15:31
         compiled from "C:\xampp\htdocs\covecino\views\acl\nuevo_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75515af3c7631bf978-90552326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dcd0c1f7da807675f7c444a14a0775241d0b96e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\views\\acl\\nuevo_role.tpl',
      1 => 1525925628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75515af3c7631bf978-90552326',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5af3c76321a208_79368576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af3c76321a208_79368576')) {function content_5af3c76321a208_79368576($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Lista roles</a></li>
        <li class="active">Nuevo rol</li>
    </ol>
<h2>Nuevo Rol</h2>

<form name="form1" action="" method="post">
    <input type="hidden" name="guardar" value="1" /> 
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Role:</label> 
            <input type="text" name="role" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['role'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control"/>
        </div> 
        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>   <input type="submit" value="Guardar" class="btn btn-primary"/></p>
    </div>
</form>
</div><?php }} ?>