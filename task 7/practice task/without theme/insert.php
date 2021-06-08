<?php
$connection = mysqli_connect("localhost", "root", "", "db_internship-task");

if($_POST){
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $email = $_POST['email'];
  $mobile = $_POST['number'];
  $address = $_POST['address'];
  $password = $_POST['password'];
  $city = $_POST['area'];
  $bloodgrp = $_POST['blgrp'];

 
$q = mysqli_query($connection , "insert into tbl_student(st_name,st_gender,st_dob,st_email,st_mobile,st_address,st_password,st_area,st_bloodgroup)  values('{$name}','{$gender}','{$dob}','{$email}','{$mobile}','{$address}','{$password}','{$city}','{$bloodgrp}')") or die(mysqli_error($connection));

if($q){
  // echo "$gender";
  echo "<script>alert('Record Added')</script>";
}

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form without theme</title>
</head>

<body>
  <form method="post">
    Name : <input type="text" name="name" placeholder="enter your name"><br><br>
    Gender :<select name="gender">
      <option>MALE</option>
      <option>FEMALE</option>
    </select><br><br>
    Date of Birth : <input type="date" name="dob" placeholder="enter your birth-date"><br><br>
    Email : <input type="email" name="email" placeholder="enter your email"><br><br>
    Mobile : <input type="number" name="number" placeholder="enter your mobile number"><br><br>
    <label>Address:</label><br>
     <textarea name="address"  cols="30" rows="10" placeholder="enter your address"></textarea><br><br>
    Password : <input type="password" name="password" placeholder="enter your password"><br><br>
    City :   <input type="text" name="area" placeholder="enter your city name"><br><br>
    Blood Group : <input type="text" name="blgrp" placeholder="enter your blood group"><br><br>
    <input type="submit" value="Submit">
  </form>
</body>

</html>

<a href = 'table1.php'>Display Record</a>;
