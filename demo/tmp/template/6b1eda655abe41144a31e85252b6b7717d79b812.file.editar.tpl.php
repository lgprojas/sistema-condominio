<?php /* Smarty version Smarty-3.1.11, created on 2018-03-23 22:17:37
         compiled from "C:\xampp\htdocs\covecino\modules\ref\views\modelo\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195745ab56ef1e84eb1-78047145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b1eda655abe41144a31e85252b6b7717d79b812' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\ref\\views\\modelo\\editar.tpl',
      1 => 1513009017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195745ab56ef1e84eb1-78047145',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
    'marca' => 0,
    'c' => 0,
    '_acl' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ab56ef2148b91_32733080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab56ef2148b91_32733080')) {function content_5ab56ef2148b91_32733080($_smarty_tpl) {?><div class="container">
<h3>Editar modelo</h3>
<h4><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_modelo'];?>
</h4>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta modelo?")) {
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
        <input class="form-control" type="text" name="nom" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Nom_modelo'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_modelo'];?>
<?php }?>" placeholder="Ingrese nombre modelo"/>
        <label class="control-label">Marca:</label>
            <select class="form-control" name="marca" id="marca">
                <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_marca']!=0){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_marca'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_marca'];?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['marca']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['c']->value['Id_marca']!=$_smarty_tpl->tpl_vars['datos']->value['Id_marca']){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_marca'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_marca'];?>
</option>
                        <?php }?>
                    <?php } ?>
                <?php }else{ ?>
                    <option value="">-Seleccione-</option>
                     <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['marca']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_marca'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_marca'];?>
</option>
                     <?php } ?>
                <?php }?>
             </select>            
        <br/>
    <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_modelo')){?>    
    <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>
    <?php }?>
</form>
         <br/><br/>
        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/modelo"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>