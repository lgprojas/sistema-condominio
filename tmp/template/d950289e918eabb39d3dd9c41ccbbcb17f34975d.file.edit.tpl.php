<?php /* Smarty version Smarty-3.1.11, created on 2017-04-27 00:40:55
         compiled from "C:\xampp\htdocs\munku\modules\usuarios\views\index\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1828590176387e1a27-69462690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd950289e918eabb39d3dd9c41ccbbcb17f34975d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\usuarios\\views\\index\\edit.tpl',
      1 => 1493268049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1828590176387e1a27-69462690',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59017638ae5d89_73076990',
  'variables' => 
  array (
    'datos' => 0,
    'datos1' => 0,
    'rol' => 0,
    'r' => 0,
    'est' => 0,
    'e' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59017638ae5d89_73076990')) {function content_59017638ae5d89_73076990($_smarty_tpl) {?><div class="container">
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