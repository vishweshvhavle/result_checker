<?php
$servername = "localhost:3306";
$username = "id14341954_result_checker";
$password = "m3_5SLzdQzLltN<}";
$dbname = "result";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT roll, s1, s2, s3, s4, s5, m1, g1, m2, g2, m3, g3, m4, g4, m5, g5, tot, ag FROM result";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "roll: " . $row["roll"]. " - S1: " . $row["s1"]. " - S2: " . $row["s2"]. " - S3: " . $row["s3"]. " - S4: " . $row["s4"]. " - S5: " . $row["s5"]. " - M1: " . $row["m1"]. " - G1: " . $row["g1"]. " - M2: " . $row["m2"]. " - G2: " . $row["g2"]. " - M3: " . $row["m3"]. " - G3: " . $row["g3"]. " - M4: " . $row["m4"]. " - G4: " . $row["g4"]. " - M5: " . $row["m5"]. " - G5: " . $row["g5"]. " - Total: " . $row["tot"]. " - Agg: " . $row["ag"].    "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>