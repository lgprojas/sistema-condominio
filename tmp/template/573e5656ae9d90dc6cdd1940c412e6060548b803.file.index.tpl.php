<?php /* Smarty version Smarty-3.1.11, created on 2015-12-15 05:08:02
         compiled from "C:\xampp\htdocs\munku\modules\lugar\views\catalogo\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24261566b57d13a05f0-75236262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '573e5656ae9d90dc6cdd1940c412e6060548b803' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\lugar\\views\\catalogo\\index.tpl',
      1 => 1450152475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24261566b57d13a05f0-75236262',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_566b57d145eec2_65372475',
  'variables' => 
  array (
    'ciu' => 0,
    'c' => 0,
    'cat' => 0,
    'ca' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566b57d145eec2_65372475')) {function content_566b57d145eec2_65372475($_smarty_tpl) {?><div class="container">
<br/>
<br/>
<form enctype="multipart/form-data" method="post">
    <input type="hidden" name="buscar" value="1" />
    
    <div style=" width: 300px;margin: 0 auto !important; float: none !important;text-align: center;">
        <fieldset>
        <legend>¿Dónde?</legend>
            <select name="ciu" id="ciu" class="form-control input-sm">
                <option value="">-Seleccione ciudad-</option>
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ciu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_ciu'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_ciu'];?>
</option>
                <?php } ?>
            </select>
            <br/>
            <select name="sec" id="sec" class="form-control input-sm">
                <option value="">---</option>           
            </select>  
        </fieldset>
        <br/>
        <fieldset>
        <legend>¿Qué buscar?</legend>
            <select name="cat" id="cat" class="form-control input-sm">
                <option value="">-Seleccione categoría-</option>
                <?php  $_smarty_tpl->tpl_vars['ca'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ca']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ca']->key => $_smarty_tpl->tpl_vars['ca']->value){
$_smarty_tpl->tpl_vars['ca']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['ca']->value['Nom_cat'];?>
</option>
                <?php } ?>
            </select>
            <br/>
            <select name="scat" id="scat" class="form-control input-sm">
                <option value="">---</option>           
            </select> 
        </fieldset>
        <input style="margin-top: 30px;" class="btn btn-small btn-primary" type="submit" value="Visitar" onclick='return cb(this);'/>
        <br/>
    </div>
</form>
</div>
</div><?php }} ?>