<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>		
	<body>
	<br />
	<br />
	<div id= "menu"> <a href="/login.php">Login</a>
					 <a href="/songs.php">List all songs</a>
					 <a href="artists.php">list all artists</a></div>
<br /> <hr>


<script type="text/javascript"> //this type declaration is only pre html5
alert("Song Guardian is in beta.");
</script>

	<div id= "intro"
	<p>Song Guard will be a mysql db powered site designed to store song lyrics
	and chords in a simple, manageable way. 
	Initially, it will simply store files,
	but longer term it will sort and present by date added,
	 age of song (if known), artist, title.  
	 There will be additional sections for notes, 
	 and a series of check boxes (maybe?) to indicate if it's lyrics only.
	 I need to add some more text here so I'm free writing until I come
	 up with something useful to add...  Maybe I need to study the database
	 system theory before I begin, or maybe I should just create a basic table
	 to experiment with for the time being.  I don't want that to slow me down
	 too much, and I have just been watching the PHP course, so it would make
	 sense to use it before I forget it all...</p>
	</div>
	<?php
	//<img src="images/difference.jpg" /> 
	?>
	</body>
<!-- put js after everything else to ensure that else loads first. -->
</html>


