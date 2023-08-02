<?php /* Smarty version Smarty-3.1.11, created on 2018-05-10 01:17:37
         compiled from "C:\xampp\htdocs\covecino\views\acl\editar_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51265af3c4e02881b1-58767526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b45377b138455c5d459808420350e6eacf94c117' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\views\\acl\\editar_role.tpl',
      1 => 1525925589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51265af3c4e02881b1-58767526',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5af3c4e0705727_06548556',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af3c4e0705727_06548556')) {function content_5af3c4e0705727_06548556($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Lista roles</a></li>
        <li class="active">Editar rol</li>
    </ol>
    <h2>Editar rol</h2>
<form id="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Nombre role:</label>
            <input type="texto" name="nom_role" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Nom_role'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_role'];?>
<?php }?>" style="width:180px;" class="form-control"/>
        </div>
    <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>   <input type="submit" class="btn btn-primary" value="Guardar" /></p>
    </div>
</form>
</div><?php }} ?>