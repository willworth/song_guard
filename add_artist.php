<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>		



<!-- 
This page contains the table to accept new entries.
Form data is passed to external php page add.php-->



	<div id= "intro"
	<p>This is where we add artists to the database. </p>
	</div>

<!--  ####################BEGIN FORM#######################-->  
	<form <!-- method="post" action="addartistsql.php" --> 
	<p>
	Artist Name:
	<input type="text" name="Artist" size="30">
	
	</p>
	
	
	<p>
	<input type="submit" value="Submit Information"> 
	<a href="index.php">Cancel</a>
	
<!--  ####################END FORM#######################-->
</form>
	 
	
	</body>

</html>

<?php require("includes/footer.php"); ?>











?>

