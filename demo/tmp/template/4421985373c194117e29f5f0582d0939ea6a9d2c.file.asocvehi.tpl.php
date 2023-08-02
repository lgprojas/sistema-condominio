<?php /* Smarty version Smarty-3.1.11, created on 2018-05-14 21:00:14
         compiled from "C:\xampp\htdocs\covecino\modules\transa\views\per\asocvehi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43725ad03a9d05e111-95580092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4421985373c194117e29f5f0582d0939ea6a9d2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\transa\\views\\per\\asocvehi.tpl',
      1 => 1526342203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43725ad03a9d05e111-95580092',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ad03a9d222c60_86057770',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datosPer' => 0,
    'sadmin' => 0,
    'cond' => 0,
    'ps' => 0,
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
<?php if ($_valid && !is_callable('content_5ad03a9d222c60_86057770')) {function content_5ad03a9d222c60_86057770($_smarty_tpl) {?><div class="container">
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
    function ceb(formObj) {
                if(confirm("¿Desea asociar este vehículo a esta persona?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function dec(formObj) {
                if(confirm("¿Desea quitar este vehículo de la lista?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>


<form name="form1" method="post">
    <input type="hidden" name="guardar" value="1" />
<div class="row">
<?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?>
<div class="col-md-2">
    <label class="control-label" style="margin: 5px">Condominio: </label>
    <select id="co" name="co" class="form-control" style="margin: 5px">
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
    <input type="hidden" id="co" name="co" value="<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
"/>
<?php }?>

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

<?php if (isset($_smarty_tpl->tpl_vars['carga']->value)&&count($_smarty_tpl->tpl_vars['carga']->value)){?>
<table class="table table-bordered">
    <thead style="background: #E6E6FA;">
        <th style="text-align: center;">ID</th>
        <th style="text-align: center;">Patente</th>
        <th style="text-align: center;">Tipo relación</th>
        <th style="text-align: center;">Quitar</th>
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
            <td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/per/deleteVehiRelPer/<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_vehi_encrypt'];?>
/<?php echo $_smarty_tpl->tpl_vars['Id_encrypt']->value;?>
" onclick='return dec(this);'><i title="Quitar de la lista" class="glyphicon glyphicon-trash"></i></a></td>            
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