<?php
 $a=65;
 $b=9;

//  if($a > $b)
//  {
//    echo "a is greater than 78";
//  }
//  else{
//    echo "a is not greater than 78";
//  }
//  $age=45;
 // if else ladder
//  if($age > 18){
//    echo "You can drink water with chai and alcohol";
//  }
//  elseif($age > 14){
//    echo "You can drink chai only with water. No alcohol for you";
//  }
//  else{
//    echo "You can drink only water";
//  }

//  if($age > 18){
//   echo "You can drink water with chai and alcohol<br>";
// }
// if($age > 14){
//   echo "You can drink chai only with water. No alcohol for you<br>";
// }
// else{
//   echo "You can drink only water<br>";
// }

// Quick Quiz
//1. Creat an if else ladder using more than one elseif ?
$grade=50;
if($grade>=90){
   echo "Your grade is A+";
}
elseif($grade>=80){
  echo "Your grade is A";
}
elseif($grade>=70){
  echo "Your grade is B+";
}
elseif($grade>=60){
  echo "Your grade is B";
}
elseif($grade>=50){
  echo "Your grade is C";
}
elseif($grade>=40){
  echo "Your grade is D";
}
elseif($grade < 40){
  echo "Your are Fail and grade is D-";
}
else{
  echo "You are Fail";
}
echo "<br>Done!";

 // 2. Write a program to allow a driver to drive only when his age is greater
 // than or equal to 25 and less than or equal to 65

 $age=3;
  if($age >=25 && $age <= 65){
   echo "<br>Driver is allowed to drive!";
  }
  else{
    echo "<br>You are not allowed to drive";
  }
?>