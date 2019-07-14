<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>OneWay Viajes</title>
	<!-- core CSS -->
	<link href="uploadify/uploadify.css" rel="stylesheet" >
	
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
	
	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
</head><!--/head-->

<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button id="nav-iconButton" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <div id="nav-icon3">
  				<span></span>
  				<span></span>
  				<span></span>
  				<span></span>
			</div>
          	</button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll"><a class="testBTN" href="index.html#home">Home</a></li>
                        <li class="scroll"><a class="testBTN" href="index.html#services">Servicios</a></li>
                        <li class="scroll"><a class="testBTN" href="index.html#features">Seguridad</a></li>
                        <li class="scroll"><a class="testBTN" href="index.html#portfolio">Clientes</a></li>
                        <li class="scroll"><a class="testBTN" href="index.html#about">Trayectoria</a></li>
                        <li class="scroll"><a class="testBTN" href="index.html#work-process">Nuestros Valores</a></li>
                        <li class="scroll"><a class="testBTN" href="index.html#contact">Contacto</a></li> 
                        <li class="scroll"><img src="images/proximamente.png"alt="Acceso a clientes - proximamente"></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(images/slider/bg1.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>Llegando <br/>a destino desde <br/>hace 50 años</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item" style="background-image: url(images/slider/bg2.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>Servicios a la<br/>medida de<br/>cada necesidad</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="owl-carousel">
            <div class="item" style="background-image: url(images/slider/bg4.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>Compromiso<br/>y calidez<br/>familiar</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->


    <section id="contactCV">
        <div id="google-map" style="height:700px" data-latitude="-34.510583" data-longitude="-58.488990"></div>
        <div class="container-wrapperCV">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="contact-formCV">
                            <h3>Trabajá en OneWay</h3>

                            <address>
                              Completá tus datos en el siguiente formulario y adjuntanos tu CV. Te contactaremos en cuanto surja una oportunidad.
                            </address>

                            <form>
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="phone" id="phone" class="form-control" placeholder="Teléfono" required>
                                </div>
								
								
									<div id="queue"></div>
									<input id="file_upload" name="file_upload" type="file" multiple="true">
								
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Mensaje" required></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 - Diseñado por <a target="_blank" href="http://mio-pia.com.ar/">Mio-Pía. Diseño pero visto de Cerca</a>
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="tel:+54 91150479721"><i class="fa fa-whatsapp"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
	<script src="uploadify/jquery.uploadify.min.js"</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
	
    
	<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadify({
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
					
				},
				'swf'      : 'uploadify/uploadify.swf',
				'uploader' : 'uploadify/uploadify.php',
				'buttonText' : 'Adjuntar CV'
			});
		});
	</script>
	
    <!--ANALYTICS-->
	<script>
	
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83418371-1', 'auto');
  ga('send', 'pageview');

</script>
<!--FIN ANALYTICS-->
</body>
</html>