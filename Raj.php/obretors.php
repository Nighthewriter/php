<?php
// opretors in php
/* 
1. Arthnetic opretors 
2. Assigment opretors 
3. Comparison opretors 
4. Logical opretors  


*/

// 1. Arthnetic opretors 
$a = 15;
$b = 5;
echo "for a + b the result  is ".($a + $b ). "<br>";
echo "for a - b the result  is ".($a - $b ). "<br>";
echo "for a / b the result  is ".($a / $b ). "<br>";
echo "for a * b the result  is ".($a * $b ). "<br>";
echo "for a % b the result  is ".($a % $b ). "<br>";
echo "for a ** b the result  is ".($a ** $b ). "<br>";
echo  "<br>";

// 2. Assigment opretors 

// $x = $a ;
// echo "for x the result  is ".($x ). "<br>";

// $a += 4;
// echo "for a the result  is ".($a ). "<br>";

// $a *= 4;
// echo "for a the result  is ".($a ). "<br>";

// $a -= 4;
// echo "for a the result  is ".($a ). "<br>";

// $a /= 4;
// echo "for a the result  is ".($a ). "<br>";

// $a %= 4;
// echo "for a the result  is ".($a ). "<br>";

// 3. Comparison opretors 
$x = 78;
$y = 77;

echo "for x == y the result  is ";
echo var_dump($x == $y);
echo  "<br>";
echo  "<br>";

// echo "For x > y, the result is ";
// echo var_dump($x > $y);

// echo "For y < x, the result is ";
// echo var_dump($y < $x);

// echo "For x < y, the result is ";
// echo var_dump($x <= $y);

// 4. Logical opretors 
 
$m = ;
$n = false;

echo "for m and n the result  is ";
echo var_dump($m and  $n);
echo  "<br>";

echo "For m && n, the result is "; 
echo var_dump($m && $n);
echo "<br>";

echo "for m and n the result  is ";
echo var_dump($m or $n);
echo  "<br>";


echo "For m || n, the result is "; 
echo var_dump($m || $n);
echo "<br>";

echo "For !m , the result is "; 
echo var_dump(!$m);
echo "<br>";

?>