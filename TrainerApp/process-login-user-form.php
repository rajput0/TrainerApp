<?php
    // echo("your Username is ".$_POST['username']."<br>");
    // echo("your Password is ".$_POST['password']);

    $username = $_POST["username"];
    $password = $_POST["password"];

include('connect-db.php');
$stmt = $pdo->prepare("SELECT count(*) FROM `user`
WHERE `firstName` = '$username' AND `password` = '$password';");
$stmt->execute(); 

$number_of_rows = $stmt->fetchColumn();

if($number_of_rows > 0){

    session_start();
	
	$stmt = $pdo->prepare("SELECT * FROM `user`
	WHERE `firstName` = '$username' AND `password` = '$password';");
	$stmt->execute(); 

	$row = $stmt->fetch(PDO::FETCH_ASSOC);
    $_SESSION["userId"] = $row["userId"];
    $_SESSION["userRole"] = $row["userRole"];
    
    
	header('Location:dashboard.php');

}else{
    echo('Access Denied! Incorrect email or password');
    echo($number_of_rows);
}


?>