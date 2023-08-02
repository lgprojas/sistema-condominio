<?php /* Smarty version Smarty-3.1.11, created on 2018-05-16 20:12:47
         compiled from "C:\xampp\htdocs\covecino\modules\info\views\index\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98375aadcc2bb65647-99559669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16517f2323158f37d896bed3cc232c287f12114d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\info\\views\\index\\editar.tpl',
      1 => 1526512360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98375aadcc2bb65647-99559669',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5aadcc2bbc9e92_76749186',
  'variables' => 
  array (
    'datos' => 0,
    'sadmin' => 0,
    'cond' => 0,
    'co' => 0,
    'datos1' => 0,
    '_acl' => 0,
    'Id_encrypt' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aadcc2bbc9e92_76749186')) {function content_5aadcc2bbc9e92_76749186($_smarty_tpl) {?><div class="container">
<h3>Editar Informativo</h3>
<h4><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_info'];?>
</h4>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar este informativo?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function df(formObj) {
                if(confirm("¿Desea quitar este archivo del informativo?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function sf(formObj) {
                if(confirm("¿Desea agregar el archivo al informativo?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<div class="col-lg-6">
<form name="form1" method="post">
    <input type="hidden" name="guardar" value="1" />
    <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?>
    <div class="form-group">
        <label class="control-label">Condominio:</label>
        <select  name="co" id="co" class="form-control">
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
    <?php }else{ ?>
        <input type="hidden" name="co" id="co" value="<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
" />
    <?php }?>
        <label class="control-label">Título:</label>
        <input class="form-control" type="text" name="nom" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Nom_info'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_info'];?>
<?php }?>" placeholder="Ingrese título informativo"/>
        <label class="control-label">Descripción:</label>
        <textarea class="form-control" name="desc" cols="3" rows="6" placeholder="Ingrese información"><?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Desc_info'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Desc_info'];?>
<?php }?></textarea>
        <label class="control-label">Fch. creación: </label><input data-role="date" data-inline="true" id="datepicker1" name="fchc" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['fchc'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Fch_cinfo'] : $tmp);?>
" readonly="readonly" style="width: 100px;margin: 15px;" placeholder="00-00-0000" class="form-control input-sm"/>        
        <label class="control-label">Fch. finalización: </label><input data-role="date" data-inline="true" id="datepicker2" name="fchf" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['fchf'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Fch_tinfo'] : $tmp);?>
" readonly="readonly" style="width: 100px;margin: 15px;" placeholder="00-00-0000" class="form-control input-sm"/>         
    <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_info')){?>
        <input class="btn btn-small btn-primary" type="submit" value="Editar" onclick='return cb(this);'/>
    <?php }?>
</form>
<br>
<hr>
 <div class="form-horizontal well small col-lg-12">        
  <fieldset>
    <legend>Archivo adjunto</legend>
    <?php if (count($_smarty_tpl->tpl_vars['datos']->value['Adj_info'])==0){?>
        <p>No posee archivo.</p>
        <form name="form1" method="post" enctype="multipart/form-data">
        <input type="hidden" name="subirfile" value="1" />
        <input type="hidden" name="inf" value="<?php echo $_smarty_tpl->tpl_vars['Id_encrypt']->value;?>
" />
        <input type="file" name="archivo" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['archivo'])===null||$tmp==='' ? '' : $tmp);?>
" class="btn btn-default form-control" style="padding-bottom:40px;"/>
        <br>
        <input class="btn btn-small btn-primary" type="submit" value="Agregar" onclick='return sf(this);'/>
        </form>
    <?php }else{ ?>
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/files/file_informativos/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Adj_info'];?>
" target="_blank" class="btn btn-success btn-sm" style="margin:2px;"><i title="Archivo adjunto" class="glyphicon glyphicon-floppy-disk"></i> <?php echo $_smarty_tpl->tpl_vars['datos']->value['Adj_info'];?>
</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
info/index/delFileInfo/<?php echo $_smarty_tpl->tpl_vars['Id_encrypt']->value;?>
" class="btn btn-danger btn-sm" onclick='return df(this);' style="margin:2px;">
                    <i title="Archivo adjunto" class="glyphicon glyphicon-floppy-remove"></i>
        </a></p>
    <?php }?>
   </fieldset>
</div>
<div class="clearfix"></div>
<br/>
<br/>
<br/>
<p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
info/"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>