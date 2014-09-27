<?php require_once("connection.php"); ?>
<?php  // functions!
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



/*

function add_artist($artist){
    $query = "INSERT INTO artist (
				artist_name
			) VALUES (
				'{$artist}' 
			)";
	$result = mysql_query($query,$connection);
	if ($result) {
		// Success!
		
    echo "<p>Artist added to database.</p>";
	} else {
		// Display error message.
		echo "<p>Subject creation failed.</p>";
		echo "<p>" . mysql_error() . "</p>";
	}
    }

*/
}
?>

