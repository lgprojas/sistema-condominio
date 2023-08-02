<?php /* Smarty version Smarty-3.1.11, created on 2014-05-28 22:40:23
         compiled from "C:\xampp\htdocs\scp_vm\modules\salidas\views\verquien\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131965386127a583207-89616605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b422cbc5b08424c684ed2d77e4266c000fdfb02d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\scp_vm\\modules\\salidas\\views\\verquien\\index.tpl',
      1 => 1401309618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131965386127a583207-89616605',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5386127a66d9c5_76818439',
  'variables' => 
  array (
    'ver' => 0,
    'color' => 0,
    'datos' => 0,
    'level' => 0,
    '_layoutParams' => 0,
    'date' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5386127a66d9c5_76818439')) {function content_5386127a66d9c5_76818439($_smarty_tpl) {?><div id="content">
<br/>

<?php if (isset($_smarty_tpl->tpl_vars['ver']->value)&&count($_smarty_tpl->tpl_vars['ver']->value)){?>
<table class="table table-bordered">
    <thead>
        <th colspan="10" style="background: #E6E6FA; text-align: center;">Lista de quienes han reservado</th>
    </thead>
    <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Solicitante</td>
        <td style="font-weight:bold;text-align: center;">Periférico</td>
        <td style="font-weight:bold;text-align: center;">Fch. registro</td>
        <td style="font-weight:bold;text-align: center;">Fch. reserva</td>
        <td style="font-weight:bold;text-align: center;">Estado</td>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ver']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_usu'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_prod'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Fch_sreserva'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Fch_reserva'];?>
</td>
      <?php if ($_smarty_tpl->tpl_vars['level']->value==1){?> 
          <td style="text-align: center;"><a href='<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
salidas/verquien/editEstRes/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_reserva'];?>
/<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_block'];?>
'><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_estp'];?>
</a></td>
      <?php }else{ ?>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_estp'];?>
</td> 
      <?php }?>
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>Nadie ha reservado</strong></p>
<?php }?> 

<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?> 
<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
salidas/block/index/<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/volver.gif" width="30" height="20" title="Volver"/></a>
</div>
<?php }} ?>