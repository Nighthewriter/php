<?php

echo "well come to funcition in php<br>";

function processMarsk($maskarry){
    $sum = 0;
    foreach ($maskarry as $value) {
        $sum += $value;
      
       
    }
    // here function will return the sum of a  marsk
    return $sum;
}

function avreageMarsk($maskarry){
    $sum = 0;
    $tum = 1;
    foreach ($maskarry as $value) {
        $sum += $value;
        $tum++;
    }
    // here funcition will give sum and avreage of marsk
    return $sum/$tum;

}
$marry = [34,68,78,56,];
$totlamarsk = avreageMarsk($marry);
echo "totla marsk of marry out of 500 is $totlamarsk <br><br>";

$larry = [45,98,67,34,];
$wollamarsk = avreageMarsk($larry);
echo "totla marsk of marry out of 500 is $wollamarsk<br>";

?>
