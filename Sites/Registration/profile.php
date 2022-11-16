<?php

session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Profile Page</title>
    <h2>Profil</h2>
</head>

<body>
    
        <div class="wrapper">
            <form action="" method="post">
                <div class="inputBox">
                    <label for="fullName">Fult Navn</label>
                    <input type="text" id="full_name" name="full_name" required>
                </div>
                <div class="inputBox">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="inputBox">
                    <label for="password">Passord</label>
                    <input type="password" id="password" name="pass1" required>
                </div>
                <div class="inputBox">
                    <label for="bpassword">Bekreft passord</label>
                    <input type="password" id="bpassword" name="pass2" required>
                </div>
                <div class="inputBox">
                    <label for="photo">Profil Bilde</label>
                    <input type="file" accept="image/*" id="photo" name="photo" required>
                </div>
                <div class="inputBox">
                    <button type="submit" class="btn">Oppdater profil</button>
                <div class ="profile-page">
                    
                </div>
            </form>
        </div>
    </div>

</body>

</html>