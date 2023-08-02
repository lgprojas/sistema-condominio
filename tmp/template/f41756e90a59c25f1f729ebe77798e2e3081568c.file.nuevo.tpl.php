<?php /* Smarty version Smarty-3.1.11, created on 2018-05-10 01:47:55
         compiled from "/home/covecino/public_html/modules/ref/views/cond/nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19628992205ab4289ae70636-04589458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f41756e90a59c25f1f729ebe77798e2e3081568c' => 
    array (
      0 => '/home/covecino/public_html/modules/ref/views/cond/nuevo.tpl',
      1 => 1525927637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19628992205ab4289ae70636-04589458',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ab4289af144c4_64676746',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'inm' => 0,
    'i' => 0,
    'ciu' => 0,
    'c' => 0,
    '_acl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab4289af144c4_64676746')) {function content_5ab4289af144c4_64676746($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cond">Lista condominios</a></li>
        <li class="active">Nuevo condominio</li>
    </ol>
<h3>Nuevo condominio</h3>



    <script type="text/javascript">

    function cb(formObj) {

                if(confirm("¿Está seguro que desea crear este nuevo condominio?")) {

                    return true;                     

                } else {

                    return false;

                }

            }

    </script>



<div class="form-horizontal col-lg-3 small">

<form name="form1" method="post" action="">

    <input type="hidden" value="1" name="guardar" />

        <label class="control-label">Nombre:</label>  

         <input class="form-control" type="text" name="nom" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nom'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese nombre condominio"/>       

         <label class="control-label">Dirección:</label>  

         <input class="form-control" type="text" name="dir" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['dir'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese dirección condominio"/>

         <label class="control-label">Inmobiliaria: </label>

            <select name="inm" id="inm" class="form-control input-sm">

                <option value="">-Seleccione-</option>

                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>

                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['Id_inm'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['Nom_inm'];?>
</option>

                <?php } ?>

            </select>

        <label class="control-label">Ciudad: </label>

            <select name="ciu" id="ciu" class="form-control input-sm">

                <option value="">-Seleccione-</option>

                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ciu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>

                    <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_ciu'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_ciu'];?>
</option>

                <?php } ?>

            </select>

        <br/>

    <p>

        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_cond')){?>

        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>

        <?php }?>

    </p>

</form>

        <br/>

        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cond"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>

</div>

</div><?php }} ?>