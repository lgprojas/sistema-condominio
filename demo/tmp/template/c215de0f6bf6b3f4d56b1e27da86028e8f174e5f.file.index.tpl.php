<?php /* Smarty version Smarty-3.1.11, created on 2017-12-03 01:14:58
         compiled from "C:\xampp\htdocs\icondo\modules\buscar\views\viv\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171855a1b9c41e608f2-08186260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c215de0f6bf6b3f4d56b1e27da86028e8f174e5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\buscar\\views\\viv\\index.tpl',
      1 => 1512260090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171855a1b9c41e608f2-08186260',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a1b9c420146b8_30454859',
  'variables' => 
  array (
    'cb' => 0,
    'c' => 0,
    'dat' => 0,
    'dat1' => 0,
    'dat2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1b9c420146b8_30454859')) {function content_5a1b9c420146b8_30454859($_smarty_tpl) {?><div class="container">
<h3>Buscar Vivienda</h3>
<div class="container">
<div class="col-md-4">
<form name="form1" method="post">
    <div class="col-lg-10">
    <input type="hidden" name="buscar" value="1" />
    <div class="form-group">
        <label class="control-label">Calle/Torre: </label>
        <select name="cb" id="cb" class="form-control">
            <option value="">-Seleccione-</option>
            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_cb'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_cb'];?>
</option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label class="control-label">N°: </label>
        <select name="num" id="num" class="form-control">
        </select>
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
        <th colspan="2" style="background: #E6E6FA; text-align: center;">Detalle Vivienda</th>
    </thead>
    <tbody>
        <tr>
            <td>Calle/Block:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom_cb'], 'UTF-8');?>
</td>   
        </tr>
        <tr>
            <td>N° vivienda:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Num_viv'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>N° Est:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom_esta'], 'UTF-8');?>
</td>
        </tr>  
    </tbody>
    <thead>
        <th colspan="2" style="background: #E6E6FA; text-align: center;">Detalle propietario</th>
    </thead>
    <tbody>
        <tr>
            <td>RUN:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Rut_per'], 'UTF-8');?>
</td>   
        </tr>
        <tr>
            <td>1er Nom:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Nom1_per'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>2do Nom:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Nom2_per'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>1er Ape:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Ape1_per'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>2do Ape:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Ape2_per'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>Estado:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Nom_estre'], 'UTF-8');?>
</td>
        </tr>
    </tbody>
    <?php if (isset($_smarty_tpl->tpl_vars['dat2']->value)&&!empty($_smarty_tpl->tpl_vars['dat2']->value)){?>
    <thead>
        <th colspan="2" style="background: #E6E6FA; text-align: center;">Detalle titular</th>
    </thead>
    <tbody>
        <tr>
            <td>RUN:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat2']->value['Rut_per'], 'UTF-8');?>
</td>   
        </tr>
        <tr>
            <td>1er Nom:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat2']->value['Nom1_per'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>2do Nom:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat2']->value['Nom2_per'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>1er Ape:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat2']->value['Ape1_per'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>2do Ape:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat2']->value['Ape2_per'], 'UTF-8');?>
</td>
        </tr>
    </tbody>
    <?php }?>
</table>
<?php }?> 
</div>
</div>
</div>
</div><?php }} ?>