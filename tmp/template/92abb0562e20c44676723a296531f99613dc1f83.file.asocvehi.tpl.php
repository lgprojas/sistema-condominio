<?php /* Smarty version Smarty-3.1.11, created on 2018-05-23 01:23:10
         compiled from "/home/covecino/public_html/modules/transa/views/per/asocvehi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8842152305ad66b7c421853-80409183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92abb0562e20c44676723a296531f99613dc1f83' => 
    array (
      0 => '/home/covecino/public_html/modules/transa/views/per/asocvehi.tpl',
      1 => 1527051510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8842152305ad66b7c421853-80409183',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ad66b7c4fa139_85750783',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datosPer' => 0,
    '_acl' => 0,
    'co' => 0,
    'cb' => 0,
    'a' => 0,
    'trelv' => 0,
    'b' => 0,
    'carga' => 0,
    'ca' => 0,
    'Id_encrypt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad66b7c4fa139_85750783')) {function content_5ad66b7c4fa139_85750783($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/per">Lista personas</a></li>
        <li class="active">Vehículos asociados</li>
    </ol>
<h3>Vehículos asociados</h3>
<h4><?php echo $_smarty_tpl->tpl_vars['datosPer']->value['Nom1_per'];?>
 <?php echo $_smarty_tpl->tpl_vars['datosPer']->value['Nom1_per'];?>
 <?php echo $_smarty_tpl->tpl_vars['datosPer']->value['Ape1_per'];?>
 <?php echo $_smarty_tpl->tpl_vars['datosPer']->value['Ape2_per'];?>
</h4>

    <script type="text/javascript">

    <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('asoc_vehi_per')){?>
    function ceb(formObj) {
                if(confirm("¿Desea asociar este vehículo a esta persona?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('desasoc_vehi_per')){?>
    function dec(formObj) {
                if(confirm("¿Desea quitar este vehículo de la lista?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    <?php }?>

    </script>


<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('asoc_vehi_per')){?>
<form name="form1" method="post">
    <input type="hidden" name="guardar" value="1" />
<div class="row">

    <input type="hidden" id="co" name="co" value="<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
"/>

<div class="col-md-2">
    <label class="control-label" style="margin: 5px">Block/Torre: </label>    
    <select name="cb" id="cb" class="form-control" style="margin: 5px">  
                    <option value="">-Seleccione-</option>
                    <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['a'];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['b'];?>
</option>
                    <?php } ?>
    </select>
</div>
<div class="col-md-2">
    <label class="control-label" style="margin: 5px">Vehículo: </label>    
    <select name="vehi" id="vehi" class="form-control" style="margin: 5px">  
    </select>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['trelv']->value)&&count($_smarty_tpl->tpl_vars['trelv']->value)){?>
<div class="col-md-2">
    <label class="control-label" style="margin: 5px">Tipo relación: </label>    
    <select name="trelv" id="trelv" class="form-control" style="margin: 5px">  
                    <option value="">-Seleccione-</option>
                    <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['trelv']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['b']->value['Id_trelv'];?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value['Nom_trelv'];?>
</option>
                    <?php } ?>
    </select>
</div>
<?php }else{ ?>
    <p><i title="Info" class="glyphicon glyphicon-ok-sign"></i> Ha asignado todas los vehículos disponibles.</p>
<?php }?>
<div class="col-md-3">
    <input type="submit" id="btn_s" value="Asociar" class="btn btn-primary" style="margin: 35px" onclick='return ceb(this);' />
</div>
</div>
</form>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['carga']->value)&&count($_smarty_tpl->tpl_vars['carga']->value)){?>
<table class="table table-bordered">
    <thead style="background: #E6E6FA;">
        <th style="text-align: center;">ID</th>
        <th style="text-align: center;">Patente</th>
        <th style="text-align: center;">Tipo relación</th>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('desasoc_vehi_per')){?><th style="text-align: center;">Quitar</th><?php }?>
    </thead>
    
    <?php  $_smarty_tpl->tpl_vars['ca'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ca']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carga']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ca']->key => $_smarty_tpl->tpl_vars['ca']->value){
$_smarty_tpl->tpl_vars['ca']->_loop = true;
?>
        <tr>
            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_vehi'];?>
</td>
            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['ca']->value['Cod_vehi'];?>
</td>
            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['ca']->value['Nom_trelv'];?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('desasoc_vehi_per')){?><td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/per/deleteVehiRelPer/<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_vehi_encrypt'];?>
/<?php echo $_smarty_tpl->tpl_vars['Id_encrypt']->value;?>
" onclick='return dec(this);'><i title="Quitar de la lista" class="glyphicon glyphicon-trash"></i></a></td><?php }?>            
        </tr>        
    <?php } ?>
    
</table>
<?php }else{ ?>
    <p><i title="Info" class="glyphicon glyphicon-info-sign"></i> La persona no se encuentra asociada a ningún vehículo.</p>
<?php }?>
<br/>
<p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/per"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div><?php }} ?>