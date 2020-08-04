	
							<?php
							$d=$_GET['ds'];
							try
							{
								
							


								$con=mysql_connect("localhost","root","");
								mysql_select_db("hotel",$con);
								if(mysql_query("Delete from roti where Dish='$d'"))
								{
										echo "Successful";
								}
								else
									echo "Unsuccessful";
								}
								
									catch(Exception $ex)
										{
													echo $ex;
										}

		
								?>
							
							
							
							