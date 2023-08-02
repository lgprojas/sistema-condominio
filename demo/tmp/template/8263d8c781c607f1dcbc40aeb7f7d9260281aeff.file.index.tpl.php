<?php /* Smarty version Smarty-3.1.11, created on 2017-12-08 04:50:46
         compiled from "C:\xampp\htdocs\icondo\modules\ref\views\cond\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:311555a2619142c63b7-82645844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8263d8c781c607f1dcbc40aeb7f7d9260281aeff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\ref\\views\\cond\\index.tpl',
      1 => 1512448409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311555a2619142c63b7-82645844',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a261914f1f3c8_79119378',
  'variables' => 
  array (
    '_layoutParams' => 0,
    '_datos' => 0,
    'cond' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a261914f1f3c8_79119378')) {function content_5a261914f1f3c8_79119378($_smarty_tpl) {?><div class="container">
<h3>Condominios</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar este condominio?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cond/newCond"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nuevo Condominio</a>
</p>
<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['cond']->value)&&count($_smarty_tpl->tpl_vars['cond']->value)){?>
    <table class="table table-bordered small">
    <thead>
        <th colspan="9" style="background: #E6E6FA;text-align: center;">Listado Condominios</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Nombre</td>        
        <td style="font-weight:bold;text-align: center;">Inmobiliaria</td> 
        <td style="font-weight:bold;text-align: center;">Ciudad</td> 
        <td style="font-weight:bold;text-align: center;">Edit</td>
        <td style="font-weight:bold;text-align: center;">Elim</td>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cond']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cond'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_inm'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_ciu'];?>
</td>
        <td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cond/editCond/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_cond'];?>
"></a></td>
        <td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cond/delCond/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_cond'];?>
" onclick='return cb(this);'></a></td>    
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay Condominios registrados</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  
<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cond/newCond"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nuevo Condominio</a></p>

</div><?php }} ?>