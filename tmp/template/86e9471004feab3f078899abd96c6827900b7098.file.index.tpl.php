<?php /* Smarty version Smarty-3.1.11, created on 2017-11-21 22:00:19
         compiled from "C:\xampp\htdocs\icondo\modules\transa\views\vehi\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197195a1493ade5acd8-53747626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86e9471004feab3f078899abd96c6827900b7098' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\transa\\views\\vehi\\index.tpl',
      1 => 1511298012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197195a1493ade5acd8-53747626',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a1493ae3d33a8_59686264',
  'variables' => 
  array (
    '_layoutParams' => 0,
    '_datos' => 0,
    'vehi' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1493ae3d33a8_59686264')) {function content_5a1493ae3d33a8_59686264($_smarty_tpl) {?><div class="container">
<h3>Lista vehículos</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar este vehículo?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/vehi/newVehi"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nuevo vehículo</a></p>

<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['vehi']->value)&&count($_smarty_tpl->tpl_vars['vehi']->value)){?>
    <table class="table table-bordered">
    <thead>
        <th colspan="10" style="background: #E6E6FA;">Listado de vehículos</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Id</td>
        <td style="font-weight:bold;text-align: center;">Patente</td>
        <td style="font-weight:bold;text-align: center;width: 100px;">Marca</td>       
        <td style="font-weight:bold;text-align: center;width: 100px;">Modelo</td> 
        <td style="font-weight:bold;text-align: center;">Ver</td>
        <td style="font-weight:bold;text-align: center;">Eliminar</td>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vehi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_vehi'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_vehi'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_marca'];?>
</td> 
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_modelo'];?>
</td>
        <td style="text-align: center;"><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/vehi/editVehi/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_vehi'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/ver.gif" width="10" height="12"/></a></td>
        <td style="text-align: center;"><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/vehi/delVehi/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_vehi'];?>
" onclick='return cb(this);'><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/eliminar.png" width="15" height="15"/></a></td>    
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay vehículos registrados!</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  
<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/vehi/newVehi"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nuevo vehículo</a></p>

</div><?php }} ?>