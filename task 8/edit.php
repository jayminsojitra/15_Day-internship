<?php

$connection = mysqli_connect("localhost","root","","db_internship");

if(!isset($_GET['id'])  || empty($_GET['id'])){
  header("location : table3.php");
}

$id = $_GET['editid'];
//Select Data from table
$editq = mysqli_query($connection , "select * from tbl_user where user_id = '{$id}'") or die (mysqli_error($connection));
$editdata =mysqli_fetch_array($editq);
// print_r($editdata);

if ($_POST) {
  $txt1 = $_POST['txt1'];
  $txt2 = $_POST['txt2'];
  $txt3 = $_POST['txt3'];

  //for update query
  $uq = mysqli_query($connection , "update tbl_user set user_name = '{$txt1}' , user_gender = '{$txt2}',user_mobile = '{$txt3}' where user_id = '{$id}'") or die (mysqli_error($connection));

  if ($uq){
    echo "<script>alert('Record Updated'); window.location = 'table3.php';</script>";
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
  <form method="post">
  Name : <input type="text" value="<?php echo $editdata['user_name']; ?>" name="txt1">
  <br>
  Gender : MALE<input type="radio" <?php if($editdata['user_gender'] == "MALE") { echo "checked";} ?>   value="male" name="txt2">
  FEMALE<input type="radio"  <?php if($editdata['user_gender'] == "FEMALE") { echo "checked";} ?> value="female" name="txt2">
  <br>
  Mobile Number : <input type="number" value="<?php echo $editdata['user_mobile']; ?>" name="txt3">
  <br>
  <input type="submit" value="Submit">
  </form>

</body>
</html>
