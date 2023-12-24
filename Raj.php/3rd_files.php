<?php
$fptr = fopen("myfiles.txt","r");
// echo fgets($fptr);
// echo "<br>";
// echo fgets($fptr);
// echo "<br>";
// echo fgets($fptr);
// echo var_dump(fgets($fptr));

// reading the file line by line 
/*
while ($a=fgets ($fptr)) {
    echo "<br>";
    echo $a; 

}
echo "End  of the file has been reached";
*/

// reading the file chacter by chacter  
// echo fgetc($fptr);
// while ($a=fgetc($fptr)) {
//     echo $a; 
// }
// echo " End  of the file has been reached";

// write the program which reads 
// the content of file and when we click full stop 
// while($a = fgets($fptr)){
//     echo $a ;
//     if ($a == "f"){
//         break;
//     }
// }

// closeing the files and check the file is close or not 
// echo "<br>";
// var_dump(fclose($fptr));
?>