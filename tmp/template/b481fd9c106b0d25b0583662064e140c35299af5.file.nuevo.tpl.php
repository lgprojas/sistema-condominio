<?php /* Smarty version Smarty-3.1.11, created on 2018-05-10 02:00:16
         compiled from "C:\xampp\htdocs\covecino\modules\ref\views\modelo\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238225ae25f24b633b0-73422601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b481fd9c106b0d25b0583662064e140c35299af5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\ref\\views\\modelo\\nuevo.tpl',
      1 => 1525928383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238225ae25f24b633b0-73422601',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ae25f24c8dd40_64944010',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'marca' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae25f24c8dd40_64944010')) {function content_5ae25f24c8dd40_64944010($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/modelo">Lista modelos</a></li>
        <li class="active">Nuevo modelo</li>
    </ol>
<h3>Nuevo Modelo Vehículo</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear este nuevo Modelo de Vehículo?")) {
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
" placeholder="Ingrese nombre modelo"/>       
         <label class="control-label">Marca: </label>
            <select name="marca" id="marca" class="form-control input-sm">
                <option value="">-Seleccione-</option>
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['marca']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_marca'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_marca'];?>
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
ref/modelo"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>