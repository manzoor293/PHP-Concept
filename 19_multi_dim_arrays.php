<?php
echo 'Welcome to multi dimention arrays in PHP<br>';

//Creating a two dimentional array
$multidim=array(
                  array(2,5,7,8),
                  array(1,2,3,1),
                  array(4,5,0,1)
                );
// echo $multidim[1][2];
// echo var_dump($multidim);

// Printing the contents of 2 dimentional array
// for ($i=0; $i <count($multidim) ; $i++) { 
//   echo var_dump($multidim[$i]);
//   echo '<br>';
// }

for ($i=0; $i < count($multidim); $i++) { 
    for ($j=0; $j < count($multidim[$i]); $j++) { 
      echo $multidim[$i][$j];
      echo "   ";
    }
  echo '<br>';
}

// Three Dimentional Arrays
echo '<br><br>';
$threedim=array(  
                  array(
                    array(2,4,5,6),
                    array(2,5,7,8),
                    array(9,8,7,6)
                  ),
                  array(
                    array(5,2,1,3),
                    array(1,2,3,1),
                    array(5,4,3,2)
                  ),
                  array(
                    array(6,3,2,4),
                    array(1,2,3,1),
                    array(1,2,3,4)
                  )
                );
echo var_dump($threedim);
echo '<br><br>';
// for ($i=0; $i < count($threedim); $i++) { 
//   for ($j=0; $j < count($threedim[$i]); $j++) { 
//     for ($k=0; $k < count($threedim[$j]); $k++) { 
//       echo $threedim[$i][$j][$k];
//       echo '   ';
//     }
//   }
//   echo "<br>";
// }
echo var_dump(count($threedim[$j]));
echo '<br>';
// echo var_dump($threedim[$j]);
// echo '<br>';
// echo var_dump($threedim[$k]);

?>