<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$u=$_REQUEST["username"];
$p=$_REQUEST["password"];
$sql = "SELECT * from login where username=? and password=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $u, $p);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows > 0) {
    echo "successfully logged in";
    }
    else{
        echo "login is unsuccesful";
    }
    ?>
?> 