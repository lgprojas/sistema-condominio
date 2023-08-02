<?php /* Smarty version Smarty-3.1.11, created on 2018-05-10 01:25:23
         compiled from "/home/covecino/public_html/modules/usuarios/views/registro/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14446455315abd32bf70ef46-88909236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb0d6ce4db2c8cb145a15f0beaf3c7eda1e3b33a' => 
    array (
      0 => '/home/covecino/public_html/modules/usuarios/views/registro/index.tpl',
      1 => 1522702271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14446455315abd32bf70ef46-88909236',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5abd32bf811a20_50443366',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'rolGestor' => 0,
    'cond' => 0,
    'c' => 0,
    'estusu' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abd32bf811a20_50443366')) {function content_5abd32bf811a20_50443366($_smarty_tpl) {?><div class="container">
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
        <?php if ($_smarty_tpl->tpl_vars['rolGestor']->value==1){?>
        <div class="form-group">
            <label class="control-label">Condominio:</label>
            <select name="cond" id="cond" class="form-control">   
                <option value="">-Seleccione-</option>
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cond']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_cond'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_cond'];?>
</option>
                <?php } ?>
            </select>
        </div>
        <?php }?>
        <div class="form-group">
            <label class="control-label">Persona: <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Lista sólo personas que no poseen actualmente un usuario."></i></label>
            <select name="per" id="per" class="form-control">   
            </select>
        </div>
        <div class="form-group">
            <label class="control-label">Role: <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Lista sólo Roles definidos por el comité."></i></label>
            <select name="role" id="role" class="form-control">   
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