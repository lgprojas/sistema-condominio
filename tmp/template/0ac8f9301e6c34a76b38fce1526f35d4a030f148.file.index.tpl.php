<?php /* Smarty version Smarty-3.1.11, created on 2017-04-27 00:34:11
         compiled from "C:\xampp\htdocs\munku\modules\usuarios\views\registro\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:309575901744190da88-31509037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ac8f9301e6c34a76b38fce1526f35d4a030f148' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\usuarios\\views\\registro\\index.tpl',
      1 => 1493267549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '309575901744190da88-31509037',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59017441a7ea48_54865696',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'role' => 0,
    'r' => 0,
    'estusu' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59017441a7ea48_54865696')) {function content_59017441a7ea48_54865696($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios">Lista usuarios</a></li>
        <li class="active">Registro usuario</li>
    </ol>
<h2>Registro usuario</h2>
<br/>
<form name="form1" class="" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    <div class="col-md-4">
        <div class="form-group">
            <label class="control-label">RUN: </label><input type="text" name="run" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['run'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese RUN" class="form-control"/>        
        </div>
        <div class="form-group">
            <label class="control-label">Nombre: </label><input type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese su nombre" class="form-control"/>      
        </div>    
        <div class="form-group">
            <label class="control-label">Usuario: </label><input type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese nombre usuario (RUN)" class="form-control"/>       
        </div>   
        <div class="form-group">
            <label class="control-label">Email: </label><input type="text" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese email" class="form-control"/>       
        </div> 
        <div class="form-group">
            <label class="control-label">Contraseña: </label><input type="password" name="pass" placeholder="Ingrese constraseña" class="form-control"/>    
        </div>   
        <div class="form-group">
            <label class="control-label">Confirmar: </label><input type="password" name="confirmar" placeholder="Reingrese contraseña" class="form-control"/>       
        </div>    
            <div class="form-group">
            <label class="control-label">Role:</label>
            <select name="role" class="form-control">   
                <option value="">-Seleccione-</option>   
                <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['role']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['Id_role'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['Nom_role'];?>
</option>
                <?php } ?>
            </select>
        </div>            
        <div class="form-group">
            <label class="control-label">Estado:</label>
            <select name="estusu" class="form-control">   
                    <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estusu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value['Id_estusu'];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['Nom_estusu'];?>
</option>
                    <?php } ?>
            </select>
        </div> 
        <div class="form-group">            
            <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>   <input class="btn btn-small btn-primary" type="submit" value="Crear" /></p>
        </div>
    </div>
</form>
</div>

 <?php }} ?>