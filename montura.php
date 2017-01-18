<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
   <title>Monturas en Lima - Comprar Montura</title>
  <meta name="Keywords" content="Monturas en Lima, lentes solares, anteojos ópticos, tratamientos ópticos, lentes de contacto, lentes de contacto con medida, promociones, los olivos, Lima, Monturas en Lima, lentes solares, anteojos ópticos, tratamientos ópticos, lentes de contacto, lentes de contacto con medida, promociones, los olivos, Lima, Monturas en Lima, lentes solares, anteojos ópticos, tratamientos ópticos, lentes de contacto, lentes de contacto con medida, promociones, los olivos, Lima, Monturas en Lima, lentes solares, anteojos ópticos, tratamientos ópticos, lentes de contacto, lentes de contacto con medida, promociones, los olivos, Lima, Monturas en Lima, lentes solares, anteojos ópticos, tratamientos ópticos, lentes de contacto, lentes de contacto con medida, promociones, los olivos, Lima, ">
  <meta name="Description" content="Monturas en Lima a precios más bajos del mercado más resinas UV totalmente gratis! aproveche esta promoción completisima e insuperable, válida en cualquiera nuestras marcas: GUESS, CONVERSE, ENGLISH LAUNDRY, RAYBAN, PUMA, NIKE. Venga a http://opticasalome.com/">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="vendor/rs-plugin/css/settings.css" media="screen"/>
  <link rel="stylesheet" href="vendor/rs-plugin/css/extralayer.css">
  <link rel="stylesheet" href="vendor/flat-icon/flaticon.css">
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="vendor/owl/css/owl.carousel.css">
  <link rel="stylesheet" href="vendor/owl/css/owl.theme.default.css">
  <link rel="stylesheet" href="vendor/owl/css/owl.theme.css">
  <link type="text/css" rel="stylesheet" href="vendor/mmenu/css/jquery.mmenu.css" />
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/hover.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')
</script>
<![endif]-->
</head>
<?php include("inc/products.php");

if (isset($_GET["id"])) {
  $product_id = $_GET["id"];
  if (isset($products[$product_id])) {
    $product = $products[$product_id];
  }
}

if (isset($_GET["id"])) {
  $product_id = $_GET["id"];
  if (isset($products2[$product_id])) {
    $product = $products2[$product_id];
  }
}
if (!isset($product)) {
  header("Location: monturas.php");
  exit();
}

$section = "shirts";
$pageTitle = $product["name"];

?>
<body>
  <div class="loader"></div>
  <!--div class="main" id="home">
      <div class="tp-banner-container">
      <div class="tp-banner">
        <ul>
<li class="items" data-transition="slideleft" data-slotamount="1" data-masterspeed="1500" data-thumb="img/slider/slider_img_02.jpg" data-delay="13000"  data-saveperformance="on">

  <img src="img/slider/slider_img_02.jpg"  alt="Monturas en Lima"  data-bgposition="left center" data-kenburns="on" data-duration="14000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="130" data-bgpositionend="right center">
  


  
  <div class="tp-caption very_large_text lfb ltt tp-resizeme head-tag"
  data-x="left" data-hoffset="20"
  data-y="center" data-voffset="-100" 
  data-speed="600"
  data-start="500"
  data-easing="Power3.easeInOut"
  data-splitin="chars"
  data-splitout="chars"
  data-elementdelay="0.08"
  style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
  <h1><span>LO MEJOR</span> EN MARCAS DE LENTES SOLARES</h1>
</div>


<div class=" tp-caption  lfl tp-resizeme"
data-x="-100"
data-y="340"
data-speed="500"
data-start="1500"
data-easing="Power3.easeOut"
data-splitin="none"
data-splitout="none"
data-elementdelay="0.05"
data-endelementdelay="0.1"
data-endspeed="500"
style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
<h2 class="small-title">RayBan</h2>
</div>


<div class="tp-caption  lfl tp-resizeme"
data-x="-100"
data-y="400"
data-speed="1000"
data-start="2000"
data-easing="Power3.easeOut"
data-splitin="none"
data-splitout="none"
data-elementdelay="0.05"
data-endelementdelay="0.1"
data-endspeed="500"
data-endeasing="Power4.easeIn"
style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
<h2  class="small-title">Oakley</h2>
</div>


<div class="tp-caption  lfl tp-resizeme"
data-x="-100"
data-y="460"
data-speed="2000"
data-start="2500"
data-easing="Power3.easeOut"
data-splitin="none"
data-splitout="none"
data-elementdelay="0.05"
data-endelementdelay="0.1"
data-endspeed="500"
data-endeasing="Power4.easeIn"
style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
<h2 class="small-title" > Converse</h2>
</div>

<div class="tp-caption  lfl tp-resizeme"
data-x="-100"
data-y="520"
data-speed="3000"
data-start="3000"
data-easing="Power3.easeOut"
data-splitin="none"
data-splitout="none"
data-elementdelay="0.05"
data-endelementdelay="0.1"
data-endspeed="500"
data-endeasing="Power4.easeIn"
style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
<h2 class="small-title" > English</h2>
</div>

