<?php /* Smarty version Smarty-3.1.11, created on 2018-05-19 11:39:26
         compiled from "C:\xampp\htdocs\covecino\modules\transa\views\per\asocviv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:250665acfa9c793b0f8-03951771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '363415aef89e583441d7b5c238d19e13b025ceb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\transa\\views\\per\\asocviv.tpl',
      1 => 1526740663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250665acfa9c793b0f8-03951771',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5acfa9c7a05cb7_17406817',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datosPer' => 0,
    'co' => 0,
    'cb' => 0,
    'a' => 0,
    'trelviv' => 0,
    'b' => 0,
    'carga' => 0,
    'ca' => 0,
    'Id_encrypt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acfa9c7a05cb7_17406817')) {function content_5acfa9c7a05cb7_17406817($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/per">Lista personas</a></li>
        <li class="active">Viviendas asociadas</li>
    </ol>
<h3>Viviendas asociadas</h3>
<h4><?php echo $_smarty_tpl->tpl_vars['datosPer']->value['Nom1_per'];?>
 <?php echo $_smarty_tpl->tpl_vars['datosPer']->value['Nom1_per'];?>
 <?php echo $_smarty_tpl->tpl_vars['datosPer']->value['Ape1_per'];?>
 <?php echo $_smarty_tpl->tpl_vars['datosPer']->value['Ape2_per'];?>
</h4>

    <script type="text/javascript">
    function ceb(formObj) {
                if(confirm("¿Desea asociar esta vivienda a esta persona?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function dec(formObj) {
                if(confirm("¿Desea quitar esta vivienda de la lista?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>


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
    <label class="control-label" style="margin: 5px">Vivienda: </label>    
    <select name="viv" id="viv" class="form-control" style="margin: 5px">  
    </select>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['trelviv']->value)&&count($_smarty_tpl->tpl_vars['trelviv']->value)){?>
<div class="col-md-2">
    <label class="control-label" style="margin: 5px">Tipo relación: </label>    
    <select name="trel" id="trel" class="form-control" style="margin: 5px">  
                    <option value="">-Seleccione-</option>
                    <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['trelviv']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['b']->value['Id_trel'];?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value['Nom_trel'];?>
</option>
                    <?php } ?>
    </select>
</div>
<?php }else{ ?>
    <p><i title="Info" class="glyphicon glyphicon-ok-sign"></i> Ha asignado todas las viviendas disponibles.</p>
<?php }?>
<div class="col-md-3">
    <button  type="submit" id="btn_save" class="btn btn-primary" style="margin: 35px" onclick='return ceb(this);'>Asociar</button>
</div>
</div>
</form>

<?php if (isset($_smarty_tpl->tpl_vars['carga']->value)&&count($_smarty_tpl->tpl_vars['carga']->value)){?>
<table class="table table-bordered">
    <thead style="background: #E6E6FA;">
        <th style="text-align: center;">ID</th>
        <th style="text-align: center;">N° Viv.</th>
        <th style="text-align: center;">Calle/Block</th>
        <th style="text-align: center;">Tipo relación</th>
        <th style="text-align: center;">Quitar</th>
    </thead>
    
    <?php  $_smarty_tpl->tpl_vars['ca'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ca']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carga']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ca']->key => $_smarty_tpl->tpl_vars['ca']->value){
$_smarty_tpl->tpl_vars['ca']->_loop = true;
?>
        <tr>
            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_viv'];?>
</td>
            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['ca']->value['Num_viv'];?>
</td>
            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['ca']->value['Nom_cb'];?>
</td>
            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['ca']->value['Nom_trel'];?>
</td>
            <td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/per/deleteVivRelPer/<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_viv_encrypt'];?>
/<?php echo $_smarty_tpl->tpl_vars['Id_encrypt']->value;?>
" onclick='return dec(this);'><i title="Quitar de la lista" class="glyphicon glyphicon-trash"></i></a></td>            
        </tr>        
    <?php } ?>
    
</table>
<?php }else{ ?>
    <p><i title="Info" class="glyphicon glyphicon-info-sign"></i> La persona no se encuentra asociada a ninguna vivienda.</p>
<?php }?>
<br/>
<p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/per"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div><?php }} ?>