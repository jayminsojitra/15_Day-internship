<?php

$connection = mysqli_connect("localhost","root","","db_internship-task");

$q = mysqli_query($connection , "select * from  tbl_student") or die(mysqli_error($connection));


$row = mysqli_fetch_array($q);
echo "<pre>";
print_r($row);