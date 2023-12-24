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

// create a table in mysqli

// Create a table in the db (Here Table Name is dblorry )
$sql ="CREATE TABLE `DBCHERRY` ( `Sno` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(6) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`Sno`)) ";
$result = mysqli_query($conn, $sql);
// Check for the table creation success
if($result){
    echo "The table was created successfully!<br>";
}
else{
    echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
}

