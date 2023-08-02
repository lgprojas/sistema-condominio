<?php /* Smarty version Smarty-3.1.11, created on 2018-03-24 16:02:53
         compiled from "/home/covecino/public_html/modules/ref/views/modelo/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6789675365ab428de097a23-69228799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dc5db868526fcdd51aa1d7dbcae1a0c024c5653' => 
    array (
      0 => '/home/covecino/public_html/modules/ref/views/modelo/index.tpl',
      1 => 1521907360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6789675365ab428de097a23-69228799',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ab428de188801_20410035',
  'variables' => 
  array (
    '_acl' => 0,
    '_layoutParams' => 0,
    'marca' => 0,
    'ps' => 0,
    '_datos' => 0,
    'modelo' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab428de188801_20410035')) {function content_5ab428de188801_20410035($_smarty_tpl) {?><div class="container">

<h3>Modelos Vehículos</h3>



    <script type="text/javascript">

    function cb(formObj) {

                if(confirm("¿Está seguro que desea eliminar este Modelo?")) {

                    return true;                     

                } else {

                    return false;

                }

            }

    </script>



<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_modelo')){?>

<p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/modelo/newModelo"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nuevo Modelo</a></p>

<?php }?>

<div class="well well-small row sm">

    <form id="form1" class="form-inline">

        <div class="col-sm-4">

            <label class="control-label">Modelo: <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Escriba nombre modelo"></label>

        <button type="button" id="btnEnviar" class="btn"><i class=" glyphicon glyphicon-search"></i></button>

        </div>

        <div class="col-sm-4">

        <select id="marca" name="marca" class="form-control">

            <option value=""> - seleccione marca - </option>

            <?php  $_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ps']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['marca']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->key => $_smarty_tpl->tpl_vars['ps']->value){
$_smarty_tpl->tpl_vars['ps']->_loop = true;
?>

                <option value="<?php echo $_smarty_tpl->tpl_vars['ps']->value['Id_marca'];?>
"><?php echo $_smarty_tpl->tpl_vars['ps']->value['Nom_marca'];?>
</option>

            <?php } ?>

        </select>

        </div>

    </form>

</div>

<div id="lista_registros">

<form name="form1" method="post">

<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">

<?php if (isset($_smarty_tpl->tpl_vars['modelo']->value)&&count($_smarty_tpl->tpl_vars['modelo']->value)){?>

    <table class="table table-bordered small">

    <thead>

        <th colspan="9" style="background: #E6E6FA;text-align: center;">Listado Modelos</th>

        </thead>

        <thead style="background: #E6E6FA;">

        <td style="font-weight:bold;text-align: center;">Nombre</td>        

        <td style="font-weight:bold;text-align: center;">Marca</td> 

        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_modelo')){?><td style="font-weight:bold;text-align: center;">Edit.</td><?php }?>

        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_modelo')){?><td style="font-weight:bold;text-align: center;">Elim.</td><?php }?>

    </thead>

<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modelo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>

    

    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>

    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">

        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_modelo'];?>
</td>

        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_marca'];?>
</td>

        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_modelo')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/modelo/editModelo/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
"></a></td><?php }?>

        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_modelo')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/modelo/delModelo/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
" onclick='return cb(this);'></a></td><?php }?>    

    </tr>



<?php } ?>

</table>

<?php }else{ ?>

            <p><strong>No hay Modelos registrados</strong></p>

<?php }?> 

</form>

<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  

<br/>

<br/>

<br/>

</div>
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_modelo')){?>

<p><br/><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/modelo/newModelo"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/new.png" width="15" height="15"/>Nuevo Modelo</a></p>

<?php }?>
<br/><br/>
</div><?php }} ?>