<?php /* Smarty version Smarty-3.1.11, created on 2018-04-02 02:16:48
         compiled from "C:\xampp\htdocs\covecino\modules\usuarios\views\index\ajax\pagAjax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:295815ac176702f8f85-01260093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89f366dcea41037bd3ba79a0e4aef0aaabac75d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\usuarios\\views\\index\\ajax\\pagAjax.tpl',
      1 => 1522626355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295815ac176702f8f85-01260093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuarios' => 0,
    'color' => 0,
    'us' => 0,
    'root' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ac176703e4547_69104172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac176703e4547_69104172')) {function content_5ac176703e4547_69104172($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)&&count($_smarty_tpl->tpl_vars['usuarios']->value)){?>
<table class="table table-bordered">
    <thead style="background: #E6E6FA;">
        <th style="text-align: center;">ID</th>
        <th style="text-align: center;">Usuario</th>
        <th style="text-align: center;">Role</th>
        <th style="text-align: center;">Condominio</th>
        <th style="text-align: center;">Est.</th>
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
            <td style="text-align: center;"><?php if ($_smarty_tpl->tpl_vars['us']->value['Nom_cond']==''){?>Ninguno<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['us']->value['Nom_cond'];?>
<?php }?></td>
            <td style="text-align: center;"><?php if ($_smarty_tpl->tpl_vars['us']->value['Id_estusu']==1){?><span class="label label-success"><i title="Activado" class="glyphicon glyphicon-user"></i></span><?php }else{ ?><span class="label label-danger"><i title="Desactivado" class="glyphicon glyphicon-user"></i></span><?php }?></td>
            <td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
usuarios/index/editUsu/<?php echo $_smarty_tpl->tpl_vars['us']->value['Id_usu'];?>
"><i title="Editar datos usuario" class="glyphicon glyphicon-edit"></i></a></td>
            <td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
usuarios/index/permisos/<?php echo $_smarty_tpl->tpl_vars['us']->value['Id_usu'];?>
"><i title="Ver permisos" class="glyphicon glyphicon-tasks"></i></a></td>            
        </tr>        
    <?php } ?>
    
</table>
<?php }else{ ?>
            <p><strong>No hay usuarios registrados!</strong></p>
<?php }?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion1']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php }} ?>