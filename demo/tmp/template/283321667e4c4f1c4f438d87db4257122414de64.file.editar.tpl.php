<?php /* Smarty version Smarty-3.1.11, created on 2017-11-17 04:23:29
         compiled from "C:\xampp\htdocs\icondo\modules\transa\views\viv\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157965a0ba7afde9010-48732467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '283321667e4c4f1c4f438d87db4257122414de64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\transa\\views\\viv\\editar.tpl',
      1 => 1510888986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157965a0ba7afde9010-48732467',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a0ba7b002ad64_64159188',
  'variables' => 
  array (
    'datos' => 0,
    'calleblock' => 0,
    'cb' => 0,
    'esta' => 0,
    'e' => 0,
    'cond' => 0,
    'c' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0ba7b002ad64_64159188')) {function content_5a0ba7b002ad64_64159188($_smarty_tpl) {?><div class="container">
<h3>Editar vivienda</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta vivienda?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<div class="col-md-4">
<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <div class="form-group">
        <label class="control-label">Número vivienda:</label>
        <input class="form-control" type="text" name="num" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Num_viv'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Num_viv'];?>
<?php }?>" placeholder="Ingrese número vivienda" />
    </div>
    <div class="form-group">
        <label class="control-label">Calle/block:</label>
        <select name="cb" id="cb" class="form-control">            
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_cb']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_cb'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cb'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['cb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['calleblock']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cb']->key => $_smarty_tpl->tpl_vars['cb']->value){
$_smarty_tpl->tpl_vars['cb']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['cb']->value['Id_cb']!=$_smarty_tpl->tpl_vars['datos']->value['Id_cb']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['cb']->value['Id_cb'];?>
"><?php echo $_smarty_tpl->tpl_vars['cb']->value['Nom_cb'];?>
</option>
                    <?php }?>
                <?php } ?>
                <option value=""></option>
            <?php }else{ ?>
                <option value="">-Seleccione-</option>
                             <?php  $_smarty_tpl->tpl_vars['cb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['calleblock']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cb']->key => $_smarty_tpl->tpl_vars['cb']->value){
$_smarty_tpl->tpl_vars['cb']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['cb']->value['Id_cb'];?>
"><?php echo $_smarty_tpl->tpl_vars['cb']->value['Nom_cb'];?>
</option>
                             <?php } ?>
            <?php }?>            
        </select>
    </div>       
    <div class="form-group">
        <label class="control-label">Estacionamiento:</label>
        <select  name="esta" id="esta" class="form-control">
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_esta']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_esta'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_esta'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['esta']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['e']->value['Id_esta']!=$_smarty_tpl->tpl_vars['datos']->value['Id_esta']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value['Id_esta'];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['Nom_esta'];?>
</option>
                    <?php }?>
                <?php } ?>
                <option value=""></option>
            <?php }else{ ?>
                <option value="">-Seleccione-</option>
                             <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['esta']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value['Id_esta'];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['Nom_esta'];?>
</option>
                             <?php } ?>
            <?php }?>            
        </select>
    </div>     
    <div class="form-group">
        <label class="control-label">Condominio:</label>
        <select  name="cond" id="cond" class="form-control">
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_cond']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_cond'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cond'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cond']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['c']->value['Id_cond']!=$_smarty_tpl->tpl_vars['datos']->value['Id_cond']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_cond'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_cond'];?>
</option>
                    <?php }?>
                <?php } ?>
            <?php }else{ ?>
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
            <?php }?>            
        </select>
    </div> 
    <br/>
    <br/>
    <p>
        <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/viv"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>
        <input type="submit" class="btn btn-small btn-primary" value="Editar" onclick='return cb(this);'/>
    </p>
</form>
</div>
</div><?php }} ?>