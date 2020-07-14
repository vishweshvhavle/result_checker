<?php
   $roll = $POST['roll'];

   $roll = stripcslashes($roll);
   $roll = mysql_real_escape_string($roll);

   $host = "localhost";
   $dbusername = "root";
   $dbpassword = "";
   $dbname = "result";
   $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

   $result = mysql_query("select ag from result where roll = '$roll'")
           or die("Failed to query database".mysql_error());

   $row = mysql_fetch_array($result);
   if ($row['roll'] == $roll) {
   	echo "Success";
   } 
?>