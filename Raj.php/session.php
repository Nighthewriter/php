<?php
// waht is a session ?
// used to manage information acroos different pages 
// verify the users login 
session_start();
$_SESSION['username'] = "lorry";
$_SESSION[' favcat'] ="books";
echo "your session has save"; 


?>