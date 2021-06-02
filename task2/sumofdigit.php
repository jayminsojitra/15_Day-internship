<?php
echo"<h2>Sum of Digit Program in PHP.</h2><br>";
$num = 1234;
echo "Given Number is $num<br>";
$sum = 0;
while($num >= 1){
  $a = $num % 10;
  $sum = $sum + $a;
  $num = $num/10;
}
echo "The total is $sum";