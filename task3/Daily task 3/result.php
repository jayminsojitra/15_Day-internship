<?php
$a = $_POST['name1'];   //to get name of student.
$b = $_POST['sub1'];   //to get marks of maths.
$c = $_POST['sub2'];   //to get name of physics.
$d = $_POST['sub3'];   //to get name of chmeistry.

$total = $b + $c + $d;   //total marks of three subject.
$avg = $total / 3;       //average marks.
if ($avg > 0 && $avg < 33) {
  $class  = "Fail";
} elseif ($avg >= 33 && $avg < 51) {
  $class = "You are pass with grade D.";
} elseif ($avg >= 51 && $avg < 71) {
  $class = "You are pass with grade C.";
} elseif ($avg >= 71 && $avg < 86) {
  $class = "You are pass with grade B.";
} elseif ($avg >= 86 && $avg <= 100) {
  $class = "You are pass with grade A. ";
}
echo "<br/>";
echo "<center>";
echo "<font size=4>Student is :- $a<br/>";
echo "<font size=4>Marks of Maths is :- $b<br/>";
echo "<font size=4>Marks of Physics is :- $c<br/>";
echo "<font size=4>Marks of Chemistry is :- $d<br/>";
if ($class == "Fail") {
  // echo'<body style = "background-color:red">';   //to changre background color. 
  echo "<h2 style='background-color:red'><font size=4> Sorry,You are $class. please, try again.</h2><br/>";
} else {
  // echo'<body style = "background-color:green">';  //to change background color.
  echo "<h2  style='background-color:green'><font size=4> Congratulation,$class</h2><br/>";
}
