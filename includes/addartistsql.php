<?php require_once("connection.php"); ?>
<?php require_once("functions.php"); ?>
<?php include("header.php"); ?>		
<?php

$artist = $_POST['Artist'];

print "We have successfully received $artist<br />";

?>


<?php
	$query = "INSERT INTO artist (
				artist_name
			) VALUES (
				'{$artist}' 
			)";
	$result = mysql_query($query,$connection);
	if ($result) {
		// Success!
		print "We have success!";
	} else {
		// Display error message.
		echo "<p>Subject creation failed.</p>";
		echo "<p>" . mysql_error() . "</p>";
	}
?>
<?php require("footer.php"); ?>
