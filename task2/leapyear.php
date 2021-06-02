<?php
echo "<h2>Leap Year program in PHP. </h2>";
$a = 2021;
if ($a % 400 == 0) {
  echo "$a is Leap Year";
} elseif ($a % 100 == 0) {
  echo "$a is not Leap Year";
} elseif ($a % 4 == 0) {
  echo "$a is A Leap Year";
} else {
  echo "$a is not Leap Year";
}
?>
