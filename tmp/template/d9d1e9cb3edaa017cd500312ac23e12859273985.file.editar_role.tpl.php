<?php /* Smarty version Smarty-3.1.11, created on 2017-04-27 14:05:50
         compiled from "C:\xampp\htdocs\munku\views\acl\editar_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10676590232fe049f23-87961096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9d1e9cb3edaa017cd500312ac23e12859273985' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\views\\acl\\editar_role.tpl',
      1 => 1493244387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10676590232fe049f23-87961096',
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
  'unifunc' => 'content_590232fe123096_87568513',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590232fe123096_87568513')) {function content_590232fe123096_87568513($_smarty_tpl) {?><div class="container">
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