<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Stampalike by FCT</title>
  <link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
  <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>

  <?php
  include './include/menu.php';
  include './include/logo.php';
  ?>

  <div id="wrapper">
    <!-- end #header -->
    <div id="page-bgtop"></div>
    <div id="page">
      <div><img src="images/pics01.jpg" width="920" height="300" alt="" /></div>
      <div id="content">
        <div class="post">
          <h2 class="title"><a href="#">Contact </a></h2>
          <!-- <p class="meta"><span class="date">June 04, 2012</span><span class="posted">Posted by <a href="#">Someone</a></span></p> -->
          <div style="clear: both;">&nbsp;</div>
          <div class="entry">
            <!-- <p>This is <strong>StampALike </strong>, a free, fully standards-compliant CSS template designed by <a href="http://www.freecsstemplates.org">FCT</a>.  The photo used in this template is from <a href="http://fotogrph.com/">Fotogrph</a>.  This free template is released under a <a href="http://creativecommons.org/licenses/by/3/">Creative Commons Attributions 3.0</a> license, so you’re pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :)</p>
					<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.</p>
					<p class="links"><a href="#">Read More</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Comments</a></p> -->
            <?php
            $connection = mysqli_connect("localhost", "root", "", "db_internship-task");

            if ($_POST) {
              $name = $_POST['name'];
              $gender = $_POST['gender'];
              $dob = $_POST['dob'];
              $email = $_POST['email'];
              $mobile = $_POST['number'];
              $address = $_POST['address'];
              $password = $_POST['password'];
              $city = $_POST['area'];
              $bloodgrp = $_POST['blgrp'];


              $q = mysqli_query($connection, "insert into tbl_student2(st_name,st_gender,st_dob,st_email,st_mobile,st_address,st_password,st_area,st_bloodgroup)  values('{$name}','{$gender}','{$dob}','{$email}','{$mobile}','{$address}','{$password}','{$city}','{$bloodgrp}')") or die(mysqli_error($connection));

              if ($q) {
                // echo "$gender";
                echo "<script>alert('Record Added')</script>";
              }
            }
            ?>
              <a href = 'table2.php'>Display Record</a>;
                 
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
                <textarea name="address" cols="30" rows="10" placeholder="enter your address"></textarea><br><br>
                Password : <input type="password" name="password" placeholder="enter your password"><br><br>
                City : <input type="text" name="area" placeholder="enter your city name"><br><br>
                Blood Group : <input type="text" name="blgrp" placeholder="enter your blood group"><br><br>
                <input type="submit" value="Submit">
              </form>
            </body>

            </html>


          </div>
        </div>
        <!-- <div class="post">
				<h2 class="title"><a href="#">Lorem ipsum sed aliquam</a></h2>
				<p class="meta"><span class="date">June 01, 2012</span><span class="posted">Posted by <a href="#">Someone</a></span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
					<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.  Mauris quam enim, molestie in, rhoncus ut, lobortis a, est. Suspendisse lacus turpis, cursus egestas at sem. Sed lacus. Donec lectus. </p>
					<p class="links"><a href="#">Read More</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Comments</a></p>
				</div>
			</div> -->
        <div style="clear: both;">&nbsp;</div>
      </div>
      <!-- end #content -->
      <?php
      include './include/sidebar.php';
      ?>
      <!-- end #sidebar -->
      <div style="clear: both;">&nbsp;</div>
    </div>
    <div id="page-bgbtm"></div>
    <!-- end #page -->
  </div>
  <?php
  include './include/footer.php';
  ?>
  <!-- end #footer -->
</body>

</html>