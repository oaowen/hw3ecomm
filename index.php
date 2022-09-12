<?php
$servername = "localhost";
$username = "homework3";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Instructor_id, Instructor_Name FROM Instructor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["Instructor_id"]. " - Name: " . $row["Instructor_name"]. " "  "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
