<?php /* Smarty version Smarty-3.1.11, created on 2018-04-18 18:30:14
         compiled from "/home/covecino/public_html/modules/info/views/encuesta/votar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13533648955ad78eb63c57c8-09599875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ea0957f481ba119472569605ba2981bde9c0f0d' => 
    array (
      0 => '/home/covecino/public_html/modules/info/views/encuesta/votar.tpl',
      1 => 1520225488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13533648955ad78eb63c57c8-09599875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'encuesta' => 0,
    'opciones' => 0,
    'encu' => 0,
    'ca' => 0,
    'estado' => 0,
    '_layoutParams' => 0,
    'reside' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5ad78eb6467f92_80880806',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad78eb6467f92_80880806')) {function content_5ad78eb6467f92_80880806($_smarty_tpl) {?><div class="container">
    <h3>Votar encuesta</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Enviar votación?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

    <div class="text-justify">
        <?php echo $_smarty_tpl->tpl_vars['encuesta']->value;?>

    </div>
    <br/>
    <div class="col-lg-4">
<?php if (isset($_smarty_tpl->tpl_vars['opciones']->value)&&count($_smarty_tpl->tpl_vars['opciones']->value)){?>
<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <input type="hidden" name="encu" value="<?php echo $_smarty_tpl->tpl_vars['encu']->value;?>
" />
    <table class="table">
        <thead>
        <th></th>
        <th style="text-align: center;">Archivo adjunto</th>
        </thead>
    <?php  $_smarty_tpl->tpl_vars['ca'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ca']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['opciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ca']->key => $_smarty_tpl->tpl_vars['ca']->value){
$_smarty_tpl->tpl_vars['ca']->_loop = true;
?>
        <tr>
            <td><label class="control-label"><input type="radio" name="voto" value="<?php echo $_smarty_tpl->tpl_vars['ca']->value['Id_iencu'];?>
" <?php if ($_smarty_tpl->tpl_vars['estado']->value==$_smarty_tpl->tpl_vars['ca']->value['Id_iencu']){?> checked="true" <?php }?> <?php if ($_smarty_tpl->tpl_vars['estado']->value!=0){?> disabled="disabled" <?php }?> /> <?php echo $_smarty_tpl->tpl_vars['ca']->value['Nom_iencu'];?>
</td> <td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/files/<?php echo $_smarty_tpl->tpl_vars['ca']->value['Adj_iencu'];?>
" target="_blank" class="btn btn-info btn-sm"><i title="Opciones" class="glyphicon glyphicon-download"></i></a></label></td>
        </tr>
    <?php } ?>
    </table>
    <?php if ($_smarty_tpl->tpl_vars['estado']->value==0){?>
    <div class="form-group">
        <?php if ($_smarty_tpl->tpl_vars['reside']->value==1){?><input type="submit" class="btn btn-small btn-primary" value="Votar" onclick='return cb(this);'/><?php }?>
    </div>
    <?php }else{ ?>
    <p><i title="Opciones" class="glyphicon glyphicon-ok-circle"></i> Votación realizada con éxito</p>
    <?php }?>
</form>
<?php }else{ ?>
    <p>La encuesta no posee aún opciones para votar.</p>
<?php }?>

    <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
info/encuesta"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>