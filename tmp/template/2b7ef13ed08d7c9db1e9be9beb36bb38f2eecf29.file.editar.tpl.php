<?php /* Smarty version Smarty-3.1.11, created on 2016-01-06 16:25:22
         compiled from "C:\xampp\htdocs\munku\modules\referen\views\ciu\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22851568d31e2196034-68438777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b7ef13ed08d7c9db1e9be9beb36bb38f2eecf29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\referen\\views\\ciu\\editar.tpl',
      1 => 1452093757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22851568d31e2196034-68438777',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
    'reg' => 0,
    'r' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_568d31e2282b68_66598447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d31e2282b68_66598447')) {function content_568d31e2282b68_66598447($_smarty_tpl) {?><div class="container">
<h3>Editar ciudad</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta ciudad?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <div class="form-horizontal col-lg-6 small">
        <label class="control-label">Región:</label>
            <select class="form-control" name="reg" id="reg">

                <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_reg']!=0){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_reg'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_reg'];?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['r']->value['Id_reg']!=$_smarty_tpl->tpl_vars['datos']->value['Id_reg']){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['Id_reg'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['Nom_reg'];?>
</option>
                        <?php }?>
                    <?php } ?>
                <?php }else{ ?>
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
                <?php }?>
             </select>            
        
        <label class="control-label">Nombre ciudad:</label>
        <input class="form-control" type="text" name="ciu" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Nom_ciu'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_ciu'];?>
<?php }?>" placeholder="Ingrese nombre ciudad"/>
        <label class="control-label">Sigla ciudad:</label>
        <input class="form-control" type="text" name="sciu" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Sigla_ciu'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Sigla_ciu'];?>
<?php }?>" placeholder="Ingrese sigla ciudad"/>
        <br/>
    <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>
</form>
         <br/><br/>
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
referen/ciu"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/volver.gif" width="30" height="20" title="Volver"/></a></p>
</div>
</div><?php }} ?>