<?php
    echo("Exercise Name: ".$_POST['exercise']."<br>");
    echo("Description: ".$_POST['description']."<br>");
    
    $exerciseName = $_POST['exercise'];
    $description = $_POST['description'];

    $name = $_FILES['demoImg']['name'];
    $tmp_name = $_FILES['demoImg']['tmp_name'];
    $location = 'uploads/';
    
    if(!move_uploaded_file($tmp_name, $location.$name)){
        die('Error uploading the file!!!');
    }
    echo("The demonstration image file that you have uploaded: <br>");
?>
    <img src = "<?php 
                    echo($location.$name); 
                ?>" 
                height = "500"/>

<?php
    include ('connect-db.php');

    $pdo = new PDO($dsn,$dbUsername,$dbPassword);

    $stmt = $pdo->prepare("
                    INSERT INTO `exercise` (`exerciseId`,`exerciseName`,`demoImage`,`description`,`verificationStatus`,`createdDate`)
                    VALUES (NULL,'$exerciseName','$name','$description','1','0000-00-00');
    ");
    $stmt->execute();
?>
