<?php /* Smarty version Smarty-3.1.11, created on 2017-11-24 05:30:36
         compiled from "C:\xampp\htdocs\icondo\modules\transa\views\vehi\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:256935a14981409ad76-59475925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9770f276b2023c7408eae7bd01a513320d63988' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\transa\\views\\vehi\\nuevo.tpl',
      1 => 1511497802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256935a14981409ad76-59475925',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a14981413e081_17019522',
  'variables' => 
  array (
    'datos' => 0,
    'cod' => 0,
    'mar' => 0,
    'm' => 0,
    'cond' => 0,
    'co' => 0,
    'volver' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a14981413e081_17019522')) {function content_5a14981413e081_17019522($_smarty_tpl) {?><div class="container">
<h3>Nuevo vehículo</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear este nuevo vehículo?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<div class="col-md-4">
<form name="form1" method="post" action="">
<input type="hidden" value="1" name="guardar" />    
    <div class="form-group">
        <label class="control-label">Patente:</label>  
        <input type="text" name="cod" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cod'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cod']->value : $tmp);?>
" placeholder="Patente" class="form-control"/>      
    </div>    
    <div class="form-group">
        <label class="control-label">Marca: </label>
        <select name="mar" id="mar" class="form-control">
            <option value="">-Seleccione-</option>
            <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['m']->value['Id_marca'];?>
"><?php echo $_smarty_tpl->tpl_vars['m']->value['Nom_marca'];?>
</option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label class="control-label">Modelo: </label>
        <select name="mod" id="mod" class="form-control">
        </select>
    </div>   
    <div class="form-group">
        <label class="control-label">Nota:</label> 
        <textarea name="desc" rows="3" cols="2" placeholder="Nota adicional.." class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label class="control-label">Condominio:</label>
        <select name="cond" class="form-control">
                <?php  $_smarty_tpl->tpl_vars['co'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['co']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cond']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['co']->key => $_smarty_tpl->tpl_vars['co']->value){
$_smarty_tpl->tpl_vars['co']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['co']->value['Id_cond'];?>
"><?php echo $_smarty_tpl->tpl_vars['co']->value['Nom_cond'];?>
</option>
                <?php } ?>
        </select>
    </div>
        <p><?php if ($_smarty_tpl->tpl_vars['volver']->value==1){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
buscar/patente" class="btn btn-default"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>
            <?php }else{ ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/vehi" class="btn btn-default"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>
            <?php }?>
            <input type="reset" value="Limpiar" class="btn btn-small btn-primary"/>
            <input id="newcli" class="btn btn-small btn-primary" type="submit" value="Guardar" onclick='return cb(this);'/>            
        </p>
</form>
</div>
</div><?php }} ?>