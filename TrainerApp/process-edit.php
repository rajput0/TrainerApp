<?php
//process-edit.php
//Change a specific record
//Provide users with a form so that he can update the database record

$exerciseId = $_GET["exerciseId"];

include('connect-db.php');
 
$stmt = $pdo->prepare("SELECT * FROM `exercise` WHERE `exerciseId` = '$exerciseId';");

$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<h1>Update record <?php echo($exerciseId); ?></h1>
<form action="update-user-processing.php"  
		enctype="multipart/form-data"  
		method="POST">   
	Exercise Name: <input type="text" name="exerciseName" 
	value="<?php echo($row['exerciseName']); ?>"/><br>

	demoImage: <input type="text" name="demoImage"
	 value="<?php echo($row['demoImage']); ?>"/><br>

	Description: <input type="text" name="description" 
	value="<?php echo($row['description']); ?>"/><br>

	Verification Status: <input type="text" name="verificationStatus" 
	value="<?php echo($row['verificationStatus']); ?>"/><br>

	<input type="hidden" name="exerciseId" 
		value=<?php echo($exerciseId); ?> />
	<input type="submit" />
</form>