<?php /* Smarty version Smarty-3.1.11, created on 2017-06-17 23:26:21
         compiled from "C:\xampp\htdocs\lhp-base\modules\usuarios\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136485945f2dd411144-70842399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '942c5efd1fac91b6c889fb57549591906c63b644' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lhp-base\\modules\\usuarios\\views\\login\\index.tpl',
      1 => 1497751240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136485945f2dd411144-70842399',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5945f2dd5a8672_36708340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5945f2dd5a8672_36708340')) {function content_5945f2dd5a8672_36708340($_smarty_tpl) {?><div class="container">
<h2><i class="glyphicon glyphicon-log-in"> </i> Inicio Sesi&oacute;n</h2>
<br/>

<form class="navbar-form pull-left" name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    <div class="col-md-4">
       <div class="form-group">      
            <input class="form-control" type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Usuario" autofocus="" />
       </div>
       <hr>
        <div class="form-group"> 
            <input class="form-control" type="password" name="pass" placeholder="Password"/>            
       </div>
       <hr>
       <div class="form-group">
            <button type="submit" value="Iniciar" class="btn bg-primary"><i class="glyphicon glyphicon-log-in"> </i> Entrar</button>
       </div>
       <br />
       <p> </p>
    </div>
</form>
</div><?php }} ?>