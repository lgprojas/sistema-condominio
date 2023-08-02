<?php /* Smarty version Smarty-3.1.11, created on 2018-03-24 01:15:25
         compiled from "C:\xampp\htdocs\covecino\modules\ref\views\cond\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:232665ab5989d95a263-84827714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '830d752872cac45e1c97a7dd82445076d091b57f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\ref\\views\\cond\\nuevo.tpl',
      1 => 1521849350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232665ab5989d95a263-84827714',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
    'inm' => 0,
    'i' => 0,
    'ciu' => 0,
    'c' => 0,
    '_acl' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ab5989da228b7_52767200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab5989da228b7_52767200')) {function content_5ab5989da228b7_52767200($_smarty_tpl) {?><div class="container">
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
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_cond')){?>
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>
        <?php }?>
    </p>
</form>
        <br/>
        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cond"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>