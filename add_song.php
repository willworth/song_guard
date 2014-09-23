<?php require_once("includes/connection.php"); ?>

<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>		



<!-- 
This page contains the table to accept new entries.
Form data is passed to external php page add.php-->



	<div id= "intro"
	<p>This is where we add songs to the database.  Only the song title and chord/lyric fields are required.</p>
	</div>

<!--  ####################BEGIN FORM#######################-->  
	<form <!-- method="post" action="includes/add.php" --> 
	<p>
	Song Title:
	<input type="text" name="Title" size="30">
	Artist:
	<input type="text" name="Artist" size="30">
	Year:
	<input type="text" name="Year" size="4">
	Musical Key:
	<input type="text" name="Key" size="10">
	</p>
	
	<p>
	Original or cover:
	<select name="own" size="1">
		<option value="Original">Original</option>
		<option value="Cover">Cover</option>
		</select>
		
	In progress or performance ready:
	<input type="radio" name="prog" value="progress" checked="checked"> In progress
	<input type="radio" name="prog" value="ready"> Performance ready(!)
	</p>
	<p>
	Instrument:
	<input type="checkbox" name="Guitar" value="Guitar"> Guitar
	<input type="checkbox" name="Piano" value="Piano"> Piano
	<input type="checkbox" name="Other" value="Other"> Other
	<br />
	Chords/Lyrics:<br />
	<textarea name="content" rows="10" cols="50">
	</textarea>
	<br />
	Additional notes:<br />
	<textarea name="notes" rows="5" cols="50">
	</textarea>
	</p>
	
	<p>
	<input type="submit" value="Submit Information"> 
	<a href="index.php">Cancel</a>
	
<!--  ####################END FORM#######################-->
</form>
	 
	
	</body>

</html>

<?php require("includes/footer.php"); ?>


