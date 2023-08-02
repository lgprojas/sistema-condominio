<?php /* Smarty version Smarty-3.1.11, created on 2017-06-08 13:41:27
         compiled from "C:\xampp\htdocs\munku\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4570566b545c64b918-23985153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b33ae375341abc3252cffe8e1e3390ecdf75d29e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\munku\\views\\index\\index.tpl',
      1 => 1496892572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4570566b545c64b918-23985153',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_566b545c693da8_89384688',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566b545c693da8_89384688')) {function content_566b545c693da8_89384688($_smarty_tpl) {?>    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
      
@media (max-width: 480px) {
.title {
     font-size: 1.4em !important;
}
#uno {
 background-image: url('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagesLugar/slideshow/uno-480px.jpg');
 background-repeat: no-repeat;
 width:auto !important;
 height:500px;
 position:relative;
}
#dos {
 background-image: url('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagesLugar/slideshow/dos-480px.jpg');
 background-repeat: no-repeat;
 width:auto !important;
 height:500px;
 position:relative;
}
#tres {
 background-image: url('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagesLugar/slideshow/tres-480px.jpg');
 background-repeat: no-repeat;
 width:auto !important;
 height:500px;
 position:relative;
}
}
@media only screen and (min-width: 480px) and (max-width: 768px){
.title {
	font-size: 50px;
}
#uno {
 background: url('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagesLugar/slideshow/uno-768px.jpg');
 background-repeat: no-repeat;
 background-size: 100% 100%;
 height:500px;
 position:relative;
}
#dos {
 background: url('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagesLugar/slideshow/dos-768px.jpg');
 background-repeat: no-repeat;
 width:auto !important;
 height:500px;
 position:relative;
}
#tres {
 background: url('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagesLugar/slideshow/tres-768px.jpg');
 background-repeat: no-repeat;
 width:auto !important;
 height:500px;
 position:relative;
}
}
@media (min-width: 768px){
.title {
	font-size: 50px;
}
#uno {
 background: url('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagesLugar/slideshow/uno.jpg');
 background-repeat: no-repeat;
 background-size: 100% 100%;
 height:500px;
 position:relative;
}
#dos {
 background: url('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagesLugar/slideshow/dos.jpg');
 background-repeat: no-repeat;
 background-size: 100% 100%;
 height:500px;
 position:relative;
}
#tres {
 background: url('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagesLugar/slideshow/tres.jpg');
 background-repeat: no-repeat;
 background-size: 100% 100%;
 height:500px;
 position:relative;
}
}

    </style>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">        
          <div id="uno">
          <div class="container">
            <div class="carousel-caption">
                <div class="title">Buscador Walki</div>
              <p>Realiza busquedas sectorizadas con WALKI, una herramienta para facilitar nuestras busquedas y conocer otras opciones turísticas - comerciales.</p>
              <p><a class="btn btn-sm btn-lg btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
maps/index" role="button">Comenzar</a></p>
            </div>
          </div>
          </div>
        </div>
        <div class="item">
          <div id="dos">
          <div class="container">
            <div class="carousel-caption">
            <div class="title">Descubre aún más</div>
              <p>WALKI tiene por misión disponer nuevos lugares por visitar y encantar aún más al turista aventurero.</p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lugar/nosotros/nuestraMision" role="button">Leer más..</a></p>
            </div>
          </div>
          </div>
        </div>
        <div class="item">
          <div id="tres">
          <div class="container">
            <div class="carousel-caption">
              <div class="title">Servicio de búsqueda avanzada.</div>
              <p>Nuestro servicio cuenta con información relevante de nuevos lugares a nuestro alrededor y así facilitar aún más la vida de nuestros usuarios.</p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
lugar/nosotros/productoServicio" role="button">Nuestros servicios</a></p>
            </div>
          </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div><!-- /.carousel -->   <?php }} ?>