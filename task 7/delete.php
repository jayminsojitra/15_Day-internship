<?php
$connection = mysqli_connect("localhost", "root", "", "db_internship");

$id = $_GET['deleteid'];

//for hard delete(once you hard delete any data you can not retrive that data).
//$q = mysqli_query($connection, "delete from tbl_user where user_id = '{$id}'") or die(mysqli_error($connection));

//for Soft delete(hide)   (delete this in 3-table.php when you comment below query : where is_delete = 0)
$q = mysqli_query($connection, "update tbl_user set is_delete =1 where user_id = '{$id}'") or die(mysqli_error($connection));

if ($q) {
  echo "<script>alert('Your data is successfully deleted'); window.location = '3-table.php';</script>";
}