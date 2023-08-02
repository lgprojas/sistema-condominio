<?php /* Smarty version Smarty-3.1.11, created on 2018-05-13 05:28:48
         compiled from "C:\xampp\htdocs\covecino\modules\usuarios\views\gestores\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146165af7f4b6cab7f1-88463974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7b93d1d3371fffc337682699caaaa298b3e8886' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\usuarios\\views\\gestores\\nuevo.tpl',
      1 => 1526200122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146165af7f4b6cab7f1-88463974',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5af7f4b71933d0_99097274',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'per' => 0,
    'p' => 0,
    'role' => 0,
    'r' => 0,
    'estusu' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af7f4b71933d0_99097274')) {function content_5af7f4b71933d0_99097274($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios">Lista gestores</a></li>
        <li class="active">Registro gestor</li>
    </ol>
<h2>Registro Usuario Gestor</h2>
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
            <label class="control-label">Persona: <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Lista sólo personas que no poseen actualmente un usuario."></i></label>
            <select name="per" id="per" class="form-control">   
                <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['per']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['Id_per'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['Nom1_per'];?>
 <?php echo $_smarty_tpl->tpl_vars['p']->value['Nom2_per'];?>
 <?php echo $_smarty_tpl->tpl_vars['p']->value['Ape1_per'];?>
 <?php echo $_smarty_tpl->tpl_vars['p']->value['Ape2_per'];?>
</option>
                    <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label class="control-label">Role: <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Lista sólo Roles definidos por el comité."></i></label>
            <select name="role" id="role" class="form-control"> 
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
        <br>
    </div>
</form>
</div>

 <?php }} ?>