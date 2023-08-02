<?php /* Smarty version Smarty-3.1.11, created on 2017-12-06 00:11:05
         compiled from "C:\xampp\htdocs\icondo\modules\ref\views\cb\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133925a27278923ecb0-45929426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '848a4ce377bbb32123b4225bca408746e8d221c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\ref\\views\\cb\\editar.tpl',
      1 => 1512515190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133925a27278923ecb0-45929426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
    'cond' => 0,
    'c' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a27278a0d0953_21557993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a27278a0d0953_21557993')) {function content_5a27278a0d0953_21557993($_smarty_tpl) {?><div class="container">
<h3>Editar calle/block</h3>
<h4><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cb'];?>
</h4>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta calle/block?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <div class="form-horizontal col-lg-3 small">
        <label class="control-label">Nombre:</label>
        <input class="form-control" type="text" name="nom" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Nom_cb'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cb'];?>
<?php }?>" placeholder="Ingrese nombre calle/block"/>
        <label class="control-label">Condominio:</label>
            <select class="form-control" name="cond" id="cond">
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
        <br/>
    <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>
</form>
         <br/><br/>
        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cb"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>