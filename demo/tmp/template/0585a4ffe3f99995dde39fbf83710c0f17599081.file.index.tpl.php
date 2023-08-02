<?php /* Smarty version Smarty-3.1.11, created on 2017-05-18 17:09:27
         compiled from "C:\xampp\htdocs\munku\modules\lugar\views\asigps\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2903758ee7917a65b20-90647298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0585a4ffe3f99995dde39fbf83710c0f17599081' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\lugar\\views\\asigps\\index.tpl',
      1 => 1495141742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2903758ee7917a65b20-90647298',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58ee7917b88105_92644480',
  'variables' => 
  array (
    'dlugar' => 0,
    'cat' => 0,
    'c' => 0,
    '_datos' => 0,
    'pag1' => 0,
    'color' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
    'ref' => 0,
    'paginacion1' => 0,
    'idciu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ee7917b88105_92644480')) {function content_58ee7917b88105_92644480($_smarty_tpl) {?><div class="container">
<h3>Productos/servicios asignados al lugar</h3>
<h5><?php echo $_smarty_tpl->tpl_vars['dlugar']->value['Tit_lugar'];?>
 | <?php echo $_smarty_tpl->tpl_vars['dlugar']->value['Dir_lugar'];?>
</h5>

    <script type="text/javascript">
    function ci(formObj) {
                if(confirm("¿Desea agregar este prod/serv al lugar?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function cb(formObj) {
                if(confirm("¿Está seguro que desea desasignar este prod/serv del lugar?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<div class="col-lg-12">
<form method="post" action="">
    <table class="table table-striped">
        <tr>
            <td style="width: 20%;">
            <input type="hidden" name="guardar" value="1"/>
            Categoría:
            <select name="cat" id="cat" class="form-control">
                <option value="">-Seleccione-</option>
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_cat'];?>
</option>
                <?php } ?>
            </select>
            </td>
            <td  style="width: 30%;">
            Prod/serv:
            <select name="ps" id="ps" class="form-control">
            </select>
            </td>
<td style="padding: 30px;">
    <input type="submit" value="Agregar" id="btn_insertar" class="btn btn-primary" onclick='return ci(this);'/></td>
    </tr>
    </table>
</form>
</div>
<div class="col-lg-12">
<form name="form1" method="post">
        <input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">             
<div id="paginacion_1">
<?php if (isset($_smarty_tpl->tpl_vars['pag1']->value)&&count($_smarty_tpl->tpl_vars['pag1']->value)){?><!--que si existe posts y además que tenga por lo menos 1 -->
    <table class="table table-bordered">
        <thead>
        <th colspan="10" style="background: #E6E6FA;text-align: center;">DETALLE PROD/SERV LUGAR</th>
    </thead>
    <tr style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Cód.</td>
        <td style="font-weight:bold;text-align: center;">Ico</td>
        <td style="font-weight:bold;text-align: center;">Prod/serv</td>
        <td style="font-weight:bold;text-align: center;">Quitar</td>       
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
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_ps'];?>
</td>
        <td style="text-align: center;">x</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_ps'];?>
</td>        
        <td style="font-weight:bold;text-align: center;"><a class="glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lugar/asigps/eliminarPS/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_deth'];?>
/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_ps'];?>
/<?php echo $_smarty_tpl->tpl_vars['ref']->value;?>
" onclick='return cb(this);'></a></td>
    </tr>
<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No tiene prod/serv asignados al lugar.</strong></p>
<?php }?>
<br/>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?>
    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion1']->value)===null||$tmp==='' ? '' : $tmp);?>
</p>  
<?php }?>
</div>
 </form>
</div>
<p>
<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lugar/administrar/index/<?php echo $_smarty_tpl->tpl_vars['idciu']->value;?>
"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>   
</p>
</div>
<?php }} ?>