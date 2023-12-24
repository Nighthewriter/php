<?php

echo "wellcome to multidimsnol arrays in the php <br>";

$multidim = array( array(1,5,8,4),
              array(2,6,7,0),
              array(5,7,5,9));
              


// echo var_dump($multidim);        
      
// echo var_dump($multidim[2][3])


// Printing the contents of a 2 dimensional array
// for ($i=0; $i < count($multidim); $i++) { 
//     echo var_dump($multidim[$i]);
//     echo "<br>";
// }


for ($i=0; $i < count($multidim); $i++) {
    for ($j=0; $j < count($multidim); $j++) { 
        echo $multidim[$i][$j];
        echo "  ";

    }
    echo "<br>";
    

    }
    echo "<br>";




?>