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
		<script>
		function printContent(divprint){
		var restorepage = document.body.innerHTML;
		var printcontent = document.getElementById(divprint).innerHTML;
		document.body.innerHTML = printcontent;
		window.print();
		}
		</script>
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
										<li><a href="stats.php">Statistic</a></li>
                                        <li><a href="viewfb.php">Feedback</a></li>
										<li><a href="admlogout.php">Logout</a></li>
										
                                </div>
                            </div>
                            <div class="col-md-3">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
						<div class="heading-content">
                                <h2>Welcome Admin</h2>
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
                                <h2>Statistics</h2>
                                <img src="images/under-heading.png" alt="" >
					
                            </div>
                        </div>
                    </div>
                  
					
											
                     <div id="divprint" class="row" id="Container" style="background:#FFFFFF"><center><font face="Times New Roman, Times, serif">
					 <H1>MONTHLY STATISTICS</H1>
					<br> <table border="5" width="500" height="200" style="text-align:center" background="images/bk7.jpg">
					
						<tr align="center" >
						
						 <th style="text-align:center">Year</th>
						 <th style="text-align:center">Month</th>
						 <th style="text-align:center">Total Sale</th>
						
                        </tr>						 
						   
					<?php
					
					
$con=mysql_connect("localhost","root","");
mysql_select_db("hotel",$con);

					$q1=mysql_query("select Year(Datee) as Year, Month(Datee) as Month,Sum(Sale) as Sales from statistic group by Year(Datee),Month(Datee)");
					
					while($row=mysql_fetch_array($q1))
					{
					echo "<tr align='center'><th style='text-align:center'>";
					echo $row['Year'];
					echo "<th style='text-align:center'>";
					echo $row['Month'];
					echo "<th style='text-align:center'>";
					echo "Rs.".$row['Sales'];
					echo "</th></tr>";
					}
	

				
					
					?>
					
					</table>
					
					<form action="" method="post">
					<br>SEARCH SALES <br>FROM DATE:<input type="date" name="dt1" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">TO<input type="date" name="dt2"  pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"><br>
					<input type="submit" name="submit" value="Search">
					<?php
					if(isset($_POST['submit']))
					{
					$d1=$_POST['dt1'];
					$d2=$_POST['dt2'];
					//echo "<table border='5' background='images/bk7.jpg'>";
					//echo "<tr><td>DATE</td>";
					//echo "<td>Sales</td></tr>";
					$sale=0;
					
						$q2=mysql_query("select * from statistic where Datee Between '$d1' and '$d2'");
					while($row=mysql_fetch_array($q2))
					{
					
					$sale+=$row['Sale'];
					
					}
					echo "<H3>Total sale from $d1 to $d2 is <h2>Rs.".$sale;
					
					}?>
					</table>
					
					
					
					
					
					
					
					</form>
					
					
					
					
					
					
				
					</div>
									<!--<button onclick="myFunction()">Print this page</button>

										<script>
												function myFunction() {
    												window.print();
																		}
										</script>-->
									
					  </h3> </center> 
							</font>
						

	                 </div><center>
					   
				
				
						
								   
					  
                 
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