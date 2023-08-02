<?php /* Smarty version Smarty-3.1.11, created on 2014-05-28 20:54:02
         compiled from "C:\xampp\htdocs\scp_vm\modules\salidas\views\block\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18085537d357d5075f4-85498370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10a2380499d9efc80c4bf0594684119f29e005b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\scp_vm\\modules\\salidas\\views\\block\\index.tpl',
      1 => 1401303237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18085537d357d5075f4-85498370',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_537d357d73c6b8_32900233',
  'variables' => 
  array (
    'date' => 0,
    'row' => 0,
    'color' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
    'b1' => 0,
    'datos1' => 0,
    'b2' => 0,
    'datos2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537d357d73c6b8_32900233')) {function content_537d357d73c6b8_32900233($_smarty_tpl) {?><div id="content">
<h3>Seleccione block con fecha: <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</h3>




<?php if (isset($_smarty_tpl->tpl_vars['row']->value)&&count($_smarty_tpl->tpl_vars['row']->value)){?><!--que si existe posts y además que tenga por lo menos 1 -->

    <table class="table table-bordered">
        <thead>
            <th colspan="9" style="background: #E6E6FA;text-align: center;">Detalle préstamos</th>
        </thead>
        <tr style="background: #E6E6FA;">
            <td style="font-weight:bold;text-align: center;">Hora block</td>
            <td style="font-weight:bold;text-align: center;">Estado</td>
            <td style="font-weight:bold;text-align: center;">Quién ha reservado</td>      
        </tr>

    <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
        <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_block'];?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Ver_sol']==1){?>
                <td style="text-align: center;"><a href='<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
salidas/resperif/index/<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_block'];?>
'><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_est'];?>
</a></td>
                <td style="text-align: center;"><a href='<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
salidas/verquien/index/<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_block'];?>
'>Ver</a></td>
            <?php }else{ ?>
                <td style="text-align: center;"><a href='<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
salidas/resperif/index/<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_block'];?>
'>No hay disponibilidad</a></td>
                <td style="text-align: center;"><a href='<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
salidas/verquien/index/<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_block'];?>
'>Ver</a></td>
            <?php }?>
        </tr>
    <?php } ?>
    <?php  $_smarty_tpl->tpl_vars['datos1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['b1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos1']->key => $_smarty_tpl->tpl_vars['datos1']->value){
$_smarty_tpl->tpl_vars['datos1']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
        <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos1']->value['Nom_block'];?>
</td>
            <td style="text-align: center;"><a href='<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
salidas/resperif/index/<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['datos1']->value['Id_block'];?>
'>Hay disponibilidad</a></td>
            <td style="text-align: center;">Sin reservas</td>
        </tr>
    <?php } ?>
    </table>
<?php }else{ ?>
    <table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA;">Detalle préstamos</th>
    </thead>
    <tr style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Hora block</td>
        <td style="font-weight:bold;text-align: center;">Estado</td>
        <td style="font-weight:bold;text-align: center;">Quién ha reservado</td>      
    </tr>
    <?php  $_smarty_tpl->tpl_vars['datos2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['b2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos2']->key => $_smarty_tpl->tpl_vars['datos2']->value){
$_smarty_tpl->tpl_vars['datos2']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
        <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos2']->value['Nom_block'];?>
</td>
            <td style="text-align: center;"><a href='<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
salidas/resperif/index/<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['datos2']->value['Id_block'];?>
'>Hay disponibilidad</a></td>
            <td style="text-align: center;">Sin reservas</td>
        </tr>
    <?php } ?>      
    </table>
<?php }?>
<br/>



<p> </p>
<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
salidas/index/index/"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/volver.gif" width="30" height="20" title="Volver"/></a>
</div>
<?php }} ?>