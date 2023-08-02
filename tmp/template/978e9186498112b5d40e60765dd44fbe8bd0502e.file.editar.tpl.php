<?php /* Smarty version Smarty-3.1.11, created on 2017-12-06 00:29:32
         compiled from "C:\xampp\htdocs\icondo\modules\ref\views\marca\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69525a272bdc9708e9-27442745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '978e9186498112b5d40e60765dd44fbe8bd0502e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\ref\\views\\marca\\editar.tpl',
      1 => 1512516413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69525a272bdc9708e9-27442745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a272bdca0f5b6_20291764',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a272bdca0f5b6_20291764')) {function content_5a272bdca0f5b6_20291764($_smarty_tpl) {?><div class="container">
<h3>Editar marca</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta marca?")) {
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
        <label class="control-label">Nombre:</label>
        <input class="form-control" type="text" name="nom" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Nom_marca'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_marca'];?>
<?php }?>" placeholder="Ingrese marca"/>
    </div>
    
    <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>
  
</form>
         <br/>
         <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/marca"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>