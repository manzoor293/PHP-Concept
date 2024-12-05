<?php
echo "Welcome to the world of foreach loops<br>";
$arr=array("Apple","Banana","Bread","Harpic","Butter");

// for( $i=0; $i<count($arr); $i++){
//   echo "$arr[$i]<br>";
// }

// Bette way to do this - foreach loops
foreach($arr as $value){
  echo $value;
  echo "<br>";
}

?>