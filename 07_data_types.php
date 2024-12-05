<?php
 /*
   Data Types in PHP
   1. Strings
   2. Integers
   3. Float
   4. Boolean
   5. Object
   6. Array
   7. Null
   */

  // String - Sequence of characters
  $name='Manzoor';
  $friends="Barkat";
  echo "$name ka friend is $friends";
  echo '<br>';
  // Integer - Non decimal Numbers
  $income=455;
  $debds=655;
  echo $income;
  echo '<br>';
  echo $debds;
  echo '<br>';

  // Float - Decimal point number
  $income=345.67;
  $debts=-56.63;
  echo $income;
  echo '<br>';
  echo $debts;

  // Boolean - Can be either true or False
  $x=true;
  $is_friends=false;
  echo '<br>';
  echo var_dump($x);
  echo '<br>';
  echo var_dump($is_friends);

  // Object - Instances of Class
  // Employee is a class --->manzoor  be an object

  // Array - Used to store multiples values in a single variable
  $friends=array('Manzoor', 'Faheem','Saqib', 'Barkat');
  echo var_dump($friends);
  echo '<br>';
  echo $friends[0];
  echo '<br>';
  echo $friends[1];
  echo '<br>';
  echo $friends[2];
  echo '<br>';
  echo $friends[3];
  echo '<br>';

  // Null
  $name=NULL;
  echo var_dump($name);
  ?>