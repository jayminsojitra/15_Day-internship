<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Form with Get method.</h2>
  <form action="process1.php" method="get">
    <table>
      <tr>
        <td>Name:</td>
        <td><input type="text" name="text1" /></td>
      </tr>
      <tr>
        <td>Age:</td>
        <td><input type="number" name="text2" /></td>
      </tr>
      <tr>
        <td><input type="submit" /></td>
        <td><input type="reset"/></td>
      </tr>
    </table>
  </form><br>

  <h2>Form with Post method.</h2>
  <form action="process2.php" method="post">
    <table>
      <tr>
        <td>Name:</td>
        <td><input type="text" name="text1" /></td>
      </tr>
      <tr>
        <td>Age:</td>
        <td><input type="number" name="text2" /></td>
      </tr>
      <tr>
        <td><input type="submit" /></td>
        <td><input type="reset"/></td>
      </tr>
    </table>
  </form>
</body>

</html>