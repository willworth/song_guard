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
$content = $_POST['content'];
$key = $_POST['Key'];
$notes = $_POST['notes'];
//$original = $_POST['original'];  // this is the drop down
//$ready = $_POST['prog'];
//$guitar = $_POST['Guitar'];

//$query = "INSERT INTO songs (title,year) VALUES ('{$title}','{$year}')";

$query = "INSERT INTO songs ('title', 'year', 'content', 'song_key', 'song_notes', 'original', 'in_progress', 'instrument'
			) VALUES ('{$title}','{$year}','{$content}','{$key}','{$notes}','{$original}','{$ready}',)";
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
print "We have successfully received $content<br />";
print "We have successfully received $key<br />";
print "We have successfully received $notes<br />";
print "We have successfully received $original<br />";
print "We have successfully received $ready<br />";
//print "We have successfully received $guitar<br />";






