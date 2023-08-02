<?php /* Smarty version Smarty-3.1.11, created on 2017-04-10 11:31:18
         compiled from "C:\xampp\htdocs\munku\modules\ref\views\reg\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2047858eba546c884f5-41466269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a52278cd2392b27ff88c9897d84f52b444c93263' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\ref\\views\\reg\\index.tpl',
      1 => 1491837885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2047858eba546c884f5-41466269',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    '_datos' => 0,
    'reg' => 0,
    'color' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58eba546d9f1e0_33696430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58eba546d9f1e0_33696430')) {function content_58eba546d9f1e0_33696430($_smarty_tpl) {?><div class="container">
<h3>Regiones</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar esta región?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/reg/newReg/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_reg'];?>
"><i title="Nueva región" class="glyphicon glyphicon-plus-sign"></i>  Nuevo región</a></p>

<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['reg']->value)&&count($_smarty_tpl->tpl_vars['reg']->value)){?>
    <table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA; text-align: center;">Listado regiones</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Id</td>
        <td style="font-weight:bold;text-align: center;">Nombre región</td>        
        <td style="font-weight:bold;text-align: center;">Editar</td>
        <td style="font-weight:bold;text-align: center;">Eliminar</td>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_reg'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_reg'];?>
</td>
        <td style="text-align: center;"><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/reg/editReg/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_reg'];?>
"><i title="Editar región" class="glyphicon glyphicon-edit"></i></a></td>
        <td style="text-align: center;"><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/reg/delReg/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_reg'];?>
" onclick='return cb(this);'><i title="Eliminar región" class="glyphicon glyphicon-trash"></i></a></td>    
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay regiones creadas.</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  

<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/reg/newReg/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_reg'];?>
"><i title="Nueva región" class="glyphicon glyphicon-plus-sign"></i>  Nueva región</a></p>

</div><?php }} ?>