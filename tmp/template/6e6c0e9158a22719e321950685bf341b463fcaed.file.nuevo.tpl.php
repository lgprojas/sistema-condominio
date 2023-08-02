<?php /* Smarty version Smarty-3.1.11, created on 2017-12-06 00:27:14
         compiled from "C:\xampp\htdocs\icondo\modules\ref\views\marca\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137895a272b526254f3-48238588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e6c0e9158a22719e321950685bf341b463fcaed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\ref\\views\\marca\\nuevo.tpl',
      1 => 1512516413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137895a272b526254f3-48238588',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a272b526f7057_60480660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a272b526f7057_60480660')) {function content_5a272b526f7057_60480660($_smarty_tpl) {?><div class="container">
<h3>Nueva marca</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear esta nueva marca?")) {
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
         <label class="control-label">Nombre:</label>  
         <input class="form-control" type="text" name="nom" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nom'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese nueva marca"/>       
    </div>    
    <p>
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>
    </p>
</form>
        <br/>
        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/marca"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>