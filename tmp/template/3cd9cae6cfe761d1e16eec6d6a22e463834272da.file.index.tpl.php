<?php /* Smarty version Smarty-3.1.11, created on 2015-05-23 21:20:13
         compiled from "C:\xampp\htdocs\vitritienda\modules\stock\views\ding\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304785560b382515ac3-81630136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cd9cae6cfe761d1e16eec6d6a22e463834272da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitritienda\\modules\\stock\\views\\ding\\index.tpl',
      1 => 1432408806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304785560b382515ac3-81630136',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5560b382744ce4_52964789',
  'variables' => 
  array (
    'iding' => 0,
    'cat' => 0,
    'c' => 0,
    '_datos' => 0,
    'pag1' => 0,
    'color' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5560b382744ce4_52964789')) {function content_5560b382744ce4_52964789($_smarty_tpl) {?><div class="container">
<h3>Detalle ingreso</h3>

    <script type="text/javascript">
    function ci(formObj) {
                if(confirm("¿Desea agregar este producto al detalle?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function cb(formObj) {
                if(confirm("¿Está seguro que desea desasignar este producto del detalle?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<form method="post" action="">
    <table  class="table table-bordered h6">
        <tr>
            <td>
                <input type="hidden" name="guardar" value="1"/>
                <input type="hidden" name="iding" value="<?php echo $_smarty_tpl->tpl_vars['iding']->value;?>
"/>
    <label class="control-label">Categoría: </label>
        <select name="tprod" id="tprod" class="form-control">
    <option value="">-Seleccione-</option>
    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_tprod'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_tprod'];?>
</option>
    <?php } ?>
</select>
</td>
<td>
    <label class="control-label">Producto: </label>
<select name="prod" id="prod" class="form-control">
</select>
</td>
<td>
    <label class="control-label">Cantidad: </label>
<input type="text" name="cant" style="width: 50px;" class="form-control" maxlength="3" onKeypress="return valNum(event);"/>
</td>
<td>
    <div style="padding: 10px 0px 10px 0px;">   
         <input type="submit" value="Agregar" id="btn_insertar" class="btn btn-primary" onclick='return ci(this);'/>
    </div>
</td>
</tr>
    </table>
</form>

<form name="form1" method="post">
        <input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">         
    
<div id="paginacion_1">
<?php if (isset($_smarty_tpl->tpl_vars['pag1']->value)&&count($_smarty_tpl->tpl_vars['pag1']->value)){?><!--que si existe posts y además que tenga por lo menos 1 -->

    <table class="table table-bordered h6">
        <thead>
        <th colspan="9" style="background: #E6E6FA;">Detalle del ingreso N°: <?php echo $_smarty_tpl->tpl_vars['iding']->value;?>
</th>
    </thead>
    <tr style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Id</td>
        <td style="font-weight:bold;text-align: center;">Fch</td>
        <td style="font-weight:bold;text-align: center;">Producto</td>
        <td style="font-weight:bold;text-align: center;">Cantidad</td>
        <td style="font-weight:bold;text-align: center;">Eliminar</td>       
    </tr>
    
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pag1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_ding'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Fch_ding'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_prod'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Cant_ding'];?>
</td>
        
        <td style="font-weight:bold;text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
stock/ding/eliminarDing/<?php echo $_smarty_tpl->tpl_vars['iding']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_ding'];?>
" onclick='return cb(this);'><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/eliminar.png" width="15" height="15" title="Ver"/></a></td>
    </tr>
<?php } ?>
</table>
<?php }else{ ?>
    <br />
            <p><strong>No tiene productos en el detalle!</strong></p>
<?php }?>
<br/>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?>
    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion1']->value)===null||$tmp==='' ? '' : $tmp);?>
</p>  
<?php }?>
</div>
 </form>
<br />
<div class=" col-lg-6">
<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
stock/"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/volver.gif" width="30" height="20" title="Volver"/></a>
</div>
</div><?php }} ?>