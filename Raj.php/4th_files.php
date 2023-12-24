<?php

// writing file in php

// echo "welcome to files, you can write your blog";
// $fptr = fopen("myfiles2.txt","w");

// fwrite($fptr,"this the best file in the world 
// and don`t argue with me\n ");
// fwrite($fptr,"this the best file in the world 
// and don`t argue with me\n ");
// fwrite($fptr,"this is another contant\n");

// fclose($fptr);

// appending to file in php 
$fptr = fopen("myfiles2.txt","a");
fwrite($fptr, "this begin appended to the file\n ");
fclose($fptr);
?>