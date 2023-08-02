<?php /* Smarty version Smarty-3.1.11, created on 2018-05-10 01:23:12
         compiled from "/home/covecino/public_html/views/acl/nuevo_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16508355315af3c930d2fa80-04387408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b07dd3167cee572ff58b175683ae03f48873333' => 
    array (
      0 => '/home/covecino/public_html/views/acl/nuevo_role.tpl',
      1 => 1525926026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16508355315af3c930d2fa80-04387408',
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
  'unifunc' => 'content_5af3c930dd09c9_72379804',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af3c930dd09c9_72379804')) {function content_5af3c930dd09c9_72379804($_smarty_tpl) {?><div class="container">
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