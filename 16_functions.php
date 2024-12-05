<?php
echo "Welcome to php totorial on functions<br>";

function processMarks($marksarr)
{
  $sum=0;
  foreach($marksarr as $value){
    $sum +=$value;
  }
  return $sum;
}

function avgMarks($marksarr)
{
  $sum=0;
  $i=1;
  foreach($marksarr as $value){
    $sum +=$value;
    $i++;
  }
  return $sum/$i;
}
$rohanDas=[85, 98, 45, 93, 33, 100];
$sumarks=processMarks($rohanDas);
$rohanAverage=avgMarks($rohanDas);


$manzoor=[98, 90, 91, 88, 67, 97];
$sumarksmanzoor=processMarks($manzoor);
$manzoorAverage=avgMarks($manzoor);

echo "Total marks scored by Rohan out of 600 is: $sumarks<br>";
echo "Average marks of Rohan is: $rohanAverage<br>";

echo "<br>";
echo "Total marks scored by Manzoor out of 600 is: $sumarksmanzoor<br>";
echo "Average marks of Manzoor is: $manzoorAverage";


?>