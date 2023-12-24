<?php


echo "well come to goloble vars and local vars in php<br>";

$a = 100 ;// golobal vars 
$b = 1000;
echo $a,$b;  

function countnum(){
    // $a =79;// local vars    
    global $a, $b;
    echo " <br> the  value of number is $a and $b";

}

echo $a;
echo countnum();
echo " <br> the  value of number is $a and $b";
echo "<br>";
echo var_dump($GLOBALS);







?>