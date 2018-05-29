<?php
    
    
    
    $mysql_host = "localhost";
    $mysql_username = "mattscalf";
    $mysql_password = "thunder21";
    $mysql_database = "VideoGames";

$conn = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT title, genre, year FROM VideoGames";
$result = $conn->query($sql);


$title = $row[0];
$genre = $row[1]; 


echo"<HEAD> <link rel='stylesheet' href='crudstyle.css'></HEAD><BODY>";
echo"<h2>Here is the list of games</h2>";
if ($result->num_rows > 0)
echo"<HEAD> <link rel='stylesheet' href='crudstyle.css'></HEAD>";
echo "<TABLE><TR><TH>TitleID</TH><TH>Genre</TH></TR>";
while($row = $result->fetch_assoc())
	{

			echo "<TR>";
			echo "<TD>".$row['title']. "</TD><TD>". $row['genre'] . "</TD>";
			echo "</TR>";
		}
echo "</TABLE>";
echo"<br><form action= 'update_delete.php' method = 'get'>";
echo "<input name = 'action'   type = 'submit' value = 'Go Back'></form>";
	echo "</FORM>";
	
?>