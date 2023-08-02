<?php /* Smarty version Smarty-3.1.11, created on 2017-04-11 14:59:01
         compiled from "C:\xampp\htdocs\munku\modules\ref\views\ps\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3229858ed234ae19f23-61213134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '826fc2c0f33b9b64329020d95f4d5f8bffaa6198' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\ref\\views\\ps\\editar.tpl',
      1 => 1491937134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3229858ed234ae19f23-61213134',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58ed234af17043_87351276',
  'variables' => 
  array (
    'datos' => 0,
    '_layoutParams' => 0,
    'cat' => 0,
    'r' => 0,
    'icops' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ed234af17043_87351276')) {function content_58ed234af17043_87351276($_smarty_tpl) {?><div class="container">
<h3>Editar prod/serv</h3>
<h4><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_ps'];?>
 <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/iconps/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_icops'];?>
.png" width="18" height="18"/></h4>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar este prod/serv?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <div class="form-horizontal col-lg-3 small">
        <label class="control-label">Categoría:</label>
            <select class="form-control" name="cat" id="cat">

                <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_cat']!=0){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cat'];?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['r']->value['Id_cat']!=$_smarty_tpl->tpl_vars['datos']->value['Id_cat']){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['Id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['Nom_cat'];?>
</option>
                        <?php }?>
                    <?php } ?>
                <?php }else{ ?>
                    <option value="">-Seleccione-</option>
                     <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['Id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['Nom_cat'];?>
</option>
                     <?php } ?>
                <?php }?>
             </select>            
        <label class="control-label">Cód prod/serv:</label>
        <input class="form-control" type="text" name="cod" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Cod_ps'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_ps'];?>
<?php }?>" disabled="disabled"/>
        <label class="control-label">Nombre prod/serv:</label>
        <input class="form-control" type="text" name="ps" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Nom_ps'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_ps'];?>
<?php }?>" placeholder="Ingrese nombre prod/serv"/>
        <label class="control-label">Icono:</label>
            <select class="form-control" name="icops" id="icops">
                <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_icops']!=0){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_icops'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_icops'];?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['icops']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['i']->value['Id_icops']!=$_smarty_tpl->tpl_vars['datos']->value['Id_icops']){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['Id_icops'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['Nom_icops'];?>
</option>
                        <?php }?>
                    <?php } ?>
                <?php }else{ ?>
                    <option value="">-Seleccione-</option>
                     <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['icops']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['Id_icops'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['Nom_icops'];?>
</option>
                     <?php } ?>
                <?php }?>
             </select> 
        <br/>
    <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>
</form>
         <br/><br/>
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/ps"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/volver.gif" width="30" height="20" title="Volver"/></a></p>
</div>
</div><?php }} ?>