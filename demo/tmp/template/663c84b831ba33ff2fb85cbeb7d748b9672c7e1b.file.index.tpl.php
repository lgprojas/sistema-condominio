<?php /* Smarty version Smarty-3.1.11, created on 2017-04-10 11:32:59
         compiled from "C:\xampp\htdocs\munku\modules\ref\views\cat\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1271658eba5ab01bb15-82114363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '663c84b831ba33ff2fb85cbeb7d748b9672c7e1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\ref\\views\\cat\\index.tpl',
      1 => 1491836913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1271658eba5ab01bb15-82114363',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    '_datos' => 0,
    'cat' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58eba5ab13e4f9_73703590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58eba5ab13e4f9_73703590')) {function content_58eba5ab13e4f9_73703590($_smarty_tpl) {?><div class="container">
<h3>Categorías</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar esta categoría?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cat/newCat"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Crear nueva categoría</a></p>
<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['cat']->value)&&count($_smarty_tpl->tpl_vars['cat']->value)){?>
    <table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA;">Listado categorías</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Id</td>
        <td style="font-weight:bold;text-align: center;">Nombre</td>        
        <td style="font-weight:bold;text-align: center;">Editar</td>
        <td style="font-weight:bold;text-align: center;">Eliminar</td>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_cat'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cat'];?>
</td>
        <td style="text-align: center;"><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cat/editCat/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_cat'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/ver.gif" width="10" height="12"/></a></td>
        <td style="text-align: center;"><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cat/delCat/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_cat'];?>
" onclick='return cb(this);'><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/eliminar.png" width="15" height="15"/></a></td>    
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay categorías</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  
<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cat/newCat"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Crear nueva categoría</a></p>

</div><?php }} ?>