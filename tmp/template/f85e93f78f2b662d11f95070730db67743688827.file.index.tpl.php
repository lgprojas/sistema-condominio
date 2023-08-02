<?php /* Smarty version Smarty-3.1.11, created on 2018-05-22 19:22:55
         compiled from "/home/covecino/public_html/modules/info/views/encuesta/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20665174425ad78eb18c74b8-51495371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f85e93f78f2b662d11f95070730db67743688827' => 
    array (
      0 => '/home/covecino/public_html/modules/info/views/encuesta/index.tpl',
      1 => 1526521249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20665174425ad78eb18c74b8-51495371',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ad78eb1983332_83856145',
  'variables' => 
  array (
    'encuestas' => 0,
    'reside' => 0,
    'reside2' => 0,
    'ca' => 0,
    'puede_votar' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad78eb1983332_83856145')) {function content_5ad78eb1983332_83856145($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/covecino/public_html/libs/smarty/libs/plugins/modifier.date_format.php';
?><div class="container">
<h3>Encuestas</h3>


<div>
<?php if (isset($_smarty_tpl->tpl_vars['encuestas']->value)&&count($_smarty_tpl->tpl_vars['encuestas']->value)){?>
<table class="table table-bordered">
    <thead style="background: #E6E6FA;">
        <th style="text-align: center;">ID</th>
        <th style="text-align: center;">Pregunta</th>
        <th style="text-align: center;">Fch inicio</th>
        <th style="text-align: center;">Fch termino</th>
        <th style="text-align: center;">Condominio</th>
        <th style="text-align: center;">Estado</th>
        <?php if ($_smarty_tpl->tpl_vars['reside']->value==1||$_smarty_tpl->tpl_vars['reside2']->value==1){?><th style="text-align: center;">Votar</th><?php }?>
    </thead>
    
    <?php  $_smarty_tpl->tpl_vars['ca'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ca']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['encuestas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ca']->key => $_smarty_tpl->tpl_vars['ca']->value){
$_smarty_tpl->tpl_vars['ca']->_loop = true;
?>
        <tr>
            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_encu'];?>
</td>
            <td><?php echo substr($_smarty_tpl->tpl_vars['ca']->value['Nom_encu'],0,30);?>
...</td>
            <td style="text-align: center;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ca']->value['Fchi_encu'],"%d-%m-%Y");?>
</td>
            <td style="text-align: center;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ca']->value['Fcht_encu'],"%d-%m-%Y");?>
</td>
            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['ca']->value['Nom_cond'];?>
</td>
            <td style="text-align: center;"><?php if ($_smarty_tpl->tpl_vars['ca']->value['Est_encu']==0){?><i title="Info" class="glyphicon glyphicon-question-sign"></i><?php }else{ ?><i title="Info" class="glyphicon glyphicon-ok-sign"></i><?php }?></td>
            <?php if ($_smarty_tpl->tpl_vars['reside']->value==1||$_smarty_tpl->tpl_vars['puede_votar']->value==$_smarty_tpl->tpl_vars['ca']->value['Id_cond']){?><td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
info/encuesta/votar/<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_encu'];?>
"><i title="Opciones" class="glyphicon glyphicon-list"></i></a></td><?php }?>
    <?php } ?>
<?php }else{ ?>
    <br/>
    <p><i title="Info" class="glyphicon glyphicon-info-sign"></i> No hay encuestas.</p>
<?php }?>

</div>
</div><?php }} ?>