<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 		
<title>STUDENT RESULT FORM</title>
</head>

<body >
<form method="post" action="">
<h1><marquee><font color="#000066" face="Times New Roman, Times, serif">  RESULT FILLING FORM</font></marquee></h1>
<center>
<br>Full name:
  <input type="text" name="Fullname" required><br><br>
Roll number:
  <input type="number" name="Rollno" required><br>
  <br>
  <input type="radio" name="exam" value="Unit 1" checked > Unit 1st<br>
  <input type="radio" name="exam" value="Unit 2"> Unit 2nd<br>
  <input type="radio" name="exam" value="PST"> Skill Test<br >
  <input type="radio" name="exam" value="External"> External<br><br>
  <p1>Enter marks of student</p1><br>
  JAVA:
  <input type="number"  name="JAVA" required><br><br>
  DWD:
  <input type="number"  name="DWD" required><br><br>
  OSY:
  <input type="number"  name="OSY" required><br><br>
  SEN:
  <input type="number"  name="SEN" required><br><br>
 	</form>
  
  <input type="submit" value="submit" name="submit"><br>
  
  
 
 
 
 </form> 
 <?php
 
	 
if(isset($_POST['submit']))
{
$a=$_POST['Fullname'];
$b=$_POST['Rollno'];
$c=$_POST['exam'];
$d=$_POST['JAVA'];
$e=$_POST['DWD'];
$f=$_POST['OSY'];
$g=$_POST['SEN'];
$t=($d+$e+$f+$g);
$avg=($t/4);


$con=mysql_connect("localhost","root","");
mysql_select_db("stud",$con);
$sql="SELECT * FROM result";
$records=mysql_query($sql);
if(mysql_query("insert into result values('$a','$b','$c','$d','$e','$f','$g','$t','$avg')"))
{
echo "<center>";
echo "<br>";
echo "Total Score:".$t;
echo "<br>";
echo "Average:".$avg;
}
else
{
echo "Error";
}
}
?>

 <html>
<head>
<title>STUDENT DETAILS</title>
</head>
<body>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>First Name</th>
<th>Roll No</th>
<th>Exam</th>
<th>JAVA</th>
<th>DWD</th>
<th>OSY</th>
<th>SEN</th> 
<th>TOTAL</th>
<th>AVERAGE</th>

<?php
while($result=mysql_fetch_assoc($records))
{
	echo "<tr>";
	echo "<td>" .$result['fullname'] ."</td>";
	echo "<td>" .$result['rollno']. "</td>";
	echo "<td>" .$result['exam']. "</td>";
	echo "<td>" .$result['JAVA']. "</td>";
	echo "<td> ".$result['DWD']. "</td>";
	echo "<td>" .$result['OSY']. "</td>";
	echo "<td>". $result['SEN']. "</td>";
	echo "<td>". $result['Total']. "</td>";
	echo "<td>". $result['Avg']. "</td>";
	echo "</tr>";
}
?> 
</table>
</body>
</html>  
 
</body>
</html>
