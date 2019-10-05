<?php
    echo("Selected user: ".$_POST['user']."<br>");
    echo("Selected exercise: ".$_POST['exercise']);

    $userId = $_POST['user'];
    $exerciseId = $_POST['exercise'];

    include ('connect-db.php');
    $stmt = $pdo->prepare("INSERT INTO `user_exercise_program` (`userId`,`exerciseId`) VALUES ('$userId','$exerciseId');");
    $stmt->execute();
?>