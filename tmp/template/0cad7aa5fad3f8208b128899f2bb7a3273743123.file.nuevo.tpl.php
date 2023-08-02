<?php /* Smarty version Smarty-3.1.11, created on 2018-05-10 01:06:11
         compiled from "C:\xampp\htdocs\covecino\modules\ref\views\inm\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78295af3c53340dbc7-24579600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cad7aa5fad3f8208b128899f2bb7a3273743123' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\ref\\views\\inm\\nuevo.tpl',
      1 => 1513008739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78295af3c53340dbc7-24579600',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
    '_acl' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5af3c533557f49_79273281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af3c533557f49_79273281')) {function content_5af3c533557f49_79273281($_smarty_tpl) {?><div class="container">
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
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_inm')){?>
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>
        <?php }?>
    </p>
</form>
        <br/>
        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/inm"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>