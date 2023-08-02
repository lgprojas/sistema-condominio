<?php /* Smarty version Smarty-3.1.11, created on 2018-05-10 01:24:26
         compiled from "/home/covecino/public_html/views/acl/editar_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18297240575af3c97ad1ec10-78394669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '291e8944937965829d5ca52420876af39cbb74e8' => 
    array (
      0 => '/home/covecino/public_html/views/acl/editar_role.tpl',
      1 => 1525926173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18297240575af3c97ad1ec10-78394669',
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
  'unifunc' => 'content_5af3c97adf5ba5_69943819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af3c97adf5ba5_69943819')) {function content_5af3c97adf5ba5_69943819($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Lista roles</a></li>
        <li class="active">Editar rol</li>
    </ol>
<h2>Editar role</h2>

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