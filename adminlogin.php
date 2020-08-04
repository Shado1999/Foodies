
     <?php
    ?>

    <?php 
	
    mysql_connect( "localhost" , "root" , "") or die(mysql_error());
    mysql_select_db("hotel") or die(mysql_error());
    $username=$_POST['username'];
    $passcode=$_POST['passcode'];
    $username=stripslashes('$username');
    $passcode=stripslashes('$passcode');
    $username=mysql_real_escape_string('$username');
    $passcode=mysql_real_escape_string('$passcode');

    $query="SELECT * FROM admin WHERE username='$username' AND passcode='$passcode'";
    $result=mysql_query($query);
    $count=mysql_num_rows($result);
        $row=mysql_fetch_array($result);
    if (isset($_POST['submit']))

    if ($count==1){
    session_start();
    $session("username");
    $session("passcode") ;
	echo "Hi";
	echo $username;


            if ($row['id']==1){
            header("location:J:\Xampp\xampp\htdocs\try\adminindex");
            echo ("you logged in as admin");
    		}

    else {
    echo "invalid password and username";


    }
    }

    ?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "passcode" class = "box" /><br/><br />
                  <input type = "submit" value = "login" name="submit"/><br />
               </form>

    <form id="home_id" method ="POST" enctype ="multipart/form-data">
    <script>
    function submitForm(action)
    {
    document.getElementById('home_id').action=action;
    document.getElementById('home_id').submit();
    }
    </script>

    </body>
    </html>:

               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>