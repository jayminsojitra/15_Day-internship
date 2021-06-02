<?php
$a = 5;
$fact =1;
for ($num=$a; $num>=1; $num--){
  $fact = $fact * $num; 
}

echo "factorial of $a is: $fact";
?>