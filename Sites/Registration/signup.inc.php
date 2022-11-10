<?php

session_start();


include_once "Database.php";

if($conn->connect_error)
{
    die('Connection failed : ' .$conn->connect_error);
}else{

    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $cell = $_POST['cell'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("INSERT INTO registration(fullName, email, password) values(?,?,?,?)");
    $stmt->bind_param("ssss", $fullName, $email, $password);
    $stmt->execute();
    echo "Registrering vellykket...";
    $_SESSION['fullName'] = $fullName;
    header("Location: index.php");


    $stmt->close();
    $conn->close();
 }


?>

