<?php /* Smarty version Smarty-3.1.11, created on 2017-05-28 00:08:03
         compiled from "C:\xampp\htdocs\munku\modules\ref\views\scat\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1143858ec22e69eaa29-81155995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '607b4e79e985b12238832979272f2fd50e4a02f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\modules\\ref\\views\\scat\\editar.tpl',
      1 => 1493053545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1143858ec22e69eaa29-81155995',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_58ec22e6b8c476_58211898',
  'variables' => 
  array (
    'datos' => 0,
    '_layoutParams' => 0,
    'cat' => 0,
    't' => 0,
    'ico' => 0,
    'i' => 0,
    'idcat' => 0,
    'nomcat' => 0,
    'idps' => 0,
    'nomps' => 0,
    'ps' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ec22e6b8c476_58211898')) {function content_58ec22e6b8c476_58211898($_smarty_tpl) {?><div class="container">
<h3>Editar subcategoría</h3>
<h4><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_subcat'];?>
 <?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Nom_ico'])){?><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/icon/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_ico'];?>
.png" width="18" height="18"/><?php }else{ ?><i class="glyphicon glyphicon-picture"></i><?php }?></h4>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar esta subcategoría?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <div class="form-horizontal col-lg-3 small">
        <label class="control-label">Categoría:</label>
            <select class="form-control" name="cat" id="">

                <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_cat']!=0){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_cat'];?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['t']->value['Id_cat']!=$_smarty_tpl->tpl_vars['datos']->value['Id_cat']){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['Id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['Nom_cat'];?>
</option>
                        <?php }?>
                    <?php } ?>
                <?php }else{ ?>
                    <option value="">-Seleccione-</option>
                                 <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['Id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['Nom_cat'];?>
</option>
                                 <?php } ?>
                <?php }?>
             </select>            
        <label class="control-label">Cód:</label>
        <input class="form-control" type="text" name="cod" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Cod_subcat'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_subcat'];?>
<?php }?>" disabled="disabled"/>
       
        <label class="control-label">Nombre subcategoría:</label>
        <input class="form-control" type="text" name="scat" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['Nom_subcat'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_subcat'];?>
<?php }?>" placeholder="Ingrese subcategoría"/>
        
        <label class="control-label">Icono:</label>
            <select class="form-control" name="ico" id="ico">

                <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_ico']!=0){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_ico'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_ico'];?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ico']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['i']->value['Id_ico']!=$_smarty_tpl->tpl_vars['datos']->value['Id_ico']){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['Id_ico'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['Nom_ico'];?>
</option>
                        <?php }?>
                    <?php } ?>
                <?php }else{ ?>
                    <option value="">-Seleccione-</option>
                                 <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ico']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['Id_ico'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['Nom_ico'];?>
</option>
                                 <?php } ?>
                <?php }?>
             </select>
        <fieldset>
            <legend>Subcategoría especial</legend>
            <div class="form-horizontal well col-lg-12 small">
                <label class="control-label">Categoría:</label>
                <select class="form-control" name="" id="cat">
                    <?php if ($_smarty_tpl->tpl_vars['idcat']->value!=0){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['idcat']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['nomcat']->value;?>
</option>
                        <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['t']->value['Id_cat']!=$_smarty_tpl->tpl_vars['idcat']->value){?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['Id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['Nom_cat'];?>
</option>
                            <?php }?>
                        <?php } ?>
                    <?php }else{ ?>
                        <option value="">-Seleccione-</option>
                                     <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['Id_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['Nom_cat'];?>
</option>
                                     <?php } ?>
                    <?php }?>
                 </select>            
                <label class="control-label">Producto/servicio:</label>
                <select class="form-control" name="ps" id="ps">
                    <?php if ($_smarty_tpl->tpl_vars['idps']->value!=0){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['idps']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['nomps']->value;?>
</option>
                        <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['c']->value['Id_ps']!=$_smarty_tpl->tpl_vars['idps']->value){?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_ps'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_ps'];?>
</option>
                            <?php }?>
                        <?php } ?>
                    <?php }else{ ?>
                        <option value="">-Seleccione-</option>
                         <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['Id_ps'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom_ps'];?>
</option>
                         <?php } ?>
                    <?php }?>
                 </select>
            </div>
        </fieldset>
        <br/>
    <button type="submit" class="btn btn-small btn-primary" onclick='return cb(this);'>Editar</button>
</form>
         <br/><br/>
         <p><a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
ref/scat"><i class="glyphicon glyphicon-chevron-left">Volver</i></a></p>
</div>
</div><?php }} ?>