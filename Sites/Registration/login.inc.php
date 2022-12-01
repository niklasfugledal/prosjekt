<?php

include "Database.php";
session_start();


if (isset($_POST['email']) && isset($_POST['user_password'])) {

    function validate($data)
    {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;
    }

    $email = validate($_POST['email']);

    $password = validate($_POST['user_password']);

    if (empty($email)) {

        header("Location: login.php?error=email is required");

        exit();
    } else if (empty($password)) {

        header("Location: login.php?error=password is required");

        exit();
    } else {

        $sql = "SELECT * FROM registration WHERE email='$email' AND user_password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email && $row['user_password'] === $password) {

                echo "Logged in!";

                $_SESSION['email'] = $row['email'];

                $_SESSION['user_password'] = $row['user_password'];

                $_SESSION['id'] = $row['id'];

                header("Location: index.php");

                exit();
            } else {

                header("Location: login.php?error=Feil email eller passord!");

                exit();
            }
        } else {

            header("Location: login.php?error=Feil email eller passord!");

            exit();
        }
    }
} else {

    header("Location: index.php");

    exit();
}