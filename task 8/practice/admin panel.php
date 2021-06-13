<?php 
  session_start();
  if (!isset($_SESSION['AdminLoginId'])) {
    header('location : Admin login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <style>
    body{
      margin: 0;
      padding: 0;
    }
  .header{
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0px 60px;
      background-color: #204969;
      font-family: poppins;
    }

    button {
      background-color: #f0f0f0;
      font-size: 16px;
      font-weight: 550;
      padding:8px 12px;
      border-radius: 5px;
      border: none;
    }
  </style>
</head>
<body>
  <div class="header">
  <h1>WELCOME TO ADMIN PANEL - <?PHP echo $_SESSION['AdminLoginId']?></h1>
  <form method="POST">
  <button name="logout">Log Out</button>
  </form>
  </div>
    <?php
  if(isset($_POST['logout'])){
    session_destroy();
    header('location: admin login.php');
  
  }
?>

</body>
</html>