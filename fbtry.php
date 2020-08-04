


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
        <title>??Foodies??</title>
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

            <header>
                <div id="top-header">
                    <div class="container">
                        <div class="row">
						
								Customer No :
							 <?php echo $cn; ?>
                            <div class="col-md-6">
                                <div class="home-account">
                                    <a href="index.php">Home</a>
                                    
						</div>
                            </div>
                            <div class="col-md-6">
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
                                    <a href="#"><img src="images/foodieslogo.png" title="??Foodies??" alt="??Foodies??" ></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-menu">
                                    <ul>

									<li><a href="index.php">Home</a></li>
                                        <li><a href="about-us.html">About</a></li>
                                        <li><a href="products.php">Menu</a></li>
                                        <li><a href="contact-us.php">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="search-box">  
                                    <form name="search_form" method="get" class="search_form">
                                        <input id="search" type="text" />
                                        <input type="submit" id="search-button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <div id="heading" style="background-image:url(images/bck9.jpg)">
                <div class="container">
                    <div class="row" >
                        <div class="col-md-12">
						<div class="heading-content">
                                <h2><font color="#FFFFFF">Our Products</font></h2>
                                <span>Home / <a href="about-us.html">Products</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div id="products-post" style="background-image:url(images/background2.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" >
                            <div id="product-heading">
                               <br><br> <h2>Feedback</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
				  <form action="" method="post">
				
                   <div class="row" id="Container" style="table-layout:auto;background-color:#FFFFFF"><font face="Times New Roman, Times, serif">
				<div style="width: 10%; float:left"> .
				</div> 
				<div style="width: 30%; float:left">
				<h3><font color="#FF9900"> How was our service:</h3><br><h4></font>
				 <input type="radio" name="fb" value="5" required><label>Excellent</label> <br>  
				 <input type="radio" name="fb" value="4"><label>Very Good</label><br>
				  <input type="radio" name="fb" value="3"><label>Good</label><br>
				  <input type="radio" name="fb" value="2"><label>Poor</label><br>
				  <input type="radio" name="fb" value="1"><label>Very Poor</label><br>
				 </div>	
				 <div style="width: 50%; float:right">
				 
				<h3><font color="#FF9900"> COMMENT(Optional):<br>
				 <textarea name="cmt" cols="5" rows="5" style="font-size:large"></textarea>
				
				 
				 <center> <br><input type="submit" name="submit" value="Submit" class="btn btn-default btn-sm"> 
				  
				 </div>
				</font>
				  
				  
				
				<?php
				if(isset($_POST['submit']))
				{
			
				$cmt=$_POST['cmt'];
				$fb=$_POST['fb'];
				$con=mysql_connect("localhost","root","");
				mysql_select_db("hotel",$con);
				if(mysql_query("insert into comments values('$fb','$cmt')"))
				{
				echo "<h3><br><br><br><br><br><br><br><br><br><br><br><font color='#FF0000'> <center>Thank You For Your Feedback!";
				
				}
				else
				echo "Error..Try again";
				
				
				
				
				}
				?> 
					
					
					</form>					
				
							
					</font>
					                    </div>
					 </div>
                       
						
								   
					  
                 


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
                                        <li><a href="#" class="fa fa-rss"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-footer">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="about">
                                    <h4 class="footer-title">About Grill</h4>
                                    <p>Grill is free HTML5 template by <span class="blue">template</span><span class="green">mo</span> and it is a free responsive bootstrap layout that can be applied for any purpose.
                                    <br><br>Credit goes to <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for photos used in this template. Nam commodo erat quis ligula placerat viverra.</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="shop-list">
                                    <h4 class="footer-title">Shop Categories</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>New Grill Menu</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Healthy Fresh Juices</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Spicy Delicious Meals</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Simple Italian Pizzas</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Pure Good Yogurts</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i>Ice-cream for kids</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="recent-posts">
                                    <h4 class="footer-title">Recent posts</h4>
                                    <div class="recent-post">
                                        <div class="recent-post-thumb">
                                            <img src="images/recent-post1.jpg" alt="">
                                        </div>
                                        <div class="recent-post-info">
                                            <h6><a href="#">Delicious and Healthy Menus</a></h6>
                                            <span>24/12/2084</span>
                                        </div>
                                    </div>
                                    <div class="recent-post">
                                        <div class="recent-post-thumb">
                                            <img src="images/recent-post2.jpg" alt="">
                                        </div>
                                        <div class="recent-post-info">
                                            <h6><a href="#">Simple and effective meals</a></h6>
                                            <span>18/12/2084</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="more-info">
                                    <h4 class="footer-title">More info</h4>
                                    <p>Sed dignissim, diam id molestie faucibus, purus nisl pretium quam, in pulvinar velit massa id elit.</p>
                                    <ul>
                                        <li><i class="fa fa-phone"></i>010-020-0340</li>
                                        <li><i class="fa fa-globe"></i>123 Dagon Studio, Yakin Street, Digital Estate</li>
                                        <li><i class="fa fa-envelope"></i><a href="#">info@company.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-footer">
                        <p>Copyright ? 2084 <a href="#">Your Company Name</a></p>
                    </div>
                    
                </div>
            </footer>

    
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>