<?php require_once("includes/connection.php");  ?>
<?php include("includes/header.php");  ?>		
<?php
function mysql_prep( $value ) {
		$magic_quotes_active = get_magic_quotes_gpc();
		$new_enough_php = function_exists( "mysql_real_escape_string" ); // i.e. PHP >= v4.3.0
		if( $new_enough_php ) { // PHP v4.3.0 or higher
			// undo any magic quote effects so mysql_real_escape_string can do the work
			if( $magic_quotes_active ) { $value = stripslashes( $value ); }
			$value = mysql_real_escape_string( $value );
		} else { // before PHP v4.3.0
			// if magic quotes aren't already on then add slashes manually
			if( !$magic_quotes_active ) { $value = addslashes( $value ); }
			// if magic quotes are active, then the slashes already exist
		}
		return $value;


$name = mysql_prep($_POST['name']);
$content = mysql_prep($_POST['content']);
$notes = mysql_prep($_POST['notes']);

$query = "INSERT INTO songs (
				title, content, song_notes
			) VALUES (
				'{$name}', '{$content}', '{$notes}'
			)";
	$result = mysql_query($query,$connection);
	if ($result) {
		// Success!
		echo "success";
    echo "<p>\"$name\" added to database.</p>";
	} else {
		// Display error message.
		echo "<p>Subject creation failed.</p>";
		echo "<p>" . mysql_error() . "</p>";
	}
	}
?>
