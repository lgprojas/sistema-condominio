<?php /* Smarty version Smarty-3.1.11, created on 2015-08-23 22:48:23
         compiled from "C:\xampp\htdocs\vitricasas\modules\inmueble\views\administrar\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1343855b3acb40d1630-80129430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14667169340ea246c011f63b7b3248711079ebb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitricasas\\modules\\inmueble\\views\\administrar\\index.tpl',
      1 => 1440361385,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1343855b3acb40d1630-80129430',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55b3acb42639a6_87057134',
  'variables' => 
  array (
    '_layoutParams' => 0,
    '_datos' => 0,
    'inm' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b3acb42639a6_87057134')) {function content_55b3acb42639a6_87057134($_smarty_tpl) {?><div class="container">
<h3>Lista Inmuebles</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar este inmueble?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
inmueble/administrar/nuevoInmueble"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Crear nueva vivienda</a></p>

<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['inm']->value)&&count($_smarty_tpl->tpl_vars['inm']->value)){?>
    <table class="table table-bordered h6">
    <thead>
        <th colspan="14" style="background: #E6E6FA;">Listado inmueble</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Ref.</td>
        <td style="font-weight:bold;text-align: center;">Tipo</td>      
        <td style="font-weight:bold;text-align: center;">Dirección</td>      
        <td style="font-weight:bold;text-align: center;">Población</td>
        <td style="font-weight:bold;text-align: center;">Ciudad</td>
        <td style="font-weight:bold;text-align: center;">Precio</td>
        <td style="font-weight:bold;text-align: center;">Public</td>
        <td style="font-weight:bold;text-align: center;">Ver</td>
        <td style="font-weight:bold;text-align: center;">Elim</td>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Ref_in'];?>
</td>     
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_tin'];?>
</td>  
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Dir_in'];?>
</td>  
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_pob'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_ciu'];?>
</td>  
        <td style="text-align: center;">$<?php echo $_smarty_tpl->tpl_vars['datos']->value['Prec_in'];?>
</td>
        <td style="text-align: center;">
            

                    <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_eaviso']==1){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
inmueble/administrar/updEstPublic/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Ref_in'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/tick.png"/>
                        </a>
                    <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
inmueble/administrar/updEstPublic/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Ref_in'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/publish_r.png"/> 
                        </a>
                    <?php }?>

        </td>
        <td style="text-align: center;"><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
inmueble/administrar/editInmueble/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Ref_in'];?>
"><i class="glyphicon glyphicon-list" title="Ver detalle"></i></a></td>
        <td style="text-align: center;"><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
inmueble/administrar/delInmueble/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Ref_in'];?>
" onclick='return cb(this);'><i class="glyphicon glyphicon-trash" title="Eliminar"></i></a></td>    
    </tr>
<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay inmuebles registrados!</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  
<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
inmueble/administrar/nuevoInmueble"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Crear nueva vivienda</a></p>

</div><?php }} ?>