<?php /* Smarty version Smarty-3.1.11, created on 2015-05-12 02:51:39
         compiled from "C:\xampp\htdocs\vitritienda\modules\tienda\views\pedido\editestp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2588155514d71b00013-16253342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b28d95f0b295fadbeb705bd6462ebdd7226729cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitritienda\\modules\\tienda\\views\\pedido\\editestp.tpl',
      1 => 1431391891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2588155514d71b00013-16253342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55514d71bcedd7_83972590',
  'variables' => 
  array (
    'idp' => 0,
    'datos' => 0,
    'estp' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55514d71bcedd7_83972590')) {function content_55514d71bcedd7_83972590($_smarty_tpl) {?><div class="container">
<h3>Editar estado pedido</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea cambiar el estado del pedido?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<div class="col-md-4">
<form name="form1" action="" method="post">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['idp']->value;?>
" />   
    <input type="hidden" name="guardar" value="1" />   
    <div class="form-group">
            <label class="control-label">Estado: </label>
        <select class="form-control" name="estp" id="estp">

            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_estp']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_estp'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_estp'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['e']->value['Id_estp']!=$_smarty_tpl->tpl_vars['datos']->value['Id_estp']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value['Id_estp'];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['Nom_estp'];?>
</option>
                    <?php }?>
                <?php } ?>
            <?php }else{ ?>
                <option value="">-Seleccione-</option>
                             <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value['Id_estp'];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['Nom_estp'];?>
</option>
                             <?php } ?>
            <?php }?>
            
            </select>
    </div>
    <div class="form-group">            
            <input class="btn btn-small btn-primary" type="submit" value="Guardar" onclick='return cb(this);'/>
    </div>
</form>
</div><?php }} ?>