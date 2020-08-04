<?php
    mysql_connect( "localhost" , "root" ,"") or die(mysql_error());
    mysql_select_db("hotel") or die(mysql_error());
    ?>

    <form id="home_id" method ="POST" enctype ="multipart/form-data">
    <script>
    function submitForm(action)
    {
    document.getElementById('home_id').action=action;
    document.getElementById('home_id').submit();
    }
    </script>

    <p align = right> Username: <input type ="text" name ="username" placeholder="Enter username">
    <p align = right> Password: <input type ="password" name ="passcode" placeholder="Enter password">
    <input type="submit" value="login"  name="submit" 

     <?php
    mysql_connect( "localhost" , "root" , "") or die(mysql_error());
    mysql_select_db("hotel") or die(mysql_error());
    ?>

    <?php 

    $user=$_POST['username'];
    $pass=$_POST['passcode'];
    $user=stripslashes('$username');
    $pass=stripslashes('$passcode');
    $user=mysql_real_escape_string('$username');
    $pass=mysql_real_escape_string('$passcode');

    $query="SELECT * FROM admin WHERE username='$username' AND passcode='$passcode'";
    $result=mysql_query($query);
    $count=mysql_num_rows($result);
        $row=mysql_fetch_array($result);
    if (isset($_POST['submit']))

    if ($count==1){
    session_start();
    $session("username");
    $session("passcode") ;


            if ($row['usertype']==0){
            header("location:J:\Xampp\xampp\htdocs\try\adminindex");
            echo ("you logged in as admin");
    }
            elseif ($row['usertype']==1) {
            header("location:cashier_home.php");
            echo ("you logged in as cashier");
    }


    else {
    echo "invalid password and username";


    }
    }

    ?>
    </body>
    </html>:
