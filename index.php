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
                        <li class="active"><a href="index.php">Home</a></li> 
						 <li><a href="products.php">Products</a></li>
                        <li><a href="latest.php">Latest</a></li>
                        <li><a href="about-us.php">About Us</a></li>   
                        <li><a href="contact-us.php">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->

    <section id="main-slider" class="no-margin" data-ride="carousel">
	<div class="container">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
				 <li data-target="#main-slider" data-slide-to="3"></li>
                <li data-target="#main-slider" data-slide-to="4"></li>
				 <li data-target="#main-slider" data-slide-to="5"></li>
                <li data-target="#main-slider" data-slide-to="6"></li>
				 <li data-target="#main-slider" data-slide-to="7"></li> 
            </ol>
            <div class="carousel-inner">

                <div class="item active" > 
					<img src="images/slider/bg1.jpg">   
                </div><!--/.item-->

                <div class="item">
					<img src="images/slider/bg2.jpg">
                </div><!--/.item-->

                <div class="item">
                     <img src="images/slider/bg3.jpg" > 
                </div><!--/.item-->
				
				<div class="item">
                     <img src="images/slider/bg4.jpg" > 
                </div><!--/.item-->
				
				<div class="item">
                     <img src="images/slider/bg5.jpg" > 
                </div><!--/.item-->
				
				<div class="item">
                     <img src="images/slider/bg6.jpg" > 
                </div><!--/.item-->
				
				<div class="item">
                     <img src="images/slider/bg7.jpg" > 
                </div><!--/.item-->
				
				<div class="item">
                     <img src="images/slider/bg8.jpg" > 
                </div><!--/.item-->
				
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
		<!--/.controls-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a></div>
    </section><!--/#main-slider-->

    <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Easy Decorating Ideas</h2>
                <p class="lead">A little wallpaper, paint, and or colorful accents could make such a big difference in your home.<p> By The Editors of <strong><a href="http://www.housebeautiful.com">House Beautiful</a></strong>.</p></p>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item1.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Bed Room</a> </h3>
                                <p>Bed room should not be the forgotten room in your home because no one else sees it.</p>
                                <a class="preview" href="images/portfolio/full/item1.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Living Room</a></h3>
                                <p>The easy chair is covered with old dining room curtains which turely makes special look.</p>
                                <a class="preview" href="images/portfolio/full/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item3.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Gallery </a></h3>
                                <p>Want ideas for arranging your own gallery wall? Here is the example from our favorite designer.</p>
                                <a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item4.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Kitchen </a></h3>
                                <p>Punch up cabinetry with bright blues and reds, or ground a large space with a soothing gray or bay leaf green.</p>
                                <a class="preview" href="images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   
                
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item5.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Bathroom</a></h3>
                                <p>We love stripes, but we'd never seen them before in a wall tile.</p>
                                <a class="preview" href="images/portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item6.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Bathroom walls</a></h3>
                                <p>
Bathroom designed by Kyle Timothy Blood, the mesmerizing patterns of Moroccan tile evoke the atmosphere of a traditional hammam.</p>
                                <a class="preview" href="images/portfolio/full/item6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item7.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Garden </a></h3>
                                <p>These flowers are famous for being beautiful, but also fickle. Use these tricks to achieve result you'll be proud to show off in your garden.</p>
                                <a class="preview" href="images/portfolio/full/item7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item8.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Dining </a></h3>
                                <p>Craving outdoor space for grilling and gardening considered buying a weekend place in Connecticut.</p>
                                <a class="preview" href="images/portfolio/full/item8.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->

    <section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>The Chic Engagement Gift Guide</h2>
                <p class="lead">Our top picks for your favorite soon-to-be Mr. & Mrs.<br>From designers of <a href="http://www.harpersbazaar.com/wedding/planning/g7816/unique-engagement-gifts/">Harper's Bazaar </a></p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services1.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Bodum copper</h3>
                            <p>Gift this French press to your newly-wed friends.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services2.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Dinner party</h3>
                            <p>Save the formal dinnerware for the wedding gift.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services3.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Petite Polaroids</h3>
                            <p>When remembering wedding in the sweetest way.</p>
                        </div>
                    </div>
                </div>  

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services4.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Home Scents</h3>
                            <p>Suggest a scent for couples looking to upgrade their space.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services5.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Serve in Style</h3>
                            <p>Give your friends something they can use on the daily.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/services6.png">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Objet of Desire</h3>
                            <p>Thid brass dish is the kinds of gifts your friends use non-stop.</p>
                        </div>
                    </div>
                </div>                                                
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="middle">
        <div class="container">
            <div class="row"> 
                <div class="col-sm-12 wow fadeInDown">
                    <div class="accordion">
                        <h2>Write on your walls! 35 Inspirational Quotes That Will Change Your Way of Living.</h2>
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  Perfect for the living room.
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/quots/diy-sign-2.jpg">
                                        </div>
                                        <div class="media-body">
                                             <h4>Excuse the mess</h4>
                                             <p>Excuse the mess....the children are making memories.</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  Something about freedom.
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/quots/quote-designrulz-00.jpg">
                                        </div>
                                        <div class="media-body">
                                             <h4>Freedom</h4>
                                             <p>Doing what you like is freedom.Liking what you do is happiness.</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  Live your life.
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/quots/quote-designrulz-001.jpg">
                                        </div>
                                        <div class="media-body">
                                             <h4>Do you live life Technically</h4>
                                             <p>You can't upload love, you can't download time, you can't Google all of life's answers. You must actually live some of your life.</p>
                                        </div>
                                  </div>
                              </div>
                              </div>
                            </div>
                          

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  Be with someone.........
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
                              <div class="panel-body">
                               <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/quots/quote-designrulz-0022.jpg">
                                        </div>
                                        <div class="media-body">
                                             <h4>Be, with whome?</h4>
                                             <p>Be with someone, who makes you happy.</p>
                                        </div> 
										</div>
										</div>
                            </div>
                          </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#middle-->

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