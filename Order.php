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


?><?php
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
echo $i;
$n=$_GET['w'];
echo $n;
$c=$_SESSION['cn'];
$t=$_SESSION['tb'];
$d=$_GET['ds'];
$qty=$_GET['q'];
$p=$_GET['pr'];
	$ty="xxx";
	
	//$c=10;
	$t=10;				

$con=mysql_connect("localhost","root","");
mysql_select_db("hotel",$con);
if(mysql_query("insert into myorder(cust_no,tab,dish,qty,price,type) values('$c','$t','$d','$qty','$p','$ty')"))
{
echo "Successfully done";
echo $c;
}
else
echo "Unsuccessful";


				
					?>