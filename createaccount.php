<?php
function cleaner($dirty){
    $clean = htmlspecialchars($dirty);
    return $clean;
}
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'debater';
$loginusername = cleaner($_POST["firstname"].$_POST["lastname"]);
$loginpassword = cleaner($_POST["password"]);
$email = cleaner($_POST["email"]);
$firstname = cleaner($_POST["firstname"]);
$lastname = cleaner($_POST["lastname"]);
$conn = new mysqli($server, $username, $password, $dbname);
$stmt = $conn->prepare("INSERT INTO user_info (Username, Password, Email, firstname, lastname) VALUES (?,?,?,?,?)");
echo $conn->error;
$stmt->bind_param('sssss',$loginusername, $loginpassword, $email, $firstname, $lastname);
$stmt->execute();
/*if ($query == TRUE) {
  echo "Query executed successfully <br>";  
} else {
  echo "Error executing query: " . $conn->error;
}*/
?>