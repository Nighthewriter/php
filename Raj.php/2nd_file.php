<?php
$fptr = fopen("myfiles.txt","r");
// echo var_dum($fptr);
if (!$fptr ){
    die("Unlebel to open the file.please 
    enter the vailed name");
}
$conten =fread($fptr, filesize("myfiles.txt"));
echo $conten;
?>