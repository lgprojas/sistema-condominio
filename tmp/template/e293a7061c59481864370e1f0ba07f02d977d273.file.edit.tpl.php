<?php /* Smarty version Smarty-3.1.11, created on 2017-10-17 07:48:05
         compiled from "C:\xampp\htdocs\icondo\modules\usuarios\views\index\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:962559e0326dcb1e65-99628741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e293a7061c59481864370e1f0ba07f02d977d273' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\usuarios\\views\\index\\edit.tpl',
      1 => 1508219275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '962559e0326dcb1e65-99628741',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59e0326e620b39_23530998',
  'variables' => 
  array (
    'datos' => 0,
    'datos1' => 0,
    'per' => 0,
    'p' => 0,
    'rol' => 0,
    'r' => 0,
    'est' => 0,
    'e' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e0326e620b39_23530998')) {function content_59e0326e620b39_23530998($_smarty_tpl) {?><div class="container">
<h3>Editar usuario: </h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar este usuario")) {
                    return true;                     
                } else {
                    return false;
                }
    </script>


<div class="col-lg-4">
<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_usu'];?>
" />
    <div class="form-group">
        <label class="control-label">Rut *</label> 
        <input class="form-control" type="text" name="rut" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['rut'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Rut_usu'] : $tmp);?>
" placeholder="Ingrese Rut usuario"/>       
    </div>    
    <div class="form-group">
        <label class="control-label">Nombre *</label>  
        <input class="form-control" type="text" name="nom" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['nom'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Nom_usu'] : $tmp);?>
" placeholder="Ingrese nombre personal del usuario"/>       
    </div>
    <div class="form-group">
        <label class="control-label">Nombre usuario *</label> 
        <input class="form-control" type="text" name="usu" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['usu'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Usu_usu'] : $tmp);?>
" placeholder="Ingrese nombre de usuario"/>       
    </div>    

    <div class="form-group">
        <label class="control-label">Contraseña *</label>  
        <input class="form-control" type="text" name="pass" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['pass'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese nueva contraseña usuario"/>       
    </div>      
    <div class="form-group">
        <label class="control-label">Email *</label>  
        <input class="form-control" type="text" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['email'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Email_usu'] : $tmp);?>
" placeholder="Ingrese email usuario"/>       
    </div>      
    <div class="form-group">
        <label class="control-label">Persona: </label>
            <select class="form-control" name="per" id="per">

                <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_per']!=0){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_per'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Ape1_per'];?>
 <?php echo $_smarty_tpl->tpl_vars['datos']->value['Ape2_per'];?>
 <?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom1_per'];?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['per']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['p']->value['Id_per']!=$_smarty_tpl->tpl_vars['datos']->value['Id_per']){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['Id_per'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['Ape1_per'];?>
 <?php echo $_smarty_tpl->tpl_vars['p']->value['Ape2_per'];?>
 <?php echo $_smarty_tpl->tpl_vars['p']->value['Nom1_per'];?>
</option>
                        <?php }?>
                    <?php } ?>
                <?php }else{ ?>
                    <option value="">-Seleccione-</option>
                                 <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['per']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['Id_per'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['Ape1_per'];?>
 <?php echo $_smarty_tpl->tpl_vars['p']->value['Ape2_per'];?>
 <?php echo $_smarty_tpl->tpl_vars['p']->value['Nom1_per'];?>
</option>
                                 <?php } ?>
                <?php }?>
             </select>            
    </div>
   <div class="form-group">
        <label class="control-label">Rol: </label>
            <select class="form-control" name="rol" id="rol">

                <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_role']!=0){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_role'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_role'];?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rol']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['r']->value['Id_role']!=$_smarty_tpl->tpl_vars['datos']->value['Id_role']){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['Id_role'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['Nom_role'];?>
</option>
                        <?php }?>
                    <?php } ?>
                <?php }else{ ?>
                    <option value="">-Seleccione-</option>
                                 <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rol']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['Id_role'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['Nom_role'];?>
</option>
                                 <?php } ?>
                <?php }?>
             </select>            
    </div>
    <div class="form-group">
        <label class="control-label">Estado: </label>
            <select class="form-control" name="est" id="est">

                <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_estusu']!=0){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_estusu'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_estusu'];?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['est']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['e']->value['Id_estusu']!=$_smarty_tpl->tpl_vars['datos']->value['Id_estusu']){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value['Id_estusu'];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['Nom_estusu'];?>
</option>
                        <?php }?>
                    <?php } ?>
                <?php }else{ ?>
                    <option value="">-Seleccione-</option>
                                 <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['est']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value['Id_estusu'];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['Nom_estusu'];?>
</option>
                                 <?php } ?>
                <?php }?>
             </select>            
    </div>
 <br/>
 <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>   <input id="newcli" class="btn btn-small btn-primary" type="submit" value="Guardar" onclick='return cb(this);'/></p>

</form>
</div>
</div>
             <?php }} ?>