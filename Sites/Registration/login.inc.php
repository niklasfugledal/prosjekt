<?php 

include "../../Includes/Database.php";

$errors = array(); 

if (isset($_POST["login_user"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    
        
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.html');
}
else 
{
    array_push($errors, "Wrong username/password combination");
    header('location: login2.php?error=pwnomatch');
    
}
}