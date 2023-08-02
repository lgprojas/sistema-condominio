<?php /* Smarty version Smarty-3.1.11, created on 2017-10-05 04:47:07
         compiled from "C:\xampp\htdocs\icondo\modules\usuarios\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2468059d59d2b26d6b8-47143163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6cca29bb6d838623ea3ec06b57682df8557f315' => 
    array (
      0 => 'C:\\xampp\\htdocs\\icondo\\modules\\usuarios\\views\\login\\index.tpl',
      1 => 1497751242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2468059d59d2b26d6b8-47143163',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59d59d2b2f5c06_38167651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d59d2b2f5c06_38167651')) {function content_59d59d2b2f5c06_38167651($_smarty_tpl) {?><div class="container">
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