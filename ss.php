<html>
<h3>

                  <div class="row" id="Container"><center><font face="Times New Roman, Times, serif">
					<table border="5" width="500" height="200" style="text-align:center"  bordercolor="#FFFFFF" background="images/bck7.jpg">
						<tr align="center" >
						 <th style="text-align:center">Sr.no</th>
						 <th style="text-align:center">Image</th>
						 <th style="text-align:center">Dish</th>
						 <th style="text-align:center">Price</th>
						 <th style="text-align:center">Quantity</th>
						 <th style="text-align:center">Order</th>
						 
                        </tr>		
					</h3>
					
					<?php
					
$con=mysql_connect("localhost","root","");
mysql_select_db("hotel",$con);
						
					
					$t=$_GET['tab'];
					$cnt=1;
					
					$q=mysql_query("select * from $t order by Dish");
					while($row=mysql_fetch_array($q))
					{
					echo "<center>";
					echo "<tr>";
					echo "<th>".$cnt;
					echo "</th>";
					
					
					$n=$row['srno'];
					$s=$row['Dish'];
					$pi=$row['pic'];
					
					
					echo "<th>";
					echo "<img src=$pi width='100' height='100'>";
					 echo "<style='border:#330066 dotted'>";
					 echo "</th>";
					
					
					echo "<th>";
					echo "<a href='dish.php?ide=$n&w=$t'>".$s; 
					echo "</a>";
					echo "</th>";
					
					
					echo "<th>".$row['Price'];
					echo "</th>";
					
					
					
					echo "<th>";
					echo "<input type='number' name='qua'>";
					echo "</th>";
					
					echo "<th>";
					echo "<input type='submit' name='order' value='Order'>";
					echo "</tr>";
					echo "</center>";
					$cnt=$cnt+1;
					
					}
					?>
					
					<?php
				try
		{
		if(isset($_POST['order']))
		{
$qt=$_POST['qua'];
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

					</table>
				</div>
</html>