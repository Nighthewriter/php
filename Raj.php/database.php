<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dblorry";

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

// Create a db
$sql = "CREATE DATABASE dbkidhastag";
$result = mysqli_query($conn, $sql);

// to check a the value is returning false true 


// echo var_dump($result);

// Check for the database creation success
if($result){
    echo "The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}
  
?>
