<?php /* Smarty version Smarty-3.1.11, created on 2018-05-15 02:16:32
         compiled from "C:\xampp\htdocs\covecino\modules\transa\views\viv\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121745a2dc7d41ff816-35050562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80ef88adc594e244d0739075c849131c6d621810' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\transa\\views\\viv\\editar.tpl',
      1 => 1526361385,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121745a2dc7d41ff816-35050562',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a2dc7d44f3679_31753406',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'sadmin' => 0,
    'datos' => 0,
    'cond' => 0,
    'co' => 0,
    'calleblock' => 0,
    'cb' => 0,
    'c' => 0,
    '_acl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2dc7d44f3679_31753406')) {function content_5a2dc7d44f3679_31753406($_smarty_tpl) {?><div class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/viv">Lista viviendas</a></li>
        <li class="active">Editar vivienda</li>
    </ol>
<h3>Editar vivienda</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta vivienda?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<div class="col-md-4">
<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?>
    <fieldset>
    <legend>El Condominio</legend>
    <div class="form-horizontal well col-lg-12 small">
    <div class="form-group">
        <label class="control-label">Condominio:</label>
        <select  name="cond" id="cond" class="form-control">
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_cond']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_cond'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cond'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['co'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['co']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cond']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['co']->key => $_smarty_tpl->tpl_vars['co']->value){
$_smarty_tpl->tpl_vars['co']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['co']->value['Id_cond']!=$_smarty_tpl->tpl_vars['datos']->value['Id_cond']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['co']->value['Id_cond'];?>
"><?php echo $_smarty_tpl->tpl_vars['co']->value['Nom_cond'];?>
</option>
                    <?php }?>
                <?php } ?>
            <?php }else{ ?>
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
            <?php }?>            
        </select>
    </div> 
    </div>
    </fieldset>
    <?php }else{ ?>
    <input type="hidden" id="cond" name="cond" value="<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
"/>
    <?php }?>    
    <fieldset>
    <legend>La Vivienda</legend>
    <div class="form-horizontal well col-lg-12 small">
    <div class="form-group">
        <label class="control-label">Número vivienda:</label>
        <input class="form-control" type="text" name="num" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Num_viv'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Num_viv'];?>
<?php }?>" placeholder="Ingrese número vivienda" />
    </div>
    <div class="form-group">
        <label class="control-label">Calle/block:</label>
        <select name="cb" id="cb" class="form-control">            
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_cb']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_cb'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cb'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['cb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['calleblock']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cb']->key => $_smarty_tpl->tpl_vars['cb']->value){
$_smarty_tpl->tpl_vars['cb']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['cb']->value['Id_cb']!=$_smarty_tpl->tpl_vars['datos']->value['Id_cb']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['cb']->value['Id_cb'];?>
"><?php echo $_smarty_tpl->tpl_vars['cb']->value['Nom_cb'];?>
</option>
                    <?php }?>
                <?php } ?>
                <option value=""></option>
            <?php }else{ ?>
                <option value="">-Seleccione-</option>
                             <?php  $_smarty_tpl->tpl_vars['cb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['calleblock']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cb']->key => $_smarty_tpl->tpl_vars['cb']->value){
$_smarty_tpl->tpl_vars['cb']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['cb']->value['Id_cb'];?>
"><?php echo $_smarty_tpl->tpl_vars['cb']->value['Nom_cb'];?>
</option>
                             <?php } ?>
            <?php }?>            
        </select>
    </div>       
    <div class="form-group">
        <label class="control-label">Estacionamiento:</label>
        <select  name="esta" id="esta" class="form-control">
            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_esta']!=0){?>
                <option value=""></option>
                <option selected="" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_esta'];?>
"><?php echo str_pad($_smarty_tpl->tpl_vars['datos']->value['Id_esta'],2,'0',@STR_PAD_LEFT);?>
</option>
                <?php $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['c']->step = 1;$_smarty_tpl->tpl_vars['c']->total = (int)ceil(($_smarty_tpl->tpl_vars['c']->step > 0 ? 600+1 - (1) : 1-(600)+1)/abs($_smarty_tpl->tpl_vars['c']->step));
if ($_smarty_tpl->tpl_vars['c']->total > 0){
for ($_smarty_tpl->tpl_vars['c']->value = 1, $_smarty_tpl->tpl_vars['c']->iteration = 1;$_smarty_tpl->tpl_vars['c']->iteration <= $_smarty_tpl->tpl_vars['c']->total;$_smarty_tpl->tpl_vars['c']->value += $_smarty_tpl->tpl_vars['c']->step, $_smarty_tpl->tpl_vars['c']->iteration++){
$_smarty_tpl->tpl_vars['c']->first = $_smarty_tpl->tpl_vars['c']->iteration == 1;$_smarty_tpl->tpl_vars['c']->last = $_smarty_tpl->tpl_vars['c']->iteration == $_smarty_tpl->tpl_vars['c']->total;?>
                    <?php if ($_smarty_tpl->tpl_vars['c']->value!=$_smarty_tpl->tpl_vars['datos']->value['Id_esta']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
"><?php echo str_pad($_smarty_tpl->tpl_vars['c']->value,2,'0',@STR_PAD_LEFT);?>
</option>
                    <?php }?>
                <?php }} ?>
            <?php }else{ ?>
                <option value="">-Seleccione-</option>                         
                <?php $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['c']->step = 1;$_smarty_tpl->tpl_vars['c']->total = (int)ceil(($_smarty_tpl->tpl_vars['c']->step > 0 ? 600+1 - (1) : 1-(600)+1)/abs($_smarty_tpl->tpl_vars['c']->step));
if ($_smarty_tpl->tpl_vars['c']->total > 0){
for ($_smarty_tpl->tpl_vars['c']->value = 1, $_smarty_tpl->tpl_vars['c']->iteration = 1;$_smarty_tpl->tpl_vars['c']->iteration <= $_smarty_tpl->tpl_vars['c']->total;$_smarty_tpl->tpl_vars['c']->value += $_smarty_tpl->tpl_vars['c']->step, $_smarty_tpl->tpl_vars['c']->iteration++){
$_smarty_tpl->tpl_vars['c']->first = $_smarty_tpl->tpl_vars['c']->iteration == 1;$_smarty_tpl->tpl_vars['c']->last = $_smarty_tpl->tpl_vars['c']->iteration == $_smarty_tpl->tpl_vars['c']->total;?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
"><?php echo str_pad($_smarty_tpl->tpl_vars['c']->value,2,'0',@STR_PAD_LEFT);?>
</option>
                <?php }} ?>
            <?php }?>     
        </select>
    </div> 
    </div>
    </fieldset>
    <br/>
    <br/>
    <p>
        <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
transa/viv"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_viv')){?><input type="submit" class="btn btn-small btn-primary" value="Editar" onclick='return cb(this);'/><?php }?>
    </p>
    <br>
    <br>
    <br>
</form>
</div>
</div><?php }} ?>