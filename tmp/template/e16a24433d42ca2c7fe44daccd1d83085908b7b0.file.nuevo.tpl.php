<?php /* Smarty version Smarty-3.1.11, created on 2017-12-04 23:38:27
         compiled from "C:\xampp\htdocs\icondo\modules\ref\views\inm\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2585a25cc8632b8c5-91371984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e16a24433d42ca2c7fe44daccd1d83085908b7b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\ref\\views\\inm\\nuevo.tpl',
      1 => 1512426948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2585a25cc8632b8c5-91371984',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a25cc8639dcb7_53320180',
  'variables' => 
  array (
    'datos' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a25cc8639dcb7_53320180')) {function content_5a25cc8639dcb7_53320180($_smarty_tpl) {?><div class="container">
<h3>Nueva inmobiliaria</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear esta nueva inmobiliaria?")) {
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
         <label class="control-label">Código:</label>  
         <input class="form-control" type="text" name="cod" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cod'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese código inmobiliaria"/>       
    </div>
    <div class="form-group">
         <label class="control-label">Nombre:</label>  
         <input class="form-control" type="text" name="inm" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['inm'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese nueva inmobiliaria"/>       
    </div>    
    <p>
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>
    </p>
</form>
        <br/>
        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/inm"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>