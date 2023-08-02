<?php /* Smarty version Smarty-3.1.11, created on 2014-05-29 16:26:10
         compiled from "C:\xampp\htdocs\scp_vm\modules\salidas\views\verquien\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:410453872a73207f55-37848198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1c6c36e5a92864fc09abc5c3cba52d90c113ed2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\scp_vm\\modules\\salidas\\views\\verquien\\editar.tpl',
      1 => 1401373559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '410453872a73207f55-37848198',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_53872a73507ec5_03775886',
  'variables' => 
  array (
    'datres' => 0,
    'date' => 0,
    'datos' => 0,
    'estp' => 0,
    'b' => 0,
    '_layoutParams' => 0,
    'idb' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53872a73507ec5_03775886')) {function content_53872a73507ec5_03775886($_smarty_tpl) {?><div id="content">
<h3>Editar estado </h3>
<h4>Detalle: <?php echo $_smarty_tpl->tpl_vars['datres']->value;?>
, el día <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 </h4>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar el estado de reserva del periférico?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
   <div class="col-lg-2">
    <label class="control-label" style="margin: 5px">Estado: </label>
</div>
<div class="col-lg-4">
   <select name="estp" id="estp" class="form-control" style="margin: 5px">

            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_estp']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_estp'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_estp'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['b']->value['Id_estp']!=$_smarty_tpl->tpl_vars['datos']->value['Id_estp']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['b']->value['Id_estp'];?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value['Nom_estp'];?>
</option>
                    <?php }?>
                <?php } ?>
            <?php }else{ ?>
                <option value="">-Seleccione-</option>
                             <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['b']->value['Id_estp'];?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value['Nom_estp'];?>
</option>
                             <?php } ?>
            <?php }?>            
            </select>
</div>
<div class="form-group">      
            <button  type="submit" class="btn btn-primary" style="margin: 5px" type="submit" value="Guardar" onclick='return cb(this);'>Guardar</button>            
</div>        
</form>
 <br/><br/><br/>
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
salidas/verquien/index/<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['idb']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/volver.gif" width="30" height="20" title="Volver"/></a></p>
</div><?php }} ?>