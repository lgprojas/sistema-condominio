<?php /* Smarty version Smarty-3.1.11, created on 2023-08-16 15:27:11
         compiled from "C:\xampp\htdocs\condominio\modules\ref\views\inm\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51924368964dd230f1bdb58-43532101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae1846a27114b3d5991ce31e5da83da42032034b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\condominio\\modules\\ref\\views\\inm\\index.tpl',
      1 => 1521850419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51924368964dd230f1bdb58-43532101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_acl' => 0,
    '_layoutParams' => 0,
    '_datos' => 0,
    'inm' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_64dd230f29a350_53935149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64dd230f29a350_53935149')) {function content_64dd230f29a350_53935149($_smarty_tpl) {?><div class="container">
<h3>Inmobiliarias</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar esta inmobiliaria?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_inm')){?>
<p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/inm/newInm"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nueva inmobiliaria</a></p>
<?php }?>
<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['inm']->value)&&count($_smarty_tpl->tpl_vars['inm']->value)){?>
    <table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA;">Listado inmobiliarias</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Id</td>
        <td style="font-weight:bold;text-align: center;">Nombre</td>        
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_inm')){?><td style="font-weight:bold;text-align: center;">Edit.</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_inm')){?><td style="font-weight:bold;text-align: center;">Elim.</td><?php }?>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_inm'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_inm'];?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_inm')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/inm/editInm/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"></a></td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_inm')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/inm/delInm/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
" onclick='return cb(this);'></a></td><?php }?>    
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay inmobiliarias</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_inm')){?>
<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/inm/newInm"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nueva inmobiliaria</a></p>
<?php }?>
<br/>
<br/>
<br/>
</div><?php }} ?>