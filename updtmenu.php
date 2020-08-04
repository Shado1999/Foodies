<?php
session_start();
try
{
if($_SESSION['admin']!='admin')
{
header("location:web2/admin.php");
}

$con=mysql_connect("localhost","root","");
mysql_select_db("hotel",$con);

}

catch(Exception $ex)
{
echo $ex;
}

$c=$_SESSION['cn'];
$t=$_SESSION['tb'];
echo $c;
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
                               
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <div id="heading" style="background-image:url(images/bck9.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
						<div class="heading-content">
                                <h2>UPDATE MENU</h2>
                                <span>Home / <a href="updtmenu.php">Update menu</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





           
            <div id="products-post" style="background-image: url(images/background2.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="product-heading">
                                <h2>Update Menu</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                   
                     <div class="row" id="Container" style="background:#FFFFFF"><center><font face="Times New Roman, Times, serif">
					 <form action="" method="post"> 
					 <font face="Times New Roman, Times, serif" color="#000000">
					<h3>Select Category :</font>
					<select name="dish">
					
					
										<?php
										$q=mysql_query("select * from category");
					while($row=mysql_fetch_array($q))
					{
					$ct=$row['cat'];
					$t=$row['tab'];
 						echo "<option value='$t'>$ct</option>";
						}
			 			 ?>
					</select>
			</font>
						  </h3> 
							
						  
							
							<h3>Enter the Name of Dish:
							<input type="text" name="dishname" >
							
							<br><br><hr>
							<h2>Enter the New data</h2>
							<br>
							
							<h3>Enter the Name of Dish:
							<input type="text" name="dishname1" >
							
							<h3>Enter the Price of Dish:
							<input type="number" name="dishprice1" >
							</h3>
							<h3>Image:
							<input type="file" name="dishimage1" >
							</h3>		
							</font>
							
							<?php
							try
							{
								if(isset($_POST['add']))
							{
							
								$qt=$_POST['dish'];
								$qs=$_POST['dishno'];
								$dn=$_POST['dishname'];
								$qs1=$_POST['dishno1'];
								$dn1=$_POST['dishname1'];
								$dp1=$_POST['dishprice1'];
								$di2=$_POST['dishimage1'];
								$di1="images/".$di2;


								$con=mysql_connect("localhost","root","");
								mysql_select_db("hotel",$con);
								
								if(mysql_query("UPDATE $qt SET Dish='$dn1',Price='$dp1',pic='$di1' WHERE Dish='$dn'"))
								{
										echo "Successful";
								}
								else
									echo "Unsuccessful";
								}
								}
									catch(Exception $ex)
										{
													echo $ex;
										}

		
								?>
							<input type="submit" name="add" value="Add">
							
							</form>
							
					  </h3> </center> 
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