<?php
require('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <div class="login-form">
    <div class="log-in">
      <h2>Admin Login Panel</h2><br>
      <form method="POST">
        <div class="input-field">
          <input type="text" name="Adminname" placeholder="Admin Name">
        </div>

        <div class="input-field">
          <input type="password" name="Adminpassword" placeholder="Password">
        </div>

        <button type="submit" name="signin">Sign In</button>

        <div class="extra">
          <a href="#">Forgot password?</a>
        </div>
      </form>
    </div>
  </div>

<?php
if(isset($_POST['signin']))
{
  $query = "SELECT * FROM `admin_login` WHERE `Admin_name` = '$_POST[Adminname]' and `Admin_password` = $_POST[Adminpassword]";
  $result = mysqli_query($connection , $query);
  if(mysqli_num_rows($result)==1)
  {
    session_start();
    $_SESSION['AdminLoginId'] = $_POST['Adminname'];
    header('location: admin panel.php');
  }else {
    echo "<script>alert('incorrect password');</script>";
  }
}
?>
</body>
</html>