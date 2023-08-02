<?php /* Smarty version Smarty-3.1.11, created on 2018-05-10 01:47:25
         compiled from "/home/covecino/public_html/modules/ref/views/inm/nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7600823085af3cedd547672-19294469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22509f998caab03ea49a133d31b5fc3b41bc1469' => 
    array (
      0 => '/home/covecino/public_html/modules/ref/views/inm/nuevo.tpl',
      1 => 1525927577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7600823085af3cedd547672-19294469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    '_acl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5af3cedd6478d7_22750948',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af3cedd6478d7_22750948')) {function content_5af3cedd6478d7_22750948($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/inm">Lista inmobiliarias</a></li>
        <li class="active">Nueva inmobiliaria</li>
    </ol>
<h3>Nueva inmobiliaria</h3>



    <script type="text/javascript">

    function cb(formObj) {

                if(confirm("¿Está seguro que desea crear esta nueva inmobiliaria?")) {

                    return true;                     

                } else {

                    return false;

                }

            }

    </script>



<div class="col-md-4">

<form name="form1" method="post" action="">

    <input type="hidden" value="1" name="guardar" />    

    <div class="form-group">

         <label class="control-label">Código:</label>  

         <input class="form-control" type="text" name="cod" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cod'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese código inmobiliaria"/>       

    </div>

    <div class="form-group">

         <label class="control-label">Nombre:</label>  

         <input class="form-control" type="text" name="inm" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['inm'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese nueva inmobiliaria"/>       

    </div>    

    <p>

        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_inm')){?>

        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>

        <?php }?>

    </p>

</form>

        <br/>

        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/inm"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>

</div>

</div><?php }} ?>