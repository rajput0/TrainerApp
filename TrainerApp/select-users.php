<?php

?>
<a href="dashboard.php">update exercise into table</a><br>

<?php

if(isset($_GET['userId'])){
    $userId = $_GET['userId'];
    include ('connect-db.php');

    $stmt = $pdo->prepare("SELECT * FROM `user` WHERE `userId`=$userId;");
    $stmt->execute();
   
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        echo("First Name: ".$row["firstName"]);
        echo("<br>");
        echo("Last Name: ".$row["lastName"]);
        echo("<br>");
        echo("User ID: ".$row["userId"]);
        echo("<br>");
        echo("Email: ".$row["email"]);
        echo("<br>");
        echo("Password: ".$row["password"]);
        echo("<br>");
    
    $stmt = $pdo->prepare("SELECT `exercise`.`exerciseName`, `exercise`.`description`, `exercise`.`demoImage` 
                FROM `user_exercise_program` 
                INNER JOIN `exercise` 
                ON `exercise`.`exerciseId` = `user_exercise_program`.`exerciseId` 
                WHERE `userId` = $userId;");
    $stmt->execute();

    
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo("Exercise Name: ".$row["exerciseName"]."<br>");
        echo("Description: ".$row["description"]."<br>");
        echo("Demo Image: ".$row["demoImage"]."<br>");
    }

    


}else{
    include ('connect-db.php');
    $stmt = $pdo->prepare("SELECT `firstName` FROM `user`");
    $stmt->execute();
    echo("List of All the users:"."<br>");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
        echo($row["firstName"]);
        echo("<br>");
    }
}
?>