<div class="tp-caption lfr tp-resizeme"
data-x="right" data-hoffset="100"
data-y="bottom" data-voffset="-90" 
data-speed="3000"
data-start="4000"
data-easing="Power3.easeOut"
data-splitin="none"
data-splitout="none"
data-elementdelay="0.05"
data-endelementdelay="0.1"
data-endspeed="500"
data-endeasing="Power4.easeIn"
style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
<button type="button" class="btn btn-default buy-btn">comprar ahora</button>
</div>
</li>
</ul>
</div>
</div-->


    <!-- slider -->
<header  class="header-part">
  <div id="home" class="wrapper">
    <!-- Fixed navbar -->
    <div class="navi navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header page-scroll">
          <a href="#menu">
            <button type="button" data-effect="st-effect-1" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </a>
          <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Monturas en Lima"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse pull-right hidden-xs">
          <ul class="nav navbar-nav navbar-right">
            <li ><a class="page-scroll" href="index.html">Inicio</a></li>
              <li><a class="page-scroll" href="monturas.php">Catálogo</a></li>
              </ul>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div><!-- End of Nav -->
</div>
</header>
<div class="container">
  <div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="detailBreadcrumb">
	   <div class="breadcrumbs lfloat"><a href="monturas.php">Monturas</a> &gt; <?php echo $product["name"]; ?></div>
	   </div>
	   </div>
	   </div>
      </div>
<div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="featprodcs_img wow zoomIn col-xs-12 col-md-6 animated" style="visibility: visible; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
              <div class="shirt-picture"><img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
			  </div>
            </div>
          </div>
		   <div class="col-lg-6 col-md-6">
                <div class="contact_right2 wow zoomIn col-xs-12 col-md-6 animated">
                <div id="form-messages"></div>
                  <!--form class="footer_form" id="data" action="form.php" method="post" enctype="multipart/form-data"-->
                  <div class="footer_form" id="contact_form">
                    <div id="contact_results"></div>
                    <div id="contact_body">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                        <h1><span class="price">S/.<?php echo $product["price"]; ?></span> <?php echo $product["name"]; ?>
                          <input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                        <input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>">
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                        <input type="hidden" name="on0" class="form-group" value="Size">
								<label class="os0">Color :</label>
                        </div>
                      </div>
                       <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                        <select name="os0" id="exampleSelectColor" class="select">
									<?php foreach($product["sizes"] as $size) { ?>
									<option value="<?php echo $size; ?>"><?php echo $size; ?> </option>
									<?php } ?>
								</select>
                        </div>
                      </div>
                    </div>   
                    <section id="contact" class="contact-wrapper2">  
                    <div class="row">
                    <form name="contactForm" id='contact_form' method="post" action='php/email2.php'>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                          <input type="text" name="name" required="required" id="exampleInputName" class="form-control" placeholder="Nombre">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                        <input type="email" name="email" id="exampleInputEmail" class="form-control" placeholder="Email (Requerido)" required>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                        <input type="text" name="phone" id="exampleInputPhone" class="form-control" placeholder="telefono (Requerido)" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                          <textarea class="form-control" name="message" cols="30" rows="8" placeholder="Mensaje"></textarea>
                        </div>
                      </div>
                    </div>
                    <input class="btn btn-lg costom-btn" id="submit_btn" name="submit" type="submit" value="Comprar">
                    </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  
   <!-- Start jQuery code -->
