<?php

session_start();
if (!isset($_SESSION["id"])) {
    header("Location index.php");
}
include 'Database.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    </link>
    <title>Profile Page - Pure Coding</title>
</head>

<style>
    .profile-page {

        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: (var(--bg-color));
        color: (var(--main-color));
    }

    .wrapper {
        max-width: 500px;
        width: 100%;
        box-shadow: 0 0 5px, rgba(0, 0, 0, .10);
        margin: auto;
        background: white;
        border-radius: 4px;
        min-height: 600px;
        padding: 7rem;
    }

    .wrapper h2 {
        text-align: center;
        font-size: 2rem;
        margin-bottom: 1rem;
    }

    .wrapper .inputBox {
        width: 100%;
        height: 50px;
        margin-bottom: 1.3rem;
        position: relative;
    }

    .wrapper .inputBox input {
        width: 100%;
        height: 100%;
        border: 1px solid;
        outline: none;
        border-radius: 4px;
        padding: 1.5rem;
    }

    .wrapper .inputBox:last-child {
        margin-bottom: 0;
    }

    .wrapper button {
        padding: .7rem 2rem;
        margin-top: 2rem;
        display: block;
        width: 100%;
    }

    .wrapper .form {
        padding: 0;
    }
</style>

<body class="profile-page">
    <div class="wrapper">
        <p>Logge ut?
            <a href="logout.php">Klikk her</a>
        </p>
        <h2>Profile</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <?php
            

            if(isset($_SESSION['id'])) {
            $sql = "SELECT * FROM registration WHERE id = '{$_SESSION["id"]}'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                }
            }
        }
            ?>

                    <div class="inputBox">
                        <input type="text" id="full_name" name="full_name" placeholder="Fult navn" value = "<?php echo isset($_SESSION['fullName']);?>" required>
                    </div>
                    <div class="inputBox">
                        <input type="email" id="email" name="email" placeholder="Epost" value = "<?php echo isset($_SESSION['email']);?>"required>
                    </div>
                    <div class="inputBox">
                        <input type="password" id="password" name="password" placeholder="Passord" value = "<?php echo isset($_SESSION['user_password']);?>" required>
                    </div>
                    <div class="inputBox">
                        <input type="password" id="cpassword" name="cpassword" placeholder="Bekreft Passord" value = "<?php echo isset($_SESSION['user_password']);?>"required>
                    </div>
                    <div class="inputBox">
                        <label for="photo">Photo</label>
                        <input type="file" accept="image/*" id="photo" name="photo" required>
                    </div>

            <?php
            
            

            ?>


            <div>
                <button type="submit" name="submit" class="btn">Update Profile</button>
            </div>
        </form>
    </div>
</body>

</html>