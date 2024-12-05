<?php
 $name="Manzoor is a good boy";
 echo $name;

 echo "<br>";
 echo "The length of "."my string is ".strlen($name);
 echo "<br>";
 echo str_word_count($name);
 echo "<br>";
 echo strrev($name);
 echo "<br>";
 echo strpos($name, "Manzoor");
 echo "<br>";
 echo str_replace("Manzoor","Saqib", $name);
 echo "<br>";
 echo str_repeat($name, 6);
 echo "<br>";
 echo "<pre>"; // pre use to write the string as it is
//  HTML consider the spaces in below string as a single space
 echo rtrim("    this is a good boy    ");
 echo "<br>";
 echo ltrim("    this is a good boy    ");

//  echo "</pre>";

?>