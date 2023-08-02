<?php /* Smarty version Smarty-3.1.11, created on 2014-05-29 22:51:18
         compiled from "C:\xampp\htdocs\scp_vm\modules\ver\views\stper\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2504853879b75a67481-56200892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38b472144388aae1c27077a1a7c4d3fd425d946e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\scp_vm\\modules\\ver\\views\\stper\\editar.tpl',
      1 => 1401396661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2504853879b75a67481-56200892',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_53879b75b26503_17262855',
  'variables' => 
  array (
    'datos' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53879b75b26503_17262855')) {function content_53879b75b26503_17262855($_smarty_tpl) {?><div id="content">
<h3>Editar stock</h3>
<h4><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_prod'];?>
</h4>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar el stock del periférico?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <div class="col-lg-2" style="margin: 5px;">
        <label class="control-label">Stock:</label>
     </div>    
    <div class="col-lg-2">
        <input type="text" class="form-control" name="stock" style="margin: 5px;" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Stock_prod'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Stock_prod'];?>
<?php }?>" /></label>
    </div>
         <button type="submit" class="btn btn-primary" onclick='return cb(this);' style="margin: 5px;">Guardar</button>
    </p>
</form>
         <br/>
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ver/stper"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/volver.gif" width="30" height="20" title="Volver"/></a></p>
</div><?php }} ?>