<?php require_once("includes/connection.php"); ?>

<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>		


<!--  this page is a simplified dummy copy of teh song add page, to reduce variables for testing.  -->


	<div id= "intro"
	<p>This is where we add songs to the database. We will associate the songs with the artist later. Only the song title and chord/lyric fields are required.</p>
	</div>

<!--  ####################BEGIN FORM#######################-->  
	<form <!-- method="post" action="doublesql.php" --> 
	<p>
	Song Title:
	<input type="text" name="Title" size="30">
<!-- 	Artist:
	<input type="text" name="Artist" size="30"> -->
	Year:
	<input type="text" name="Year" size="4">
		
	<p>
	<input type="submit" value="Submit Information"> 
	<a href="index.php">Cancel</a>
	
<!--  ####################END FORM#######################-->
</form>
	 
	
	</body>

</html>

<?php require("includes/footer.php"); ?>


