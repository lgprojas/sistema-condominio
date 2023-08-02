<?php /* Smarty version Smarty-3.1.11, created on 2018-05-10 02:00:27
         compiled from "C:\xampp\htdocs\covecino\modules\ref\views\marca\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:241105ab57fff0cd7e8-75296928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c508ceb3f3e922093d093e0f40b7d73b32b6d74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\ref\\views\\marca\\nuevo.tpl',
      1 => 1525928166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241105ab57fff0cd7e8-75296928',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ab57fff54c724_51403158',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    '_acl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab57fff54c724_51403158')) {function content_5ab57fff54c724_51403158($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/marca">Lista marcas</a></li>
        <li class="active">Nueva marca</li>
    </ol>
<h3>Nueva marca</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear esta nueva marca?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<div class="col-md-4">
<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar" />    
    <div class="form-group">
         <label class="control-label">Nombre:</label>  
         <input class="form-control" type="text" name="nom" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nom'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese nueva marca"/>       
    </div>    
    <p>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_marca')){?>
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>
        <?php }?>
    </p>
</form>
        <br/>
        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/marca"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>