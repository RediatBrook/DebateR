<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'debater';
$conn = new mysqli($server, $username, $password, $dbname);
$sql = "SELECT * FROM user_info;";
$query = $conn->query($sql);
$row = $query->fetch_assoc();
if ($conn->query($sql) == TRUE) {
  echo "Query executed successfully <br>";
  echo "Username is ". $row['Username'].'<br>';
  echo "FirstName is ". $row['firstname'].'<br>';
  echo "Email is ". $row['Email'].'<br>';
  
} else {
  echo "Error executing query: " . $conn->error;
}
?>