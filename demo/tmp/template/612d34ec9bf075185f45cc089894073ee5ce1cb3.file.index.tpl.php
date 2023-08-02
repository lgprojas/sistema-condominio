<?php /* Smarty version Smarty-3.1.11, created on 2017-04-11 17:30:15
         compiled from "C:\xampp\htdocs\munku\modules\ref\views\ps\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1652658ed17717fde93-98195201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '612d34ec9bf075185f45cc089894073ee5ce1cb3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\ref\\views\\ps\\index.tpl',
      1 => 1491946200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1652658ed17717fde93-98195201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58ed1771a495b8_54895550',
  'variables' => 
  array (
    '_layoutParams' => 0,
    '_datos' => 0,
    'ps' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ed1771a495b8_54895550')) {function content_58ed1771a495b8_54895550($_smarty_tpl) {?><div class="container">
<h3>Productos/servicios</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar este prod/serv?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/ps/newPS"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Crear nuevo prod/serv</a>
</p>
<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['ps']->value)&&count($_smarty_tpl->tpl_vars['ps']->value)){?>
    <table class="table table-bordered small">
    <thead>
        <th colspan="9" style="background: #E6E6FA;text-align: center;">Listado prod/serv</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Cód</td>
        <td style="font-weight:bold;text-align: center;">Icono</td>
        <td style="font-weight:bold;text-align: center;">Nombre</td>        
        <td style="font-weight:bold;text-align: center;">Categoría</td> 
        <td style="font-weight:bold;text-align: center;">Edit</td>
        <td style="font-weight:bold;text-align: center;">Elim</td>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_ps'];?>
</td>
        <td style="text-align: center;"><?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Nom_icops'])){?><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/iconps/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_icops'];?>
.png" width="25" height="25"/><?php }else{ ?><i class="glyphicon glyphicon-picture"></i><?php }?></td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_ps'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cat'];?>
</td>
        <td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/ps/editPS/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_ps'];?>
"></a></td>
        <td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/ps/delPS/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_ps'];?>
" onclick='return cb(this);'></a></td>    
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay prod/serv</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  
<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/ps/newPS"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Crear nuevo prod/serv</a></p>

</div><?php }} ?>