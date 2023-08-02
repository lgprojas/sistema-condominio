<?php /* Smarty version Smarty-3.1.11, created on 2017-12-05 05:01:30
         compiled from "C:\xampp\htdocs\icondo\modules\ref\views\cond\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196535a261931c20e54-78358967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55f517c653a43fc1d4f229163449af4a7344649d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\ref\\views\\cond\\nuevo.tpl',
      1 => 1512446484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196535a261931c20e54-78358967',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a261931dc0c64_39259485',
  'variables' => 
  array (
    'datos' => 0,
    'inm' => 0,
    'i' => 0,
    'ciu' => 0,
    'c' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a261931dc0c64_39259485')) {function content_5a261931dc0c64_39259485($_smarty_tpl) {?><div class="container">
<h3>Nuevo condominio</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear este nuevo condominio?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<div class="form-horizontal col-lg-3 small">
<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar" />
        <label class="control-label">Nombre:</label>  
         <input class="form-control" type="text" name="nom" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nom'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese nombre condominio"/>       
         <label class="control-label">Dirección:</label>  
         <input class="form-control" type="text" name="dir" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['dir'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese dirección condominio"/>
         <label class="control-label">Inmobiliaria: </label>
            <select name="inm" id="inm" class="form-control input-sm">
                <option value="">-Seleccione-</option>
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['Id_inm'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['Nom_inm'];?>
</option>
                <?php } ?>
            </select>
        <label class="control-label">Ciudad: </label>
            <select name="ciu" id="ciu" class="form-control input-sm">
                <option value="">-Seleccione-</option>
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ciu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_ciu'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_ciu'];?>
</option>
                <?php } ?>
            </select>
        <br/>
    <p>
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>
    </p>
</form>
        <br/>
        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/ps"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>