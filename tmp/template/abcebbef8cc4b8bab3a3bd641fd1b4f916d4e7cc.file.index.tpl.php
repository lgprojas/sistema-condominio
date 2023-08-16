<?php /* Smarty version Smarty-3.1.11, created on 2023-08-16 15:24:09
         compiled from "C:\xampp\htdocs\condominio\modules\transa\views\viv\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12678861164dd22596c4814-36632263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abcebbef8cc4b8bab3a3bd641fd1b4f916d4e7cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\condominio\\modules\\transa\\views\\viv\\index.tpl',
      1 => 1524148011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12678861164dd22596c4814-36632263',
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
    'viv' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_64dd22597ca9d5_15112295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64dd22597ca9d5_15112295')) {function content_64dd22597ca9d5_15112295($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_str_pad')) include 'C:\\xampp\\htdocs\\condominio\\libs\\smarty\\libs\\plugins\\modifier.str_pad.php';
?><div class="container">
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

<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_viv')){?>
    <p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/viv/newViv/"><i title="Nueva vivienda" class="glyphicon glyphicon-plus-sign"></i>  Nueva vivienda</a></p>
<?php }?>
<div class="well well-small row sm">
    <form id="form1" class="form-inline">
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
        <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?><td style="font-weight:bold;text-align: center;">Condominio</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_viv')){?><td style="font-weight:bold;text-align: center;">Edit.</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_viv')){?><td style="font-weight:bold;text-align: center;">Elim.</td><?php }?>
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
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_viv'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cb'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Num_viv'];?>
</td>
        <td style="text-align: center;"><?php echo smarty_modifier_str_pad($_smarty_tpl->tpl_vars['datos']->value['Id_esta'],2,'0',@STR_PAD_LEFT);?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?><td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cond'];?>
</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_viv')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/viv/editViv/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"></a></td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_viv')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/viv/delViv/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
" onclick='return cb(this);'></a></td><?php }?>   
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay viviendas creadas.</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  
</div>
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_viv')){?>
<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/viv/newViv/"><i title="Nueva vivienda" class="glyphicon glyphicon-plus-sign"></i>  Nueva vivienda</a></p>
<?php }?>
    <br/>
    <br/>
    <br/>
</div><?php }} ?>