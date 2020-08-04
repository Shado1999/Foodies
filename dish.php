<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("hotel",$con);
$cn=$_SESSION['cn'];
if($_SESSION['cn']=="")
{
header("location:web2/reg.php");
}
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
<?php
session_start();
try
{

$con=mysql_connect("localhost","root","");
mysql_select_db("hotel",$con);
$i;
$n;
}

catch(Exception $ex)
{
echo $ex;
}
$i=$_GET['ide'];
$n=$_GET['w'];
$c=$_SESSION['cn'];
$t=$_SESSION['tb'];

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
						<center><h3>Customer No :
							 <?php echo $cn ?></h3></center>
                            <div class="col-md-6">
                                <div class="home-account">
                                    <a href="#">Home</a>
                                    <a href="#">My account</a>
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
                                    <a href="#"><img src="images/foodieslogo.png" title="❤️Foodies❤️" alt="❤️Foodies❤️" ></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-menu">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about-us.php">About</a></li>
                                        <li><a href="products.php">Menu</a></li>
                                        <li><a href="contact-us.php">Contact</a></li>
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
                <div class="container" >
                    <div class="row">
                        <div class="col-md-12">
						<div class="heading-content">
                                <h2>Our Products</h2>
                                <span>Home / <a href="about-us.php">Products</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div id="products-post" style="background-image:url(images/bck6.jpg)">
                <div class="container" >
                    <div class="row">
                        <div class="col-md-12">
                            <div id="product-heading">
							
                                <h2>Hungry ?</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                   
                    <div class="row" id="Container"><center><font face="Times New Roman, Times, serif">
					<h3>
					
					  </h3> </center> 
							</font>
						
						<!--<img src='images/new.png' style="border:#330066 dotted">	-->	
					<div style="width:50%;float:left">	   
					<?php
					$q=mysql_query("select * from $n where srno=$i");
					while($row=mysql_fetch_array($q))
					{
					
					
					echo "<center>";
					echo "<font style='font:Times New Roman, Times, serif' color='#FFFFFF' size='+5' >";
					echo $row['Dish']; 
					$d=$row['Dish']; 
					echo "<br>";
					//echo "<img src='images/new.png' >	<br>";
					echo $row['Price'];
					$p=$row['Price'];
					echo " Rs.";
					echo "<br>"; 
					
					$pc=$row['pic'];
					echo "<img src=$pc width='550' height='400'>";
					 echo "<style='border:#330066 dotted'>";
					
				
					}
					
					?>
										</font>
		<br></div>
		
		<div class="submit-w3l" style="width:50%;float:right">
		<br>
		<br>
		<form action="" method="post">
		<br>
		<h3> <font face="Times New Roman, Times, serif" color="#FFFFFF">
		Enter Quantity  : <input type="number" name="qty" min=1 max=20 required >
		Order type  : <select name="type">
					  <option value="Table">On the Table</option>
					  <option value="Parcel">Parcel</option>
					  </select>
					  <br>
					  <br></font></h3>
		<?php
		try
		{
		if(isset($_POST['order']))
		{
$qt=$_POST['qty'];
$ty=$_POST['type'];



$con=mysql_connect("localhost","root","");
mysql_select_db("hotel",$con);
if($c!=0)
{
if(mysql_query("insert into myorder(cust_no,tab,dish,qty,price,type) values('$c','$t','$d','$qt','$p','$ty')"))
{
echo "Successful";
}
else
echo "Unsuccessful";

}

else
echo "Invalid customer";
}

}
catch(Exception $ex)
{
echo $ex;
}

		
		?>
		
	<br><br><center><input type="submit" name="order" value="ORDER" id="submitButton"></a>
	
		</form></div></div>
		
                       
					               </div></div>    
                       
						
								   
					  
                 


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
                                    <h4 class="footer-title">About Foodies</h4>
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