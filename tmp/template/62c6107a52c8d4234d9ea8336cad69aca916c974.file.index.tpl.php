<?php /* Smarty version Smarty-3.1.11, created on 2016-01-08 19:28:33
         compiled from "C:\xampp\htdocs\munku\modules\referen\views\sec\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13441568d9e317a1d16-64507272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62c6107a52c8d4234d9ea8336cad69aca916c974' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\referen\\views\\sec\\index.tpl',
      1 => 1452277315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13441568d9e317a1d16-64507272',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_568d9e319bb854_31941776',
  'variables' => 
  array (
    '_layoutParams' => 0,
    '_datos' => 0,
    'sec' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d9e319bb854_31941776')) {function content_568d9e319bb854_31941776($_smarty_tpl) {?><div class="container">
<h3>Sectores</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar este sector?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
referen/sec/newSec"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Crear nuevo sector</a>
</p>
<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['sec']->value)&&count($_smarty_tpl->tpl_vars['sec']->value)){?>
    <table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA;text-align: center;">Listado sectores</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Cód</td>
        <td style="font-weight:bold;text-align: center;">Nombre</td>        
        <td style="font-weight:bold;text-align: center;">Ciudad</td> 
        <td style="font-weight:bold;text-align: center;">Editar</td>
        <td style="font-weight:bold;text-align: center;">Eliminar</td>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sec']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_sec'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_sec'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_ciu'];?>
</td>
        <td style="text-align: center;"><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
referen/sec/editSec/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_sec'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/ver.gif" width="10" height="12"/></a></td>
        <td style="text-align: center;"><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
referen/sec/delSec/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_sec'];?>
" onclick='return cb(this);'><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/eliminar.png" width="15" height="15"/></a></td>    
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay sectores</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  
<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
referen/sec/newSec"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Crear nuevo sector</a></p>

</div><?php }} ?>