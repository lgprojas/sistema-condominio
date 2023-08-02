<?php /* Smarty version Smarty-3.1.11, created on 2017-05-18 17:04:28
         compiled from "C:\xampp\htdocs\munku\modules\lugar\views\administrar\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:888356709dd8109687-56603542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e88708db54ec5e1d0be3162d9719f3adb0bd4d54' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\lugar\\views\\administrar\\index.tpl',
      1 => 1495133039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '888356709dd8109687-56603542',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_56709dd8304e55_35503567',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'idciu' => 0,
    '_datos' => 0,
    'lugar' => 0,
    '_acl' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56709dd8304e55_35503567')) {function content_56709dd8304e55_35503567($_smarty_tpl) {?><div class="container">
<h3>Lista lugares</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar este lugar?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lugar/administrar/nuevoLugar/<?php echo $_smarty_tpl->tpl_vars['idciu']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nuevo lugar</a></p>

<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['lugar']->value)&&count($_smarty_tpl->tpl_vars['lugar']->value)){?>
    <table class="table table-bordered small">
    <thead>
        <th colspan="14" style="background: #E6E6FA;">Listado lugares</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Img.</td>
        <td style="font-weight:bold;text-align: center;">Ref.</td>
        <td style="font-weight:bold;text-align: center;">Título</td>            
        <td style="font-weight:bold;text-align: center;">Sector</td>
        <td style="font-weight:bold;text-align: center;">Ciu</td>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_est_lugar')){?><td style="font-weight:bold;text-align: center;">Public</td><?php }?>
        <td style="font-weight:bold;text-align: center;">Ver</td>
        <td style="font-weight:bold;text-align: center;"><i class="glyphicon glyphicon-list-alt"></i></td>
        <td style="font-weight:bold;text-align: center;">Elim</td>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lugar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td style="text-align: center;"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/logoLugar/originales/thumbs/thumb_s_<?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_logo'];?>
"/></td> 
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Ref_lugar'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Tit_lugar'];?>
</td>   
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_sec'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Sigla_ciu'];?>
</td>  
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_est_lugar')){?>
        <td style="text-align: center;">
            

                    <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_eavi']==1){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lugar/administrar/updEstPublic/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Ref_lugar'];?>
/<?php echo $_smarty_tpl->tpl_vars['idciu']->value;?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/tick.png"/>
                        </a>
                    <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lugar/administrar/updEstPublic/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Ref_lugar'];?>
/<?php echo $_smarty_tpl->tpl_vars['idciu']->value;?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/publish_r.png"/> 
                        </a>
                    <?php }?>

        </td>
        <?php }?>
        <td style="text-align: center;"><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lugar/administrar/editLugar/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Ref_lugar'];?>
/<?php echo $_smarty_tpl->tpl_vars['idciu']->value;?>
"><i class="glyphicon glyphicon-list" title="Ver detalle"></i></a></td>
        <td style="text-align: center;"><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lugar/asigps/index/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Ref_lugar'];?>
/<?php echo $_smarty_tpl->tpl_vars['idciu']->value;?>
"><i class="glyphicon glyphicon-list-alt" title="Ver prod/serv"></i></a></td>       
        <td style="text-align: center;"><a class="btn btn-small" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lugar/administrar/delLugar/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Ref_lugar'];?>
/<?php echo $_smarty_tpl->tpl_vars['idciu']->value;?>
" onclick='return cb(this);'><i class="glyphicon glyphicon-trash" title="Eliminar"></i></a></td>    
    </tr>
<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay lugares registrados!</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  
<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lugar/administrar/nuevoLugar/<?php echo $_smarty_tpl->tpl_vars['idciu']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nuevo lugar</a></p>
<br/>
<p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lugar/index"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div><?php }} ?>