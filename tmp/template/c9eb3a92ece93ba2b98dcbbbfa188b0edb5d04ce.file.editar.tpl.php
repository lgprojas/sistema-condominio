<?php /* Smarty version Smarty-3.1.11, created on 2023-08-16 15:30:03
         compiled from "C:\xampp\htdocs\condominio\modules\ref\views\inm\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108478256264dd23bb0fcd64-03547832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9eb3a92ece93ba2b98dcbbbfa188b0edb5d04ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\condominio\\modules\\ref\\views\\inm\\editar.tpl',
      1 => 1525927488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108478256264dd23bb0fcd64-03547832',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    '_acl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_64dd23bb1a3c62_14695973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64dd23bb1a3c62_14695973')) {function content_64dd23bb1a3c62_14695973($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/inm">Lista inmobiliarias</a></li>
        <li class="active">Editar inmobiliaria</li>
    </ol>
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