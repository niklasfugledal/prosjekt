<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logg inn</title>
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
            <a href="sign-up.php" class="btn">Registrer</a>
        </div>

    </header>
    <!-- Logg inn -->
    <div class="login container">
        <div class="login-container">
            <h2>Logg inn for å fortsette</h2>
            <p>Logg inn med dataen du brukte <br> når du registrerte deg.</p>
            <!--Logg inn form-->
            <form action="authenticate.php" method="post">
                <span>Legg til din email</span>
                <input type="text" name="email" placeholder="dinmail@gmail.com" required>

                <span>Skriv inn passord</span>
                <input type="password" name="user_password" placeholder="Passord" required>

                <input type="submit" value="Logg inn" class="buttom">
                <a href="#">Glemt passord?</a>


            </form>
            <a href="sign-up.php" class="btn">Registrer nå</a>
        </div>
        <!-- logg inn img -->
        <div class="login-image">
            <img src="Computer login-rafiki.png" alt="">
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