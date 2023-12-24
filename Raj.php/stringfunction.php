<?php

$name = "RAJ is a good boy";

echo $name;
echo "<br>";
echo strlen($name);
echo "<br>";                
echo "the length of the name is ". strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name,"good");
echo "<br>";
echo str_ireplace("RAJ","Morry",$name);
echo str_repeat($name, 4);
echo "<br>";
echo "<pre>";
echo rtrim("     raj is good boy   ");
echo "</pre>";
echo "<br>";
    



?>