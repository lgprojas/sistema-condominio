<?php /* Smarty version Smarty-3.1.11, created on 2018-03-24 01:13:56
         compiled from "C:\xampp\htdocs\covecino\modules\ref\views\inm\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114605ab5984422b200-25654998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8b536a294641419a15915d82d52e97611859f07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\ref\\views\\inm\\editar.tpl',
      1 => 1513008576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114605ab5984422b200-25654998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
    '_acl' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ab598442f9864_11917755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab598442f9864_11917755')) {function content_5ab598442f9864_11917755($_smarty_tpl) {?><div class="container">
<h3>Editar inmobiliaria</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta inmobiliaria?")) {
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
        <label class="control-label">Código:</label>
        <input class="form-control" type="text" name="cod" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_inm'];?>
" readonly=""/>
    </div>
    <div class="form-group">
        <label class="control-label">Nombre:</label>
        <input class="form-control" type="text" name="inm" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Nom_inm'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_inm'];?>
<?php }?>" placeholder="Ingrese inmobiliaria"/>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_inm')){?>
    <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>
    <?php }?>
</form>
         <br/>
         <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/inm"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>