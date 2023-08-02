<?php /* Smarty version Smarty-3.1.11, created on 2018-05-14 01:11:06
         compiled from "C:\xampp\htdocs\covecino\modules\usuarios\views\gestores\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135635af7ee092b0800-03107247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '521a0bd65a3ebd9bf57d5b6150088a2039499c1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\usuarios\\views\\gestores\\index.tpl',
      1 => 1526271059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135635af7ee092b0800-03107247',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5af7ee09772474_06579459',
  'variables' => 
  array (
    '_layoutParams' => 0,
    '_datos' => 0,
    'gestores' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af7ee09772474_06579459')) {function content_5af7ee09772474_06579459($_smarty_tpl) {?><div class="container">
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


<p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/gestores/newGestor"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nuevo gestor</a></p>

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
        <td style="font-weight:bold;text-align: center;">Conf.</td>
        <td style="font-weight:bold;text-align: center;">Edit.</td>
        <td style="font-weight:bold;text-align: center;">Permisos</td>        
        <td style="font-weight:bold;text-align: center;">Elim.</td>
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
        <td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-cog" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/gestores/asigCondGestor/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"></a></td>
        <td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/gestores/editUsuGestor/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"></a></td>
        <td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/gestores/permisosGestor/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"><i title="Ver permisos" class="glyphicon glyphicon-tasks"></i></a></td>        
        
        <td style="text-align: center;">
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Posee_cond']==0){?>
                <a class="btn btn-small glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/gestores/elimGestor/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
" onclick='return cb(this);'></a>
            <?php }else{ ?>
                    <i title="Bloqueado Posee Condominio asignado" class="glyphicon glyphicon-lock"></i>
            <?php }?>
        </td>
            
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay gestores</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  

<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/gestores/newGestor"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nuevo gestor</a></p>

<br/>
<br/>
<br/>
</div><?php }} ?>