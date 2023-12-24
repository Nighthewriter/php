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

// set query 
$sql = "DELETE FROM `trip` WHERE `dest` = 'RUSSIA  ' LIMIT 3";
$result = mysqli_query($conn, $sql);

$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff <br>";

if($result){
    echo "DElete successfully!";

}


else{
    $err = mysqli_connect_error($conn);
    echo " Not Delete successfully! because of this erro $err";

}
?>