<?php /* Smarty version Smarty-3.1.11, created on 2018-05-29 01:41:43
         compiled from "/home/covecino/public_html/demo/modules/historial/views/visita/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16613339915b0cda0700e555-45799374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaf8ab67b1a94ae4a11651cfe21c63df96787ee9' => 
    array (
      0 => '/home/covecino/public_html/demo/modules/historial/views/visita/index.tpl',
      1 => 1525732912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16613339915b0cda0700e555-45799374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sadmin' => 0,
    'cond' => 0,
    'ps' => 0,
    'co' => 0,
    'cbl' => 0,
    'cb' => 0,
    'viv' => 0,
    'v' => 0,
    '_datos' => 0,
    'visitas' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b0cda07117526_14426125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0cda07117526_14426125')) {function content_5b0cda07117526_14426125($_smarty_tpl) {?><div class="container">
<h3>Historial Registro Visitas</h3>

    <script>
    </script>

<div class="well well-small row sm">
    <form id="form1" class="form-inline">
        <div class="col-lg-6 col-md-6">
            <div class="col-lg-3">
            <label for="from">Desde:</label>
            <input type="text" id="from" name="from" style="width: 100px;margin: 5px;" class="form-control" readonly="readonly">
            </div>
            <div class="col-lg-3">
            <label for="to">Hasta:</label>
            <input type="text" id="to" name="to" style="width: 100px;margin: 5px;" class="form-control" readonly="readonly" disabled="true">
            </div>
            <div class="col-lg-1">
                <button type="button" id="reset" class="btn btn-default" style="margin: 5px;"><i class=" glyphicon glyphicon-refresh"></i></button>
                <button type="button" id="btnEnviar" class="btn btn-info" style="margin: 5px;"><i class=" glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
        <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?>
        <div class="col">
        <select id="co" name="co" class="form-control input-sm" style="margin:5px;">
            <option value=""> - seleccione condominio - </option>
            <?php  $_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ps']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cond']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->key => $_smarty_tpl->tpl_vars['ps']->value){
$_smarty_tpl->tpl_vars['ps']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['ps']->value['Id_cond'];?>
"><?php echo $_smarty_tpl->tpl_vars['ps']->value['Nom_cond'];?>
</option>
            <?php } ?>
        </select>
        </div>
        <?php }else{ ?>
            <input type="hidden" id="co" value="<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
"/>
        <?php }?>        
        <div class="col">            
            <select id="cb" name="cb" class="form-control input-sm" style="margin:5px;">
                <option value=""> - seleccione calle/block - </option>
                <?php  $_smarty_tpl->tpl_vars['cb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cbl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cb']->key => $_smarty_tpl->tpl_vars['cb']->value){
$_smarty_tpl->tpl_vars['cb']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['cb']->value['a'];?>
"><?php echo $_smarty_tpl->tpl_vars['cb']->value['b'];?>
</option>
                <?php } ?>
            </select>
        </div>
        <div class="col">
            <select id="viv" name="viv" class="form-control input-sm" style="margin:5px;">
                <option value=""> - seleccione vivienda - </option>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['viv']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['c'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['d'];?>
-<?php echo $_smarty_tpl->tpl_vars['v']->value['e'];?>
</option>
                <?php } ?>
            </select>
        </div>
        </div>
    </form>
</div>
<div id="lista_registros">
<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['visitas']->value)&&count($_smarty_tpl->tpl_vars['visitas']->value)){?>
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
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?> 
</div>
</div><?php }} ?>