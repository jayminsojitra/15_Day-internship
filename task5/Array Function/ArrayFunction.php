<?php
echo "<h2>Count Function</h2>";
$arr = array('php', 'c', 'c++', 'java', 'Android');
echo count($arr);                         //returns the number of elements present in the array.

echo "<h2>Count Values Function</h2>";
$arr = array("C", "php", "c", "android", "php", "java");
$newarr = array_count_values($arr);
foreach ($newarr as $key => $value) {
  echo "<br/>$key - <strong>$value</strong> ";
}

echo "<h2>Sum Function</h2>";
$myarray = array(1, 2, 3, 4, 5);
echo "sum is " . array_sum($myarray);

echo "<h2>Product Function</h2>";
$myarray = array(1, 2, 3, 4, 5);
echo "product is " . array_product($myarray);

echo "<h2>Reverse Function</h2>";
$arr = array('C', 'Php', 'Java', 'Javascript', 'C++', 'HTML', 'CSS');
$rev_arr = array_reverse($arr);         //reverse the array
echo "<pre>";
print_r($rev_arr);
echo "</pre>";

echo "<h2>In Array Function</h2>";
$arr = array('c', 'c++', 'java', 'android', 'php');
$temp = in_array('php', $arr);           //check whether element is present in the array or not.  
echo $temp;

echo "<h2>Random Function</h2>";
$arr = array('c', 'c++', 'java', 'android', 'php');
$indexofarray = array_rand($arr);       //Returns Random Array Index 
echo $arr[$indexofarray];

echo "<h2>Multiple Keys at Random Function</h2>";
$arr = array('c', 'c++', 'java', 'android', 'php');
$indexofarray = array_rand($arr, 2);     //Returns Random Array Index 
foreach ($indexofarray as $key => $value) {
  echo "$key - <strong>" . $arr[$value] . "</strong><br />";
}

echo "<h2>Unique Function</h2>";
$arr = array('c', 'c++', 'android', 'java', 'android', 'php');
print_r(array_unique($arr));   //Remove duplicate elements.

echo "<h2>Merge Function</h2>";
$arr1 = array('c', 'c++', 'android', 'java', 'php');
$arr2 = array(10, 20, 30, 40, 50);
$NewArr = array_merge($arr1, $arr2);
print_r($NewArr);

echo "<h2>Search Function</h2>";
$myarr = array('c', 'c++', 'android', 'java', 'php');
$check = array_search('android', $myarr);
echo $check;                  // Return Index

echo "<h2>Range Function</h2>";
$year = range(1900, 2020);
echo "<select>";
foreach ($year as $value) {
  echo
  "<option>$value</option>";
}
echo "</select>";
echo "<br>";

//one more example of Range Fnuction
echo "<h2>One More Example of Range Function</h2>";
$arr = range("11", "20");
foreach ($arr as $key => $value) {
  echo "$key - $value<br/> ";
}

echo "<h2>Sort Function</h2>";
$arr = array(80, 60, 50, 40, 8, 74);
sort($arr);                         //sort an array form lowest to highest value
echo "<pre>";
print_r($arr);
echo "</pre>";

echo "<h2>Rsort Function</h2>";
$arr = array(80, 60, 50, 40, 8, 74);
rsort($arr);                         //sort an array in reverse or descending order. 
echo "<pre>";
print_r($arr);
echo "</pre>";

echo "<h2>Asort Function</h2>";
$arr = array(80, 60, 50, 40, 8, 74);
asort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

echo "<h2>Ksort(key sort) Function</h2>";
$arr = array(
  "Banana" => "Yellow",
  "Apple" => "Red",
  "Mango" => "Green"
);
ksort($arr);                     //sort an array in ascending order according to the keys.
foreach ($arr as $key => $value) {
  echo "<br/>$key - $value ";
}

echo "<h2>KRsort(Key Reverse sort) Function</h2>";
$arr = array(
  "Banana" => "Yellow",
  "Apple" => "Red",
  "Mango" => "Green"
);
krsort($arr);
foreach ($arr as $key => $value) {
  echo "<br />$key - $value ";
}

echo "<h2>Shuffle function</h2>";
$myArray = array(
  "Football", "Baseball", "Hockey", "Tennis",
  "Boxing"
);
shuffle($myArray);                 // Shuffle the array (output may differ on every refresh)
foreach ($myArray as $key => $value) {
  echo " $value<br /> ";
}

echo "<h2>Key Exist Function</h2>";
$arr = array("a" => "apple", "b" => "banana");
echo array_key_exists('a', $arr);

echo "<h2>Change Key Case Function</h2>";
$arr = array(
  "Banana" => "Yellow",
  "Apple" => "Red",
  "Mango" => "Green"
);
$uppercase = array_change_key_case($arr, CASE_UPPER);  //change all keys of a given array to lower case or upper case.
echo "<pre>";
print_r($uppercase);
echo "</pre>";

echo "<h2>Combine Function</h2>";
$arr1 = array("Banana", "Apple", "Mango");
$arr2 = array("Yellow", "Red", "Green");
$NewVar = array_combine($arr1, $arr2);   //is combine both array but use one as key and second is as value.
echo "<pre>";
print_r($NewVar);
echo "</pre >";

echo "<h2>End Function</h2>";
$myarr = array('c', 'c++', 'android', 'java', 'php');
echo end($myarr);          //will return the last element of the array.

echo "<h2>Compact Function</h2>";
$name = "Jaymin";
$enrollment_no = "180050111019";
$arr = compact("name", "enrollment_no");     //Create an array from variables and their values
echo "<pre>";
print_r($arr);
echo "</pre>";

echo "<h2>Flip Function</h2>";
$arr = array("a" => "akash", "b" => "banana", "c" => "computer");
$fliparray = array_flip($arr);
echo "the original array with keys andd values<br>";
print_r($arr);
echo "<br/>the flipped array with keys andd values<br>";
print_r($fliparray);

echo "<h2>Difference Function</h2>";
$a = array("akash", "c", "c++", "java", "php", "android");
$b = array("akash", "c", "java", "php");
$diff = array_diff($a, $b);
print_r($diff);

echo "<h2>Intersect Function</h2>";
// will create a new array from comparing arrays against each other to see if any values match.
$arr1 = array(0 => "Sunday", 1 => "Monday", 2 => "Tuesday");
$arr2 = array(3 => "Tuesday", 4 => "Sunday", 5 => "Thursday");
echo "<pre>";
print_r(array_intersect($arr1, $arr2));
echo "</pre>";

echo "<h2>Values Function</h2>";
$arr = array("i" => "c", "want" => "c++", "learn" => "php");
$myarr = array_values($arr);
foreach ($myarr as $key => $value) {
  echo " <br />$key - $value";
}

echo "<h2>Push Function</h2>";
$a=array("c","c++");
array_push($a,"java","php");
echo "<pre>";
print_r($a);
echo "</pre>";

echo "<h2>Pop Function</h2>";
$a = array("c", "c++", "Java", "PHP", "ASP");
array_pop($a); //Remove
print_r($a);
echo "<br/>";
array_pop($a); //Remove
print_r($a);

echo "<h2>Explode Function</h2>";
$mystring = "I Love PHP Language";
$arr = explode(" ",$mystring);        //array to string
print_r($arr);

echo "<h2>Implode Function</h2>";
$arr = array("i","love","php","language");
$mystring = implode(" ", $arr);         //string to array
echo $mystring;