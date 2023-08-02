<?php /* Smarty version Smarty-3.1.11, created on 2017-12-04 23:45:28
         compiled from "C:\xampp\htdocs\icondo\modules\transa\views\viv\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64095a099e8be68672-80929627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '998f57ce2f8d5b3a2eefe71063b40eb1018d57bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\transa\\views\\viv\\index.tpl',
      1 => 1512427522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64095a099e8be68672-80929627',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a099e8c150031_54921278',
  'variables' => 
  array (
    '_layoutParams' => 0,
    '_datos' => 0,
    'viv' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a099e8c150031_54921278')) {function content_5a099e8c150031_54921278($_smarty_tpl) {?><div class="container">
<h3>Viviendas</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar esta vivienda?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>


    <p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/viv/newViv/"><i title="Nueva vivienda" class="glyphicon glyphicon-plus-sign"></i>  Nueva vivienda</a></p>

<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['viv']->value)&&count($_smarty_tpl->tpl_vars['viv']->value)){?>
    <table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA; text-align: center;">Listado viviendas</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Id</td> 
        <td style="font-weight:bold;text-align: center;">C/T</td>
        <td style="font-weight:bold;text-align: center;">N°</td>
        <td style="font-weight:bold;text-align: center;">N° Est.</td>
        <td style="font-weight:bold;text-align: center;">Condominio</td>
        <td style="font-weight:bold;text-align: center;">Edit.</td>
        <td style="font-weight:bold;text-align: center;">Elim.</td>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['viv']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_viv'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cb'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Num_viv'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_esta'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cond'];?>
</td>
        <td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/viv/editViv/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_viv'];?>
"></a></td>
        <td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/viv/delViv/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_viv'];?>
" onclick='return cb(this);'></a></td>   
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay viviendas creadas.</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  


<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
viv/index/newViv/"><i title="Nueva vivienda" class="glyphicon glyphicon-plus-sign"></i>  Nueva vivienda</a></p>

</div><?php }} ?>