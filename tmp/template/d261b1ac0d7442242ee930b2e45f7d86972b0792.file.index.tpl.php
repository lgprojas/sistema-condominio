<?php /* Smarty version Smarty-3.1.11, created on 2014-05-26 21:55:22
         compiled from "C:\xampp\htdocs\scp_vm\modules\salidas\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31716537a2c31112480-37845172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd261b1ac0d7442242ee930b2e45f7d86972b0792' => 
    array (
      0 => 'C:\\xampp\\htdocs\\scp_vm\\modules\\salidas\\views\\index\\index.tpl',
      1 => 1401134116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31716537a2c31112480-37845172',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_537a2c3121a5c0_52563862',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537a2c3121a5c0_52563862')) {function content_537a2c3121a5c0_52563862($_smarty_tpl) {?><div id="content">
<h3>Ver movimientos</h3>
<br/>
<form method="post" action="">
    <input type="hidden" name="ver" value="1" />

<div class="col-lg-10">
    <div class="col-lg-2" style="margin: 15px;">
        <label class="control-label">Día a consultar:</label>
    </div>    
    <div class="col-lg-2">
        <input type="text" class="form-control" id="datepicker" name="date"  readonly="readonly" style="width: 100px;margin: 15px;" placeholder="00-00-0000"/>
    </div>
    
    <button type="submit" class="btn btn-primary" style="margin: 15px;">Ver</button>
</div>

</form>
</div><?php }} ?>