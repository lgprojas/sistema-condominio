<?php /* Smarty version Smarty-3.1.11, created on 2017-10-10 06:52:56
         compiled from "C:\xampp\htdocs\icondo\modules\usuarios\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:669359dc5228615864-54543455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '684dd23cad9d0d54df8a611ccad599e461c0e1f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\usuarios\\views\\index\\index.tpl',
      1 => 1497751240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '669359dc5228615864-54543455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_acl' => 0,
    '_layoutParams' => 0,
    'usuarios' => 0,
    'color' => 0,
    'us' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59dc5228b94db4_20902748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dc5228b94db4_20902748')) {function content_59dc5228b94db4_20902748($_smarty_tpl) {?><div class="container">
<h3>Lista de usuarios</h3>
<br/>
<!---->
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_usu')){?>
<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/registro"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nuevo usuario</a></p>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)&&count($_smarty_tpl->tpl_vars['usuarios']->value)){?>
<table class="table table-bordered">
    <thead style="background: #E6E6FA;">
        <th style="text-align: center;">ID</th>
        <th style="text-align: center;">Usuario</th>
        <th style="text-align: center;">Role</th>
        <th style="text-align: center;">Est.</th>
        <th style="text-align: center;">Ciu.</th>
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
            <td style="text-align: center;"><?php if ($_smarty_tpl->tpl_vars['us']->value['Id_estusu']==1){?><span class="label label-success"><i title="Activado" class="glyphicon glyphicon-user"></i></span><?php }else{ ?><span class="label label-danger"><i title="Desactivado" class="glyphicon glyphicon-user"></i></span><?php }?></td>
            <td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/asigciu/index/<?php echo $_smarty_tpl->tpl_vars['us']->value['Id_usu'];?>
"><i title="Asignación ciudades" class="glyphicon glyphicon-pushpin"></i></a></td>
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