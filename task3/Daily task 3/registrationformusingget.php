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
      background-color: aliceblue;
      display: grid;
      height: 100vh;
      place-items: center;
    }

  </style>
</head>

<body>
  <div class="main">
    <h1>get method</h1>
    <h1>Registration Form</h1><br>
    <form action="task.php" method="get">
     
        <div class="space">  
          <label>Name:</label><br>
          <input type="text" name="txt1" id="" required>
        </div><br>

        <div>
          <label>Phone:</label><br>
          <td><input type="tel" name="txt2" maxlength="10" id="" required></td>
          </div><br>

        <div>
          <lable>Email:</lable><br>
          <input type="email" name="txt3" id="" required>
        </div><br>

        <div>
          <label>Password:</label><br>
          <input type="password" name="txt4" id="" required>
        </div><br>

        
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          <button type="reset" class="btn btn-info" name="reset">Reset</button>
        
      </table>
    </form>
  </div>
</body>

</html>