<?php


echo "wellcome to stage where we are ready to connected to a database <br>";
/*
1. MYSQLI
2. PDO
*/
 

// connecting to the data base 

$servername = "localhost";
$username = "root ";
$password = "ghd";

// create a connection 

$conn = mysqli_connect($servername, $username, $password);

// if connection was not  occur showe the error
if (!$conn){
    die("sorry,we fail to connect:". mysqli_connect_error());

}
else {
  
    echo "connection was successfully<br>";
}



?>