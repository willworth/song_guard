<?php
/*
this file accepts the form data sent by new.php, and sends to SQL
*/

$title = $_POST['Title'];
$artist = $_POST['Artist'];
$year = $_POST['Year'];
$key = $_POST['Key'];
$original = $_POST['Original'];  // this is the drop down
$ready = $_POST['prog'];
$guitar = $_POST['Guitar'];





print "We have successfully received $title<br />"; 
print "We have successfully received $artist<br />";
print "We have successfully received $year<br />";
print "We have successfully received $key<br />";
print "We have successfully received $original<br />";
print "We have successfully received $ready<br />";
print "We have successfully received $guitar<br />";


$sql = "INSERT INTO `song_guard`.`songs` (`id`, `title`, `artist_id`, `year`, `content`, `song_key`, `song_notes`, `original`, `in_progress`, `piano`) VALUES (NULL, \'$title\', NULL, \'w2014\', \'wcontent\', \'wc#\', \'wsongnotes\', \'1\', \'1\', \'piano\');";
/*


if (isset($_POST['x']))
{
	$x = trim($_POST['x']);
} else {
	$x = '';
}
*/
?>


