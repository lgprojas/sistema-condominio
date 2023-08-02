<?php /* Smarty version Smarty-3.1.11, created on 2015-05-12 03:46:28
         compiled from "C:\xampp\htdocs\vitritienda\modules\usuarios\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25203554f5ee5524127-87388191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b429fc737e7fe54c671dc0b863005b15d792a181' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitritienda\\modules\\usuarios\\views\\index\\index.tpl',
      1 => 1431395179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25203554f5ee5524127-87388191',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_554f5ee55c4131_91859443',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'usuarios' => 0,
    'color' => 0,
    'us' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554f5ee55c4131_91859443')) {function content_554f5ee55c4131_91859443($_smarty_tpl) {?><div class="container">
<h3>Lista de usuarios</h3>
<br/>
<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/registro"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Crear nuevo usuario</a></p>
<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)&&count($_smarty_tpl->tpl_vars['usuarios']->value)){?>
<table class="table table-bordered">
    <thead style="background: #E6E6FA;">
        <th style="text-align: center;">ID</th>
        <th style="text-align: center;">Usuario</th>
        <th style="text-align: center;">Role</th>
        <th style="text-align: center;">Editar</th>
        <th style="text-align: center;">Permisos</th>
    </thead>
    </tr>
    
    <?php  $_smarty_tpl->tpl_vars['us'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['us']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['us']->key => $_smarty_tpl->tpl_vars['us']->value){
$_smarty_tpl->tpl_vars['us']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
        <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
            <td><?php echo $_smarty_tpl->tpl_vars['us']->value['Id_usu'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['us']->value['Nom_usu'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['us']->value['Nom_role'];?>
</td>
            <td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/index/editUsu/<?php echo $_smarty_tpl->tpl_vars['us']->value['Id_usu'];?>
"><i title="Editar datos usuario" class="glyphicon glyphicon-edit"></i></a></td>
            <td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/index/permisos/<?php echo $_smarty_tpl->tpl_vars['us']->value['Id_usu'];?>
"><i title="Ver permisos" class="glyphicon glyphicon-tasks"></i></a></td>            
        </tr>        
    <?php } ?>
    
</table>
<?php }?>
</div><?php }} ?>