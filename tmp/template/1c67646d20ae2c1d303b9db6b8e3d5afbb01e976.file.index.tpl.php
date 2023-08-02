<?php /* Smarty version Smarty-3.1.11, created on 2018-05-22 18:03:27
         compiled from "/home/covecino/public_html/modules/ref/views/cb/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20551925955ab428ae3739d4-71607855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c67646d20ae2c1d303b9db6b8e3d5afbb01e976' => 
    array (
      0 => '/home/covecino/public_html/modules/ref/views/cb/index.tpl',
      1 => 1526432883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20551925955ab428ae3739d4-71607855',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ab428ae493c73_75833561',
  'variables' => 
  array (
    '_acl' => 0,
    '_layoutParams' => 0,
    'sadmin' => 0,
    'cond' => 0,
    'c' => 0,
    '_datos' => 0,
    'cb' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab428ae493c73_75833561')) {function content_5ab428ae493c73_75833561($_smarty_tpl) {?><div class="container">
<h3>Calles/Blocks</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar esta Calle/block?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_cb')){?>
<p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cb/newCB"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nueva Calle/block</a></p>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?>
<div class="well well-small row sm">
       <div class="col-sm-4">
         <label class="control-label">Condominio</label>
         <select id="co" name="co" class="form-control">
                <option value="">-Seleccione-</option>   
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cond']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_cond'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_cond'];?>
</option>
                <?php } ?>
          </select>
        </div>                  
</div>
<?php }?>
<div id="lista_registros">
<form name="form2" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['cb']->value)&&count($_smarty_tpl->tpl_vars['cb']->value)){?>
    <table class="table table-bordered small">
    <thead>
        <th colspan="9" style="background: #E6E6FA;text-align: center;">Listado Calles/blocks</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Nombre</td>        
        <td style="font-weight:bold;text-align: center;">Condominio</td> 
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_cb')){?><td style="font-weight:bold;text-align: center;">Edit.</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_cb')){?><td style="font-weight:bold;text-align: center;">Elim.</td><?php }?>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cb'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cond'];?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_cb')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cb/editCB/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"></a></td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_cb')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cb/delCB/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
" onclick='return cb(this);'></a></td><?php }?>    
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay Calles/blocks registrados</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?> 
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_cb')){?>
<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cb/newCB"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nueva Calle/block</a></p>
<?php }?>
<br/>
<br/>
<br/>
</div>
</div><?php }} ?>