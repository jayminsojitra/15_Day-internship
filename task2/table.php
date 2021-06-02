<?php
echo"<h2>Table program in PHP.</h2>";
echo"Table of <b>17</b> is given below.<br><br>";
$a = 17;
for($x=1; $x<=10; $x++){
  $num = $a * $x;
  echo "$a x $x = $num<br>";
}
?>