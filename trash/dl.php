<form action="delete.php" method="post">
						 <?php
						 $con=mysql_connect("localhost","root","");
								mysql_select_db("hotel",$con);
						$q=mysql_query("select * from roti");
						while($row=mysql_fetch_array($q))
					{
					
					echo "<table><tr>";
					echo "<th>".$row['Srno'];
					echo "</th>";
					$n=$row['Srno'];
					$s=$row['Dish'];
					
				
					
					
				
					echo "<th>";
					echo $s; 
					
					echo "</th>";
					
					
					echo "<th>".$row['Price'];
					echo "</th>";
					echo "<th><a href='delete.php?ds=$s'>"; 
					
					echo "Delete";
					echo "</a>";
					echo "</tr>";
					
					
					}
					echo "</table>";
					?>
					</form>