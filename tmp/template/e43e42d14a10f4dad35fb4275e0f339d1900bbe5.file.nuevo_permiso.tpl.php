<?php /* Smarty version Smarty-3.1.11, created on 2018-05-14 11:07:15
         compiled from "C:\xampp\htdocs\covecino\views\acl\nuevo_permiso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199085a2b67caa906c5-91650497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e43e42d14a10f4dad35fb4275e0f339d1900bbe5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\views\\acl\\nuevo_permiso.tpl',
      1 => 1525925520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199085a2b67caa906c5-91650497',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a2b67cb0092e1_52738323',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2b67cb0092e1_52738323')) {function content_5a2b67cb0092e1_52738323($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Lista permisos</a></li>
        <li class="active">Nuevo permiso</li>
    </ol>
<h2>Nuevo Permiso</h2>

<form name="form1" action="" method="post">
    <input type="hidden" name="guardar" value="1" />
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Nombre permiso:</label>
            <input type="text" name="nom_perm" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nom_perm'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control"/>
        </div> 
        <div class="form-group">
            <label class="control-label">Key permiso: </label>
            <input type="text" name="key_perm" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['key_perm'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control"/>
        </div>
    
        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>   
            <input type="submit" value="Guardar" class="btn btn-primary"/></p>
    </div>
</form>
</div><?php }} ?>