<?php /* Smarty version Smarty-3.1.11, created on 2018-05-21 01:06:16
         compiled from "C:\xampp\htdocs\covecino\modules\historial\views\observacion\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189745b023ecd8e84b8-64881348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc350d7ea5ed93019a3470d408899e96a6bca520' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\historial\\views\\observacion\\editar.tpl',
      1 => 1526875503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189745b023ecd8e84b8-64881348',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b023ecdd82de6_43694981',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'datos1' => 0,
    'tobs' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b023ecdd82de6_43694981')) {function content_5b023ecdd82de6_43694981($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
historial/observacion">Lista observaciones</a></li>
        <li class="active">Editar observación</li>
    </ol>
<h3>Editar observación</h3>
<h6></h6>
<br>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta observación?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<div class="col-md-4">
<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />   
    <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_obs'];?>
" />
       <div class="row">
          <div class="form-group">
             <div class="col-sm-4 text-left">
                 <label class="control-label">Fch. obs.:</label>
             </div>
             <div class="col-sm-4">
                 <input type="datetime" name="fchi" id="fchi"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['fchi'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Fchi'] : $tmp);?>
" style="width: 160px;" placeholder="00-00-0000 HH:mm:ss" class="form-control" readonly="readonly" required=""/>
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
                    <textarea name="nota" id="nota" class="form-control" placeholder="Ingrese detalle de la situación.." rows="4"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['nota'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Nota_obs'] : $tmp);?>
</textarea>
             </div>
          </div>
       </div>       
       <br>
       <div class="row">
          <div class="form-group">
            <div class="col-sm-4 text-left">
              <label class="control-label">Tipo situación: </label> 
            </div>
            <div class="col-sm-8">
                <select name="tobs" id="tobs" class="form-control" required="">   
                    <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_tobs']!=0){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_tobs'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_tobs'];?>
</option>
                        <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tobs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['t']->value['Id_tobs']!=$_smarty_tpl->tpl_vars['datos']->value['Id_tobs']){?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['Id_tobs'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['Nom_tobs'];?>
</option>
                            <?php }?>
                        <?php } ?>
                    <?php }else{ ?>
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
                    <?php }?>            
                </select>
            </div>
          </div>
       </div>
       <br>
    <br/>
    <br/>
    <p>
        <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
historial/observacion"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>
        <input type="submit" class="btn btn-small btn-primary" value="Editar" onclick='return cb(this);'/>
    </p>
    <br>
    <br>
    <br>
</form>
</div>
</div><?php }} ?>