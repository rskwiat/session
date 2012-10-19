<?php
	session_start();
	$_SESSION["age"] = "21";

	if($_POST['submit'])  {
		header("Location: age.php");
		}
	if($_POST['no'])  {
		header("Location: http://google.com");
	}	
?>

<form action="index.php" method="POST">

	<h2>Are you over 21?</h2>

	<input type="submit" name="submit" value="yes"/>
	<input type="submit" name="no" value="no"/>
</form>