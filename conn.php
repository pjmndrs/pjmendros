<?php
	
 
	$conn = new PDO( 'mysql:host=localhost;dbname=my_db', 'root', '');
	if(!$conn){
		die("Error: Failed to connect to database!");
	}

?>