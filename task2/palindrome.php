<?php 
echo "<h2>Palindrome Program in PHP.</h2><br>";
$x = 122121;
echo"Given number is $x<br>";
$sum = 0;
while($x >=1){
  $a = $x%10;
  $sum = $sum * 10 +$a;
  $x = $x/10;
}
echo"the result is  $sum<br>";
if($sum == $x){
  echo " given number is Palindrome";
}else{
  echo"given number is  not Palindrome";
}