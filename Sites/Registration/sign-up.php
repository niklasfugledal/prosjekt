<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrer</title>
    <!-- LINK TIL CSS-->
    <link rel="stylesheet" href="style.css">
    <!-- Box ikoner-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>

<body>
    <!--Navbar-->
    <header>
        <div class="nav container">
            <!-- logo -->
            <a href="index.php" class="logo"><i class='bx bx-home'></i>Uia hybel</a>

            <!-- Logg inn knapp -->
            <a href="login.php" class="btn">Logg inn</a>
        </div>

    </header>
    <!-- Sign up  -->
    <div class="login container">
        <div class="login-container">
            <h2>Velkommen!</h2>
            <p>Allerede en bruker? <a href="login.php">Logg inn</a></p>
            <!--Logg inn form-->
            <form action="connect.login.php" method="post">
                <span>Fult navn</span>
                <input type="text" id="fullName" name = "fullName" value ="<?php if(isset($_POST["fullName"])){echo $_POST["fullName"];} ?>"placeholder="Ditt navn" required>
                <span>Legg til din email</span>
                <input type ="email" id="email" name ="email" value ="<?php if(isset($_POST["email"])){echo $_POST["email"];} ?>" placeholder="dinmail@gmail.com" required>
                <span>Mobilnummer</span>
                <input type="tel" id="cell" name = "cell" value ="<?php if(isset($_POST["cell"])){echo $_POST["cell"];} ?>" placeholder="Legg til ditt mobilnummer" required>
                <span>Skriv inn passord</span>
                <input type="password" id="password" name = "password" value = "<?php if(isset($_POST["password"])){echo $_POST["password"];} ?>" placeholder="Passord" required>
                <input type="submit" value="Registrer" class="buttom">

                <?php
                if(isset($_POST['submit']))
                {
                    header("Location: login.php");
                    die();
                }
                ?>


                <a href="login.php">Allerede en bruker?</a>
            </form>
            <a href="login.php" class="btn">Logg inn</a>
        </div>
        <!-- logg inn img -->
        <div class="login-image">
            <img src="Mobile login-rafiki.png" alt="">
        </div>
    </div>
   
    <!-- footer -->
    <section class="footer">
        <div class="footer-container container">
            <h2>UiA Hybel</h2>
            <div class="footer-box">
                <h3>Hurtigkoblinger</h3>
                <a href="#">UIA</a>
                <a href="#">Bygning</a>
                <a href="#">Priser</a>
            </div>
            <div class="footer-box">
                <h3>Adresser</h3>
                <a href="#">Kristiansand Campus</a>
                <a href="#">Grimstad Campus</a>
                <a href="#">Lund</a>
            </div>
            <div class="footer-box">
                <h3>Kontakt oss</h3>
                <a href="#">+47 47223242</a>
                <a href="#">uiahybel@uia.no</a>
                <div class="social">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--Copyright-->
    <div class="copyright">
        <p>&#169; UiA Hybel opphavsrett</p>
    </div>
</body>
</html>