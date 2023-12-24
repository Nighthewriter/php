<?php 

$income = 300;
$name = "raj";

/*
Data types in php
1.string 
2.interger
3.float 
4.bolean
5.object
6.Array
7.NULL
*/
//  striing - sequens of charchters  
$name = "lorry ";
$friend ="morry";
echo "$name have crush on  friends $friend";
echo "<br>";

// integer- have a number stroge 

echo "<br>";
$num = 400;
echo "<br>";
$dept = 300;
echo "<br>";
echo $num;
echo "<br>";
echo $dept;
echo "<br>";

// float - store only in decimal number 

echo "<br>";
$damm = 23.3;
$four = 455.5;
echo $damm;
echo "<br>";
echo $four;
echo "<br>";

// bolean - store  the value  in true or false 
$x = true;
$is_friend = false;
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";

// object - intances  of classes
// For example ---> Employee is a class ---> and lorry is a obeject 
// WE will learn more about objet amd class in obecjet video

// ARRAY - used store more type of variebels 
$list = array("lorry", "morry", "jack");
echo var_dump($list);
echo "<br>";
echo $list[0];
echo "<br>";
echo $list[1];
echo "<br>";
echo $list[2];
echo "<br>";

// NULL
$name = NULL;
echo var_dump($name)

?>