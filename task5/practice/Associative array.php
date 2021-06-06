<?php
//Associative  Array
// Key and Value combination
// Method 1
$a[0] = 10;
$a["C"] = "Computer";
$a['php'] = "Web Development";
$a[10] = "Ten";
$a[50] = 50.05;

// Method 2
// Always use this Method to create an Array.
$a = array(
  0 => 10,
  "C"=> "Computer",
  'php' => "Web Development",
  10 => "Ten",
  50 => 50.05,
);

// Print Value.
echo "C for ".$a["C"];

// Print Whole Array
foreach ($a as $key => $value) {
  echo "<br>Key is <b>$key</b> and Value is <b>$value</b>.";
}
//Inbuilt Function to Debug an Array.
echo "<pre>";
print_r($a);
echo "<pre>";

echo "<pre>";
var_dump($a);
echo "<pre>";
