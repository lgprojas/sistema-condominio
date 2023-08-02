<?php /* Smarty version Smarty-3.1.11, created on 2017-04-20 15:19:16
         compiled from "C:\xampp\htdocs\munku\modules\ref\views\scat\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1598958eba5c1efead0-56879922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcfd6b0c2b188406f55d3bcc334000b65c49040b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\ref\\views\\scat\\index.tpl',
      1 => 1492715949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1598958eba5c1efead0-56879922',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58eba5c20e0744_42265540',
  'variables' => 
  array (
    '_layoutParams' => 0,
    '_datos' => 0,
    'scat' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58eba5c20e0744_42265540')) {function content_58eba5c20e0744_42265540($_smarty_tpl) {?><div class="container">
<h3>Subcategorías</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar esta subcategoría?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/scat/newScat"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Crear nueva subcategoría</a>
</p>
<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['scat']->value)&&count($_smarty_tpl->tpl_vars['scat']->value)){?>
    <table class="table table-bordered small">
    <thead>
        <th colspan="9" style="background: #E6E6FA;text-align: center;">Listado subcategorías</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Cód</td>
        <td style="font-weight:bold;text-align: center;">Nombre</td>        
        <td style="font-weight:bold;text-align: center;">Categoría</td> 
        <td style="font-weight:bold;text-align: center;">Editar</td>
        <td style="font-weight:bold;text-align: center;">Eliminar</td>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_subcat'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_subcat'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cat'];?>
</td>
        <td style="text-align: center;"><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/scat/editScat/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_subcat'];?>
"><?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Nom_ico'])){?><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/icon/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_ico'];?>
.png" width="15" height="15"/><?php }else{ ?><i class="glyphicon glyphicon-edit"></i><?php }?></a></td>
        <td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/scat/delScat/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_subcat'];?>
" onclick='return cb(this);'></a></td>    
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
ref/scat/newScat"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Crear nueva subcategoría</a></p>

</div><?php }} ?>