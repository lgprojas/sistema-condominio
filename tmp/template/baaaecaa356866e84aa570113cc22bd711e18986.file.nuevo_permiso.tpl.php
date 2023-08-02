<?php /* Smarty version Smarty-3.1.11, created on 2017-04-26 18:06:41
         compiled from "C:\xampp\htdocs\munku\views\acl\nuevo_permiso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6838590119f1e91169-23120054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baaaecaa356866e84aa570113cc22bd711e18986' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\views\\acl\\nuevo_permiso.tpl',
      1 => 1493244387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6838590119f1e91169-23120054',
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
  'unifunc' => 'content_590119f1f2c050_33304949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590119f1f2c050_33304949')) {function content_590119f1f2c050_33304949($_smarty_tpl) {?><div class="container">
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