<?php /* Smarty version Smarty-3.1.11, created on 2018-05-26 02:47:35
         compiled from "/home/covecino/public_html/demo/modules/usuarios/views/gestores/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38020605b08f4f7c5e2e8-66667721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cc417a7777ae22195fbc1171fbef37fa359a2ef' => 
    array (
      0 => '/home/covecino/public_html/demo/modules/usuarios/views/gestores/index.tpl',
      1 => 1527311446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38020605b08f4f7c5e2e8-66667721',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_acl' => 0,
    '_layoutParams' => 0,
    '_datos' => 0,
    'gestores' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b08f4f7d5d305_88533147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b08f4f7d5d305_88533147')) {function content_5b08f4f7d5d305_88533147($_smarty_tpl) {?><div class="container">
<h3>Lista gestores</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar este gestor?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_gestor')){?>
<p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/gestores/newGestor"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nuevo gestor</a></p>
<?php }?>
<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['gestores']->value)&&count($_smarty_tpl->tpl_vars['gestores']->value)){?>
    <table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA;text-align: center;">Listado gestores</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Id</td>
        <td style="font-weight:bold;text-align: center;">Nombre</td>  
        <td style="font-weight:bold;text-align: center;">Rol</td> 
        <td style="font-weight:bold;text-align: center;">Estado</td>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_gestor')){?><td style="font-weight:bold;text-align: center;">Conf.</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_gestor')){?><td style="font-weight:bold;text-align: center;">Edit.</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_gestor')){?><td style="font-weight:bold;text-align: center;">Permisos</td><?php }?>        
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_gestor')){?><td style="font-weight:bold;text-align: center;">Elim.</td><?php }?>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gestores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Rut_usu'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_usu'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_role'];?>
</td>
        <td style="text-align: center;"><?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_estusu']==1){?><span class="label label-success"><i title="Activado" class="glyphicon glyphicon-user"></i></span><?php }else{ ?><span class="label label-danger"><i title="Desactivado" class="glyphicon glyphicon-user"></i></span><?php }?></td>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_gestor')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-cog" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/gestores/asigCondGestor/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"></a></td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_gestor')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/gestores/editUsuGestor/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"></a></td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_gestor')){?><td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/gestores/permisosGestor/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"><i title="Ver permisos" class="glyphicon glyphicon-tasks"></i></a></td><?php }?>        
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_gestor')){?>
        <td style="text-align: center;">
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Posee_cond']==0){?>
                <a class="btn btn-small glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/gestores/elimGestor/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
" onclick='return cb(this);'></a>
            <?php }else{ ?>
                    <i title="Bloqueado Posee Condominio asignado" class="glyphicon glyphicon-lock"></i>
            <?php }?>
        </td>
        <?php }?>    
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay gestores</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_gestor')){?>
<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/gestores/newGestor"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nuevo gestor</a></p>
<?php }?>
<br/>
<br/>
<br/>
</div><?php }} ?>