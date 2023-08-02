<?php /* Smarty version Smarty-3.1.11, created on 2017-11-25 00:36:15
         compiled from "C:\xampp\htdocs\icondo\modules\buscar\views\patente\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45485a160f7632a896-57745602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cfbf77f59b79cc16afcdcd4d2c9446d500e6e9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\buscar\\views\\patente\\index.tpl',
      1 => 1511566567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45485a160f7632a896-57745602',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a160f78dc5d56_40027062',
  'variables' => 
  array (
    'dat' => 0,
    'dat1' => 0,
    'dat2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a160f78dc5d56_40027062')) {function content_5a160f78dc5d56_40027062($_smarty_tpl) {?><div class="container">
<h3>Buscar Patente</h3>
<div class="container">
<div class="col-md-4">
<form name="form1" method="post">
    <div class="col-lg-10">
    <input type="hidden" name="buscar" value="1" />
    <div class="form-group">
            <label class="control-label">Patente: </label>
            <input type="text" name="cod" class="form-control" />
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
        <th colspan="2" style="background: #E6E6FA; text-align: center;">Detalle vehículo</th>
    </thead>
    <tbody>
        <tr>
            <td>Patente:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Cod_vehi'], 'UTF-8');?>
</td>   
        </tr>
        <tr>
            <td>Marca:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom_marca'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>Modelo:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom_modelo'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>Detalle:</td><td><?php echo $_smarty_tpl->tpl_vars['dat']->value['Desc_vehi'];?>
</td>   
        </tr>
        <tr>
            <td>Propietario:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom1_per'], 'UTF-8');?>
 <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Ape1_per'], 'UTF-8');?>
 <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Ape2_per'], 'UTF-8');?>
</td>
        </tr>       
    </tbody> 
    <thead>
        <th colspan="2" style="background: #E6E6FA; text-align: center;">Vivienda relacionada</th>
    </thead>
    <tbody>
        <tr>
            <td>Depto asociado:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Nom_cb'], 'UTF-8');?>
-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Num_viv'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>Relación con depto:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Nom_trel'], 'UTF-8');?>
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