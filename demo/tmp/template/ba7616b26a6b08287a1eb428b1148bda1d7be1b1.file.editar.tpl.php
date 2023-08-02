<?php /* Smarty version Smarty-3.1.11, created on 2016-01-06 02:39:57
         compiled from "C:\xampp\htdocs\munku\modules\referen\views\cat\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5039568c706d774e65-65954702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba7616b26a6b08287a1eb428b1148bda1d7be1b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\referen\\views\\cat\\editar.tpl',
      1 => 1452044374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5039568c706d774e65-65954702',
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
  'unifunc' => 'content_568c706d8262f6_98472855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568c706d8262f6_98472855')) {function content_568c706d8262f6_98472855($_smarty_tpl) {?><div class="container">
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
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
referen/cat"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/volver.gif" width="30" height="20" title="Volver"/></a></p>
</div><?php }} ?>