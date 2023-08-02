<?php /* Smarty version Smarty-3.1.11, created on 2015-05-16 16:28:56
         compiled from "C:\xampp\htdocs\vitritienda\modules\usuarios\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7553554981b0b06ee4-76431579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20153df81aa408d917421c998a58b170610ebe3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitritienda\\modules\\usuarios\\views\\login\\index.tpl',
      1 => 1431756941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7553554981b0b06ee4-76431579',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_554981b0b7aca4_70661390',
  'variables' => 
  array (
    'datos' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554981b0b7aca4_70661390')) {function content_554981b0b7aca4_70661390($_smarty_tpl) {?><div class="container">
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
       <p class="text-info"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/registro">¿Desea registrarse?</a></p>
    </div>
</form>
</div><?php }} ?>