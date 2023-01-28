<?php
// Connect to the database
$db = new PDO("mysql:host=localhost:3306;dbname=jobsandjob", "root", "Nithsih@1999");
// Get the data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Insert the data into the database
$stmt = $pdo->prepare("INSERT INTO userdata ( userName, userEmail, userPhone) VALUES ( :name, :email, :phone)");
$stmt->bindValue(':userName', $name, PDO::PARAM_STR);
$stmt->bindValue(':userEmail', $email, PDO::PARAM_STR);
$stmt->bindValue(':userPhone', $phone, PDO::PARAM_STR);
$stmt->execute();   
?>
