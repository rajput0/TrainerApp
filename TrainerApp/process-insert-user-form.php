<?php

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $userRole = $_POST['userRole'];
    // $createdDate = $_POST['createdDate'];

    // echo("your first name: ".$fname."<br>");
    // echo("your last name: ".$lname."<br>");
    // echo("Full Name: ".$fname.$lname."<br>");
    // echo("Password: ".$password."<br>");
    // echo("your Email id: ".$email."<br>");
    // echo("user Role is: ".$userRole."<br>");

    include('connect-db.php');
    // $dsn = "mysql:host=localhost;dbname=trainerapp";
    // $dbUsername = 'trainerappuser';
    // $dbPassword = 'password';

    $pdo = new PDO($dsn, $dbUsername, $dbPassword);

    $stmt = $pdo->prepare("
    INSERT INTO `user` 
    (`userId`,`firstName`,`lastName`,`email`,`password`,`userRole`,`createdDate`) 
    VALUES (NULL, '$fname','$lname','$email','$password','$userRole','2019-08-15 00:00:00');
    ");
    $stmt->execute();

    header("Location: dashboard.php");
?>