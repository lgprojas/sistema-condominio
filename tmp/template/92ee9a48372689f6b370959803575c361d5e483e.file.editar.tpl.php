<?php /* Smarty version Smarty-3.1.11, created on 2015-06-14 01:13:57
         compiled from "C:\xampp\htdocs\vitritienda\modules\tienda\views\administrar\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:936454d3fa56146ad0-00959855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92ee9a48372689f6b370959803575c361d5e483e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitritienda\\modules\\tienda\\views\\administrar\\editar.tpl',
      1 => 1434237230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '936454d3fa56146ad0-00959855',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_54d3fa5639a484_47848309',
  'variables' => 
  array (
    'datos' => 0,
    'datos1' => 0,
    'cat' => 0,
    't' => 0,
    'tavi' => 0,
    'p' => 0,
    'eprod' => 0,
    'e' => 0,
    'eavi' => 0,
    'a' => 0,
    'iprod' => 0,
    'color' => 0,
    '_layoutParams' => 0,
    'datosimg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d3fa5639a484_47848309')) {function content_54d3fa5639a484_47848309($_smarty_tpl) {?><div class="container">
<h3>Editar producto: </h3>

    <script type="text/javascript">
    function cb(formObj) {
                if(confirm("¿Está seguro que desea modificar este producto?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function di(formObj) {
                if(confirm("Desea eliminar imagen?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    function si(formObj) {
                if(confirm("Desea subir las imágenes?")) {
                    return true;                     
                } else {
                    return false;
                }
            }
    </script>

<div class="col-lg-8">
<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <input type="hidden" name="cod" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_prod'];?>
" />
    <div class="form-group">
        <label class="control-label">Código *</label> 
        <input class="form-control" type="text" name="cod" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['cod'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Cod_prod'] : $tmp);?>
" placeholder="Ingrese código producto" disabled=""/>       
    </div>    
    <div class="form-group">
        <label class="control-label">Nombre *</label>  
        <input class="form-control" type="text" name="nom" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['nom'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Nom_prod'] : $tmp);?>
" placeholder="Ingrese nombre producto"/>       
    </div>
    <div class="form-group">
        <label class="control-label">Descripción *</label> 
        <input class="form-control" type="text" name="desc" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['desc'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Desc_prod'] : $tmp);?>
" placeholder="Ingrese descripción producto"/>       
    </div>
    <div class="form-group">
        <label class="control-label">Stock *</label>  
        <input class="form-control" type="text" name="stock" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['stock'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Stock_prod'] : $tmp);?>
" placeholder="Ingrese stock producto"/>       
    </div>
    <div class="form-group">
        <label class="control-label">Precio *</label> 
        <input class="form-control" type="text" name="precio" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos1']->value['precio'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['datos']->value['Preini_prod'] : $tmp);?>
" placeholder="Ingrese precio producto"/>       
    </div>
    <div class="form-group">
        <label class="control-label">Categoría:</label>
            <select class="form-control" name="cat" id="cat">

                <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_tprod']!=0){?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_tprod'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_tprod'];?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['t']->value['Id_tprod']!=$_smarty_tpl->tpl_vars['datos']->value['Id_tprod']){?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['Id_tprod'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['Nom_tprod'];?>
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
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['Id_tprod'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['Nom_tprod'];?>
</option>
                                 <?php } ?>
                <?php }?>
             </select>            
        </div>       
             
    <div class="form-group">
        <label class="control-label">Tipo aviso:</label>
        <select class="form-control" name="tavi" id="tavi">

            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_taviso']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_taviso'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_taviso'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tavi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['p']->value['Id_taviso']!=$_smarty_tpl->tpl_vars['datos']->value['Id_taviso']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['Id_taviso'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['Nom_taviso'];?>
</option>
                    <?php }?>
                <?php } ?>
            <?php }else{ ?>
                <option value="">-Seleccione-</option>
                             <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tavi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['Id_taviso'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['Nom_taviso'];?>
</option>
                             <?php } ?>
            <?php }?>           
          </select>
      </div>       
   <div class="form-group">
        <label class="control-label">Estado producto:</label>
        <select class="form-control" name="eprod" id="eprod">

            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_eprod']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_eprod'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_eprod'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eprod']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['e']->value['Id_eprod']!=$_smarty_tpl->tpl_vars['datos']->value['Id_eprod']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value['Id_eprod'];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['Nom_eprod'];?>
</option>
                    <?php }?>
                <?php } ?>
            <?php }else{ ?>
                <option value="">-Seleccione-</option>
                             <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eprod']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value['Id_eprod'];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['Nom_eprod'];?>
</option>
                             <?php } ?>
            <?php }?>            
         </select>
    </div>      
    <div class="form-group">
        <label class="control-label">Estado publicación:</label>
        <select class="form-control" name="eavi" id="eavi">

            <?php if ($_smarty_tpl->tpl_vars['datos']->value['Id_eaviso']!=0){?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Id_eaviso'];?>
"><?php echo $_smarty_tpl->tpl_vars['datos']->value['Nom_eaviso'];?>
</option>
                <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eavi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['a']->value['Id_eaviso']!=$_smarty_tpl->tpl_vars['datos']->value['Id_eaviso']){?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['Id_eaviso'];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['Nom_eaviso'];?>
</option>
                    <?php }?>
                <?php } ?>
            <?php }else{ ?>
                <option value="">-Seleccione-</option>
                             <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eavi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['Id_eaviso'];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['Nom_eaviso'];?>
</option>
                             <?php } ?>
            <?php }?>            
         </select>
    </div> 
 <br/>
    <input id="newcli" class="btn btn-small btn-primary" type="submit" value="Guardar" onclick='return cb(this);'/>

</form>         
 <br/>         
 <div class="form-horizontal well">        
  <fieldset>
    <legend>Imágenes</legend>
    <form name="form2" enctype="multipart/form-data" method="post">
        <input type="hidden" name="subirimg" value="1" />
        <input type="hidden" name="codprod" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_prod'];?>
" />
        <div class="form-horizontal well">
            <input type="file" name="img[]"/>
            <input type="file" name="img[]"/>
            <input type="file" name="img[]"/>
            <br/>
             <input id="newimg" class="btn btn-small btn-primary" type="submit" value="Subir imagen" onclick='return si(this);'/>    
        </div>
    </form> 
<?php if (isset($_smarty_tpl->tpl_vars['iprod']->value)&&count($_smarty_tpl->tpl_vars['iprod']->value)){?>
<?php  $_smarty_tpl->tpl_vars['datosimg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datosimg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['iprod']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datosimg']->key => $_smarty_tpl->tpl_vars['datosimg']->value){
$_smarty_tpl->tpl_vars['datosimg']->_loop = true;
?>
    
    <div class="producto" style="background:<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
" onmouseover=style.background="#F0F8FF" onmouseout=style.background="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
        <div class="imagen_ext">
            <div class="imagen_inter">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagestienda/originales/thumbs/thumb_m_<?php echo $_smarty_tpl->tpl_vars['datosimg']->value['Nom_img'];?>
"/>             
                    
            </div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tienda/administrar/delImageProd/<?php echo $_smarty_tpl->tpl_vars['datosimg']->value['Id_img'];?>
/<?php echo $_smarty_tpl->tpl_vars['datos']->value['Cod_prod'];?>
/<?php echo $_smarty_tpl->tpl_vars['datosimg']->value['Nom_img'];?>
" onclick='return di(this);'>
                    <i title="eliminar" class="glyphicon glyphicon-trash"> </i>
                </a>
        </div>

    </div>
<?php } ?>
<?php }else{ ?>
            <p><strong>No posee imagen</strong></p>
<?php }?> 
    </fieldset>
 </div>
    
         <br/>
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tienda/administrar"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/all/volver.gif" width="30" height="20" title="Volver"/></a></p>
</div>
</div><?php }} ?>