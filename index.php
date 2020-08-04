<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("hotel",$con);
$cn=$_SESSION['cn'];

try
{

$con=mysql_connect("localhost","root","");
mysql_select_db("hotel",$con);

}

catch(Exception $ex)
{
echo $ex;
}


?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!-- 

Grill Template 

http://www.templatemo.com/free-website-templates/417-grill

-->
    <head>
        <meta charset="utf-8">
        <title>❤️Foodies❤️</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/templatemo_style.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/testimonails-slider.css">

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
	
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
		          
                <div id="top-header">
				
                    <div class="container">
                        <div class="row">
						<center><h3>Customer No :
							 <?php echo $cn ?></h3></center>
                            <div class="col-md-4">
                                <div class="home-account">
                                    <a href="index.php">Home</a>
									<a href="web2/reg.php">Login</a>
									
                                </div>
                            </div>
							 <div class="col-md-4">
							
                            
							</div>
                            <div class="col-md-4">
                                <div class="cart-info">
                                    <i class="fa fa-shopping-cart"></i>
                                    (<a href="myorder.php">My Orders</a>)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="main-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="logo">
                                    <a href="#"><img src="images/foodieslogo.png" title="❤️Foodies❤️" alt="❤️Foodies❤️" ></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-menu">
                                    <ul>
                                       <li><a href="index.php">Home</a></li>
                                        <li><a href="about-us.php">About</a></li>
                                        <li><a href="products.php">Menu</a></li>
                                        <li><a href="contact-us.php">Contact us</a></li>
									
										</ul>
										<!--<li><a href="shop-cart/cart.html">Your Table</a></li>-->
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            

            <div id="slider">
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                        <div class="slider-caption">
                           
                          
                            
                        </div>
                      <img src="images/slide1.jpg" alt="" />
                    </li>
                    <li>
                        <div class="slider-caption">
                            
                        </div>
                      <img src="images/slide2.jpg" alt="" />
                    </li>
                    <li>
                        <div class="slider-caption">
                            
                        </div>
                      <img src="images/slide3.jpg" alt="" />
                    </li>
                  </ul>
                </div>
            </div>


            <div id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>❤️Foodies❤️ Step-by-step</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-pencil"></i>
                                </div>
                                <h4>Make your choices</h4>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-bullhorn"></i>
                                </div>
                                <h4>Place the order</h4>
                                 </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-bell"></i>
                                </div>
                                <h4>Ready to Serve</h4>
                                </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-heart"></i>
                                </div>
                                <h4>HAPPY CUSTOMERS</h4>
                                </div>
                        </div>
                    </div>
                </div>
            </div>





            <div id="latest-blog" >
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="heading-section" >
							 </div>
					 </div></div></div></div></div>
                            
			<footer>
                <div class="container">
                    <div class="top-footer">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="subscribe-form">
                                    <span>Get in touch with us</span>
                                    <form method="get" class="subscribeForm">
                                        <input id="subscribe" type="text" />
                                        <input type="submit" id="submitButton" />
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="social-bottom">
                                    <span>Follow us:</span>
                                    <ul>
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-footer">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="about">
                                    <h4 class="footer-title">About ❤️Foodies❤️</h4>
                                    <p>Our main goal is to automate day to day activity in Restaurant.In many Restaurants waiters/waitress tends to miss out what on table or customer calls during busy hours.So <span class="blue">Foodies</span> are here to help you out.
                                    
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="shop-list">
                                    <h4 class="footer-title">Shop Categories</h4>
                                    <ul>
                                        <li><a href="fastfood.php"><i class="fa fa-angle-right"></i>Fast Food</a></li>
                                        <li><a href="veg.php"><i class="fa fa-angle-right"></i>Veg Dishes</a></li>
                                        <li><a href="roti.php"><i class="fa fa-angle-right"></i>Roti</a></li>
                                        <li><a href="rice.php"><i class="fa fa-angle-right"></i>Rice</a></li>
                                        <li><a href="chinese.php"><i class="fa fa-angle-right"></i>Chinese</a></li>
                                        <li><a href="drinks.php"><i class="fa fa-angle-right"></i>Drinks</a></li>
                                        <li><a href="icecream.php"><i class="fa fa-angle-right"></i>Ice-cream </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="recent-posts">
                                    <h4 class="footer-title">Our Specials</h4>
                                    <div class="recent-post">
                                        <div class="recent-post-thumb">
                                        </div>
                                        <div class="recent-post-info">
                                            <h6><a href="http://localhost/Foodies/dish.php?ide=9&w=veg">Panner Butter Masala</a></h6>
                                            
                                        </div>
                                    </div>
                                    <div class="recent-post">
                                        <div class="recent-post-thumb">
                                            
                                        </div>
                                        <div class="recent-post-info">
                                            <h6><a href="http://localhost/Foodies/dish.php?ide=1&w=icecream">Oreo Icecream</a></h6>
                                                                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="more-info">
                                    <h4 class="footer-title">More info</h4>
                                    
                                    <ul>
                                        <li><i class="fa fa-phone"></i>7775047199</li>
                                        <li><i class="fa fa-globe"></i>Sangli-Kolhapur road,Atigre</li>
                                        <li><i class="fa fa-envelope"></i><a href="https://gmail.com/">shadomujawar@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-footer">
                        <p>
                        	<span> <a href="#">Foodies Ordering System</a> 
                            </span></a></span>
                        </p>
                    </div>
                    
                </div>
            </footer>

    
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>