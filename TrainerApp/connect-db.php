<?php

$dsn = "mysql:host=dev.fast.sheridanc.on.ca;dbname=rajput0_TrainerApp";
$dbUsername = 'rajput0_trainerappuser';
$dbPassword = 'kO54@CHa4u!z';

// $dsn = "mysql:host=localhost;dbname=TrainerApp";
// $dbUsername = 'trainerappuser';
// $dbPassword = 'password';

$pdo = new PDO($dsn, $dbUsername, $dbPassword);

?>