<?php
// Operators in PHP
/*
1. Arithematic operators
2. Assignments operators
3. Compaison Operators
4. Logical operators
*/

$a=45;
$b=8;
echo "For a+b, the result is " . ($a+$b) . "<br>"; //parenthesis convert its into string

//1. Arithematic operators
echo "For a+b, the result is " . ($a+$b) . "<br>";
echo "For a-b, the result is " . ($a-$b) . "<br>";
echo "For a*b, the result is " . ($a*$b) . "<br>";
echo "For a/b, the result is " . ($a/$b) . "<br>";
echo "For a%b, the result is " . ($a%$b) . "<br>";
echo "For a**b, the result is " . ($a**$b) . "<br>";

//2. Assignments operators
// $x=$a;
// echo "For x, the value is " . $x . "<br>"; 

// $a=$a+6;
// echo "For a, the value is " . $a . "<br>"; 
// $a -=6;
// echo "For a, the value is " . $a . "<br>"; 
// $a *=6;
// echo "For a, the value is " . $a . "<br>"; 
// $a /=6;
// echo "For a, the value is " . $a . "<br>"; 
// $a %=6;
// echo "For a, the value is " . $a . "<br>"; 
// $a **=2;
// echo "For a, the value is " . $a . "<br>"; 

//3. Compaison Operators
$x=8345;
$y=8;
// echo "For x==y, the result is ";
// echo $x==$y;
// // echo var_dump($x==$y);
// echo "<br>";
// echo "For x>y, the result is ";
// echo var_dump($x>$y);
// echo "<br>";

// echo "For x>=y, the result is ";
// echo var_dump($x>=$y);
// echo "<br>";

// echo "For x>=y, the result is ";
// echo var_dump($x<$y);
// echo "<br>";

// echo "For x>=y, the result is ";
// echo var_dump($x<=$y);
// echo "<br>";

// echo "For x<>y, the result is ";
// echo var_dump($x<>$y);
// echo "<br>";

//4. Logical Operators
$m=false;
$n=false;
echo "For m and n, the result is ";
echo var_dump($m and $n);
echo "<br>";
echo "For m && n, the result is ";
echo var_dump($m && $n);
echo "<br>";

echo "For m or n, the result is ";
echo var_dump($m or $n);
echo "<br>";
echo "For m || n, the result is ";
echo var_dump($m || $n);
echo "<br>";

echo "For m<>n, the result is ";
echo var_dump($m<>$n);
echo "<br>";

echo "For !m, the result is ";
echo var_dump(!$m);
echo "<br>";
?> 