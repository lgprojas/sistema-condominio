<?php /* Smarty version Smarty-3.1.11, created on 2018-06-05 01:02:03
         compiled from "/home/covecino/public_html/modules/historial/views/multa/editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18104969455b16194b92f057-58693668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e9d6ea2a652aeb6d13d8f059ce8f68ca23adf38' => 
    array (
      0 => '/home/covecino/public_html/modules/historial/views/multa/editar.tpl',
      1 => 1526797791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18104969455b16194b92f057-58693668',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'v' => 0,
    'c' => 0,
    'dat' => 0,
    'datos' => 0,
    'datos1' => 0,
    'tmul' => 0,
    'tm' => 0,
    'emul' => 0,
    'em' => 0,
    '_acl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b16194ba3ce71_85215785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b16194ba3ce71_85215785')) {function content_5b16194ba3ce71_85215785($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
historial/multa/indexMultas/<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
">Lista multas vivienda</a></li>
        <li class="active">Editar vivienda</li>
    </ol>
<h3>Editar multa</h3>
<h6>Calle/Block: <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom_cb'], 'UTF-8');?>
, N°: <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Num_viv'], 'UTF-8');?>
, N° Est: <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['dat']->value['Nom_esta'], 'UTF-8');?>
</h6>
<br>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta multa?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<div class="col-md-4">
<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />   
    <input type="hidden" name="cod" id="cod" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_multa'];?>
" />
       <div class="row">
        <div class="form-group">
            <div class="col-sm-4 text-left">        
                <label class="control-label" style="margin: 5px;">Cód: </label>
            </div>
            <div class="col-sm-4">
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_multa'];?>
" class="form-control" disabled="disabled"/> 
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
                 <input type="text" name="fchi" id="fchi" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['fchi'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Fchi'] : $tmp);?>
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
                    <textarea name="nota" id="nota" class="form-control" placeholder="Ingrese detalle de la situación.." rows="4"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['nota'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Nota_multa'] : $tmp);?>
</textarea>
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
                 <input type="text" name="fchp" id="fchp" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['fchp'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Fchp'] : $tmp);?>
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
                <input type="text" id="m" name="m" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['m'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Total_multa'] : $tmp);?>
" class="form-control" placeholder="Escriba monto multa"/> 
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
                    <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_tmul']!=0){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_tmul'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_tmul'];?>
</option>
                        <?php  $_smarty_tpl->tpl_vars['tm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tmul']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tm']->key => $_smarty_tpl->tpl_vars['tm']->value){
$_smarty_tpl->tpl_vars['tm']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['tm']->value['Id_tmul']!=$_smarty_tpl->tpl_vars['datos']->value['Id_tmul']){?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['tm']->value['Id_tmul'];?>
"><?php echo $_smarty_tpl->tpl_vars['tm']->value['Nom_tmul'];?>
</option>
                            <?php }?>
                        <?php } ?>
                    <?php }else{ ?>
                        <option value="">-Seleccione-</option>
                         <?php  $_smarty_tpl->tpl_vars['tm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tmul']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tm']->key => $_smarty_tpl->tpl_vars['tm']->value){
$_smarty_tpl->tpl_vars['tm']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['tm']->value['Id_tmul'];?>
"><?php echo $_smarty_tpl->tpl_vars['tm']->value['Nom_tmul'];?>
</option>
                         <?php } ?>
                    <?php }?>            
                </select>
            </div>
          </div>
       </div>
       <br>
      <div class="row">
          <div class="form-group">
            <div class="col-sm-4 text-left">
              <label class="control-label">Estado multa: </label> 
            </div>
            <div class="col-sm-6">
                <select name="emul" id="emul" class="form-control" required="">   
                    <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_estmul']!=0){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_estmul'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_estmul'];?>
</option>
                        <?php  $_smarty_tpl->tpl_vars['em'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['em']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['emul']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['em']->key => $_smarty_tpl->tpl_vars['em']->value){
$_smarty_tpl->tpl_vars['em']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['em']->value['Id_estmul']!=$_smarty_tpl->tpl_vars['datos']->value['Id_estmul']){?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['em']->value['Id_estmul'];?>
"><?php echo $_smarty_tpl->tpl_vars['em']->value['Nom_estmul'];?>
</option>
                            <?php }?>
                        <?php } ?>
                    <?php }else{ ?>
                        <option value="">-Seleccione-</option>
                         <?php  $_smarty_tpl->tpl_vars['em'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['em']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['emul']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['em']->key => $_smarty_tpl->tpl_vars['em']->value){
$_smarty_tpl->tpl_vars['em']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['em']->value['Id_estmul'];?>
"><?php echo $_smarty_tpl->tpl_vars['em']->value['Nom_estmul'];?>
</option>
                         <?php } ?>
                    <?php }?>            
                </select>
            </div>
          </div>
       </div>
    <br/>
    <br/>
    <p>
        <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
historial/multa/indexMultas/<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_multa')){?><input type="submit" class="btn btn-small btn-primary" value="Editar" onclick='return cb(this);'/><?php }?>
    </p>
    <br>
    <br>
    <br>
</form>
</div>
</div><?php }} ?>