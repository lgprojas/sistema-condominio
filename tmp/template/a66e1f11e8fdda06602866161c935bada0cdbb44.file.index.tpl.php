<?php /* Smarty version Smarty-3.1.11, created on 2014-06-26 16:09:10
         compiled from "C:\xampp\htdocs\scp_vm\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18821537a1f336d0830-86540470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a66e1f11e8fdda06602866161c935bada0cdbb44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\scp_vm\\views\\index\\index.tpl',
      1 => 1403791742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18821537a1f336d0830-86540470',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_537a1f3372e0c0_57150220',
  'variables' => 
  array (
    'level' => 0,
    'id' => 0,
    'nombre' => 0,
    'usuario' => 0,
    'rut_usu' => 0,
    'id_bib' => 0,
    'tiempo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537a1f3372e0c0_57150220')) {function content_537a1f3372e0c0_57150220($_smarty_tpl) {?>    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>

      <div class="container-narrow">

      <div class="masthead">
        <h3 class="muted">Sistema Control de Periféricos (SCP)</h3>
      </div>
      <hr>
      <div class="jumbotron">
        <h1>SCP</h1>
        <p class="lead">Aplicación desarrollada para control de recursos periféricos</p>
        <a class="btn btn-large btn-success" href="#">Visitanos!</a>
      </div>
      <hr>      
        <h3>Bienvenido:</h3>
        Level: <?php echo $_smarty_tpl->tpl_vars['level']->value;?>
<br/>
        Id: <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<br/>
        Nombre: <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
<br/>
        Usuario: <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
<br/>
        RUT: <?php echo $_smarty_tpl->tpl_vars['rut_usu']->value;?>
<br/>
        Biblioteca: <?php echo $_smarty_tpl->tpl_vars['id_bib']->value;?>
<br/>
        Tiempo: <?php echo $_smarty_tpl->tpl_vars['tiempo']->value;?>
<br/>
        
      </div>


<?php }} ?>