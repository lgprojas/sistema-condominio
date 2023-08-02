<?php /* Smarty version Smarty-3.1.11, created on 2017-12-04 23:51:24
         compiled from "C:\xampp\htdocs\icondo\modules\ref\views\inm\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:252235a25d0ccdaff81-14034653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bb4b2847771286be3c49f8a80c2816d5c37f67f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\ref\\views\\inm\\editar.tpl',
      1 => 1512427873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252235a25d0ccdaff81-14034653',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a25d0cce1de35_82522179',
  'variables' => 
  array (
    'datos' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a25d0cce1de35_82522179')) {function content_5a25d0cce1de35_82522179($_smarty_tpl) {?><div class="container">
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
    
    <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>
  
</form>
         <br/>
         <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/inm"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>