<?php
// log out the data in session 

session_start();
session_unset();
session_destroy();
echo "you have been logout";
?>