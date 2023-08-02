<?php /* Smarty version Smarty-3.1.11, created on 2018-05-22 15:17:49
         compiled from "/home/covecino/public_html/modules/usuarios/views/gestores/asigcond.tpl" */ ?>
<?php /*%%SmartyHeaderCode:245843435b046cdd1d0ce9-05959837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0348ecf383bd46d520de9417f262d0b0b8c7205' => 
    array (
      0 => '/home/covecino/public_html/modules/usuarios/views/gestores/asigcond.tpl',
      1 => 1526225208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245843435b046cdd1d0ce9-05959837',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dusu' => 0,
    'conds' => 0,
    'c' => 0,
    '_datos' => 0,
    'pag1' => 0,
    'color' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
    'idusu' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b046cdd2aefd7_02484466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b046cdd2aefd7_02484466')) {function content_5b046cdd2aefd7_02484466($_smarty_tpl) {?><div class="container">
<h3>Condominios asignados al usuario</h3>
<h5>Usuario: <?php echo $_smarty_tpl->tpl_vars['dusu']->value['Nom_usu'];?>
 | Role: <?php echo $_smarty_tpl->tpl_vars['dusu']->value['Nom_role'];?>
</h5>

    <script type="text/javascript">
    function ci(formObj) {
                if(confirm("¿Desea agregar este condominio al usuario?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function cb(formObj) {
                if(confirm("¿Está seguro que desea desasignar este condominio al usuario?")) {
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
            Condominio:
            <select name="cond" id="cond" class="form-control">
                <option value="">-Seleccione-</option>
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['conds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_cond'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_cond'];?>
</option>
                <?php } ?>
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
        <th colspan="10" style="background: #E6E6FA;text-align: center;">CONDOMINIOS ASIGNADOS AL USUARIO</th>
    </thead>
    <tr style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Condominio</td>
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
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cond'];?>
</td> 
        <td style="font-weight:bold;text-align: center;"><a class="glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/gestores/elimCondGestor/<?php echo $_smarty_tpl->tpl_vars['idusu']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
/" onclick='return cb(this);'></a></td>
    </tr>
<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No tiene condominios asignados al usuario.</strong></p>
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
usuarios/gestores/"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>   
</p>
</div>
<?php }} ?>