<?php /* Smarty version Smarty-3.1.11, created on 2023-08-16 15:05:12
         compiled from "C:\xampp\htdocs\condominio\modules\info\views\index\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68339148764dd1de860b3f7-23747914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04902f984ff83444b4269f6cf4f65fe5899c6e3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\condominio\\modules\\info\\views\\index\\nuevo.tpl',
      1 => 1526509637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68339148764dd1de860b3f7-23747914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sadmin' => 0,
    'cond' => 0,
    'ps' => 0,
    'co' => 0,
    'datos' => 0,
    '_acl' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_64dd1de869e077_72501285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64dd1de869e077_72501285')) {function content_64dd1de869e077_72501285($_smarty_tpl) {?><div class="container">
<h3>Nuevo Informativo</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea crear este nuevo Informativo?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<div class="form-horizontal col-lg-3 small">
<form name="form1" method="post" enctype="multipart/form-data">
    <input type="hidden" value="1" name="guardar" />
    <?php if ($_smarty_tpl->tpl_vars['sadmin']->value==1){?>
        <div class="form-group">
        <label class="control-label">Condominio:</label>
        <select id="co" name="co" class="form-control">
            <option value=""> - seleccione condominio - </option>
            <?php  $_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ps']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cond']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->key => $_smarty_tpl->tpl_vars['ps']->value){
$_smarty_tpl->tpl_vars['ps']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['ps']->value['Id_cond'];?>
"><?php echo $_smarty_tpl->tpl_vars['ps']->value['Nom_cond'];?>
</option>
            <?php } ?>
        </select>
        </div>
    <?php }else{ ?>
        <input type="hidden" name="co" id="co" value="<?php echo $_smarty_tpl->tpl_vars['co']->value;?>
" />
    <?php }?>
        <label class="control-label">Título:</label>  
         <input class="form-control" type="text" name="nom" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nom'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese título informativo"/>       
         <label class="control-label">Descripción:</label>  
         <textarea class="form-control" name="desc" cols="3" rows="6" placeholder="Ingrese información"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['desc'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
         <label class="control-label">Fch. creación: </label><input data-role="date" data-inline="true" id="datepicker1" name="fchc" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['fchc'])===null||$tmp==='' ? '' : $tmp);?>
" readonly="readonly" style="width: 100px;margin: 15px;" placeholder="00-00-0000" class="form-control input-sm"/>        
         <label class="control-label">Fch. finalización: </label><input data-role="date" data-inline="true" id="datepicker2" name="fchf" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['fchf'])===null||$tmp==='' ? '' : $tmp);?>
" readonly="readonly" style="width: 100px;margin: 15px;" placeholder="00-00-0000" class="form-control input-sm"/>    
         <label for="archivo">Archivo: </label>
         <input type="file" name="archivo" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['archivo'])===null||$tmp==='' ? '' : $tmp);?>
" class="btn btn-default"/>
        <br/>
    <p>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('crear_info')){?>
        <input class="btn btn-small btn-primary" type="submit" value="Crear" onclick='return cb(this);'/>
        <?php }?>
    </p>
</form>
        <br/>
        <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
info/"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>