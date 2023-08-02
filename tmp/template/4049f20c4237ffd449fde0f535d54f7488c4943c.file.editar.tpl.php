<?php /* Smarty version Smarty-3.1.11, created on 2018-05-10 01:58:21
         compiled from "/home/covecino/public_html/modules/ref/views/modelo/editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14307929815ab7017624b327-11975092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4049f20c4237ffd449fde0f535d54f7488c4943c' => 
    array (
      0 => '/home/covecino/public_html/modules/ref/views/modelo/editar.tpl',
      1 => 1525928241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14307929815ab7017624b327-11975092',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ab7017632ffd0_73038277',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'marca' => 0,
    'c' => 0,
    '_acl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab7017632ffd0_73038277')) {function content_5ab7017632ffd0_73038277($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/modelo">Lista modelos</a></li>
        <li class="active">Editar modelo</li>
    </ol>
<h3>Editar modelo</h3>

<h4><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_modelo'];?>
</h4>



    <script type="text/javascript">

    function cb(formObj) {

                if(confirm("¿Está seguro que desea modificar esta modelo?")) {

                    return true;                     

                } else {

                    return false;

                }

            }

    </script>



<form name="form1" method="post" action="">

    <input type="hidden" name="guardar" value="1" />

    <div class="form-horizontal col-lg-3 small">

        <label class="control-label">Nombre:</label>

        <input class="form-control" type="text" name="nom" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Nom_modelo'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_modelo'];?>
<?php }?>" placeholder="Ingrese nombre modelo"/>

        <label class="control-label">Marca:</label>

            <select class="form-control" name="marca" id="marca">

                <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_marca']!=0){?>

                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_marca'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_marca'];?>
</option>

                    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['marca']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>

                        <?php if ($_smarty_tpl->tpl_vars['c']->value['Id_marca']!=$_smarty_tpl->tpl_vars['datos']->value['Id_marca']){?>

                            <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_marca'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_marca'];?>
</option>

                        <?php }?>

                    <?php } ?>

                <?php }else{ ?>

                    <option value="">-Seleccione-</option>

                     <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['marca']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>

                        <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_marca'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_marca'];?>
</option>

                     <?php } ?>

                <?php }?>

             </select>            

        <br/>

    <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_modelo')){?>    

    <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>

    <?php }?>

</form>

         <br/><br/>

        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/modelo"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>

</div>

</div><?php }} ?>