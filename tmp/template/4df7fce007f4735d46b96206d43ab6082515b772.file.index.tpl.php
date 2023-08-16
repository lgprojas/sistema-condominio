<?php /* Smarty version Smarty-3.1.11, created on 2023-08-16 15:23:42
         compiled from "C:\xampp\htdocs\condominio\modules\info\views\encuesta\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196017609064dd223e602fe8-12846016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4df7fce007f4735d46b96206d43ab6082515b772' => 
    array (
      0 => 'C:\\xampp\\htdocs\\condominio\\modules\\info\\views\\encuesta\\index.tpl',
      1 => 1526521249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196017609064dd223e602fe8-12846016',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_64dd223e66a866_91100919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64dd223e66a866_91100919')) {function content_64dd223e66a866_91100919($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\condominio\\libs\\smarty\\libs\\plugins\\modifier.date_format.php';
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