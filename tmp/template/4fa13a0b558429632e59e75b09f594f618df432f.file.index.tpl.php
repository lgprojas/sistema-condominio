<?php /* Smarty version Smarty-3.1.11, created on 2023-08-16 15:07:02
         compiled from "C:\xampp\htdocs\condominio\modules\historial\views\multa\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208201892864dd1e56554c47-56031389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fa13a0b558429632e59e75b09f594f618df432f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\condominio\\modules\\historial\\views\\multa\\index.tpl',
      1 => 1527564981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208201892864dd1e56554c47-56031389',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sadmin' => 0,
    'cond' => 0,
    'ps' => 0,
    'cbl' => 0,
    'cb' => 0,
    '_datos' => 0,
    'viv' => 0,
    '_acl' => 0,
    'color' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_64dd1e56604681_89315509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64dd1e56604681_89315509')) {function content_64dd1e56604681_89315509($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_str_pad')) include 'C:\\xampp\\htdocs\\condominio\\libs\\smarty\\libs\\plugins\\modifier.str_pad.php';
?><div class="container">
<h3>Multas</h3>

    <style>
        .totalmultas{
            color: white;
            padding: 5px;
            background-color: orange;
            text-shadow: -1px -1px 1px #292322, 1px 1px 1px #292322, -1px 1px 1px #292322, 1px -1px 1px #292322;
	    border-radius: 50%;
        }
        .pagmultas{
            color: white;
            padding: 5px;
            background-color: #32CD32;
            text-shadow: -1px -1px 1px #292322, 1px 1px 1px #292322, -1px 1px 1px #292322, 1px -1px 1px #292322;
	    border-radius: 50%;
        }
        .penmultas{
            color: white;
            padding: 5px;
            background-color: #ff8566;
            text-shadow: -1px -1px 1px #292322, 1px 1px 1px #292322, -1px 1px 1px #292322, 1px -1px 1px #292322;
	    border-radius: 50%;
        }
    </style>

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
        <td style="font-weight:bold;text-align: center;">Total/pag/pen</td>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('ver_lista_multas')){?><td style="font-weight:bold;text-align: center;">Ver</td><?php }?>
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
        <td style="text-align: center;">
            <span class="totalmultas"><?php echo smarty_modifier_str_pad($_smarty_tpl->tpl_vars['datos']->value['TotMultas'],2,'0','left');?>
</span>
            <span class="pagmultas"><?php echo smarty_modifier_str_pad($_smarty_tpl->tpl_vars['datos']->value['PagMultas'],2,'0','left');?>
</span>
            <span class="penmultas"><?php echo smarty_modifier_str_pad($_smarty_tpl->tpl_vars['datos']->value['PendMultas'],2,'0','left');?>
</span>
        </td>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('ver_lista_multas')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-book" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
historial/multa/indexMultas/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Cond_encrypt'];?>
"></a></td><?php }?>
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
    <br/>
    <br/>
    <br/>
</div><?php }} ?>