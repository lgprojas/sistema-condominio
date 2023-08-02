<?php /* Smarty version Smarty-3.1.11, created on 2018-06-05 01:00:10
         compiled from "/home/covecino/public_html/modules/buscar/views/viv/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9645009645a9cabc1025e74-54040583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1a11ef379728a814c21dff4de2e92ac62569a94' => 
    array (
      0 => '/home/covecino/public_html/modules/buscar/views/viv/index.tpl',
      1 => 1527738113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9645009645a9cabc1025e74-54040583',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a9cabc1149ab7_75692273',
  'variables' => 
  array (
    'select' => 0,
    'cond' => 0,
    'co' => 0,
    'cb' => 0,
    'c' => 0,
    'dat' => 0,
    'dat1' => 0,
    'dat2' => 0,
    'datos1' => 0,
    'tmul' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9cabc1149ab7_75692273')) {function content_5a9cabc1149ab7_75692273($_smarty_tpl) {?><div class="container">
<h3>Buscar Vivienda</h3>
<div class="container">
<div class="col-md-4">
<form name="form1" method="post">
    <div class="col-lg-10">
    <input type="hidden" name="buscar" value="1" />
    <?php if ($_smarty_tpl->tpl_vars['select']->value=="777"){?>
    <div class="form-group">
        <label class="control-label">Condominio:</label>
        <select name="cond" id="cond" class="form-control">   
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
    <?php }else{ ?>
        <input type="hidden" id="cond" name="cond" value="<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
"/>
    <?php }?>
    <div class="form-group">
        <label class="control-label">Calle/Torre: </label>
        <select name="cb" id="cb" class="form-control">
            <option value="">-Seleccione-</option>
            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_cb'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_cb'];?>
</option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label class="control-label">N°: </label>
        <select name="num" id="num" class="form-control">
        </select>
    </div> 
    <button type="submit" id="new" class="btn btn-primary" style="margin: 15px;">Buscar</button>
    </div>
</form>
</div>
</div>
<div class="container">
<div class="col-md-4">
<?php if (isset($_smarty_tpl->tpl_vars['dat']->value)&&!empty($_smarty_tpl->tpl_vars['dat']->value)){?>
    <table class="table table-bordered">
    <thead>
        <th colspan="2" style="background: #E6E6FA; text-align: center;">Detalle Vivienda</th>
    </thead>
    <tbody>
        <tr>
            <td>Calle/Block:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom_cb'], 'UTF-8');?>
</td>   
        </tr>
        <tr>
            <td>N° vivienda:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Num_viv'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>N° Est:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom_esta'], 'UTF-8');?>
</td>
        </tr>  
    </tbody>
    <thead>
        <th colspan="2" style="background: #E6E6FA; text-align: center;">Detalle propietario</th>
    </thead>
    <tbody>
        <tr>
            <td>RUN:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Rut_per'], 'UTF-8');?>
</td>   
        </tr>
        <tr>
            <td>1er Nom:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Nom1_per'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>2do Nom:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Nom2_per'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>1er Ape:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Ape1_per'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>2do Ape:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Ape2_per'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>Estado:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Nom_estre'], 'UTF-8');?>
</td>
        </tr>
    </tbody>
    <?php if (isset($_smarty_tpl->tpl_vars['dat2']->value)&&!empty($_smarty_tpl->tpl_vars['dat2']->value)){?>
    <thead>
        <th colspan="2" style="background: #E6E6FA; text-align: center;">Detalle titular</th>
    </thead>
    <tbody>
        <tr>
            <td>RUN:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat2']->value['Rut_per'], 'UTF-8');?>
</td>   
        </tr>
        <tr>
            <td>1er Nom:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat2']->value['Nom1_per'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>2do Nom:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat2']->value['Nom2_per'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>1er Ape:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat2']->value['Ape1_per'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>2do Ape:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat2']->value['Ape2_per'], 'UTF-8');?>
</td>
        </tr>
    </tbody>
    <?php }?>
</table>
    
<table class="table table-bordered col-lg-12">
        <thead>
            <th colspan="2" style="background: #E6E6FA; text-align: center;">Multa</th>
        </thead>
    <tbody>
        <tr>
            <td style="text-align: center;">
                <a href="#" data-toggle="modal" id="limpiar_modal1" data-target="#modal_per" class="btn btn-default">
                    <i title="Aplicar multa a vivienda" class="glyphicon glyphicon-home"></i> Aplicar
                </a>
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
            </td>
        </tr>
    </tbody>
    </table>
<?php }?> 
</div>
</div>
</div>
</div><?php }} ?>