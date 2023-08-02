<?php /* Smarty version Smarty-3.1.11, created on 2017-04-27 14:24:46
         compiled from "C:\xampp\htdocs\munku\modules\usuarios\views\asigciu\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189095902332b0032b7-53123333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca104894d254214ecc012bd57836d0bc082e6d0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\usuarios\\views\\asigciu\\index.tpl',
      1 => 1493317436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189095902332b0032b7-53123333',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5902332b128b02_81095839',
  'variables' => 
  array (
    'dusu' => 0,
    'reg' => 0,
    'r' => 0,
    '_datos' => 0,
    'pag1' => 0,
    'color' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5902332b128b02_81095839')) {function content_5902332b128b02_81095839($_smarty_tpl) {?><div class="container">
<h3>Ciudad(es) asignada(s) al usuario</h3>
<h5>Usuario: <?php echo $_smarty_tpl->tpl_vars['dusu']->value['Nom_usu'];?>
 | Role: <?php echo $_smarty_tpl->tpl_vars['dusu']->value['Nom_role'];?>
</h5>

    <script type="text/javascript">
    function ci(formObj) {
                if(confirm("¿Desea agregar esta ciudad al usuario?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function cb(formObj) {
                if(confirm("¿Está seguro que desea desasignar esta ciudad al usuario?")) {
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
            Región:
            <select name="reg" id="reg" class="form-control">
                <option value="">-Seleccione-</option>
                <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['Id_reg'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['Nom_reg'];?>
</option>
                <?php } ?>
            </select>
            </td>
            <td  style="width: 30%;">
            Ciudad:
            <select name="ciu" id="ciu" class="form-control">
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
        <th colspan="10" style="background: #E6E6FA;text-align: center;">CIUDADES ASIGNADAS AL USUARIO</th>
    </thead>
    <tr style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Cód.</td>
        <td style="font-weight:bold;text-align: center;">Ciudad</td>
        <td style="font-weight:bold;text-align: center;">Región</td>
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
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Sigla_ciu'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_ciu'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_reg'];?>
</td>        
        <td style="font-weight:bold;text-align: center;"><a class="glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/asigciu/eliminarCiu/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_usu'];?>
/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_ciu'];?>
/" onclick='return cb(this);'></a></td>
    </tr>
<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No tiene ciudades asignadas al usuario.</strong></p>
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
usuarios/"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>   
</p>
</div>
<?php }} ?>