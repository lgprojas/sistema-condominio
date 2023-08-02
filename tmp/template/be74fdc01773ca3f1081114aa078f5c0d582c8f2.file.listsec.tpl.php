<?php /* Smarty version Smarty-3.1.11, created on 2017-05-19 16:23:17
         compiled from "C:\xampp\htdocs\munku\modules\ref\views\sec\listsec.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2172591f3b33ae99f0-54284676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be74fdc01773ca3f1081114aa078f5c0d582c8f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\ref\\views\\sec\\listsec.tpl',
      1 => 1495225143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2172591f3b33ae99f0-54284676',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_591f3b33caddc7_94397523',
  'variables' => 
  array (
    'nomciu' => 0,
    '_layoutParams' => 0,
    'idciu' => 0,
    '_datos' => 0,
    'sec' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591f3b33caddc7_94397523')) {function content_591f3b33caddc7_94397523($_smarty_tpl) {?><div class="container">
<h3>Sector(es)</h3>
<h5>Comuna: <?php echo $_smarty_tpl->tpl_vars['nomciu']->value['Nom_ciu'];?>
</h5>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar este sector?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/sec/newSec/<?php echo $_smarty_tpl->tpl_vars['idciu']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Crear nuevo sector</a>
</p>
<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['sec']->value)&&count($_smarty_tpl->tpl_vars['sec']->value)){?>
    <table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA;text-align: center;">Listado sectores <?php echo $_smarty_tpl->tpl_vars['nomciu']->value['Nom_ciu'];?>
</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Cód</td>
        <td style="font-weight:bold;text-align: center;">Nombre</td>        
        <td style="font-weight:bold;text-align: center;">Ciudad</td> 
        <td style="font-weight:bold;text-align: center;">Edit</td>
        <td style="font-weight:bold;text-align: center;">Coord</td>
        <td style="font-weight:bold;text-align: center;">Elim</td>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sec']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_sec'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_sec'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_ciu'];?>
</td>
        <td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/sec/editSec/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_sec'];?>
/<?php echo $_smarty_tpl->tpl_vars['idciu']->value;?>
"></a></td>
        <td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-map-marker" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/sec/addcoor/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_sec'];?>
/<?php echo $_smarty_tpl->tpl_vars['idciu']->value;?>
"></a></td>
        <td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/sec/delSec/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_sec'];?>
/<?php echo $_smarty_tpl->tpl_vars['idciu']->value;?>
" onclick='return cb(this);'></a></td>    
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay sectores</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  
<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/sec/newSec/<?php echo $_smarty_tpl->tpl_vars['idciu']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Crear nuevo sector</a></p>

</div><?php }} ?>