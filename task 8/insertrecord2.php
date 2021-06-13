<?php
$connection = mysqli_connect("localhost", "root", "", "db_internship");

if($_POST){
  $name = $_POST['txt1'];
  $gender = $_POST['txt2'];
  $mobilenumber = $_POST['number'];

  $q = mysqli_query($connection , "insert into tbl_user(user_name,user_gender,user_mobile) values('{$name}','{$gender}','{$mobilenumber}' )") or die(mysqli_error($connection));

  if($q){
    // echo "$gender";
    echo "<script>alert('Your data is successfully added')</script>";
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
     <form action="" method="post">
       Name : <input type="text" name="txt1" id=""><br><br>
       Gender :<select name= "txt2">
        <option>MALE</option>
        <option>FEMALE</option>
       </select><br><br>
       Mobile No: <input type="number" name="number" id=""><br><br>
       <input type="submit" value="Submit">
       </form>
</body>
</html>


<a href = 'table3.php'>Display Record</a>;