<?php /* Smarty version Smarty-3.1.11, created on 2017-04-10 11:31:34
         compiled from "C:\xampp\htdocs\munku\modules\ref\views\reg\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:905558eba556b241c8-00698259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b37a385d51b35038e91f9b63e97aafc0519158a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\ref\\views\\reg\\editar.tpl',
      1 => 1491837714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '905558eba556b241c8-00698259',
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
  'unifunc' => 'content_58eba556ba2c51_59819758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58eba556ba2c51_59819758')) {function content_58eba556ba2c51_59819758($_smarty_tpl) {?><div class="container">
<h3>Editar región</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta región?")) {
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
        <label class="control-label">Nombre región:</label>
        <input class="form-control" type="text" name="reg" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Nom_reg'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_reg'];?>
<?php }?>" placeholder="Ingrese nombre región" />
    </div>
    <p>
        <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/reg"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>
        <input type="submit" class="btn btn-small btn-primary" value="Editar" onclick='return cb(this);'/>
    </p>
</form>
</div>
</div><?php }} ?>