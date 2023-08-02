<?php /* Smarty version Smarty-3.1.11, created on 2018-03-24 01:18:35
         compiled from "C:\xampp\htdocs\covecino\modules\ref\views\marca\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129195ab5995bbf2100-17144424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15f59448e6902533e5bd7af0b25ec524320aaaf0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\ref\\views\\marca\\editar.tpl',
      1 => 1513008917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129195ab5995bbf2100-17144424',
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
  'unifunc' => 'content_5ab5995bd0b278_95265314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab5995bd0b278_95265314')) {function content_5ab5995bd0b278_95265314($_smarty_tpl) {?><div class="container">
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
    <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_marca')){?>
    <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>
    <?php }?>
</form>
         <br/>
         <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/marca"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>