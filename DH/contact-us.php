<?php
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact Us | Decorate Home</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +6423 456 78 90</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="on" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
						  <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ideas <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Room</a></li>
                                <li><a href="pricing.html">Kitchen</a></li>
                                <li><a href="404.html">Bathroom</a></li>
                                <li><a href="shortcodes.html">Living</a></li>
                            </ul>
                        </li>
						 <li><a href="services.html">Products</a></li>
                        <li><a href="portfolio.html">Latest</a></li>
                        <li><a href="about-us.html">About Us</a></li>   
                        <li class="active"><a href="contact-us.html">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->

    <section id="contact-info">
        <div class="center">                
            <h2>How to Reach Us?</h2>
            <p class="lead">This website is for education purpose. If anybody have any query please contact on the College address.</p>
        </div>
         <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
						
						<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(36.84, 174.76),
    zoom: 10
  }
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.googleapis.com/maps/api/js?callback=myMap"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>College</h5>
                                    <p>Edenz Colleges <br>
                                    84, Airdale Street</p>
									<p>Auckland</p>        
                                </address>

                                <address>
                                    <h5>Academy</h5>
                                    <p>Technology Academy<br>
                                    Diploma in Software Development (Level 7)</p>                                
 
                                </address>
                            </li>  
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Your Message Here</h2> 
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form  class="contact-form" name="htmlform" method="post" action="check_and_save_data.php" onsubmit="return(validations());">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" id="name" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" id="email" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="phone" id="phone" class="form-control" >
                        </div>                           
                    </div>
                    <div class="col-sm-5">
					<div class="form-group">
                            <label>Pincode</label>
                            <input type="number" name="pincode" id="pincode" class="form-control" >
                        </div>  
                        <div class="form-group">
                            <label>Message *</label>  
                            <textarea name="discription" id="discription" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" >Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

  

     <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 Decorate Home. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        	<li><a href="about-us.html">About Us</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a href="services.html">Products</a></li>
                        <li><a href="portfolio.html">Latest</a></li>		
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
	<script language="javascript" src="js/validator.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>?>