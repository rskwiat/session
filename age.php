<?php 
	session_start();
	if(isset($_SESSION["age"])) 
	{
		echo "Let's Drink!"; 
	} else {
		header( 'Location: index.php' ) ;
	} 
	
	session_destroy(); //Let's see if this is okay first, if people refresh the age...
?>

