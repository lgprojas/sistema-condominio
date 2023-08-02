<?php /* Smarty version Smarty-3.1.11, created on 2018-05-22 18:03:35
         compiled from "/home/covecino/public_html/modules/ref/views/cb/nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16781254685ab428b2a903c2-17059971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '624b5475f29ac34423158abd5416f10bec6d867f' => 
    array (
      0 => '/home/covecino/public_html/modules/ref/views/cb/nuevo.tpl',
      1 => 1526435007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16781254685ab428b2a903c2-17059971',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ab428b2b2dd95_47604111',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'sadmin' => 0,
    'cond' => 0,
    'c' => 0,
    'co' => 0,
    '_acl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab428b2b2dd95_47604111')) {function content_5ab428b2b2dd95_47604111($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cb">Lista calles/blocks</a></li>
        <li class="active">Nueva calle/block</li>
    </ol>
<h3>Nueva calle/block</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear esta nueva calle/block?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<div class="form-horizontal col-lg-3 small">
<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar" />
        <label class="control-label">Nombre:</label>  
         <input class="form-control" type="text" name="nom" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nom'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese nombre calle/block"/>       
         <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?>
            <fieldset>
            <legend>El Condominio</legend>
            <div class="form-horizontal well col-lg-12 small">
            <div class="form-group">
                <label class="control-label">Condominio:</label>
                <select name="cond" id="cond" class="form-control">
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
                </select>
            </div>  
            </div>
            </fieldset>
        <?php }else{ ?>
            <input type="hidden" id="cond" name="cond" value="<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
"/>
        <?php }?>
        <br/>
    <p>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_cb')){?>
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>
        <?php }?>
    </p>
</form>
        <br/>
        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cb"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>