<?php /* Smarty version Smarty-3.1.11, created on 2015-05-23 18:36:52
         compiled from "C:\xampp\htdocs\vitritienda\modules\stock\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75325557b416eb4110-01665535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f5435e5bdbefd64b7c4a047be463cebd1659103' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitritienda\\modules\\stock\\views\\index\\index.tpl',
      1 => 1432319743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75325557b416eb4110-01665535',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5557b41721c3c2_76368514',
  'variables' => 
  array (
    '_layoutParams' => 0,
    '_datos' => 0,
    'ingre' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5557b41721c3c2_76368514')) {function content_5557b41721c3c2_76368514($_smarty_tpl) {?><div class="container">
<h3>Administración de stock</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar este ingreso?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
stock/index/nuevoIngresoStock"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nuevo ingreso</a></p>
<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['ingre']->value)&&count($_smarty_tpl->tpl_vars['ingre']->value)){?><!--que si existe posts y además que tenga por lo menos 1 -->
    <table class="table table-bordered h6">
    <thead>
        <th colspan="13" style="background: #E6E6FA; text-align: center;">LISTA INGRESOS A STOCK</th>
    </thead>
    <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Id</td>
        <td style="font-weight:bold;text-align: center;">Nº Guía/Doc</td>
        <td style="font-weight:bold;text-align: center;">Fecha ingreso</td>
        <td style="font-weight:bold;text-align: center;">Tipo ingreso</td>
        <td style="font-weight:bold;text-align: center;">Nota</td>     
        <td style="font-weight:bold;text-align: center;">Detalle</td>  
        <td style="font-weight:bold;text-align: center;">Eliminar</td>
        </tr>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ingre']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover="this.style.backgroundColor='#F0F8FF';" onmouseout="this.style.background='<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
';">
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_ing'];?>
</td>  
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Gd_ing'];?>
</td>       
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Fch_ing'];?>
</td>        
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_ting'];?>
</td>
        <td style="text-align: center;"><i class="glyphicon glyphicon-question-sign" title="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Com_ing'];?>
"></i></td>
        <td style="text-align: center;"><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
stock/ding/index/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_ing'];?>
"><i class="glyphicon glyphicon-list" title="Ver detalle"></i></a></td>
        <td style="text-align: center;"><?php if ($_smarty_tpl->tpl_vars['datos']->value['Ing_del']==0){?><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ingstock/index/eliminar_Ing/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_ing'];?>
" onclick='return cb(this);'><i class="glyphicon glyphicon-trash" title="Eliminar"></i></a><?php }else{ ?><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/bloquear.png" width="15" height="15"/><?php }?></td>
    </tr>
<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay ingresos a stock!</strong></p>
<?php }?>
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?>
    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion1']->value)===null||$tmp==='' ? '' : $tmp);?>

<?php }?>       

        <p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
stock/index/nuevoIngresoStock"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nuevo ingreso</a></p>
</div><?php }} ?>