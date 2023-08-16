<?php /* Smarty version Smarty-3.1.11, created on 2023-08-16 15:23:48
         compiled from "C:\xampp\htdocs\condominio\modules\buscar\views\patente\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45027880764dd2244986362-07233485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c49f5b2a386cd9816bd0c95f69a2110c61aaa3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\condominio\\modules\\buscar\\views\\patente\\index.tpl',
      1 => 1527546312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45027880764dd2244986362-07233485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'select' => 0,
    'allcond' => 0,
    'co' => 0,
    'dat' => 0,
    'datp' => 0,
    'dat1' => 0,
    'dat3' => 0,
    'dat4' => 0,
    'dat2' => 0,
    'perAsoc' => 0,
    'color' => 0,
    'datos' => 0,
    'usu' => 0,
    'cond' => 0,
    'vap' => 0,
    'actext' => 0,
    'ac' => 0,
    'ca' => 0,
    'relvehi' => 0,
    'trv' => 0,
    'spa' => 0,
    'allviv' => 0,
    'sva' => 0,
    'relviv' => 0,
    'srv' => 0,
    'sac' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_64dd2244a49b75_23983341',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64dd2244a49b75_23983341')) {function content_64dd2244a49b75_23983341($_smarty_tpl) {?><div class="container">

<h3>Buscar Patente</h3>



<div class="container">

<div class="col-md-4">

<form name="form1" method="post">

    <div class="col-lg-10">

    <input type="hidden" name="buscar" value="1" />

    <div class="form-group">

            <label class="control-label">Patente: </label>

            <input type="text" name="cod" class="form-control" />

    </div>

    <?php if ($_smarty_tpl->tpl_vars['select']->value=="777"){?>

    <div class="form-group">

        <label class="control-label">Condominio:</label>

        <select name="cond" id="cond" class="form-control">   

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

        <input type="hidden" id="cond" name="cond" value="<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
"/>

    <?php }?>

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

        <th colspan="2" style="background: #E6E6FA; text-align: center;">Detalle vehículo</th>

    </thead>

    <tbody>

        <tr>

            <td>Patente:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Cod_vehi'], 'UTF-8');?>
</td>   

        </tr>

        <tr>

            <td>Marca:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom_marca'], 'UTF-8');?>
</td>

        </tr>

        <tr>

            <td>Modelo:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom_modelo'], 'UTF-8');?>
</td>

        </tr>

        <tr>

            <td>Detalle:</td><td><?php echo $_smarty_tpl->tpl_vars['dat']->value['Desc_vehi'];?>
</td>   

        </tr>              

    </tbody> 

    </table>

      

    <?php if (isset($_smarty_tpl->tpl_vars['datp']->value)&&!empty($_smarty_tpl->tpl_vars['datp']->value)){?>

    <table class="table table-bordered">

    <thead>

        <th colspan="2" style="background: #E6E6FA; text-align: center;">Propietario vehículo</th>

    </thead>

    <tbody>

        <tr>

            <td>Propietario:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['datp']->value['Nom1_per'], 'UTF-8');?>
 <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['datp']->value['Ape1_per'], 'UTF-8');?>
 <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['datp']->value['Ape2_per'], 'UTF-8');?>
</td>

        </tr>

    </tbody>

    </table>

    <?php }else{ ?>

    <table class="table table-bordered">

    <thead>

        <th colspan="2" style="background: #E6E6FA; text-align: center;">Propietario vehículo</th>

    </thead>

    <tbody>

        <tr>

            <td>Propietario:</td><td>Sin propietario asociado.</td>

        </tr>

    </tbody>

    </table>

    <?php }?>



<?php if (isset($_smarty_tpl->tpl_vars['dat1']->value)&&!empty($_smarty_tpl->tpl_vars['dat1']->value)){?>

    <table class="table table-bordered">

    <thead>

        <th colspan="2" style="background: #E6E6FA; text-align: center;">Vivienda propietario</th>

    </thead>

    <tbody>

        <tr>

            <td>Viv asociada:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Nom_cb'], 'UTF-8');?>
-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat1']->value['Num_viv'], 'UTF-8');?>
</td>

        </tr>

        <tr>

            <td>Estacionamiento:</td><td><?php if (isset($_smarty_tpl->tpl_vars['dat3']->value)&&!empty($_smarty_tpl->tpl_vars['dat3']->value)){?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat3']->value['Nom_esta'], 'UTF-8');?>
<?php }?></td>

        </tr>

        <tr>

            <td>Condominio:</td><td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat4']->value['Nom_cond'], 'UTF-8');?>
</td>

        </tr>

    </tbody>

    </table>



<table class="table table-bordered">

    <thead>

        <th colspan="2" style="background: #E6E6FA; text-align: center;">Detalle vivienda</th>

    </thead>

    <tbody>

        <tr>

            <td>Propietario viv:</td><td><?php if (isset($_smarty_tpl->tpl_vars['dat2']->value)&&!empty($_smarty_tpl->tpl_vars['dat2']->value)){?><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat2']->value['Nom1_per'], 'UTF-8');?>
 <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat2']->value['Ape1_per'], 'UTF-8');?>
 <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat2']->value['Ape2_per'], 'UTF-8');?>
<?php }else{ ?>Sin propietario definido<?php }?></td>

        </tr>

    </tbody>

</table>

<?php }?>



<?php if (isset($_smarty_tpl->tpl_vars['perAsoc']->value)&&!empty($_smarty_tpl->tpl_vars['perAsoc']->value)){?>

    <table class="table table-bordered small">

    <thead>

        <th colspan="9" style="background: #E6E6FA;text-align: center;">Personas asociadas al vehículo</th>

        </thead>

        <thead style="background: #E6E6FA;">    

        <td style="font-weight:bold;text-align: center;">Nombre</td>

        <td style="font-weight:bold;text-align: center;">Viv relacionadas</td>

        <td style="font-weight:bold;text-align: center;">Motivo visita</td>

        <td style="font-weight:bold;text-align: center;">Est. viv</td>

        <td style="font-weight:bold;text-align: center;">Est. visita</td>

        <td></td>

    </thead>

<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['perAsoc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>

    

    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>

    <tr id="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_per'];?>
" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">

        <td style="font-size: 10px;">

            <input type="hidden" id="vehi" value="<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Cod_vehi'], 'UTF-8');?>
" />

            <input type="hidden" id="per_<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_per'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_per'];?>
" />

            <input type="hidden" id="usu" value="<?php echo $_smarty_tpl->tpl_vars['usu']->value;?>
" />

            <input type="hidden" id="co" value="<?php echo $_smarty_tpl->tpl_vars['cond']->value;?>
" />            

            <span data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Rut_per'];?>
">

                <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['datos']->value['Nom1_per'], 'UTF-8');?>
 <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['datos']->value['Ape1_per'], 'UTF-8');?>
 <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['datos']->value['Ape2_per'], 'UTF-8');?>


            </span>

        </td>

        <td>

            <select id="vivasoc_<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_per'];?>
" name="vivasoc" class="form-control input-sm" style="width: 110px;">

                <option value="">-Seleccione-</option>

                <?php  $_smarty_tpl->tpl_vars['vap'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vap']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datos']->value['Vivasoc_per']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vap']->key => $_smarty_tpl->tpl_vars['vap']->value){
$_smarty_tpl->tpl_vars['vap']->_loop = true;
?>

                    <option value="<?php echo $_smarty_tpl->tpl_vars['vap']->value['Id_viv'];?>
"><?php echo $_smarty_tpl->tpl_vars['vap']->value['Nom_cb'];?>
 <?php echo $_smarty_tpl->tpl_vars['vap']->value['Num_viv'];?>
</option>

                <?php } ?>

            </select>

        </td>

        <td>

            <select id="actext_<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_per'];?>
" name="actext" class="form-control input-sm" style="min-width: 140px;">

                <option value="">-Seleccione-</option>

                <?php  $_smarty_tpl->tpl_vars['ac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ac']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actext']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ac']->key => $_smarty_tpl->tpl_vars['ac']->value){
$_smarty_tpl->tpl_vars['ac']->_loop = true;
?>

                    <option value="<?php echo $_smarty_tpl->tpl_vars['ac']->value['Id_actext'];?>
"><?php echo $_smarty_tpl->tpl_vars['ac']->value['Nom_actext'];?>
</option>

                <?php } ?>

            </select>

        </td>

        <td style="text-align: center;"><input type="checkbox" name="eprop_<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_per'];?>
" id="eprop"/></td>

        <td style="text-align: center;"><input type="checkbox" name="evisita_<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_per'];?>
" id="evisita"/></td>

        <td style="text-align: center;"><div id="rega_<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_per'];?>
"><button class="boton btn btn-default btn-sm">Registrar</button></div></td>

    </tr>

<?php } ?>

</table>

<table class="table table-bordered col-lg-12">

        <thead>

            <th colspan="2" style="background: #E6E6FA; text-align: center;">Relacionar</th>

        </thead>

    <thead>

        <th style="background: #E6E6FA; text-align: center;">Persona</th>

    </thead>

    <tbody>

        <tr>

            <td style="text-align: center;">

                <a href="#" data-toggle="modal" id="limpiar_modal1" data-target="#modal_per" class="btn btn-default">

                    <i title="Asociar a vivienda" class="glyphicon glyphicon-home"></i> Asociar

                </a>

                    <div class="modal fade" id="modal_per" role="dialog">

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

                           <input type="hidden" name="addrelper" value="1" />

                           <input type="hidden" name="a" id="a" value="<?php echo $_smarty_tpl->tpl_vars['cond']->value;?>
" />

                           <input type="hidden" name="vehi" id="vehi" value="<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Cod_vehi'], 'UTF-8');?>
" />

                       <div class="col-lg">

                        <div class="form-group">

                            <div class="col">        

                                <label class="control-label" style="margin: 5px" for="perco">Nombre: </label>    

                            </div>

                            <div class="col ml-auto">

                                <input type="text" id="perco" name="perco" class="form-control" placeholder="Escriba nombre persona"/> 

                            </div>

                         </div>                     

                          <div class="form-group">

                              <div class="col" style="margin: 5px;">Tipo relación: </div> 

                              <div class="col">

                                <select name="trelv" id="trelv" class="form-control" required="">   

                                        <option value="">-Seleccione-</option>

                                        <?php  $_smarty_tpl->tpl_vars['trv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['trv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['relvehi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['trv']->key => $_smarty_tpl->tpl_vars['trv']->value){
$_smarty_tpl->tpl_vars['trv']->_loop = true;
?>

                                            <option value="<?php echo $_smarty_tpl->tpl_vars['trv']->value['Id_trelv'];?>
"><?php echo $_smarty_tpl->tpl_vars['trv']->value['Nom_trelv'];?>
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

                            <button type="button" id="btn_savepp" class="btn btn-primary" style="margin: 5px;">Guardar</button>

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

<div class="clearfix"></div>

<fieldset>

    <legend>Registro avanzado

        <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Registro de visita en el caso que una persona relacionada a esta patente quiera visitar otra vivienda con la cual aún no posee relación."></i>

    </legend>

    <div class="form-horizontal well col-lg-10 small">

    <div class="form-group">

        <label class="control-label">Nombre persona</label>  

        <select id="selper" name="selper" class="form-control input-sm">

                <option value="">-Seleccione-</option>

                <?php  $_smarty_tpl->tpl_vars['spa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['spa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['perAsoc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['spa']->key => $_smarty_tpl->tpl_vars['spa']->value){
$_smarty_tpl->tpl_vars['spa']->_loop = true;
?>

                    <option value="<?php echo $_smarty_tpl->tpl_vars['spa']->value['Id_per'];?>
"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['spa']->value['Nom1_per'], 'UTF-8');?>
 <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['spa']->value['Nom2_per'], 'UTF-8');?>
 <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['spa']->value['Ape1_per'], 'UTF-8');?>
 <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['spa']->value['Ape2_per'], 'UTF-8');?>
</option>

                <?php } ?>

            </select>

    </div>

    <div class="form-group">

        <label class="control-label">Vivienda</label>  

            <select id="selviv" name="selviv" class="form-control input-sm">

                <option value="">-Seleccione-</option>

                <?php  $_smarty_tpl->tpl_vars['sva'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sva']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allviv']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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

        <label class="control-label">Relación vivienda

        <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Debe establecer la relación que tiene la persona con la vivienda seleccionada."></i>

        </label>  

            <select id="selrviv" name="selrviv" class="form-control input-sm">

                <option value="">-Seleccione-</option>

                <?php  $_smarty_tpl->tpl_vars['srv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['srv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['relviv']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['srv']->key => $_smarty_tpl->tpl_vars['srv']->value){
$_smarty_tpl->tpl_vars['srv']->_loop = true;
?>

                    <option value="<?php echo $_smarty_tpl->tpl_vars['srv']->value['Id_trel'];?>
"><?php echo $_smarty_tpl->tpl_vars['srv']->value['Nom_trel'];?>
</option>

                <?php } ?>

            </select>

    </div>

    <div class="form-group">

        <label class="control-label">Actividad

        <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Observación del fin de la visita al condominio."></i>

        </label>  

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

    <div id="estac" class="well">

        <label class="control-label h4">Estacionamiento

        <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Sólo se establece para el responsable de estacionar el vehículo."></i>

        </label>  

        <div class="form-group">

            <label class="control-label"><input type="checkbox" name="seleprop" id="eprop"/> Vivienda</label> 

        </div>    

        <div class="form-group">

            <label class="control-label"><input type="checkbox" name="selevisita" id="evisita"/> Visita</label> 

        </div>

    </div>

    <div class="form-group">

            <div class="col-lg-2"><button class="selboton btn btn-default btn-sm">Registrar</button></div>

    </div>

    <div class="form-group">

        <div class="col-lg-12 text-center" id="registrado"></div>

    </div>          

    </div>

</fieldset>

<?php }?> 

<br/>

<br/>

<br/>

<?php }?>

</div>

</div>

</div><?php }} ?>