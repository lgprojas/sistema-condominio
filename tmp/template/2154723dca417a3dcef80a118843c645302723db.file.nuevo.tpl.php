<?php /* Smarty version Smarty-3.1.11, created on 2017-12-06 00:56:05
         compiled from "C:\xampp\htdocs\icondo\modules\ref\views\modelo\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35895a2732151820e6-43893413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2154723dca417a3dcef80a118843c645302723db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\ref\\views\\modelo\\nuevo.tpl',
      1 => 1512517948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35895a2732151820e6-43893413',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
    'marca' => 0,
    'c' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a273215299c32_09148834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a273215299c32_09148834')) {function content_5a273215299c32_09148834($_smarty_tpl) {?><div class="container">
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