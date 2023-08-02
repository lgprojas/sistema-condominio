<?php /* Smarty version Smarty-3.1.11, created on 2017-12-05 05:21:58
         compiled from "C:\xampp\htdocs\icondo\modules\ref\views\cond\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54515a261ee6aaa833-59749476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f81d2931d56abf2c167fe89385322ee25a4c5e89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\ref\\views\\cond\\editar.tpl',
      1 => 1512447455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54515a261ee6aaa833-59749476',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
    'inm' => 0,
    'i' => 0,
    'ciu' => 0,
    'c' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a261ee6c2b405_92335271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a261ee6c2b405_92335271')) {function content_5a261ee6c2b405_92335271($_smarty_tpl) {?><div class="container">
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
    <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>
</form>
         <br/><br/>
        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/ps"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>