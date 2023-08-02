<?php /* Smarty version Smarty-3.1.11, created on 2018-05-15 22:55:41
         compiled from "C:\xampp\htdocs\covecino\modules\ref\views\cb\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199195ab59210ebc328-36033667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c41eda79ad97539c45adcc109aa26c2bee955ade' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\ref\\views\\cb\\editar.tpl',
      1 => 1526435676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199195ab59210ebc328-36033667',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ab5921102cb18_06748547',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'sadmin' => 0,
    'cond' => 0,
    'c' => 0,
    'co' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab5921102cb18_06748547')) {function content_5ab5921102cb18_06748547($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cb">Lista calles/blocks</a></li>
        <li class="active">Editar calle/block</li>
    </ol>
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
        <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?>
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
        <?php }else{ ?>
        <input type="hidden" id="cond" name="cond" value="<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
"/>
        <?php }?> 
        <br/>
    <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>
</form>
         <br/><br/>
        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cb"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>