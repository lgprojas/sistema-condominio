<?php /* Smarty version Smarty-3.1.11, created on 2015-05-11 00:14:31
         compiled from "C:\xampp\htdocs\vitritienda\modules\usuarios\views\registro\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:900555498566d817b4-49946999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddddfdbf0298f7eefdd8e3c3e607fad33d61ba5a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitritienda\\modules\\usuarios\\views\\registro\\index.tpl',
      1 => 1431296057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '900555498566d817b4-49946999',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55498566e2aab6_76375301',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55498566e2aab6_76375301')) {function content_55498566e2aab6_76375301($_smarty_tpl) {?><h2>Registro usuario</h2>
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
" placeholder="Ingrese nombre usuario" class="form-control"/>       
        </div>   
        <div class="form-group">
            <label class="control-label">Email: </label><input type="text" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese email" class="form-control"/>       
        </div> 
        <div class="form-group">
            <label class="control-label">Teléfono: </label><input type="text" name="fono" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['fono'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese teléfono" class="form-control"/>       
        </div> 
        <div class="form-group">
            <label class="control-label">Contraseña: </label><input type="password" name="pass" placeholder="Ingrese constraseña" class="form-control"/>    
        </div>   
        <div class="form-group">
            <label class="control-label">Confirmar: </label><input type="password" name="confirmar" placeholder="Reingrese contraseña" class="form-control"/>       
        </div>    
        <div class="form-group">            
            <input class="btn btn-small btn-primary" type="submit" value="Crear" />
        </div>
    </div>
</form>

 <?php }} ?>