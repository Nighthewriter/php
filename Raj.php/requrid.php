<?php

// include 'dbconnect1.php';
require 'dbconnect.php';


// run query 
$sql ="SELECT * FROM `trip`";
$result = mysqli_query($conn, $sql);
// echo $sql;


// Find the  number of records returned 
$data = mysqli_num_rows($result);
echo $data;

echo " records found in the database <br>";

// we can fecth  in a better way 
while($row = mysqli_fetch_assoc($result)){
    //  echo var_dump($row);
     echo $row['Sno']  .  " Hello " . $row['Name'] . " Welcome to " . $row['dest'];
     echo "<br>";
}
?>