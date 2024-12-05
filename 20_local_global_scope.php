<?php
echo "Welcome to Scope of Local/global vars in PHP<br>";
$a = 98; // Global variable
$b = 9;
function printvalue(){
  $a = 97; // Local Varible
  echo "<br>$a";
  global $a,$b; // Give me the access to this global variable
  $a = 100;
  $b = 1000;
  echo "<br>The value of your variable a is $a and b is $b";
}
echo $a;
printvalue();
echo "<br>The value of your variable a is $a and b is $b";
echo "<br>";
// echo var_dump($GLOBALS);
echo var_dump($GLOBALS['a']);
echo var_dump($GLOBALS['b']);

?>