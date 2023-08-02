<?php /* Smarty version Smarty-3.1.11, created on 2017-04-26 14:28:01
         compiled from "C:\xampp\htdocs\munku\modules\usuarios\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63535900e6b1368a18-20311534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a4b7517b2cad522f0f6d35f8bc69d89e6243ef9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\usuarios\\views\\login\\index.tpl',
      1 => 1493225934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63535900e6b1368a18-20311534',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5900e6b141d1a8_21508005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5900e6b141d1a8_21508005')) {function content_5900e6b141d1a8_21508005($_smarty_tpl) {?><div class="container">
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