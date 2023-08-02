<?php /* Smarty version Smarty-3.1.11, created on 2014-06-11 17:47:46
         compiled from "C:\xampp\htdocs\scp_vm\modules\salidas\views\resperif\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:224225383707d68e120-10430381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe7bb2bf22e3ffef11fce73c6f4f011ffa8904db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\scp_vm\\modules\\salidas\\views\\resperif\\index.tpl',
      1 => 1402501658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '224225383707d68e120-10430381',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5383707d7016e3_43428366',
  'variables' => 
  array (
    'date' => 0,
    'idb' => 0,
    'bib' => 0,
    'b' => 0,
    'rese' => 0,
    'color' => 0,
    'datos' => 0,
    'paginacion1' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5383707d7016e3_43428366')) {function content_5383707d7016e3_43428366($_smarty_tpl) {?><div id="content">
<h3>Reservas</h3>
<h4><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['idb']->value['Nom_block'];?>
</h4>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea reservar este periférico?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<br/>

<form name="form1" method="post">
    <input type="hidden" name="guardar" value="1" />
<div class="col-lg-1">
    <label class="control-label" style="margin: 5px">Biblioteca: </label>
</div>
<div class="col-lg-3">
    <input type="hidden" name="idb" id="idb" value="<?php echo $_smarty_tpl->tpl_vars['idb']->value['Id_block'];?>
" />
    <input type="hidden" id="date" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
" />
    
    <input type="hidden" name="guardar" value="1" />
    <select name="bib" id="bib" class="form-control" style="margin: 5px">  
                    <option value="">-Seleccione-</option>
                    <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bib']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['b']->value['Id_bib'];?>
"><?php echo $_smarty_tpl->tpl_vars['b']->value['Nom_bib'];?>
</option>
                    <?php } ?>
    </select>
</div>
<div class="col-lg-1">
    <label class="control-label" style="margin: 5px">Periférico: </label>
</div>
<div class="col-lg-3">
    <select name="prod" id="prod" class="form-control" style="margin: 5px">  
    </select>
</div>
<div class="form-group">
    <button  type="submit" id="btn_insertar" class="btn btn-primary" style="margin: 5px" onclick='return cb(this);'>Reservar</button>
</div>
</form> 
<br/><br/>

<?php if (isset($_smarty_tpl->tpl_vars['rese']->value)&&count($_smarty_tpl->tpl_vars['rese']->value)){?>
<table class="table table-bordered">
    <thead>
        <th colspan="10" style="background: #E6E6FA; text-align: center;">Lista reservas</th>
    </thead>
    <thead style="background: #E6E6FA;">
        <td style="font-weight:bold;text-align: center;">Nombre</td>
        <td style="font-weight:bold;text-align: center;">Estado</td>
    </thead>
<?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rese']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['color']->value=="#F5FFFA"){?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("none", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("#F5FFFA", null, 0);?><?php }?>
    <tr id="list" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_prod'];?>
</td>
        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_estp'];?>
</td>
    </tr>

<?php } ?>
</table>
<?php }else{ ?>
            <p><strong>No hay periféricos reservados!</strong></p>
<?php }?> 

<?php if (isset($_smarty_tpl->tpl_vars['paginacion1']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion1']->value;?>
   <?php }?> 
<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
salidas/block/index/<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/volver.gif" width="30" height="20" title="Volver"/></a>
</div>
<?php }} ?>