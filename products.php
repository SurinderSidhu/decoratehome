<?php include("cart.php")?><!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Decorate Home</title>
	

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body class="homepage">

   <header id="header">
		<?php include("top-bar.php")?>
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li> 
						 <li class="active"><a href="products.php">Products</a></li>
                        <li><a href="latest.php">Latest</a></li>
                        <li><a href="about-us.php">About Us</a></li>   
                        <li><a href="contact-us.php">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->
	
    <section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>The Chic Engagement Gift Guide</h2>
                <p class="lead">Our top picks for your favorite soon-to-be Mr. & Mrs.<br>From designers of <a href="http://www.harpersbazaar.com/wedding/planning/g7816/unique-engagement-gifts/">Harper's Bazaar </a></p>
            </div>

            <div class="row">
						<?php display_cart();?>            
                                  
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

    

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 wow fadeInDown">
                   <div class="tab-wrap"> 
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">David Bromstand</a></li>
                                    <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">Shawn Henderson</a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Holly Hunt</a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Wlliam Morris</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">Trip Haenisch</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="tab1">
                                        <div class="media">
                                           <div class="pull-left">
                                                <img class="img-responsive" src="images/david-bromstad.jpg">
                                            </div>
                                            <div class="media-body">
                                                 <h2>American Designer</h2>
                                                 <p>Measuring and lying out the living room in advance can save you a lot of headaches.</p>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="tab-pane fade active in" id="tab2">
                                        <div class="media">
                                           <div class="pull-left">
                                                <img class="img-responsive" src="images/Shawn_Portrait_164+(1).jpg">
                                            </div>
                                            <div class="media-body">
                                                 <h2>Shawn Henderson</h2>
                                                 <p>Always have good reading lights in every room and put everything on a dimmer.
                                                 </p>
                                            </div>
                                        </div>
                                     </div>

                                     <div class="tab-pane fade" id="tab3">
                                        <div class="media">
                                           <div class="pull-left">
                                                <img class="img-responsive" src="images/HollyHunt2012.jpeg">
                                            </div>
                                            <div class="media-body">
                                                 <h2>Holly Hunt</h2>
                                                 <p>The best decisions are always made at the last minute. Juxst know what the last minute is. 
                                                 </p>
                                            </div>
                                        </div>
                                     </div>
                                     
                                     <div class="tab-pane fade" id="tab4">
									 <div class="media">
                                        <div class="pull-left">
                                                <img class="img-responsive" src="images/Wmmorris3248.jpg">
                                            </div>
                                            <div class="media-body">
                                                 <h2>William Morris</h2>
                                                 <p>Have nothing in your house which you do not know to be useful or believe to be useful. 
                                                 </p>
                                            </div>
											</div>
                                     </div>
									 
									 <div class="tab-pane fade" id="tab5">
									 <div class="media">
                                        <div class="pull-left">
                                                <img class="img-responsive" src="images/th-33_edited-jpg.jpg">
                                            </div>
                                            <div class="media-body">
                                                 <h2>Trip Haenisch</h2>
                                                 <p>Less is more. Texture is essential as well as scale.
                                                 </p>
                                            </div>
											</div>
                                     </div>

                                     
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->

                <div class="col-xs-12 col-sm-4 wow fadeInDown">
                    <div class="testimonial">
                        <h2>Designers Advice</h2>
                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" src="images/Winston_Churchill.jpg">
                            </div>
                            <div class="media-body">
                                <p>We shape our homes……, and then our homes shape us.” </p>
                                <span><strong>-Winston Churchill/</strong> Exterior Designer.</span>
                            </div>
                         </div>

                         <div class="media testimonial-inner">
                            <div class="pull-left">
                                <img class="img-responsive img-circle" src="images/DorothyDraper.gif">
                            </div>
                            <div class="media-body">
                                <p>"I believe in doing the thing you feel is right. If it looks right, it is right."</p>
                                <span><strong>-Dorothy Draper/</strong> Interior designer </span>
                            </div>
                         </div>

                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->
	<?php include("footer.php")?>
	<script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>