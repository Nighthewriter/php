<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database ="dblorry";

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$name = "Rohan2 ";
$destination="RUSSIA ";


$sql ="INSERT INTO `trip` ( `Name`, `dest`) VALUES ('$name', '$destination');";
// $sql= "INSERT INTO `trip` ( `name`, `dest`) VALUES ( )";

// ADD A NEW DATA IN TRIP DATABASE
$result = mysqli_query($conn, $sql);
if($result){
    echo "The RECORD WAS INSERT successfully!<br>";
}
else{
    echo "The RECORD  was not INSERT successfully because of this error ---> ". mysqli_error($conn);
}



?>