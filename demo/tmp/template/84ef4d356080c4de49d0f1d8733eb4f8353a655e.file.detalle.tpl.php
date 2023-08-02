<?php /* Smarty version Smarty-3.1.11, created on 2018-05-26 20:38:22
         compiled from "/home/covecino/public_html/demo/modules/info/views/index/detalle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14205054315b09efeec91451-66306363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84ef4d356080c4de49d0f1d8733eb4f8353a655e' => 
    array (
      0 => '/home/covecino/public_html/demo/modules/info/views/index/detalle.tpl',
      1 => 1521315969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14205054315b09efeec91451-66306363',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'titinfo' => 0,
    'fchinfo' => 0,
    'descinfo' => 0,
    'adjinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b09efeed19698_76999139',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b09efeed19698_76999139')) {function content_5b09efeed19698_76999139($_smarty_tpl) {?><div class="container">
<ol class="breadcrumb">
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
info/">Lista informativos</a></li>
    <li class="active">Detalle informativo</li>
</ol>
        
    <div class="h3 text-info">Detalle Informativo</div>
    <div class="h3"><?php echo $_smarty_tpl->tpl_vars['titinfo']->value;?>
</div>
    <div class="h5 text-info">Fecha publicación: <?php echo $_smarty_tpl->tpl_vars['fchinfo']->value;?>
</div>
<hr>

<div class="jumbotron">
<p class="lead text-justify"><?php echo $_smarty_tpl->tpl_vars['descinfo']->value;?>
</p>
<?php if (isset($_smarty_tpl->tpl_vars['adjinfo']->value)&&count($_smarty_tpl->tpl_vars['adjinfo']->value)){?>
<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/files/file_informativos/<?php echo $_smarty_tpl->tpl_vars['adjinfo']->value;?>
" target="_blank" class="btn btn-success btn-sm" style="margin:2px;">Ver archivo</a></p>
<?php }?>
</div>
<p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
info/index"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
<br/>
</div>
<?php }} ?>