<?php /* Smarty version Smarty-3.1.11, created on 2015-05-23 19:01:59
         compiled from "C:\xampp\htdocs\vitritienda\modules\stock\views\index\nuevo_ing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6151555f78956943d7-96843191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef7ee9597c1db5bed2b7efc677f2a4b76c2e71aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitritienda\\modules\\stock\\views\\index\\nuevo_ing.tpl',
      1 => 1432400512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6151555f78956943d7-96843191',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_555f78958bb189_89937247',
  'variables' => 
  array (
    'ulting' => 0,
    'fecha' => 0,
    'datos' => 0,
    'ting' => 0,
    't' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555f78958bb189_89937247')) {function content_555f78958bb189_89937247($_smarty_tpl) {?><div class="container">
<h3>Nuevo ingreso a stock</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Desea crear ingreso Nª: <?php echo $_smarty_tpl->tpl_vars['ulting']->value['Id_ing']+1;?>
 ?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<div class="col-md-4">
<form name="form1" action="" method="post">
    <input type="hidden" name="guardar" value="1" />   
        <div class="form-group">
            <label class="control-label">Fecha: </label> <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>

        </div>
        <div class="form-group">
            <label class="control-label">Ingreso a stock N°: </label> <?php echo $_smarty_tpl->tpl_vars['ulting']->value['Id_ing']+1;?>

        </div>
        <div class="form-group">
            <label class="control-label">Nº Guía </label><input type="text" name="guia" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['guia'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Ingrese N° Guía o Boleta" class="form-control"/>
        </div>
        <div class="form-group">
            <label class="control-label">Tipo ingreso: </label>
            <select name="ting" class="form-control">  
                <option value="">-Seleccione-</option>
                <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ting']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>               
                    <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['Id_ting'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['Nom_ting'];?>
</option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label class="control-label">Comentario: </label><textarea class="form-control" name="com" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['guia'])===null||$tmp==='' ? '' : $tmp);?>
"></textarea></p>
        </div>
        <div>
           <input type="submit" value="Crear" class="btn btn-primary" onclick='return cb(this);'/>
        </div>
</form>
       <br />
    <p>(*) Obligatorio</p>
        <br/>
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ingstock"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/volver.gif" width="30" height="20" title="Volver"/></a></p>
</div>
 </div>
<?php }} ?>