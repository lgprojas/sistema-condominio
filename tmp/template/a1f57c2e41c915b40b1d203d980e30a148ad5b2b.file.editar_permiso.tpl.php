<?php /* Smarty version Smarty-3.1.11, created on 2018-05-10 01:11:07
         compiled from "C:\xampp\htdocs\covecino\views\acl\editar_permiso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:255705a2b68460e27f8-81883587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1f57c2e41c915b40b1d203d980e30a148ad5b2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\views\\acl\\editar_permiso.tpl',
      1 => 1525925453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255705a2b68460e27f8-81883587',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a2b68461c5c04_12174142',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2b68461c5c04_12174142')) {function content_5a2b68461c5c04_12174142($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Lista permisos</a></li>
        <li class="active">Editar permiso</li>
    </ol>
<h2>Editar Permiso</h2>
<form id="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">Nombre permiso:</label>
            <input type="texto" name="nom_perm" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Nom_perm'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_perm'];?>
<?php }?>" style="width:180px;" class="form-control"/>
        </div>
        <div class="form-group">
            <label class="control-label">Key permiso:</label>
            <textarea name="key_perm" class="form-control"><?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Key_perm'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Key_perm'];?>
<?php }?></textarea>
        </div>  
    <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>  
        <input type="submit" class="btn btn-primary" value="Guardar" /></p>
    </div>
</form>
</div><?php }} ?>