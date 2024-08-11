<?php
$firstname = filter_input(INPUT_POST, "firstname", FILTER_SANITIZE_STRING);
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

// Debugging - Print captured values
echo "First Name: " . $firstname . "<br>";
echo "Username: " . $username . "<br>";
echo "Password: " . $password . "<br>";

// Check if fields are empty
if (empty($firstname) || empty($username) || empty($password)) {
    die('Please fill in all required fields.');
}

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mystique_db";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
  die('Connect Error ('. $conn->connect_errno .') '.$conn->connect_error);
} else {
  $stmt = $conn->prepare("INSERT INTO account (firstname, username, password) VALUES(?, ?, ?)");

  if ($stmt === false) {
    die('Prepare failed: ' . $conn->error);
  }

  $stmt->bind_param("sss", $firstname, $username, $password);

  if ($stmt->execute()) {
    echo "You have successfully registered.";
  } else {
    echo "Error: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();
}
?>