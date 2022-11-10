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

            <?php

            if (isset($_POST["submit"])) {
                // sjekker at formet er fylt ut og henter verdiene
                $user = $_POST["fullName"];
                $email = $_POST["email"];
                $pwdRepeat = $_POST["pass1"];
                //Sjekker om brukernavnet er tomt og om brukernavet inneholde tilatte symboler
                if (empty($user)) {
                    $user_err = "Brukernavnet kan ikke være tomt";
                } elseif (!preg_match('/^[a-zA-Z0-9 øæåØÆÅ]+$/', $user)) {
                    $user_err = "Brukernavnet kan kun inneholder bokstaver og tall";
                } else {

                    //Forbreder spørringen for å sjekke om brukernavnet allerede er i bruk
                    $quey = $conn->prepare("select * from registration where fullName = ?");
                    //Kobler parameterene i spøringen med verdiene hentet ut fra from-et.
                    $quey->bind_param("s", $user);
                    // utfører spørringen
                    $quey->execute();
                    // henter resultatet
                    $quey->store_result();
                    // sjekker antale rader
                    if ($quey->num_rows == 1) {
                        $user_err = "Brukernavnet er alt tatt";
                    }
                    // lukker spørringen
                    $quey->close();
                }

                if ($pwd !== $pwdRepeat) {
                    $pass_err = "Passordene må være like";
                }

                if (empty($user_err) and empty($pass_err)) {
                    //forbreder spørringen
                    $quey = $conn->prepare("insert into registration(fullName, email, password) values(?,?,?)");
                    // hasher passordet
                    $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    $quey->bind_param("ss", $user, $hashPwd);
                    // utfører spørringen
                    $quey->execute();

                    //lukker spørringen
                    $quey->close();
                    //luker tilkoblingen til db
                    $conn->close();
                    header("Location: login.php");
                }
            }

            ?>
            <?php include_once('Database.php'); ?>


            <form action="Database.php" method="post">
                <span>Fult navn</span>
                <input type="text" id="fullName" name="fullName" value="<?php if (isset($_POST["fullName"])) {
                                                                            echo $_POST["fullName"];
                                                                        } ?>" placeholder="Ditt navn" required oninvalid="this.setCustomValidity('Fyll inn brukernavn')" oninput="this.setCustomValidity('')" />
                <span class="invalide-feedback"> <?php echo isset($user_err) ? $user_err : null; ?> </span>


                <span>Legg til din email</span>
                <input type="email" id="email" name="email" value="<?php if (isset($_POST["email"])) {
                                                                        echo $_POST["email"];
                                                                    } ?>" placeholder="dinmail@gmail.com" required>

                <span>Passord</span>
                <div class="mb-2 form-floating">

                    <input type="password" class="form-control" placeholder="Password" name="pass1" required oninvalid="this.setCustomValidity('Fyll inn et passord')" oninput="this.setCustomValidity('')">
                    <span class="invalide-feedback"> <?php echo isset($pass_err) ? $pass_err : null; ?> </span>

                </div>

                <div class="mb-2 form-floating">
                    <span>Bekreft passord</span>
                    <input type="password" class="form-control" placeholder="Password" name="pass2" required oninvalid="this.setCustomValidity('Fyll inn et passord')" oninput="this.setCustomValidity('')">

                </div>

                <input type="submit" name="submit" value="Registrer" class="buttom">



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