<?php /* Smarty version Smarty-3.1.11, created on 2015-05-10 00:27:16
         compiled from "C:\xampp\htdocs\vitritienda\modules\tienda\views\administrar\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:743254d01a5e944e02-57758501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52f6f7fe8767ae355df2c01fc395a40681c15efb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitritienda\\modules\\tienda\\views\\administrar\\index.tpl',
      1 => 1431210424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '743254d01a5e944e02-57758501',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_54d01a5ebdf649_46551079',
  'variables' => 
  array (
    '_layoutParams' => 0,
    '_datos' => 0,
    'prod' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d01a5ebdf649_46551079')) {function content_54d01a5ebdf649_46551079($_smarty_tpl) {?><div class="container">
<h3>Lista productos</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar este producto?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tienda/administrar/nuevoProducto"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Crear nuevo producto</a></p>

<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['prod']->value)&&count($_smarty_tpl->tpl_vars['prod']->value)){?>
    <table class="table table-bordered h6">
    <thead>
        <th colspan="13" style="background: #E6E6FA;">Listado productos</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Img</td>
        <td style="font-weight:bold;text-align: center;">Cód</td>      
        <td style="font-weight:bold;text-align: center;">Nom</td>      
        <td style="font-weight:bold;text-align: center;">Stock</td>
        <td style="font-weight:bold;text-align: center;">Prec</td>
        <td style="font-weight:bold;text-align: center;">Public</td>
        <td style="font-weight:bold;text-align: center;">Ver</td>
        <td style="font-weight:bold;text-align: center;">Elim</td>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prod']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td style="text-align: center;"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagestienda/originales/thumbs/thumb_s_<?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_img'];?>
"/></td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_prod'];?>
</td>     
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_prod'];?>
</td>  
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Stock_prod'];?>
</td>  
        <td style="text-align: center;">$<?php echo $_smarty_tpl->tpl_vars['datos']->value['Preini_prod'];?>
</td>
        <td style="text-align: center;">
            

                    <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_eaviso']==1){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tienda/administrar/updEstPublic/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_prod'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/ok.png" width="12" height="12"/>
                        </a>
                    <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tienda/administrar/updEstPublic/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_prod'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/detenida.gif" width="12" height="12"/> 
                        </a>
                    <?php }?>

        </td>
        <td style="text-align: center;"><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tienda/administrar/editProd/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_prod'];?>
"><i class="glyphicon glyphicon-list" title="Ver detalle"></i></a></td>
        <td style="text-align: center;"><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tienda/administrar/delProd/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_prod'];?>
" onclick='return cb(this);'><i class="glyphicon glyphicon-trash" title="Eliminar"></i></a></td>    
    </tr>
<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay productos registrados!</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  
<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tienda/administrar/nuevoProducto"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Crear nuevo producto</a></p>

</div><?php }} ?>