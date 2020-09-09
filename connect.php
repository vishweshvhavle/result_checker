<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "dbname";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$roll = filter_input(INPUT_POST, 'roll');
$sql = "SELECT roll, s1, s2, s3, s4, s5, m1, g1, m2, g2, m3, g3, m4, g4, m5, g5, tot, ag FROM result WHERE roll=$roll";
$result = $conn->query($sql);

  
  while($row = $result->fetch_assoc()) {
      
    $s1 = $row["s1"]; 
    $s2 = $row["s2"];  
    $s3 = $row["s3"];  
    $s4 = $row["s4"];  
    $s5 = $row["s5"];  
      
      
    switch ($s1) {
default:
    $sub1 = "English";
}


switch ($s2) {
case "37":
    $sub2 = "Psychology";
    break;

case "39":
    $sub2 = "Sociology";
    break;

case "30":
    $sub2 = "Economics";
    break;

case "41":
    $sub2 = "Mathematics";
    break;

default:  
    $sub2 = "Subject 2";  
}


switch ($s3) {
case "39":
    $sub3 = "Sociology";
    break;

case "42":
    $sub3 = "Physics";
    break;
    
case "41":
    $sub3 = "Mathematics";
    break;
    
case "66":
    $sub3 = "Entrepreneurship";
    break;

case "49":
    $sub3 = "Painting";
    break;

default:  
    $sub3 = "Subject 3"; 
}    


switch ($s4) {
case "43":
    $sub4 = "Chemistry";
    break;

case "66":
    $sub4 = "Entrepreneurship";
    break;

case "43":
    $sub4 = "Chemistry";
    break;

case "812":
    $sub4 = "Marketing";
    break;

case "41":
    $sub4 = "Mathematics";
    break;

case "49":
    $sub4 = "Painting";
    break;    

case "54":
    $sub4 = "BST";
    break;

case "55":
    $sub4 = "Accountancy";
    break;

default:  
    $sub4 = "Subject 4";
}    


switch ($s5) {
case "66":
    $sub5 = "Entrepreneurship";
    break;    

case "55":
    $sub5 = "Accountancy";
    break;

case "283":
    $sub5 = "Computer Science";
    break;

case "265":
    $sub5 = "IP";
    break;

case "812":
    $sub5 = "Marketing";
    break;
    
case "833":
    $sub5 = "BA";
    break;      

case "44":
    $sub5 = "Biology";
    break;

case "46":
    $sub5 = "ED";
    break;

default:  
    $sub5 = "Subject 5";
}  
    
    echo "<br>". "<br>". "<br>". "<br>". "<br>". "<br>". "<br>". "<br>". "<br>". "<br>". "<br>". "<br>". "<br>". "<br>". "<br>". "<br>". "<br>". "<br>". "<br>". "<br>". "<br>". "<br>". "<br>". "<br>";
    echo '<p text-align: center>CBSE CLASS 12 RESULT</P>'. "<br>";
    echo '<p text-align: center"> Board Roll Number: <p> '. $row["roll"]. "<br>". "<br>";
    echo $sub1.":     ". $row["m1"]. "     ".$row["g1"]. "<br>";
    echo $sub2.":     ". $row["m2"]. "     ".$row["g2"]. "<br>";
    echo $sub3.":     ". $row["m3"]. "     ".$row["g3"]. "<br>";
    echo $sub4.":     ". $row["m4"]. "     ".$row["g4"]. "<br>";
    echo $sub5.":     ". $row["m5"]. "     ".$row["g5"]. "<br>". "<br>";
    echo "Total:   ". $row["tot"]. "<br>";
    echo "Aggregate:   ". $row["ag"]."%". "<br>"."<br>"."<br>";
    echo "CONGRATULATIONS!";
    
  }



$conn->close();
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

<style>
p {text-align: center;}

</style>

</head>
</html>


