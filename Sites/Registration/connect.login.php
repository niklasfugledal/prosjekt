<?php

$fullName = $_POST['fullName'];
$email = $_POST['email'];
$cell = $_POST['cell'];
$password = $_POST['password'];

// Database connection

$conn = new mysqli('localhost', 'root', '', 'prosjekt');
if($conn->connect_error)
{
    die('Connection failed : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO registration(fullName, email, cell, password) values(?,?,?,?)");
    $stmt->bind_param("ssss", $fullName, $email, $cell, $password);
    $stmt->execute();
    echo "Registrering vellykket...";
    $stmt->close();
    $conn->close();
 }

?>

