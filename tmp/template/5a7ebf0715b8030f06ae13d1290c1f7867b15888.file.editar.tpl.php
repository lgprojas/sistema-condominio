<?php /* Smarty version Smarty-3.1.11, created on 2017-05-27 23:43:24
         compiled from "C:\xampp\htdocs\munku\modules\ref\views\cat\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1097158f44cd6440727-08109239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a7ebf0715b8030f06ae13d1290c1f7867b15888' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\ref\\views\\cat\\editar.tpl',
      1 => 1495212707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1097158f44cd6440727-08109239',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58f44cd680ec35_36719152',
  'variables' => 
  array (
    'datos' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f44cd680ec35_36719152')) {function content_58f44cd680ec35_36719152($_smarty_tpl) {?><div class="container">
<h3>Editar categoría</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta categoría?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<div class="form-horizontal col-lg-4 small">
<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <div class="form-group">
        <label class="control-label">Nombre tipo producto:</label>
        <input class="form-control" type="text" name="cat" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Nom_cat'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cat'];?>
<?php }?>" placeholder="Ingrese categoría"/>
    </div>
    
    <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>
  
</form>
         <br/>
         <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cat"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>