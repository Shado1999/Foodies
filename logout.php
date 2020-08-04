<?php 
session_start();
unset($_SESSION['cn']);
unset($_SESSION['tb']);
header("location:web2/reg.php");
?>