<?php require_once("connection.php"); ?>
<?php // functions!


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



?>
