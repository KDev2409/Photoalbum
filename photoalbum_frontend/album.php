<?php
/**
* 	Showing all photos in DB
*
*	@author Devaesh Kaggdas - 102014430 Swinburne University of Technology
*/
ini_set('display_errors', 1);
require 'mydb.php';
require dirname(dirname(__FILE__)).'/aws/aws-autoloader.php';
require_once 'constants.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="defaultstyle.css">
		<title>Photo Album</title>
	</head>
	<body>
		<h4>Student name: <?php echo Devaesh Kaggdas; ?></h4>
		<h4>Student ID: <?php echo 102014430; ?></h4>
		<h4>Tutorial session: <?php echo Thursday 10:30; ?></h4><br/>
		<h3>Uploaded photos:</h3>
		<a href="photouploader.php">Upload more photos</a><br/><br/>
		<table id="photo_table" border = "1">
		  <tr>
			<th>Photo</th>
			<th>Name</th> 
			<th>Description</th>
			<th>Creation date</th>
			<th>Keywords</th>
		  </tr>
		<?php 
		$my_db = new MyDB();
		$photos = $my_db->getAllPhotos();
		foreach ($photos as $photo) {
			echo "<tr><td><img class = 'photo_cell' src='".$photo->getS3Reference()."' /></td><td>".$photo->getName()."<td>".$photo->getDescription()."</td><td>".$photo->getCreationDate()."</td><td>".$photo->getKeywords()."</td></tr>";
		}
		?>
		</table>
	</body>
</html>