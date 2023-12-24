<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database ="dblorry";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

// run query 
$sql ="SELECT * FROM `trip`";
$result = mysqli_query($conn, $sql);

// Find the  number of records returned 
 $data = mysqli_num_rows($result);
 echo $data;


// Display the rows returend by the sql
if($data > 0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    

// we can fecth  in a better way 
while($row = mysqli_fetch_assoc($result)){
    //  echo var_dump($row);
     echo $row['Sno']  .  " Hello " . $row['Name'] . " Welcome to " . $row['dest'];
     echo "<br>";
}

}
?>