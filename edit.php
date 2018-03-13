<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comment";

$name=$_POST["name"];
$comment=$_POST["comment"];
$date=$_POST["date"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE comment SET name='$name', comment='$comment' WHERE date='$date'"

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

