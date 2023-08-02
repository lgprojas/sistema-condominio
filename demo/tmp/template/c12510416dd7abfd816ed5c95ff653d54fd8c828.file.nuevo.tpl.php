<?php /* Smarty version Smarty-3.1.11, created on 2015-02-22 14:56:39
         compiled from "C:\xampp\htdocs\vitritienda\modules\tienda\views\administrar\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3122454cba4c051d379-29306777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c12510416dd7abfd816ed5c95ff653d54fd8c828' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitritienda\\modules\\tienda\\views\\administrar\\nuevo.tpl',
      1 => 1424576692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3122454cba4c051d379-29306777',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_54cba4c05d6d55_21769373',
  'variables' => 
  array (
    'datos' => 0,
    'cat' => 0,
    'c' => 0,
    'tavi' => 0,
    't' => 0,
    'eprod' => 0,
    'e' => 0,
    'eavi' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cba4c05d6d55_21769373')) {function content_54cba4c05d6d55_21769373($_smarty_tpl) {?><div class="container">
<h3>Nuevo producto</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear este nuevo producto?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<br/>
<form enctype="multipart/form-data" method="post">
    <input type="hidden" name="guardar" value="1" />
<fieldset>
<legend>Datos producto</legend>
<div class="form-horizontal well col-lg-6">
    <label class="control-label">Código: </label><input type="text" name="cod" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cod'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese código único del producto" class="form-control"/>
    <label class="control-label">Titulo: </label><input type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese nombre producto" class="form-control"/>
    <label class="control-label">Descripción : </label><input type="text" name="desc" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['desc'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese descripción producto" class="form-control"/>
    <label class="control-label">Stock: </label><input type="text" name="stock" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['stock'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese stock producto" class="form-control"/>
    <label class="control-label">Precio: </label><input type="text" name="precio" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['precio'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese precio producto" class="form-control"/>
    <label class="control-label">Categoría:</label>
        <select name="cat" id="cat" class="form-control">
            <option value="">-Seleccione-</option>
            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_tprod'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_tprod'];?>
</option>
            <?php } ?>
        </select>
    <label class="control-label">Tipo aviso:</label>
        <select name="tavi" id="tavi" class="form-control">
            <option value="">-Seleccione-</option>
            <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tavi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['Id_taviso'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['Nom_taviso'];?>
</option>
            <?php } ?>
        </select>
    <label class="control-label">Estado producto:</label>
        <select name="eprod" id="eprod" class="form-control">
            <option value="">-Seleccione-</option>
            <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eprod']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value['Id_eprod'];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['Nom_eprod'];?>
</option>
            <?php } ?>
        </select>
</div>

</fieldset>  
        <fieldset>
            <legend>Estado publicación</legend>
            <div class="form-horizontal well col-lg-6">
            <label class="control-label">Estado:</label>
                <select name="eavi" id="eavi" class="form-control">
                    <option value="">-Seleccione-</option>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eavi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['Id_eaviso'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['Nom_eaviso'];?>
</option>
                    <?php } ?>
                </select>
            </div>
        </fieldset>
        
<fieldset>
<legend>Imágenes</legend>
<div class="form-horizontal well">
    <input type="file" name="image[]"/>
    <input type="file" name="image[]"/>
    <input type="file" name="image[]"/>
</div>

</fieldset>   
    <input id="newprod" class="btn btn-small btn-primary" type="submit" value="Guardar" onclick='return cb(this);'/>
</form>

</div><?php }} ?>