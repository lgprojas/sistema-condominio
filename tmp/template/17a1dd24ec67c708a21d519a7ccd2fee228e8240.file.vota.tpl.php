<?php /* Smarty version Smarty-3.1.11, created on 2018-02-22 21:26:43
         compiled from "C:\xampp\htdocs\covecino\modules\encuesta\views\index\vota.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138775a8ef7ce0bae30-56420997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17a1dd24ec67c708a21d519a7ccd2fee228e8240' => 
    array (
      0 => 'C:\\xampp\\htdocs\\covecino\\modules\\encuesta\\views\\index\\vota.tpl',
      1 => 1519331196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138775a8ef7ce0bae30-56420997',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a8ef7ce22a1f5_92499327',
  'variables' => 
  array (
    'encuesta' => 0,
    'opciones' => 0,
    'ca' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8ef7ce22a1f5_92499327')) {function content_5a8ef7ce22a1f5_92499327($_smarty_tpl) {?><div class="container">
    <h3>Resultado votación</h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Enviar votación?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<div class="col-md-4">
    <div class="text-justify">
        <?php echo $_smarty_tpl->tpl_vars['encuesta']->value;?>

    </div>
    <br/>
    <table class="table form-group">
        <thead>
        <th style="text-align: center;">Votos</th>
        <th style="text-align: center;">Opciones</th>
        <th style="text-align: center;">Archivo adjunto</th>
        </thead>
        <tbody>
<?php if (isset($_smarty_tpl->tpl_vars['opciones']->value)&&count($_smarty_tpl->tpl_vars['opciones']->value)){?>
    <?php  $_smarty_tpl->tpl_vars['ca'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ca']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['opciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ca']->key => $_smarty_tpl->tpl_vars['ca']->value){
$_smarty_tpl->tpl_vars['ca']->_loop = true;
?>
        <tr>
            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['ca']->value['Total_iencu'];?>
</label></td>
            <td><?php echo $_smarty_tpl->tpl_vars['ca']->value['Nom_iencu'];?>
</td>
            <td style="text-align: center;"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/files/<?php echo $_smarty_tpl->tpl_vars['ca']->value['Adj_iencu'];?>
" target="_blank" class="btn btn-info btn-sm"><i title="Archivo adjunto" class="glyphicon glyphicon-download"></i></a></td>
        </tr>
    <?php } ?>
        </tbody>
    </table>
<?php }?>
<br/>
<div class="col-md-4">
    <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuesta/index"><i title="Volver" class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div>
</div><?php }} ?>