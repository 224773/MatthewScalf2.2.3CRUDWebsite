<?php
$servername = "localhost";
$username = "mattscalf";
$password = "thunder21";
$dbname = "VideoGames";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE VideoGames SET genre='FPS' WHERE game_id=29";



if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
echo"<br><form action= 'update_delete.php' method = 'get'>";
echo "<input name = 'action'   type = 'submit' value = 'Go Back'></form>";
?>
