<?php /* Smarty version Smarty-3.1.11, created on 2018-05-10 01:47:32
         compiled from "/home/covecino/public_html/modules/ref/views/cond/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3807377235ab428963c8b15-62926697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9d561a8a2d47db507a8c06dd80e303108cef414' => 
    array (
      0 => '/home/covecino/public_html/modules/ref/views/cond/index.tpl',
      1 => 1522344245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3807377235ab428963c8b15-62926697',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ab428964fc233_44736203',
  'variables' => 
  array (
    '_acl' => 0,
    '_layoutParams' => 0,
    '_datos' => 0,
    'cond' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab428964fc233_44736203')) {function content_5ab428964fc233_44736203($_smarty_tpl) {?><div class="container">
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

<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_cond')){?>
<p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cond/newCond"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nuevo Condominio</a></p>
<?php }?>
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
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_cond')){?><td style="font-weight:bold;text-align: center;">Edit.</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_conf_cond')){?><td style="font-weight:bold;text-align: center;">Config.</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_cond')){?><td style="font-weight:bold;text-align: center;">Elim.</td><?php }?>
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
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_cond')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cond/editCond/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"></a></td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_conf_cond')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-cog" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cond/editConfigCond/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"></a></td><?php }?>        
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_cond')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cond/delCond/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
" onclick='return cb(this);'></a></td><?php }?>    
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay Condominios registrados</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_cond')){?>
<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cond/newCond"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nuevo Condominio</a></p>
<?php }?>
<br/>
<br/>
<br/>
</div><?php }} ?>