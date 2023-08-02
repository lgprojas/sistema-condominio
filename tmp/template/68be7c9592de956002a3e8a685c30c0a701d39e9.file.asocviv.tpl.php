<?php /* Smarty version Smarty-3.1.11, created on 2018-05-23 01:22:58
         compiled from "/home/covecino/public_html/modules/transa/views/per/asocviv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5362952365ad66b6e139076-21568617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68be7c9592de956002a3e8a685c30c0a701d39e9' => 
    array (
      0 => '/home/covecino/public_html/modules/transa/views/per/asocviv.tpl',
      1 => 1527050630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5362952365ad66b6e139076-21568617',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ad66b6e227e89_49702105',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datosPer' => 0,
    '_acl' => 0,
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
<?php if ($_valid && !is_callable('content_5ad66b6e227e89_49702105')) {function content_5ad66b6e227e89_49702105($_smarty_tpl) {?><div class="container">
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

    <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('asoc_viv_per')){?>
    function ceb(formObj) {
                if(confirm("¿Desea asociar esta vivienda a esta persona?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('desasoc_viv_per')){?>
    function dec(formObj) {
                if(confirm("¿Desea quitar esta vivienda de la lista?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    <?php }?>

    </script>

<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('asoc_viv_per')){?>
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
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['carga']->value)&&count($_smarty_tpl->tpl_vars['carga']->value)){?>
<table class="table table-bordered">
    <thead style="background: #E6E6FA;">
        <th style="text-align: center;">ID</th>
        <th style="text-align: center;">N° Viv.</th>
        <th style="text-align: center;">Calle/Block</th>
        <th style="text-align: center;">Tipo relación</th>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('desasoc_viv_per')){?><th style="text-align: center;">Quitar</th><?php }?>
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
            <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('desasoc_viv_per')){?><td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/per/deleteVivRelPer/<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_viv_encrypt'];?>
/<?php echo $_smarty_tpl->tpl_vars['Id_encrypt']->value;?>
" onclick='return dec(this);'><i title="Quitar de la lista" class="glyphicon glyphicon-trash"></i></a></td><?php }?>            
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