<script type="text/javascript">
$(document).ready(function() {
    $("#submit_btn").click(function() {
        var proceed = true;
        //simple validation at client's end
        //loop through each field and we simply change border color to red for invalid fields       
        $("#contact_form input[required=true], #contact_form textarea[required=true]").each(function(){
            $(this).css('border-color',''); 
            if(!$.trim($(this).val())){ //if this field is empty 
                $(this).css('border-color','red'); //change border color to red   
                proceed = false; //set do not proceed flag
            }
            //check invalid email
            var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
            if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                $(this).css('border-color','red'); //change border color to red   
                proceed = false; //set do not proceed flag              
            }   
        });
       
        if(proceed) //everything looks good! proceed...
        {
            //get input field values data to be sent to server
            var producto = '<?php echo $product["name"]; ?>';
            
            post_data = {
                'user_name'     : $('input[name=name]').val(), 
                'user_email'    : $('input[name=email]').val(), 
                'telefono'    : $('input[name=phone]').val(), 
                'msg'           : $('textarea[name=message]').val(), 
                'producto'        : producto
            };
            //Ajax post data to server
            $.post('contact_me2.php', post_data, function(response){
                if(response.type == 'error'){ //load json data from server and output message     
                    output = '<div class="error">'+response.text+'</div>';
                }else{
                    output = '<div class="success">'+response.text+'</div>';
                    //reset values in all input fields
                    $("#contact_form  input[required=true], #contact_form textarea[required=true]").val(''); 
                    $("#contact_form #contact_body").slideUp(); //hide form after success
                }
                $("#contact_form #contact_results").hide().html(output).slideDown();
            }, 'json').fail( function(jqXHR, textStatus, errorThrown) {
    alert(textStatus) ; });
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form  input[required=true], #contact_form textarea[required=true]").keyup(function() { 
        $(this).css('border-color',''); 
        $("#result").slideUp();
    });
});
</script>
 <!-- footer -->
  <footer >
    <div class="footer-wrapper section-padding">
      <div class="container">
        <div class="row">
          <div class="wow zoomIn col-xs-12 col-sm-6 col-md-3">
            <a href="index.php"><img src="img/footer-logo.png" alt="Monturas en Lima"></a>
            <p class="footer-content">Nos involucramos con el cliente para ofrecer un mejor servicio siempre.</p>
          </div><!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
          <div class="wow zoomIn col-xs-12 col-sm-3 col-md-3">
            <p class="footer-heading">link</p>
            <ul class="footermenu">
              <li><a href="index.php">Nosotros</a></li>
              <li><a href="monturas.php">Catálogo</a></li>
            </ul>
          </div><!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
          <div class="wow zoomIn col-xs-12 col-sm-6 col-md-3">
            <p class="footer-heading">Búscanos</p>
            <ul class="footercontact">
              <li><i class="flaticon-mainpage"></i><span>dirección:</span>  Av. Izaguirre esquina con Av. Universitaria C.C. ASCAI Piso 2 Tienda 07</li>
              <li><i class="flaticon-phone16"></i><span>Teléfono:</span><a href="tel:5230839"> 523-0839</a></li>
              <li><i class="flaticon-email21"></i><span>e-mail:</span><a href="mailto:ventas@opticasalome.com"> ventas@opticasalome.com</a></li>
              <li><i class="flaticon-world91"></i><span>web:</span><a href="http://opticasalome.com"> www.opticasalome.com</a></li>
            </ul>
            <i class="flaticon-home78"></i>
          </div><!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
          <div class="wow zoomIn col-xs-12 col-sm-6 col-md-3">
            <p class="footer-heading">Novedades</p>
            <ul class="footerblog">
               <li><a href="promociones.php">Monturas en Lima</a> <p>08 de Agosto 2015</p></li>
              <li><a href="tratamientos.php">Lentes más limpios por más tiempo</a> <p>22 de Julio 2015</p></li>
              <li><a href="consejos.php">El uso en Lentes de Contacto</a> <p>21 de Julio 2015</p></li>
            </ul>
          </div><!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="wow zoomIn col-xs-12">
            <p>© 2015 Todos los derechos reservados. <span>Opticas Salome</span> Sistema, Diseño y Alojamiento por <a href="http://peruenvolve.com">PerúEnvolve</a></p>
            <div class="backtop  pull-right">
              <i class="fa fa-angle-up back-to-top"></i>
            </div><!-- /.backtop -->
          </div><!-- /.col-xs-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.creditwrapper -->
  </footer><!-- /Footer -->


<!-- MMENU --> 
<nav id="menu">
  <ul>
     <li ><a class="page-scroll" href="index.html">Inicio</a></li>
              <li><a class="page-scroll" href="monturas.php">Catálogo</a></li>
  </ul>
</nav><!-- /#menu -->

</div><!-- /.main -->



<!-- jQuery JS -->
<script src="js/jquery-1.11.1.js"></script>

<!-- Modernizr JS --> 
<script src="js/modernizr-2.6.2.min.js"></script>

<!--Bootatrap JS-->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- REVOLUTION Slider  -->
<script type="text/javascript" src="vendor/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="vendor/rs-plugin/js/jquery.themepunch.revolution.js"></script>

<!-- Shuffle JS -->
<script src="js/jquery.shuffle.min.js"></script>

<!-- mmenu -->
<script type="text/javascript" src="vendor/mmenu/js/jquery.mmenu.min.js"></script>

<!-- Owl Carosel -->
<script src="vendor/owl/js/owl.carousel.min.js"></script>
<script src="js/wow.min.js"></script>

<!-- waypoints JS-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

<!-- Counterup JS -->
<script src="js/jquery.counterup.min.js"></script>

<!-- Easing JS -->
<script src="js/jquery.easing.min.js"></script>

<!-- Smooth Scroll JS -->
<script src="js/scrolling-nav.js"></script>
<script src="js/smoothscroll.min.js"></script>

<!-- Custom Script JS -->
<script src="js/script.js"></script>

<!-- Email JS -->
<script src="js/email.js"></script>

<script>
$(window).on('scroll', function(){
  if( $(window).scrollTop()>670 ){
    $('.navbar-default').addClass('navbar-fixed-top');
  } else {
    $('.navbar-default').removeClass('navbar-fixed-top');
  }
});
</script>

</body>
</html>