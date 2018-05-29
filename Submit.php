<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 


    $mysql_host = "localhost";
    $mysql_username = "mattscalf";
    $mysql_password = "thunder21";
    $mysql_database = "VideoGames";
    
    $title = $_POST["title"];
	$genre = $_POST["genre"];
	$year = $_POST["year"];
	
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}   
	
	$statement = $mysqli->prepare("INSERT INTO VideoGames (title, genre, year) VALUES(?, ?, ?)");
	
	$statement->bind_param('sss', $title, $genre, $year);
	
	if($statement->execute())
			{
				//print output text
				echo nl2br($title .' '."has been added to the table");
			}
			else{
					print $mysqli->error; //show mysql error if any 
				}
				
echo"<br><form action= 'update_delete.php' method = 'get'>";
echo "<input name = 'action'   type = 'submit' value = 'Go Back'></form>";
        

