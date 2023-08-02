<?php /* Smarty version Smarty-3.1.11, created on 2016-01-06 15:19:12
         compiled from "C:\xampp\htdocs\munku\modules\referen\views\scat\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32680568cbbbf52bd50-62705198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eb2281950548f7fe5d79cbfd26afc1e393438ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\referen\\views\\scat\\editar.tpl',
      1 => 1452089945,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32680568cbbbf52bd50-62705198',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_568cbbbf602b65_83503915',
  'variables' => 
  array (
    'datos' => 0,
    'cat' => 0,
    't' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568cbbbf602b65_83503915')) {function content_568cbbbf602b65_83503915($_smarty_tpl) {?><div class="container">
<h3>Editar subcategoría</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta subcategoría?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <div class="form-horizontal col-lg-6 small">
        <label class="control-label">Categoría:</label>
            <select class="form-control" name="cat" id="cat">

                <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_cat']!=0){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cat'];?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['t']->value['Id_cat']!=$_smarty_tpl->tpl_vars['datos']->value['Id_cat']){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['Id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['Nom_cat'];?>
</option>
                        <?php }?>
                    <?php } ?>
                <?php }else{ ?>
                    <option value="">-Seleccione-</option>
                                 <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['Id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['Nom_cat'];?>
</option>
                                 <?php } ?>
                <?php }?>
             </select>            
        
        <label class="control-label">Nombre subcategoría:</label>
        <input class="form-control" type="text" name="scat" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Nom_subcat'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_subcat'];?>
<?php }?>" placeholder="Ingrese subcategoría"/>
        <br/>
    <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>
</form>
         <br/><br/>
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
referen/scat"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/volver.gif" width="30" height="20" title="Volver"/></a></p>
</div>
</div><?php }} ?>