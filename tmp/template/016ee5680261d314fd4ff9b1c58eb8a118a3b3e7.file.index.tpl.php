<?php /* Smarty version Smarty-3.1.11, created on 2018-05-21 23:22:55
         compiled from "/home/covecino/public_html/modules/backup/views/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4859068445b038d0f378eb6-75728988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '016ee5680261d314fd4ff9b1c58eb8a118a3b3e7' => 
    array (
      0 => '/home/covecino/public_html/modules/backup/views/index/index.tpl',
      1 => 1526623044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4859068445b038d0f378eb6-75728988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    '_datos' => 0,
    'backup' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b038d0f4510c3_23980853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b038d0f4510c3_23980853')) {function content_5b038d0f4510c3_23980853($_smarty_tpl) {?><div class="container">
<div class="jumbotron">
<h2>Backup Base de Datos Covecino</h2>
<p class="lead">En esta sección usted podrá realizar respaldos de la Base de Datos del sistema Covecino. Las opciones que dispone son descritas en detalle en las siguientes secciones.</p>
<p>
<a class="btn btn-lg btn-success" role="button" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Volver al Inicio</a>
</p>
</div>
<div class="row">
<div class="col-lg-4">
    <h4>Respaldo simple</h4>
    <p>Realice un respaldo de su Base de Datos en el servidor, cada respaldo registrará la fecha de creación.</p>
    <p>
    <a class="btn btn-default" role="button" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
backup/index/simpleBackup">Iniciar</a>
    </p>
</div>
<div class="col-lg-4">
    <h4>Guardar y descargar respaldo</h4>
    <p>Realice un respaldo en el servidor de su Base de Datos y adicionalmente descargue una copia.</p>
    <p>
    <a class="btn btn-default" role="button" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
backup/index/backupDownload">Iniciar</a>
    </p>
</div>
<div class="col-lg-4">
    <h4>Guardar y enviar a Mail</h4>
    <p>Realice un respaldo en el servidor de su Base de Datos y adicionalmente envíe una copia vía Email.</p>
    <p>
    <a class="btn btn-default" role="button" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
backup/index/sendEmailBackUp">Iniciar</a>
    </p>
</div>
</div>
<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['backup']->value)&&count($_smarty_tpl->tpl_vars['backup']->value)){?>
    <table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA;text-align: center;">Listado backup</th>
        </thead>
        <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Fecha</td>
        <td style="font-weight:bold;text-align: center;">Nombre</td>        
        <td style="font-weight:bold;text-align: center;">Tipo</td>
        <td style="font-weight:bold;text-align: center;">Usuario</td>      
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Fch_rb'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nomfile_rb'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Tipo_rb'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_usu'];?>
</td>
    </tr>
    
<?php } ?>
</table>
<?php }else{ ?>
    <p class="text-center"><strong>No hay backup</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>
<br/>
<br/>
<br/>
</div><?php }} ?>