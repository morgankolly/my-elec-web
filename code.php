<?php
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Example query: fetch records from a table named 'users'
$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);
?>