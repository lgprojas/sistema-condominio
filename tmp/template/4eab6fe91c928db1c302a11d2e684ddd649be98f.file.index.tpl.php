<?php /* Smarty version Smarty-3.1.11, created on 2023-08-16 15:07:40
         compiled from "C:\xampp\htdocs\condominio\modules\transa\views\per\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73335861364dd1e7c5a3a73-82146697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4eab6fe91c928db1c302a11d2e684ddd649be98f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\condominio\\modules\\transa\\views\\per\\index.tpl',
      1 => 1527052554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73335861364dd1e7c5a3a73-82146697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_acl' => 0,
    '_layoutParams' => 0,
    'sadmin' => 0,
    'cond' => 0,
    'ps' => 0,
    'cbl' => 0,
    'cb' => 0,
    '_datos' => 0,
    'per' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_64dd1e7c685858_62575418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64dd1e7c685858_62575418')) {function content_64dd1e7c685858_62575418($_smarty_tpl) {?><div class="container">
<h3>Lista personas</h3>
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_per')){?>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar esta persona?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_per')){?>
<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/per/newPer"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nueva persona</a></p>
<?php }?>
<div class="well well-small row sm">
    <form id="form1" class="form-inline">
        <div class="col-sm-4">
            <label class="control-label">Apellido: <input type="text" name="ape" id="ape" class="form-control" placeholder="Escriba primer apellido"></label>
        <button type="button" id="btnEnviar" class="btn"><i class=" glyphicon glyphicon-search"></i></button>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?>
        <div class="col-sm-4">
        <select id="co" name="co" class="form-control">
            <option value=""> - seleccione condominio - </option>
            <?php  $_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ps']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cond']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->key => $_smarty_tpl->tpl_vars['ps']->value){
$_smarty_tpl->tpl_vars['ps']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['ps']->value['Id_cond'];?>
"><?php echo $_smarty_tpl->tpl_vars['ps']->value['Nom_cond'];?>
</option>
            <?php } ?>
        </select>
        </div>
        <?php }?>
        <div class="col-sm-4">
        <select id="cb" name="cb" class="form-control">
            <option value=""> - seleccione calle/block - </option>
            <?php  $_smarty_tpl->tpl_vars['cb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cbl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cb']->key => $_smarty_tpl->tpl_vars['cb']->value){
$_smarty_tpl->tpl_vars['cb']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['cb']->value['a'];?>
"><?php echo $_smarty_tpl->tpl_vars['cb']->value['b'];?>
</option>
            <?php } ?>
        </select>
        </div>
    </form>
</div>
<div id="lista_registros">
<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['per']->value)&&count($_smarty_tpl->tpl_vars['per']->value)){?>
    <table class="table table-bordered">
    <thead>
        <th colspan="10" style="background: #E6E6FA;text-align: center;">Listado de personas</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Rut</td>
        <td style="font-weight:bold;text-align: center;">1er Apellido</td>      
        <td style="font-weight:bold;text-align: center;">2do Apellido</td>
        <td style="font-weight:bold;text-align: center;">Nombre</td>
        <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?><td style="font-weight:bold;text-align: center;">Condominio</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('ver_asoc_viv_per')){?><td style="font-weight:bold;text-align: center;">Asoc. Viv.</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('ver_asoc_vehi_per')){?><td style="font-weight:bold;text-align: center;">Asoc. Vehí.</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_per')){?><td style="font-weight:bold;text-align: center;">Edit</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_per')){?><td style="font-weight:bold;text-align: center;">Elim</td><?php }?>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['per']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Rut_per'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Ape1_per'];?>
</td>        
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Ape2_per'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom1_per'];?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?><td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cond'];?>
</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('ver_asoc_viv_per')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-home" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/per/asocVivPer/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"></a></td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('ver_asoc_vehi_per')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-road" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/per/asocVehiPer/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"></a></td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_per')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/per/editPer/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"></a></td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_per')){?>
        <td style="text-align: center;">
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Posee_recurso']==0){?>
                <a class="btn btn-small glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/per/delPer/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
" onclick='return cb(this);'></a>    
            <?php }else{ ?>
                <i title="Bloqueado Posee Vivienda o vehículo asignado" class="glyphicon glyphicon-lock"></i>
            <?php }?>
        </td>
        <?php }?>
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay personas registradas!</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?> 
</div>
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_per')){?>
<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/per/newPer"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nueva persona</a></p>
<?php }?>
</div><?php }} ?>