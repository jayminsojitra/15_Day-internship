<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Registration Form</title>
  <style>
    body {
      background-color: gainsboro;
      display: grid;
      height: 100vh;
      place-items: center;
    }
  </style>
</head>

<body>
  <div class="main">
    <h1>Post method</h1>
    <h1>Registration Form</h1><br>
    <form action="task3.php" method="post">


      <label>Name:</label>
      <div>
        <input type="text" name="txt1" id="" required>
      </div><br>


      <label>Phone:</label>
      <div>
        <input type="tel" name="txt2" maxlength="10" id="" required>
      </div><br>


      <lable>Email:</lable>
      <div>
        <input type="email" name="txt3" id="" required>
      </div><br>


      <label>Password:</label><br>
      <div>
        <input type="password" name="txt4" id="" required>
      </div><br>


      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      <button type="reset" class="btn btn-info" name="reset">Reset</button>

      </table>
    </form>
  </div>
</body>

</html>