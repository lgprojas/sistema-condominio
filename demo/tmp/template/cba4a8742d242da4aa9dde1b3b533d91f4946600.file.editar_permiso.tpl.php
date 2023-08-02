<?php /* Smarty version Smarty-3.1.11, created on 2017-04-27 14:03:49
         compiled from "C:\xampp\htdocs\munku\views\acl\editar_permiso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22151590232851105f9-29717219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cba4a8742d242da4aa9dde1b3b533d91f4946600' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\views\\acl\\editar_permiso.tpl',
      1 => 1493244387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22151590232851105f9-29717219',
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
  'unifunc' => 'content_590232851f6917_01909247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590232851f6917_01909247')) {function content_590232851f6917_01909247($_smarty_tpl) {?><div class="container">
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