<?php /* Smarty version Smarty-3.1.11, created on 2018-05-09 20:12:27
         compiled from "/home/covecino/public_html/modules/historial/views/visita/ajax/pagAjax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10033963605af3805b98f0d6-72775779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4638699a4670a1612abfd5e2d3f7e6403b6aa70' => 
    array (
      0 => '/home/covecino/public_html/modules/historial/views/visita/ajax/pagAjax.tpl',
      1 => 1525736143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10033963605af3805b98f0d6-72775779',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'visitas' => 0,
    'sadmin' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5af3805ba788f3_02990461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af3805ba788f3_02990461')) {function content_5af3805ba788f3_02990461($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['visitas']->value)&&count($_smarty_tpl->tpl_vars['visitas']->value)){?>
    
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    
    <table class="table table-bordered">
    <thead>
        <th colspan="10" style="background: #E6E6FA;text-align: center;">Listado de personas</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Horario</td>
        <td style="font-weight:bold;text-align: center;">Rut</td>
        <td style="font-weight:bold;text-align: center;">1er Apellido</td>      
        <td style="font-weight:bold;text-align: center;">2do Apellido</td>
        <td style="font-weight:bold;text-align: center;">Nombre</td>
        <td style="font-weight:bold;text-align: center;">Vivienda</td>
        <td style="font-weight:bold;text-align: center;">Actividad</td>
        <td style="font-weight:bold;text-align: center;">Vehí/Est.</td>
        <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?><td style="font-weight:bold;text-align: center;">Condominio</td><?php }?>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['visitas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Fch_regv'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Rut_per'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Ape1_per'];?>
</td>        
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Ape2_per'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom1_per'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cb'];?>
-<?php echo $_smarty_tpl->tpl_vars['datos']->value['Num_viv'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_actext'];?>
</td>
        <td style="text-align: center;">
            <?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Cod_vehi'])&&count($_smarty_tpl->tpl_vars['datos']->value['Cod_vehi'])){?>
                <?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Est_prop'])&&count($_smarty_tpl->tpl_vars['datos']->value['Est_prop'])){?>
                    <span class="label label-success">
                        <span><?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_vehi'];?>
</span> <span style="border-radius: 10px; background: white;color: black;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_esta'];?>
</span>
                    </span>
                <?php }else{ ?>
                    <span class="label label-info">
                        <span><?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_vehi'];?>
</span> 
                    </span>
                <?php }?>
            <?php }else{ ?>
                <span class="label label-default"><i class="glyphicon glyphicon-user"></i></span>
            <?php }?>
        </td>
        <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?><td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cond'];?>
</td><?php }?>
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay visitas registradas!</strong></p>
<?php }?>  

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion1']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php }} ?>