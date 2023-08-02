<?php /* Smarty version Smarty-3.1.11, created on 2018-05-16 20:57:22
         compiled from "C:\xampp\htdocs\covecino\modules\ref\views\cond\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:300655ab593e2b5a047-99585967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '259d26610c751bba1935760fc2c204c64dfbd3a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\ref\\views\\cond\\editar.tpl',
      1 => 1525927729,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300655ab593e2b5a047-99585967',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ab593e2c76d98_49921048',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'inm' => 0,
    'i' => 0,
    'ciu' => 0,
    'c' => 0,
    '_acl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab593e2c76d98_49921048')) {function content_5ab593e2c76d98_49921048($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cond">Lista condominios</a></li>
        <li class="active">Editar condominio</li>
    </ol>
<h3>Editar condominio</h3>
<h4><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cond'];?>
</h4>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar este condominio?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <div class="form-horizontal col-lg-3 small">
        <label class="control-label">Nombre:</label>
        <input class="form-control" type="text" name="nom" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Nom_cond'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cond'];?>
<?php }?>" placeholder="Ingrese nombre condominio"/>
        <label class="control-label">Dirección:</label>
        <input class="form-control" type="text" name="dir" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Dir_cond'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Dir_cond'];?>
<?php }?>" placeholder="Ingrese dirección condominio"/>
        <label class="control-label">Inmobiliaria:</label>
            <select class="form-control" name="inm" id="inm">

                <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_inm']!=0){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_inm'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_inm'];?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['i']->value['Id_inm']!=$_smarty_tpl->tpl_vars['datos']->value['Id_inm']){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['Id_inm'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['Nom_inm'];?>
</option>
                        <?php }?>
                    <?php } ?>
                <?php }else{ ?>
                    <option value="">-Seleccione-</option>
                     <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['Id_inm'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['Nom_inm'];?>
</option>
                     <?php } ?>
                <?php }?>
             </select>            
        <label class="control-label">Ciudad:</label>
            <select class="form-control" name="ciu" id="ciu">
                <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_ciu']!=0){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_ciu'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_ciu'];?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ciu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['c']->value['Id_ciu']!=$_smarty_tpl->tpl_vars['datos']->value['Id_ciu']){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_ciu'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_ciu'];?>
</option>
                        <?php }?>
                    <?php } ?>
                <?php }else{ ?>
                    <option value="">-Seleccione-</option>
                     <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ciu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_ciu'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_ciu'];?>
</option>
                     <?php } ?>
                <?php }?>
             </select> 
        <br/>
    <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_cond')){?>
        <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>
    <?php }?>
</form>
         <br/><br/>
        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cond"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>