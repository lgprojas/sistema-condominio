<?php /* Smarty version Smarty-3.1.11, created on 2015-07-25 17:15:24
         compiled from "C:\xampp\htdocs\vitricasas\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1815155b3a80ceacbb6-90014021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15fd62eb011755731786d724f0a17f7502989af0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vitricasas\\views\\index\\index.tpl',
      1 => 1437449827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1815155b3a80ceacbb6-90014021',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'level' => 0,
    'id' => 0,
    'nombre' => 0,
    'usuario' => 0,
    'rut_usu' => 0,
    'id_bib' => 0,
    'tiempo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_55b3a80cf36da1_47154413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b3a80cf36da1_47154413')) {function content_55b3a80cf36da1_47154413($_smarty_tpl) {?>    <style type="text/css">
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
          <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagestienda/slideshow/work.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Tienda virtual en construcción.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagestienda/slideshow/nature.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Muy pronto nuestro nuevo sitio.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagestienda/slideshow/biking.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Servicio de vitrina Web.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
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
    </div><!-- /.carousel -->
    
      <div class="col-xs-8">

          <section id="miSlide" class="carousel slide">
              <ol class="carousel-indicators">
                  <li data-target="#miSlide" data-slide-to="0" class="active"></li>
                  <li data-target="#miSlide" data-slide-to="1"></li>             
              </ol>
              
              <div class="carousel-inner">
                  <div class="item active">
                      <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagestienda/slideshow/slide1.jpg" alt="">
                  </div>
                  <div class="item">
                      <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/imagestienda/slideshow/slide2.jpg" alt="">
                  </div>
              </div>
                  <a href="#miSlide" class="left carousel-control" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a href="#miSlide" class="right carousel-control" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
          </section>
      </div>   
      
      <div class="col-xs-4">
      <div class="jumbotron">
          <div class="h2">VITRITienda</div>
        <p class="lead">Aplicación desarrollada como vitrina de productos</p>
        <a class="btn btn-large btn-success" href="#">Visitanos!</a>
      </div>
      
      <div>
          
      </div>
      </div>
                  
      <hr> 
      <div class="col-lg-12">
      <div class="h3">Bienvenido:</div>
        Level: <?php echo $_smarty_tpl->tpl_vars['level']->value;?>
<br/>
        Id: <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<br/>
        Nombre: <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
<br/>
        Usuario: <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
<br/>
        RUT: <?php echo $_smarty_tpl->tpl_vars['rut_usu']->value;?>
<br/>
        Biblioteca: <?php echo $_smarty_tpl->tpl_vars['id_bib']->value;?>
<br/>
        Tiempo: <?php echo $_smarty_tpl->tpl_vars['tiempo']->value;?>
<br/>
      </div>
      


<?php }} ?>