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
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
.checked {
    color: orange;
}
</style>



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
						
                            <div class="col-md-6">
                                <div class="home-account">
                                    <a href="adminpanel.php">Home</a>
                                    
						</div>
                            </div>
                            <div class="col-md-6">
                                <div class="cart-info">
                                    <i class="fa fa-shopping-cart"></i>
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

									<li><a href="addcat.php">Add Category</a></li>
                                        <li><a href="addmenu.php">Add Menu</a></li>
                                        <li><a href="delmenu.php">Delete Menu</a></li>
                                        <li><a href="updtmenu.php">Update Menu</a></li>
                                        <li><a href="Billing.php">Billing</a></li>
										<li><a href="stats.php">Satistic</a></li>
                                        <li><a href="viewfb.php">Feedback</a></li>
										<li><a href="admlogout.php">Logout</a></li>
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
                                <h2><font color="#FFFFFF">View Feedback</font></h2>
                                <span>Home / <a href="viewfb.php">View Feedback</a></span>
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
				  				
                   <div class="row" id="Container" style="table-layout:auto;background-color:#FFFFFF"><font face="Times New Roman, Times, serif">
				  <center><h3>Customer Ratings</h3>
				   				  <?php
				
				$con=mysql_connect("localhost","root","");
				mysql_select_db("hotel",$con);
				$q1=mysql_query("select Count(Fb) As str5 from comments where Fb='5'");
				while($row1=mysql_fetch_array($q1))
				{
				$str5=$row1['str5'];
				 }
				 $q1=mysql_query("select Count(Fb) As str5 from comments where Fb='4'");
				while($row1=mysql_fetch_array($q1))
				{
				$str4=$row1['str5'];
				 }
				 $q1=mysql_query("select Count(Fb) As str5 from comments where Fb='3'");
				while($row1=mysql_fetch_array($q1))
				{
				$str3=$row1['str5'];
				 }
				 $q1=mysql_query("select Count(Fb) As str5 from comments where Fb='2'");
				while($row1=mysql_fetch_array($q1))
				{
				$str2=$row1['str5'];
				 }
				 $q1=mysql_query("select Count(Fb) As str5 from comments where Fb='1'");
				while($row1=mysql_fetch_array($q1))
				{
				$str1=$row1['str5'];
				 }
				 
				?>
				 
	<h4>			 
1)<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span><?php echo ":".$str5 ?><br>

2)<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span><?php echo ":".$str4 ?><br>
				 
3)<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span><?php echo ":".$str3 ?><br>

4)<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span><?php echo ":".$str2 ?><br>


5)<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span>
<span class="fa fa-star "></span><?php echo ":".$str1 ?><br>
				 
		</h4>		 
				 
				 
				 
				 

				<hr>  <h3>Customer Comments</h3>
				<H4>
				
				
				<?Php
				
			    $q=mysql_query("select * from comments");
				while($row=mysql_fetch_array($q))
				{
				if($row['Cmt']!="")
				{
				echo "<span class='glyphicon glyphicon-pushpin'></span> ";
				echo $row['Cmt'];
				echo "<span class='glyphicon glyphicon-pushpin'></span><br><br>";
				}
				}
				?> 
					
					
									
				
							
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