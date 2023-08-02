<?php /* Smarty version Smarty-3.1.11, created on 2017-11-27 04:23:04
         compiled from "C:\xampp\htdocs\icondo\modules\buscar\views\run\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68225a1b533f63bcc4-65392848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c83178c02e0ba127ecccaf476fa37f9cb319a388' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\buscar\\views\\run\\index.tpl',
      1 => 1511740779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68225a1b533f63bcc4-65392848',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a1b53401a4914_18709321',
  'variables' => 
  array (
    'dat' => 0,
    'dat1' => 0,
    'dat2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1b53401a4914_18709321')) {function content_5a1b53401a4914_18709321($_smarty_tpl) {?><div class="container">
<h3>Buscar RUN</h3>
<div class="container">
<div class="col-md-4">
<form name="form1" method="post">
    <div class="col-lg-10">
    <input type="hidden" name="buscar" value="1" />
    <div class="form-group">
            <label class="control-label">RUN: </label>
            <input type="text" name="run" class="form-control" />
    </div>
    <button type="submit" id="new" class="btn btn-primary" style="margin: 15px;">Buscar</button>
    </div>
</form>
</div>
</div>
<div class="container">
<div class="col-md-4">
<?php if (isset($_smarty_tpl->tpl_vars['dat']->value)&&!empty($_smarty_tpl->tpl_vars['dat']->value)){?>
    <table class="table table-bordered">
    <thead>
        <th colspan="2" style="background: #E6E6FA; text-align: center;">Detalle Persona</th>
    </thead>
    <tbody>
        <tr>
            <td>RUN:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Rut_per'], 'UTF-8');?>
</td>   
        </tr>
        <tr>
            <td>1er Nom:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom1_per'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>2do Nom:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom2_per'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>1er Ape:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Ape1_per'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>2do Ape:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Ape2_per'], 'UTF-8');?>
</td>
        </tr>   
    </tbody> 
    <thead>
        <th colspan="2" style="background: #E6E6FA; text-align: center;">Vivienda relacionada</th>
    </thead>
    <tbody>
        <tr>
            <td>Viv asociado:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Nom_cb'], 'UTF-8');?>
-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Num_viv'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>Relación con viv:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Nom_trel'], 'UTF-8');?>
</td>
        </tr>
    </tbody>
    <thead>
        <th colspan="2" style="background: #E6E6FA; text-align: center;">Detalle vivienda</th>
    </thead>
    <tbody>
        <tr>
            <td>Propietario viv:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat2']->value['Nom1_per'], 'UTF-8');?>
 <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat2']->value['Ape1_per'], 'UTF-8');?>
 <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat2']->value['Ape2_per'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>Estacionamiento:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat2']->value['Nom_esta'], 'UTF-8');?>
</td>
        </tr>
    </tbody>
</table>
<?php }?> 
</div>
</div>
</div>
</div><?php }} ?>