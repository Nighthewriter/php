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
$sql = "SELECT * FROM `trip` WHERE `dest`='Bihar'";
// $sql ="SELECT * FROM `trip` WHERE 'dest'='Bhihar'";
$result = mysqli_query($conn, $sql);

// Find the  number of records returned 
$data = mysqli_num_rows($result);
echo  $data . " records found in database <br> ";
$no =1;

if($data > 0){
while($row = mysqli_fetch_assoc($result)){
    //  echo var_dump($row);
     echo $no .  " Hello " . $row['Name'] . " Welcome to " . $row['dest'];
     echo "<br>";
     $no = $no +1;

  }

}
// usage of where update 
$sql = "UPDATE `trip` SET `name` = 'Mafia' WHERE `dest` = 'bihar '";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff <br>";
if ($result){
    echo "we update record successfully ";

}
else{
    echo  "we could  not  update record successfully ";
}
// echo var_dump($result);

?>