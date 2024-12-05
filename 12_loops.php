<?php
echo "While loop in php<br>";
// echo "1<br>";
// echo "2<br>";
// echo "3<br>";
// echo "4<br>";
// echo "5<br>";

$i=0;
$x=0;
while($i<5000 && $x<=60){
  echo "The value of i is ";
  echo $i+1;
  echo "<br>";
  $i+=3;
  $x+=4;
}
?>