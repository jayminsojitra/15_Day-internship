<?php 
//Numerical Array
//Method 1
$a[0] = 10; 
$a[1] = 30; 
$a[2] = "c"; 
$a[3] = 20.50; 
$a[4] = "4"; 

//Method 2 /Index Dynamic Array 
$a[] = 10; 
$a[] = 30; 
$a[] = "c"; 
$a[] = 20.50; 
$a[] = "4"; 

//Method 3 /Always use this method to create an array. 
$a = array(10,20,30,"C","C++",10.50);
//Print Array Value.
echo $a[3];
// Print Whole Array.
for ($i=0; $i <count($a) ; $i++) {       //here count() is using to count the elements of the array a.
  echo "</br>$a[$i]";
}

// using While loop
// $i = 0;
// while($i <count($a)){
//   echo "<br>".$a[$i];
//   $i++;
// }

$sum = array_sum($a);
echo "<br> The sum is ".$sum."<br>";

//Inbuilt Function to Debug an Array.
echo "<pre>";
print_r($a);
echo "<pre>";

echo "<pre>";
var_dump($a);
echo "<pre>";
