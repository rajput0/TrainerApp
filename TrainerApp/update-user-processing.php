<?php
//update-user-processing.php
//update a record in the database table

$exerciseName = $_POST["exerciseName"];
$demoImage = $_POST["demoImage"];
$description = $_POST["description"];
$verificationStatus = $_POST["verificationStatus"];
$exerciseId = $_POST["exerciseId"];

include('connect-db.php');
$stmt = $pdo->prepare("
	UPDATE `exercise` 
	SET `exerciseName` = '$exerciseName', `demoImage` = '$demoImage', `description` = '$description', `verificationStatus` = '$verificationStatus' 
	WHERE `exercise`.`exerciseId` = $exerciseId; ");
$stmt->execute();

header("Location: dashboard.php");

?>