<?php /* Smarty version Smarty-3.1.11, created on 2018-05-10 01:21:18
         compiled from "/home/covecino/public_html/views/acl/nuevo_permiso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11246633535af3c110476567-00698628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc9e5d01519cbb2045a2dd227434966e67bf1122' => 
    array (
      0 => '/home/covecino/public_html/views/acl/nuevo_permiso.tpl',
      1 => 1525926069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11246633535af3c110476567-00698628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5af3c110534834_90150061',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af3c110534834_90150061')) {function content_5af3c110534834_90150061($_smarty_tpl) {?><div class="container">
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