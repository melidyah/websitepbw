<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE comment SET name='$name', comment='$comment' WHERE id='$id'";

$result = $conn->query($sql);
if ($result === TRUE) {
    header('Location: index.php#contact');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

<form action="edit.php">
  Name<br>
  <input type="text" name="name" value="">
  <br>
  Comment<br>
  <input type="text" name="comment" value="">
  <br><br>
  <input type="submit" value="Submit">
</form> 

