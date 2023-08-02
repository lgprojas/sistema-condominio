<?php /* Smarty version Smarty-3.1.11, created on 2018-05-10 01:58:01
         compiled from "/home/covecino/public_html/modules/ref/views/marca/nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15572687205af3d159ead060-97941852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af7c8a3a78440bbf7e2a460d72be7c906d4a3bf0' => 
    array (
      0 => '/home/covecino/public_html/modules/ref/views/marca/nuevo.tpl',
      1 => 1525928205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15572687205af3d159ead060-97941852',
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
  'unifunc' => 'content_5af3d15a05bfa5_29597192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af3d15a05bfa5_29597192')) {function content_5af3d15a05bfa5_29597192($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/marca">Lista marcas</a></li>
        <li class="active">Nueva marca</li>
    </ol>
<h3>Nueva marca</h3>



    <script type="text/javascript">

    function cb(formObj) {

                if(confirm("¿Está seguro que desea crear esta nueva marca?")) {

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

         <label class="control-label">Nombre:</label>  

         <input class="form-control" type="text" name="nom" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nom'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese nueva marca"/>       

    </div>    

    <p>

        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_marca')){?>

        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>

        <?php }?>

    </p>

</form>

        <br/>

        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/marca"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>

</div>

</div><?php }} ?>