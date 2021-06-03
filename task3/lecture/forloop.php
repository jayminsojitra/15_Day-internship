<?php
echo"<table border = '1'>";
for ($i=1; $i <101; $i++) { 
  echo "<tr>";
  if ($i %10==0) {
    echo"<td bgcolor = 'cyan'>$i</td>";
  }else{
    echo"<td bgcolor ='pink'>$i</td>";
  }
  echo"</tr>";
}
echo"</table>";
?>