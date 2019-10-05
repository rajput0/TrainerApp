<?php
session_start();
?>
<a href="logout.php">Logout</a>
<?php if ($_SESSION['userRole'] == 2) { ?>
<a href="insert-user-form.php">Create User</a>
<a href="insert-exercise-form.php">Create Exercise</a>
<a href="insert-program-item-form.php">Assign Exercise</a>
<?php } ?>

<br>
<?php
include ('connect-db.php');
$stmt = $pdo->prepare("SELECT * FROM `exercise`");
$stmt->execute();

while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    echo($row['exerciseId']);echo("  |  ");
    echo($row['exerciseName']);echo("  |  ");
    echo($row['demoImage']);echo("  |  ");
    echo($row['description']);echo("  |  ");
    echo($row['verificationStatus']);echo("  |  ");
    ?> 
    <a href = "process-edit.php?exerciseId=<?php echo($row['exerciseId']); ?>">EDIT</a>
    <?php
    echo("<br>");
}




?>