<?php
echo "Welcome to Associative arrays in php<br>";
// Index Array
// $arra=array("this "," that ","then");
// echo $arra[0];
// echo $arra[1];
// echo $arra[2];
// echo '<br>';

// Associative array
$favcol=array('manzoor'=>'red',
              'barkat'=>'green',
              'saqib'=>'Yellow',
           5=>'white');

// echo $favcol['manzoor'];
// echo '<br>';
// echo $favcol['barkat'];
// echo '<br>';
// echo $favcol[5];
foreach ($favcol as $key => $value) {
  echo "<br>Favorite color of $key is $value<br>";
}
?>