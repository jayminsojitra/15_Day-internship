<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Marksheet</title>
  <style>
    body {
    
      display: grid;
      height: 100vh;
      place-items: center;
    }
  </style>
</head>

<body>
  <div class="main">
    <!-- <h1>Post method</h1> -->
    <h1>Please Fill Your Marksheet</h1><br>
    <form action="result.php" method="post">
      <label>Student Name:</label>
      <div>
        <input type="text" name="name1" id="" required placeholder="Enter your name">
      </div><br>

      <label>Maths:</label>
      <div>
        <input type="number" name="sub1"  maxlength="3" id="" required placeholder="Enter your marks">
      </div><br>

      <lable>Physics:</lable>
      <div>
        <input type="text" name="sub2" id="" maxlength="3" required placeholder="Enter your marks">
      </div><br>

      <label>Chemistry:</label><br>
      <div>
        <input type="text" name="sub3" id="" maxlength="3" required placeholder="Enter your marks">
      </div><br>

      <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
      <button type="reset" class="btn btn-info btn-lg" name="reset">Reset</button>
      </table>
    </form>
  </div>
</body>

</html>