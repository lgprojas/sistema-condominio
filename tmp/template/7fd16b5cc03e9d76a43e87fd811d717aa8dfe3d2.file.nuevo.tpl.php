<?php /* Smarty version Smarty-3.1.11, created on 2017-04-11 14:30:11
         compiled from "C:\xampp\htdocs\munku\modules\ref\views\ps\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:518958ed19d21deea0-92919778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fd16b5cc03e9d76a43e87fd811d717aa8dfe3d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\ref\\views\\ps\\nuevo.tpl',
      1 => 1491934600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '518958ed19d21deea0-92919778',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58ed19d228c2a4_09203609',
  'variables' => 
  array (
    'cat' => 0,
    'r' => 0,
    'datos' => 0,
    'icops' => 0,
    'i' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ed19d228c2a4_09203609')) {function content_58ed19d228c2a4_09203609($_smarty_tpl) {?><div class="container">
<h3>Nueva prod/serv</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear este nuevo prod/serv?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<div class="form-horizontal col-lg-3 small">
<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar" />
    <label class="control-label">Categoría: </label>
        <select name="cat" id="cat" class="form-control input-sm">
            <option value="">-Seleccione-</option>
            <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['Id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['Nom_cat'];?>
</option>
            <?php } ?>
        </select>
        <label class="control-label">Cód prod/serv:</label>  
         <input class="form-control" type="text" name="cod" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cod'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese cód prod/serv"/>       
         <label class="control-label">prod/serv:</label>  
         <input class="form-control" type="text" name="ps" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['ps'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese nuevo prod/serv"/>
         <label class="control-label">Icono: </label>
        <select name="icops" id="icops" class="form-control input-sm">
            <option value="">-Seleccione-</option>
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['icops']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['Id_icops'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['Nom_icops'];?>
</option>
            <?php } ?>
        </select>
        <br/>
    <p>
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>
    </p>
</form>
        <br/>
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/ps"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/volver.gif" width="30" height="20" title="Volver"/></a></p>
</div>
</div><?php }} ?>