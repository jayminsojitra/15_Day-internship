<?php 

$connection = mysqli_connect("localhost" ,"root", "","db_internship-task");

$q  = mysqli_query($connection , "select * from tbl_student2 where is_delete = 0") or die(mysqli_error($connection));


echo "<table border = 1>";

echo "<table border = '1' >";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Date of Birth</th>";
echo "<th>Email</th>";
echo "<th>Mobile Number</th>";
echo "<th>Address</th>";
echo "<th>Password</th>";
echo "<th>Area</th>";
echo "<th>Bloodgroup</th>";
echo "</tr>";

while ($row = mysqli_fetch_array($q)) {
  echo "<tr>";
  echo "<td>{$row['st_id']}</td>";
  echo "<td>{$row['st_name']}</td>";
  echo "<td>{$row['st_gender']}</td>";
  echo "<td>{$row['st_dob']}</td>";
  echo "<td>{$row['st_email']}</td>";
  echo "<td>{$row['st_mobile']}</td>";
  echo "<td>{$row['st_address']}</td>";
  echo "<td>{$row['st_password']}</td>";
  echo "<td>{$row['st_area']}</td>";
  echo "<td>{$row['st_bloodgroup']}</td>";
  echo "<td><a href = 'delete2.php?  deleteid= {$row['st_id']}'>Delete</a></td>";
  echo "</tr>";
}

echo "</table>";

echo "<a href = 'contact.php'>Add Record</a>";
