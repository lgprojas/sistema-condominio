<?php /* Smarty version Smarty-3.1.11, created on 2018-05-26 02:56:00
         compiled from "/home/covecino/public_html/demo/modules/usuarios/views/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12099471035b08f6f089d563-63113994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80aa5c8c977a5510909936016fa6823c5fff6347' => 
    array (
      0 => '/home/covecino/public_html/demo/modules/usuarios/views/index/index.tpl',
      1 => 1527311446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12099471035b08f6f089d563-63113994',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_acl' => 0,
    '_layoutParams' => 0,
    'sadmin' => 0,
    'cond' => 0,
    'ps' => 0,
    'cbl' => 0,
    'cb' => 0,
    '_datos' => 0,
    'usuarios' => 0,
    'color' => 0,
    'us' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b08f6f09ab9c8_54945878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b08f6f09ab9c8_54945878')) {function content_5b08f6f09ab9c8_54945878($_smarty_tpl) {?><div class="container">
<h3>Lista de usuarios</h3>
<br/>
<!---->
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_usu')){?>
<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/registro"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nuevo usuario</a></p>
<?php }?>
<div class="well well-small row sm">
    <form id="form1" class="form-inline">
        <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?>
        <div class="col-sm-4">
        <select id="co" name="co" class="form-control">
            <option value=""> - seleccione condominio - </option>
            <?php  $_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ps']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cond']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->key => $_smarty_tpl->tpl_vars['ps']->value){
$_smarty_tpl->tpl_vars['ps']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['ps']->value['Id_cond'];?>
"><?php echo $_smarty_tpl->tpl_vars['ps']->value['Nom_cond'];?>
</option>
            <?php } ?>
        </select>
        </div>
        <?php }?>
        <div class="col-sm-4">
        <select id="cb" name="cb" class="form-control">
            <option value=""> - seleccione calle/block - </option>
            <?php  $_smarty_tpl->tpl_vars['cb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cbl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cb']->key => $_smarty_tpl->tpl_vars['cb']->value){
$_smarty_tpl->tpl_vars['cb']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['cb']->value['a'];?>
"><?php echo $_smarty_tpl->tpl_vars['cb']->value['b'];?>
</option>
            <?php } ?>
        </select>
        </div>
    </form>
</div>
<div id="lista_registros">
<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)&&count($_smarty_tpl->tpl_vars['usuarios']->value)){?>
<table class="table table-bordered">
    <thead style="background: #E6E6FA;">
        <th style="text-align: center;">ID</th>
        <th style="text-align: center;">Usuario</th>
        <th style="text-align: center;">Role</th>
        <th style="text-align: center;">Condominio</th>
        <th style="text-align: center;">Est.</th>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_usu')){?><th style="text-align: center;">Editar</th><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_perm_usu')){?><th style="text-align: center;">Permisos</th><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_usu')){?><th style="text-align: center;">Elim</th><?php }?>
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
            <td style="text-align: center;"><?php if ($_smarty_tpl->tpl_vars['us']->value['Nom_cond']==''){?>Ninguno<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['us']->value['Nom_cond'];?>
<?php }?></td>
            <td style="text-align: center;"><?php if ($_smarty_tpl->tpl_vars['us']->value['Id_estusu']==1){?><span class="label label-success"><i title="Activado" class="glyphicon glyphicon-user"></i></span><?php }else{ ?><span class="label label-danger"><i title="Desactivado" class="glyphicon glyphicon-user"></i></span><?php }?></td>
            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_usu')){?><td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/index/editUsu/<?php echo $_smarty_tpl->tpl_vars['us']->value['Id_encrypt'];?>
"><i title="Editar datos usuario" class="glyphicon glyphicon-edit"></i></a></td><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_perm_usu')){?><td style="text-align: center;"><?php if ($_smarty_tpl->tpl_vars['us']->value['Sin_perm']=="0"){?><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/index/permisos/<?php echo $_smarty_tpl->tpl_vars['us']->value['Id_usu'];?>
"><i title="Ver permisos" class="glyphicon glyphicon-tasks"></i></a><?php }else{ ?><i title="Rol sin permisos" class="glyphicon glyphicon-lock"></i><?php }?></td><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_usu')){?><td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/index/elimUsu/<?php echo $_smarty_tpl->tpl_vars['us']->value['Id_encrypt'];?>
"><i title="Elimininar usuario" class="glyphicon glyphicon-trash"></i></a></td><?php }?>
        </tr>        
    <?php } ?>
    
</table>
<?php }else{ ?>
            <p><strong>No hay usuarios registrados!</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  
</div>
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_usu')){?>
<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/registro"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nuevo usuario</a></p>
<?php }?>
</div><?php }} ?>