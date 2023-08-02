<?php /* Smarty version Smarty-3.1.11, created on 2018-05-10 01:50:17
         compiled from "/home/covecino/public_html/modules/ref/views/cond/config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10317184245af3cf8939ffe9-67387978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7ac8b34509d5432f662abc2e62697dd1570a1c2' => 
    array (
      0 => '/home/covecino/public_html/modules/ref/views/cond/config.tpl',
      1 => 1525927810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10317184245af3cf8939ffe9-67387978',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'tipovot' => 0,
    'i' => 0,
    '_acl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5af3cf89484193_78837479',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af3cf89484193_78837479')) {function content_5af3cf89484193_78837479($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cond">Lista condominios</a></li>
        <li class="active">Configuración condominio</li>
    </ol>
<h3>Editar configuración condominio</h3>

<h4><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cond'];?>
</h4>



    <script type="text/javascript">

    function cb(formObj) {

                if(confirm("¿Está seguro que desea modificar esta configuración?")) {

                    return true;                     

                } else {

                    return false;

                }

            }

    </script>



<form name="form1" method="post" action="">

    <input type="hidden" name="guardar" value="1" />

    <div class="form-horizontal col-lg-3 small">

        <label class="control-label">¿Quiénes votan?:</label>

            <select class="form-control" name="tv" id="tv">

                <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_tv']!=0){?>

                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_tv'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_tv'];?>
</option>

                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipovot']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>

                        <?php if ($_smarty_tpl->tpl_vars['i']->value['Id_tv']!=$_smarty_tpl->tpl_vars['datos']->value['Id_tv']){?>

                            <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['Id_tv'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['Nom_tv'];?>
</option>

                        <?php }?>

                    <?php } ?>

                <?php }else{ ?>

                    <option value="">-Seleccione-</option>

                     <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipovot']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>

                        <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['Id_tv'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['Nom_tv'];?>
</option>

                     <?php } ?>

                <?php }?>

             </select>            

        <br/>

    <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_conf_cond')){?>

        <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>

    <?php }?>

</form>

         <br/><br/><br/>

        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/cond"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>

</div>

</div><?php }} ?>