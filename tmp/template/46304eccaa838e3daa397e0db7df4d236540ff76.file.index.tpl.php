<?php /* Smarty version Smarty-3.1.11, created on 2017-05-07 13:19:46
         compiled from "C:\xampp\htdocs\munku\modules\lugar\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6869590f5652e03719-50241752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46304eccaa838e3daa397e0db7df4d236540ff76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\lugar\\views\\index\\index.tpl',
      1 => 1494177579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6869590f5652e03719-50241752',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_590f565323b6b3_26671806',
  'variables' => 
  array (
    'ciu' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590f565323b6b3_26671806')) {function content_590f565323b6b3_26671806($_smarty_tpl) {?><div class="container">
<h3>Selección de ciudad</h3>
<div class="col-md-4">
<form name="form1" method="post">
    <div class="col-lg-10">
    <input type="hidden" name="ver" value="1" />
    <div class="form-group">
            <label class="control-label">Ciudad: </label>
            <select name="ciu" class="form-control">
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
            </select>
    </div>
    <button type="submit" id="new" class="btn btn-primary" style="margin: 15px;">Ver</button>
    </div>
</form>
</div>
</div><?php }} ?>