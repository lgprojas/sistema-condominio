<?php /* Smarty version Smarty-3.1.11, created on 2018-05-10 01:24:10
         compiled from "/home/covecino/public_html/views/acl/permisos_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15973625515af3c1fc3dda46-08482196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd10ee55878824e6c51558c49369b50cfac851a8' => 
    array (
      0 => '/home/covecino/public_html/views/acl/permisos_role.tpl',
      1 => 1525926242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15973625515af3c1fc3dda46-08482196',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5af3c1fc4a5f61_44568450',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'roles' => 0,
    'permisos' => 0,
    'pr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af3c1fc4a5f61_44568450')) {function content_5af3c1fc4a5f61_44568450($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Lista roles</a></li>
        <li class="active">Administrar permisos rol</li>
    </ol>
<h2>Administrar permisos rol</h2>



<h3>Role: <?php echo $_smarty_tpl->tpl_vars['roles']->value['Nom_role'];?>
</h3>



<p>Permisos</p>



<form name="form1" method="post" action="">

    <input type="hidden" name="guardar" value="1" />

    

    <?php if (isset($_smarty_tpl->tpl_vars['permisos']->value)&&count($_smarty_tpl->tpl_vars['permisos']->value)){?>

        <table class="table table-bordered">

            <tr>

                <th style="text-align: center;">Permiso</th>

                <th style="text-align: center;">Habilitado</th>

                <th style="text-align: center;">Denegado</th>

                <th style="text-align: center;">Ignorar</th>

            </tr>

            <?php  $_smarty_tpl->tpl_vars['pr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['permisos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pr']->key => $_smarty_tpl->tpl_vars['pr']->value){
$_smarty_tpl->tpl_vars['pr']->_loop = true;
?>

                <tr>

                    <td><?php echo $_smarty_tpl->tpl_vars['pr']->value['nombre'];?>
</td>

                    <td style="text-align: center;"><input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['pr']->value['id'];?>
" value="1" <?php if (($_smarty_tpl->tpl_vars['pr']->value['valor']==1)){?> checked="checked" <?php }?> /></td>

                    <td style="text-align: center;"><input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['pr']->value['id'];?>
" value="" <?php if (($_smarty_tpl->tpl_vars['pr']->value['valor']=='')){?> checked="checked" <?php }?> /></td>

                    <td style="text-align: center;"><input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['pr']->value['id'];?>
" value="x" <?php if (($_smarty_tpl->tpl_vars['pr']->value['valor']==="x")){?> checked="checked" <?php }?> />

                    </td>

                </tr>

                <?php } ?>

        </table>

        <?php }?>

        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>   <input type="submit" value="Guardar" class="btn btn-primary" /></p>

</form>

</div><?php }} ?>