<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";
//connection function.
$connection =  mysqli_connect($host, $username, $passwd, $dbname);
$q = mysqli_query($connection,"insert tbl_user(user_name,user_gender,user_mobile) values('Jaymin b.','MALE','123')") or die("ERROR".mysqli_error($connection));

$q = mysqli_query($connection,"insert into tbl_user(user_name,user_gender,user_mobile) values('RONAK','MALE','123')") or die("ERROR".mysqli_error($connection));


if($q){
  echo "<script>alert('Record Added');</script>";
}