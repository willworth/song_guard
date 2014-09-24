<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>		
<?php




/*
this file accepts the form data sent by new.php, and sends to SQL
*/

$title = $_POST['Title'];
//$artist = $_POST['Artist'];
$year = $_POST['Year'];



$query = "INSERT INTO songs (title,year) VALUES ('{$title}','{$year}')";
	$result = mysql_query($query,$connection);
	if ($result) {
		// Success!
		
    echo "<p>\"$title\" added to database.</p>";
	} else {
		// Display error message.
		echo "<p>Subject creation failed.</p>";
		echo "<p>" . mysql_error() . "</p>";
	}

print "We have successfully received $title<br />"; 
//print "We have successfully received $artist<br />";
print "We have successfully received $year<br />";
 require("includes/footer.php"); ?>



