<?php /* Smarty version Smarty-3.1.11, created on 2018-05-25 13:43:50
         compiled from "C:\xampp\htdocs\covecino\modules\historial\views\observacion\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:325865b01d1d917ed86-17085116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82a76720f47bc9f1accbcbd5bf3c8f6f9d85aa71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\historial\\views\\observacion\\index.tpl',
      1 => 1527259081,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325865b01d1d917ed86-17085116',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b01d1d95605e7_55610173',
  'variables' => 
  array (
    '_layoutParams' => 0,
    '_acl' => 0,
    'sadmin' => 0,
    'cond' => 0,
    'ps' => 0,
    '_datos' => 0,
    'obs' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
    'dat' => 0,
    'co' => 0,
    'datos1' => 0,
    'tobs' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b01d1d95605e7_55610173')) {function content_5b01d1d95605e7_55610173($_smarty_tpl) {?><div class="container">
       <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
historial/observacion/">Lista observaciones</a></li>
        <li class="active">Observaciones condominio</li>
       </ol>
<h3>Observaciones condominio</h3>

<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_obs')){?>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar esta observación?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<?php }?>
<br>
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_obs')){?>
<p>
<a href="#" data-toggle="modal" id="limpiar_modal1" data-target="#modal_obs" class="btn btn-default">
    <i title="Crear observación condominio" class="glyphicon glyphicon-plus"></i> Nueva observación
</a>                    
</p>
<?php }?>
<div class="well well-small row sm">
    <form id="form1" class="form-inline">
        <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?>
        <div class="col-sm-4">
        <select id="c" name="c" class="form-control">
            <option value=""> - seleccione condominio - </option>
            <?php  $_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ps']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cond']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->key => $_smarty_tpl->tpl_vars['ps']->value){
$_smarty_tpl->tpl_vars['ps']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['ps']->value['Id_cond'];?>
"><?php echo $_smarty_tpl->tpl_vars['ps']->value['Nom_cond'];?>
</option>
            <?php } ?>
        </select>
        </div>
        <?php }?>
    </form>
</div>
<div id="lista_registros">
<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['obs']->value)&&count($_smarty_tpl->tpl_vars['obs']->value)){?>
<table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA; text-align: center;">Listado observaciones condominio</th>
    </thead>
    <thead style="background: #E6E6FA;"> 
        <td style="font-weight:bold;text-align: center;">Fch. obs</td>
        <td style="font-weight:bold;text-align: center;">Tipo obs</td>
        <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?><td style="font-weight:bold;text-align: center;">Condominio</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_obs')){?><td style="font-weight:bold;text-align: center;">Edit.</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_obs')){?><td style="font-weight:bold;text-align: center;">Elim.</td><?php }?>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['obs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['fchi'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_tobs'];?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?><td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cond'];?>
</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_obs')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
historial/observacion/editObs/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Cond_encrypt'];?>
"></a></td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_obs')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
historial/observacion/delObs/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Cond_encrypt'];?>
" onclick='return cb(this);'></a></td><?php }?>   
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>El condominio no posee observaciones.</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  
</div>
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_obs')){?>
<p>
<a href="#" data-toggle="modal" id="limpiar_modal1" data-target="#modal_obs" class="btn btn-default">
    <i title="Crear observación condominio" class="glyphicon glyphicon-plus"></i> Nueva Observación
</a>
    <br><br>
<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
historial/observacion/"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>


<div class="modal fade" id="modal_obs" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nueva observación en el condominio</h4>
          <h6></h6>
        </div>
        <form name="form_modal1" id="form_modal1">
        <div class="modal-body">      
           <input type="hidden" name="add" value="1" />
           <input type="hidden" name="a" id="a" value="<?php echo $_smarty_tpl->tpl_vars['cond']->value;?>
" />
           <input type="hidden" name="viv" id="viv" value="<?php echo $_smarty_tpl->tpl_vars['dat']->value['Id_viv'];?>
" />
        <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?>
        <div class="row">
        <div class="form-group">
            <div class="col-sm-4 text-left">
                <label class="control-label">Condominio:</label>
            </div>
            <div class="col-sm-4">
                <select name="co" id="co" class="form-control">   
                        <option value="">-Seleccione-</option>
                        <?php  $_smarty_tpl->tpl_vars['co'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['co']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cond']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['co']->key => $_smarty_tpl->tpl_vars['co']->value){
$_smarty_tpl->tpl_vars['co']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['co']->value['Id_cond'];?>
"><?php echo $_smarty_tpl->tpl_vars['co']->value['Nom_cond'];?>
</option>
                        <?php } ?>
                </select>
            </div>
        </div>
        </div>
        <br>
        <?php }else{ ?>
            <input type="hidden" id="co" name="co" value="<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
"/>
        <?php }?>
       <div class="row">
          <div class="form-group">
             <div class="col-sm-4 text-left">
                 <label class="control-label">Fch obs:</label>
             </div>
             <div class="col-sm-4">
                 <input type="text" name="fchi" id="fchi" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['fchi'])===null||$tmp==='' ? '' : $tmp);?>
" style="width: 160px;" placeholder="00-00-0000 HH:mm" class="form-control" readonly="readonly" required=""/>
             </div>
          </div>
       </div>
       <br>
       <div class="row">
          <div class="form-group">
             <div class="col-sm-4 text-left">
                 <label class="control-label">Detalle:</label>
             </div>
             <div class="col-sm-8">
                    <textarea name="n" id="n" class="form-control" placeholder="Ingrese detalle de la situación.." rows="4"></textarea>
             </div>
          </div>
       </div>       
       <br>
       <div class="row">
          <div class="form-group">
            <div class="col-sm-4 text-left">
              <label class="control-label">Tipo observación: </label> 
            </div>
            <div class="col-sm-6">
                <select name="tobs" id="tobs" class="form-control" required="">   
                        <option value="">-Seleccione-</option>
                        <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tobs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['Id_tobs'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['Nom_tobs'];?>
</option>
                        <?php } ?>
                </select>
            </div>
          </div>
       </div>
        <br>
          <div id="mssg" class="small">
          </div>
        </div>
       <div class="clearfix"></div>
        <div class="modal-footer">
            <button type="button" id="btn_saveobs" class="btn btn-primary" style="margin: 5px;">Guardar</button>
          <button type="button" id="limpiar_modal1" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
        </form>
      </div>
    </div>
</div> 
</p>
<?php }?>
<br/>
<br/>
<br/>
</div><?php }} ?>