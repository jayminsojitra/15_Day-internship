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
            <form action="" method="post">


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


              <!-- <label>Password:</label><br>
              <div>
                <input type="password" name="txt4" id="" required>
              </div><br> -->


              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              <button type="reset" class="btn btn-info" name="reset">Reset</button>
            </form>
<!--             
            <?php
            $a = $_POST['txt1'];
            $b = $_POST['txt2'];
            $c = $_POST['txt3'];
            $d = $_POST['txt4'];
            echo "your name is $a.<br/> your phone number is $b.<br/> your email-id is $c.</br> your password is $d.";
            ?> -->


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