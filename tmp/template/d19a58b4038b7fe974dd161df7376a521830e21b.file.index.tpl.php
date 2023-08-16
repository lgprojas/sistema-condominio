<?php /* Smarty version Smarty-3.1.11, created on 2023-08-16 15:27:17
         compiled from "C:\xampp\htdocs\condominio\modules\ref\views\marca\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109646305364dd2315be1150-53488220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd19a58b4038b7fe974dd161df7376a521830e21b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\condominio\\modules\\ref\\views\\marca\\index.tpl',
      1 => 1521850735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109646305364dd2315be1150-53488220',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_acl' => 0,
    '_layoutParams' => 0,
    '_datos' => 0,
    'marca' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_64dd2315c45195_72469680',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64dd2315c45195_72469680')) {function content_64dd2315c45195_72469680($_smarty_tpl) {?><div class="container">
<h3>Marcas Vehículos</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar esta marca de vehículo?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_marca')){?>
<p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/marca/newMarca"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nueva marca</a></p>
<?php }?>
<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['marca']->value)&&count($_smarty_tpl->tpl_vars['marca']->value)){?>
    <table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA;text-align: center;">Listado marcas</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Id</td>
        <td style="font-weight:bold;text-align: center;">Nombre</td>        
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_marca')){?><td style="font-weight:bold;text-align: center;">Edit.</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_marca')){?><td style="font-weight:bold;text-align: center;">Elim.</td><?php }?>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['marca']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_marca'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_marca'];?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_marca')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/marca/editMarca/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"></a></td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_marca')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/marca/delMarca/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
" onclick='return cb(this);'></a></td><?php }?>    
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay marcas</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_marca')){?>
<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/marca/newMarca"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nueva marca</a></p>
<?php }?>
<br/>
<br/>
<br/>
</div><?php }} ?>