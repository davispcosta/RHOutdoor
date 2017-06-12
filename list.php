<?php
	include 'connection.php';
	$puxar = mysql_query("SELECT endereco FROM esp_outdoor WHERE disponivel_site = 's'");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RH Outdoor - Mídia Exterior</title>
        
        <!-- ****** favicons do faviconit.com ****** -->
        <link rel="shortcut icon" href="img/favicon/favicon.ico">
        <link rel="icon" sizes="16x16 32x32 64x64" href="img/favicon/favicon.ico">
        <link rel="icon" type="image/png" sizes="196x196" href="img/favicon/favicon-192.png">
        <link rel="icon" type="image/png" sizes="160x160" href="img/favicon/favicon-160.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96.png">
        <link rel="icon" type="image/png" sizes="64x64" href="img/favicon/favicon-64.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16.png">
        <link rel="apple-touch-icon" href="img/favicon/favicon-57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/favicon-114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/favicon-72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/favicon-144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/favicon-60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/favicon-120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/favicon-76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/favicon-152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/favicon-180.png">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="img/favicon/favicon-144.png">
        <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
	   <!-- ****** favicons do faviconit.com ****** -->
        
         <!-- Font Awesome -->
        <link href="css/font-awesome.css" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">  
        
        <!-- Animate css -->
        <link href="css/animate.css" rel="stylesheet" type="text/css"/> 
        
        <!-- Slick slider -->
        <link rel="stylesheet" type="text/css" href="css/slick.css"/> 
        
        <!-- Fancybox slider -->
        <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
        
        <!-- Main Style -->
        <link href="css/style.css" rel="stylesheet">
        
         

    </head>
    <body>
        
        
     <!-- BEGAIN PRELOADER -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->
        
        
      <!-- Start header -->
      <header id="header">
        <!-- header bottom -->
        <div class="header-bottom">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="header-contact">
                  <ul>
                    <li>
                      <div class="mail">
                        <i class="fa fa-envelope"></i>
                          ronaldo@rhoutdoor.com.br             
                      </div>
                    </li>
                    <li>
                      <div class="phone">
                        <i class="fa fa-phone"></i>
                        (085) 3261-2240 
                      </div>                      
                    </li>
                  </ul>
                </div>
              </div>
             <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="header-login">
                  <a class="login" target="_blank" href="http://www.rhoutdoor.com.br/app/login#stp">
                      <i class="fa fa-mail-forward"></i>
                      Login
                  </a>
                </div>
             </div>
            </div>
          </div>
        </div>
      </header>
      <!-- End header -->
        
       <!-- BEGIN MENU -->
      <section id="menu-area">      
        <div class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <a class="navbar-brand main-logo pull-left" href="index.html"><img src="img/rh-logo.svg" alt="logo" /></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                  <li><a href="index.html">INÍCIO</a></li>
                  <li><a href="portfolio.html">PORTFOLIO</a></li>
                  <li><a href="maps.html">RH MAPS</a></li>
                  <li class="active"><a href="list.html">OUTDOORS</a></li>
                  <li><a href="about.html">A EMPRESA</a></li>
                  <li><a href="print.html">IMPRESSÃO DIGITAL</a></li>               
                  <li><a href="contact.html">CONTATE-NOS</a></li>
                </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </section>
      <!-- END MENU --> 
        
  <!-- Start single page header -->
  <section class="single-page-header citybackground">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="single-page-header-left wow bounceInUp">
              <h2>RELAÇÃO GERAL</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->
        
  <!-- =========================
     ABOUT
========================= -->	
        <section class="single-page-header"  id="list">
			<ul class="cardlist wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
			<?php
				while($listaoutdoor = mysql_fetch_array($puxar)) {
			?>
                <a href="outdoor.html"><li><i class="fa fa-eye"></i><h5><?php echo $listaoutdoor['endereco'] ?></h5></li></a>
			<?php
				}
			?>
            </ul>
		</section>
        
  <!-- Call to action - two section -->
        <section class="cta-two-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <h3>Gostou do que viu?</h3>
                        <p>Fale conosco e anuncie agora!</p>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <a href="contact.html" class="btn blue">ENTRE EM CONTATO!</a>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-two-section -->
        
     <!-- Start footer -->
      <footer id="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="footer-left">
                <p>Desenvolvido por <a href="http://www.kips.com.br">Kips.com.br</a></p>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="footer-right">
                <p>&copy; Copyright 2016 | Todos Direitos Reservados</p>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- End footer -->
    
    
        <script src="js/jquery.min.js"></script>       
        
        <script src="js/bootstrap.js"></script>
 
        <!-- Slick Slider -->
        <script type="text/javascript" src="js/slick.js"></script> 
        
        <!-- superslides slider -->
        <script src="js/jquery.superslides.min.js" type="text/javascript"></script>
        
        <!-- progress bar   -->
        <script type="text/javascript" src="js/bootstrap-progressbar.js"></script>
        
        <!-- mixit slider -->
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        
        <script type="text/javascript" src="js/wow.js"></script> 
 
        <!-- Add fancyBox -->        
        <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
        
        <script src="js/function.js"></script>
    </body>
</html>