<?php require_once("connection.php"); ?>
<?php require_once("functions.php"); ?>
<?php include("header.php"); ?>		
<?php

$artist = $_POST['Artist'];

//print "We have successfully received $artist<br />";

$query = "INSERT INTO artist (
				artist_name
			) VALUES (
				'{$artist}' 
			)";
	$result = mysql_query($query,$connection);
	if ($result) {
		// Success!
		
    echo "<p>\"$artist added to database.</p>";
	} else {
		// Display error message.
		echo "<p>Subject creation failed.</p>";
		echo "<p>" . mysql_error() . "</p>";
	}


?>
<a href="index.php">Return to homepage</a>

<?php require("footer.php"); ?>
