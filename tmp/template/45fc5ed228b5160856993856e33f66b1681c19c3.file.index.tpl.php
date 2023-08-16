<?php /* Smarty version Smarty-3.1.11, created on 2023-08-16 15:32:48
         compiled from "C:\xampp\htdocs\condominio\modules\buscar\views\avanzado\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62982367864dd2460de5650-51704658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45fc5ed228b5160856993856e33f66b1681c19c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\condominio\\modules\\buscar\\views\\avanzado\\index.tpl',
      1 => 1526667667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62982367864dd2460de5650-51704658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'select' => 0,
    'allcond' => 0,
    'co' => 0,
    'dat' => 0,
    'dat1' => 0,
    'dat2' => 0,
    'ca' => 0,
    'cond' => 0,
    'idper' => 0,
    'allvivfilt' => 0,
    'v' => 0,
    'allvehifilt' => 0,
    've' => 0,
    'allVivRelPer' => 0,
    'sva' => 0,
    'actext' => 0,
    'sac' => 0,
    'allVehiRelPer' => 0,
    'vrp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_64dd2460e77e23_15221093',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64dd2460e77e23_15221093')) {function content_64dd2460e77e23_15221093($_smarty_tpl) {?><div class="container">
<h3>Búsqueda avanzada</h3>

<div class="container">
<div class="col-md-4">
<form name="form1" method="post">
    <div class="col-lg-10">
    <input type="hidden" name="buscar" value="1" />
    <?php if ($_smarty_tpl->tpl_vars['select']->value=="777"){?>
    <div class="form-group">
        <label class="control-label">Condominio:</label>
        <select name="cond" id="a" class="form-control">   
                <option value="">-Seleccione-</option>
                <?php  $_smarty_tpl->tpl_vars['co'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['co']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allcond']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
        <input type="hidden" id="a" value="<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
" />
    <?php }?>
    <div class="form-group">        
        <label class="control-label" style="margin: 5px" for="perco">Nombre: </label>    
        <input type="text" id="perco" name="perco" class="form-control" placeholder="Escriba nombre persona"/> 
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
        <th colspan="2" style="background: #E6E6FA; text-align: center;">Detalle persona</th>
    </thead>
    <tbody>
        <tr>
            <td>RUN:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Rut_per'], 'UTF-8');?>
</td>   
        </tr>
        <tr>
            <td>1er NOM:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom1_per'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>2do NOM:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom2_per'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>1er APE:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Ape1_per'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>2do APE:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Ape2_per'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>Estado:</td><td><?php if ($_smarty_tpl->tpl_vars['dat']->value['Id_estre']=="1"){?><p style="background: greenyellow;"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom_estre'], 'UTF-8');?>
</p><?php }else{ ?><p style="background: orange;"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom_estre'], 'UTF-8');?>
</p><?php }?></td>   
        </tr>
        <tr>
            <td>Rel cond:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom_act'], 'UTF-8');?>
</td>   
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['select']->value=="777"){?>
        <tr>
            <td>Condominio:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom_cond'], 'UTF-8');?>
</td>   
        </tr>
        <?php }?>
    </tbody> 
    </table>

<?php if (isset($_smarty_tpl->tpl_vars['dat1']->value)&&!empty($_smarty_tpl->tpl_vars['dat1']->value)){?>
    <table class="table table-bordered">
    <thead>
        <th colspan="2" style="background: #E6E6FA; text-align: center;">Es propietario</th>
    </thead>
    <tbody>
        <tr>
            <td>Viv asociada:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Nom_cb'], 'UTF-8');?>
-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Num_viv'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>Estacionamiento:</td><td><?php if (isset($_smarty_tpl->tpl_vars['dat1']->value)&&!empty($_smarty_tpl->tpl_vars['dat1']->value)){?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Nom_esta'], 'UTF-8');?>
<?php }?></td>
        </tr>
        <tr>
            <td>Condominio:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Nom_cond'], 'UTF-8');?>
</td>
        </tr>
    </tbody>
    </table>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['dat2']->value)&&!empty($_smarty_tpl->tpl_vars['dat2']->value)){?>
    <table class="table table-bordered">
    <thead>
        <th colspan="2" style="background: #E6E6FA; text-align: center;">Posee vehículo</th>
    </thead>
    <tbody>
        <tr>
            <td>Patente:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat2']->value['Cod_vehi'], 'UTF-8');?>
</td>   
        </tr>
        <tr>
            <td>Marca:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat2']->value['Nom_marca'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>Modelo:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat2']->value['Nom_modelo'], 'UTF-8');?>
</td>
        </tr>
        <tr>
            <td>Detalle:</td><td><?php echo $_smarty_tpl->tpl_vars['dat2']->value['Desc_vehi'];?>
</td>   
        </tr>              
    </tbody> 
    </table>
<?php }?>

<fieldset>
    <legend>Registro relación</legend>
    
    <table class="table table-bordered col-lg-12">
        <thead>
            <th colspan="2" style="background: #E6E6FA; text-align: center;">Relacionar</th>
        </thead>
    <thead>
        <th style="background: #E6E6FA; text-align: center;">Vivienda</th>
        <th style="background: #E6E6FA; text-align: center;">Vehículo</th>
    </thead>
    <tbody>
        <tr>
            <td style="text-align: center;">
                <a href="#" data-toggle="modal" id="limpiar_modal1" data-target="#modal_viv" class="btn btn-default">
                    <i title="Asociar a vivienda" class="glyphicon glyphicon-home"></i> Asociar
                </a>
                    <div class="modal fade" id="modal_viv" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Asociar a una vivienda:</h4>
                          <h6><?php echo $_smarty_tpl->tpl_vars['ca']->value['Ape1_alum'];?>
 <?php echo $_smarty_tpl->tpl_vars['ca']->value['Ape2_alum'];?>
 <?php echo $_smarty_tpl->tpl_vars['ca']->value['Nom1_alum'];?>
 <?php echo $_smarty_tpl->tpl_vars['ca']->value['Nom2_alum'];?>
</h6>
                        </div>
                        <form name="form_modal1" id="form_modal1">
                        <div class="modal-body">      
                           <input type="hidden" name="addrelviv" value="1" />
                           <input type="hidden" name="co" id="co" value="<?php echo $_smarty_tpl->tpl_vars['cond']->value;?>
" />
                           <input type="hidden" name="per" id="per" value="<?php echo $_smarty_tpl->tpl_vars['idper']->value;?>
" />
                          <div class="row">
                              <div class="col-lg-3" style="margin: 5px;">Vivienda: </div> 
                              <div class="col-lg-5">
                                  <select name="aviv" id="aviv" class="form-control" required="">   
                                        <option value="">-Seleccione-</option>
                                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allvivfilt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['Id_viv'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['Nom_cb'];?>
 - <?php echo $_smarty_tpl->tpl_vars['v']->value['Num_viv'];?>
</option>
                                        <?php } ?>
                                </select>
                              </div>
                          </div>
                          <br>
                          <div class="row">
                              <div class="col-lg-3" style="margin: 5px;">Tipo relación: </div> 
                              <div class="col-lg-5">
                                <select name="trel" id="trel" class="form-control" required="">   
                                </select>
                              </div>
                          </div>
                          <br>
                          <div id="mssg" class="small">
                          </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="btn_save1" class="btn btn-primary" style="margin: 5px;">Guardar</button>
                          <button type="button" id="limpiar_modal1" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                        </form>
                      </div>
                    </div>
                    </div> 
            </td>
            <td style="text-align: center;">
                <a href="#" data-toggle="modal" id="limpiar_modal2" data-target="#modal_vehi"class="btn btn-default">
                    <i title="Asociar a vehículo" class="glyphicon glyphicon-road"></i> Asociar
                </a>
                    <div class="modal fade" id="modal_vehi" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Asociar a un vehículo:</h4>
                          <h6><?php echo $_smarty_tpl->tpl_vars['ca']->value['Ape1_alum'];?>
 <?php echo $_smarty_tpl->tpl_vars['ca']->value['Ape2_alum'];?>
 <?php echo $_smarty_tpl->tpl_vars['ca']->value['Nom1_alum'];?>
 <?php echo $_smarty_tpl->tpl_vars['ca']->value['Nom2_alum'];?>
</h6>
                        </div>
                        <form name="form_modal2" id="form_modal2">
                        <div class="modal-body">      
                           <input type="hidden" name="addrelvehi" value="1" />
                           <input type="hidden" name="co" id="co" value="<?php echo $_smarty_tpl->tpl_vars['cond']->value;?>
" />
                           <input type="hidden" name="per" value="<?php echo $_smarty_tpl->tpl_vars['idper']->value;?>
" />
                          <div class="row">
                              <div class="col-lg-3" style="margin: 5px;">Vehículo: </div> 
                              <div class="col-lg-5">
                                <select name="avehi" id="avehi" class="form-control" required="">   
                                        <option value="">-Seleccione-</option>
                                        <?php  $_smarty_tpl->tpl_vars['ve'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ve']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allvehifilt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ve']->key => $_smarty_tpl->tpl_vars['ve']->value){
$_smarty_tpl->tpl_vars['ve']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['ve']->value['Id_vehi'];?>
">[<?php echo $_smarty_tpl->tpl_vars['ve']->value['Cod_vehi'];?>
] <?php echo $_smarty_tpl->tpl_vars['ve']->value['Nom_marca'];?>
 <?php echo $_smarty_tpl->tpl_vars['ve']->value['Nom_modelo'];?>
</option>
                                        <?php } ?>
                                </select>
                              </div>
                          </div>
                          <br>
                          <div class="row">
                              <div class="col-lg-3" style="margin: 5px;">Tipo relación: </div> 
                              <div class="col-lg-5">
                                <select name="trelv" id="trelv" class="form-control" required="">   
                                </select>
                              </div>
                          </div>
                          <br>
                          <div id="mssg2" class="small">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" id="btn_save2" class="btn btn-primary" style="margin: 5px;">Guardar</button>
                          <button type="button" id="limpiar_modal2" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                        </form>
                      </div>
                    </div>
                    </div> 
            </td>
        </tr>
    </tbody>
    </table>
    <legend>Registro visita</legend>
    <div class="form-horizontal well col-lg-12 small">
    <div class="form-group">
        <input type="hidden" name="per" value="<?php echo $_smarty_tpl->tpl_vars['idper']->value;?>
" />
        <input type="hidden" name="co" id="co" value="<?php echo $_smarty_tpl->tpl_vars['cond']->value;?>
" />
        <label class="control-label">Vivienda</label>  
            <select id="selviv" name="selviv" class="form-control input-sm">
                <option value="">-Seleccione-</option>
                <?php  $_smarty_tpl->tpl_vars['sva'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sva']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allVivRelPer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sva']->key => $_smarty_tpl->tpl_vars['sva']->value){
$_smarty_tpl->tpl_vars['sva']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['sva']->value['Id_viv'];?>
"><?php echo $_smarty_tpl->tpl_vars['sva']->value['Nom_cb'];?>
 <?php echo $_smarty_tpl->tpl_vars['sva']->value['Num_viv'];?>
</option>
                <?php } ?>
            </select>
    </div>
    <div class="form-group">
        <label class="control-label">Motivo</label>  
            <select id="selact" name="selact" class="form-control input-sm">
                <option value="">-Seleccione-</option>
                <?php  $_smarty_tpl->tpl_vars['sac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sac']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actext']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sac']->key => $_smarty_tpl->tpl_vars['sac']->value){
$_smarty_tpl->tpl_vars['sac']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['sac']->value['Id_actext'];?>
"><?php echo $_smarty_tpl->tpl_vars['sac']->value['Nom_actext'];?>
</option>
                <?php } ?>
            </select>
    </div>
    <div class="form-group">
        <label class="control-label">Vehículo</label>  
            <select id="selvehi" name="selvehi" class="form-control input-sm">
                <option value="">-Seleccione-</option>
                <?php  $_smarty_tpl->tpl_vars['vrp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vrp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allVehiRelPer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vrp']->key => $_smarty_tpl->tpl_vars['vrp']->value){
$_smarty_tpl->tpl_vars['vrp']->_loop = true;
?>
                    <option value="<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['vrp']->value['Cod_vehi'], 'UTF-8');?>
">[<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['vrp']->value['Cod_vehi'], 'UTF-8');?>
] <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['vrp']->value['Nom_marca'], 'UTF-8');?>
 - <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['vrp']->value['Nom_modelo'], 'UTF-8');?>
</option>
                <?php } ?>
            </select>
    </div>
    <div class="form-group">
        <label class="control-label"><input type="checkbox" name="seleprop" id="eprop"/> Est. viv</label> 
    </div>    
    <div class="form-group">
        <label class="control-label"><input type="checkbox" name="selevisita" id="evisita"/> Est. visita</label> 
    </div>
    <br>
    <div class="form-group">
            <div class="col-lg-2"><button class="selboton btn btn-default btn-sm">Registrar</button></div>
    </div>
    <div class="form-group">
        <div class="col-lg-12 text-center" id="registrado"></div>
    </div>          
    </div>
</fieldset>
<br/>
<br/>
<br/>
<?php }?>
</div>
</div>
</div><?php }} ?>