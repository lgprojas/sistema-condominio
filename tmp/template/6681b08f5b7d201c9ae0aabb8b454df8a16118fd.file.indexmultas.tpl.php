<?php /* Smarty version Smarty-3.1.11, created on 2018-05-21 01:39:30
         compiled from "C:\xampp\htdocs\covecino\modules\historial\views\multa\indexmultas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:290805b004ff8a831b5-02034666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6681b08f5b7d201c9ae0aabb8b454df8a16118fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\historial\\views\\multa\\indexmultas.tpl',
      1 => 1526797747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290805b004ff8a831b5-02034666',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b004ff8c54d73_26076916',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'dat' => 0,
    '_acl' => 0,
    '_datos' => 0,
    'multas' => 0,
    'color' => 0,
    'datos' => 0,
    'Idviv_encrypt' => 0,
    'Cond_encrypt' => 0,
    'paginacion1' => 0,
    'cond' => 0,
    'datos1' => 0,
    'tmul' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b004ff8c54d73_26076916')) {function content_5b004ff8c54d73_26076916($_smarty_tpl) {?><div class="container">
       <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
historial/multa/">Lista viviendas</a></li>
        <li class="active">Multas vivienda</li>
       </ol>
<h3>Multas de la vivienda</h3>
<h4>Calle/Block: <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom_cb'], 'UTF-8');?>
, N°: <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Num_viv'], 'UTF-8');?>
, N° Est: <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom_esta'], 'UTF-8');?>
</h4>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea eliminar esta multa?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<br>
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_multa')){?>
<p>
<a href="#" data-toggle="modal" id="limpiar_modal1" data-target="#modal_per" class="btn btn-default">
    <i title="Aplicar multa a vivienda" class="glyphicon glyphicon-plus"></i> Nueva Multa
</a>                    
</p>
<?php }?>
<div id="lista_registros">
<form name="form1" method="post">
<input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_datos']->value['pagina1'])===null||$tmp==='' ? '' : $tmp);?>
" name="pagina1">
<?php if (isset($_smarty_tpl->tpl_vars['multas']->value)&&count($_smarty_tpl->tpl_vars['multas']->value)){?>
<table class="table table-bordered">
    <thead>
        <th colspan="9" style="background: #E6E6FA; text-align: center;">Listado multas viviendas</th>
    </thead>
    <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Cód</td> 
        <td style="font-weight:bold;text-align: center;">Fch. multa</td>
        <td style="font-weight:bold;text-align: center;">Tipo multa</td>
        <td style="font-weight:bold;text-align: center;">Estado</td>
        <td style="font-weight:bold;text-align: center;">Fch. pago</td>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_multa')){?><td style="font-weight:bold;text-align: center;">Edit.</td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_multa')){?><td style="font-weight:bold;text-align: center;">Elim.</td><?php }?>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['multas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_multa'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Fchi_multa'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_tmul'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_estmul'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Fchp_multa'];?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_multa')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
historial/multa/editMulta/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
/<?php echo $_smarty_tpl->tpl_vars['Idviv_encrypt']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Cond_encrypt']->value;?>
"></a></td><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('elim_multa')){?><td style="text-align: center;"><a class="btn btn-small glyphicon glyphicon-trash" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
historial/multa/delMulta/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_encrypt'];?>
/<?php echo $_smarty_tpl->tpl_vars['Idviv_encrypt']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Cond_encrypt']->value;?>
" onclick='return cb(this);'></a></td><?php }?>   
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>La vivienda no posee multas.</strong></p>
<?php }?> 
</form>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?>  
</div>
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_multa')){?>
<p>
<a href="#" data-toggle="modal" id="limpiar_modal1" data-target="#modal_per" class="btn btn-default">
    <i title="Aplicar multa a vivienda" class="glyphicon glyphicon-plus"></i> Nueva Multa
</a>
    <br><br>
<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
historial/multa/"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>


<div class="modal fade" id="modal_per" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Aplicar multa a vivienda:</h4>
          <h6>Calle/Block: <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom_cb'], 'UTF-8');?>
, N°: <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Num_viv'], 'UTF-8');?>
, N° Est: <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom_esta'], 'UTF-8');?>
</h6>
        </div>
        <form name="form_modal1" id="form_modal1">
        <div class="modal-body">      
           <input type="hidden" name="addrelper" value="1" />
           <input type="hidden" name="a" id="a" value="<?php echo $_smarty_tpl->tpl_vars['cond']->value;?>
" />
           <input type="hidden" name="viv" id="viv" value="<?php echo $_smarty_tpl->tpl_vars['dat']->value['Id_viv'];?>
" />
       <div class="row">
        <div class="form-group">
            <div class="col-sm-4 text-left">        
                <label class="control-label" style="margin: 5px;">Cód: </label>
            </div>
            <div class="col-sm-4">
                <input type="text" id="cod" name="cod" class="form-control" placeholder="Escriba código multa"/> 
            </div>
         </div>
       </div>
       <br>
       <div class="row">
          <div class="form-group">
             <div class="col-sm-4 text-left">
                 <label class="control-label">Fch multa:</label>
             </div>
             <div class="col-sm-4">
                 <input type="text" name="fchi" id="fchi" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['fchi'])===null||$tmp==='' ? '' : $tmp);?>
" style="width: 100px;" placeholder="00-00-0000" class="form-control" readonly="readonly" required=""/>
             </div>
          </div>
       </div>
       <br>
       <div class="row">
          <div class="form-group">
             <div class="col-sm-4 text-left">
                 <label class="control-label">Nota:</label>
             </div>
             <div class="col-sm-8">
                    <textarea name="nota" id="nota" class="form-control" placeholder="Ingrese detalle de la situación.." rows="4"></textarea>
             </div>
          </div>
       </div>       
       <br>
       <div class="row">
          <div class="form-group">
             <div class="col-sm-4 text-left">
                 <label class="control-label">Fch pago:</label>
             </div>
             <div class="col-sm-4">
                 <input type="text" name="fchp" id="fchp" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['fchp'])===null||$tmp==='' ? '' : $tmp);?>
" style="width: 100px;" placeholder="00-00-0000" class="form-control" readonly="readonly" required=""/>
             </div>
          </div>
       </div>
       <br>
       <div class="row">
          <div class="form-group">
            <div class="col-sm-4 text-left">     
                <label class="control-label">Monto: </label>    
            </div>
            <div class="col-sm-4">
                <input type="text" id="m" name="m" class="form-control" placeholder="Escriba monto multa"/> 
            </div>
         </div>
       </div>
       <br>
       <div class="row">
          <div class="form-group">
            <div class="col-sm-4 text-left">
              <label class="control-label">Motivo multa: </label> 
            </div>
            <div class="col-sm-6">
                <select name="tmul" id="tmul" class="form-control" required="">   
                        <option value="">-Seleccione-</option>
                        <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tmul']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['Id_tmul'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['Nom_tmul'];?>
</option>
                        <?php } ?>
                </select>
            </div>
          </div>
       </div>
          <div id="mssg" class="small">
          </div>
        </div>
       <div class="clearfix"></div>
        <div class="modal-footer">
            <button type="button" id="btn_savem" class="btn btn-primary" style="margin: 5px;">Guardar</button>
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