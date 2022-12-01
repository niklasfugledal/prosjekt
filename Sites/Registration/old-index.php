<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsiv Hybelutleie for Studenter ved UiA</title>
    <!-- LINK TIL CSS-->
    <link rel="stylesheet" href="../../../../css/style.css">
    <!-- Box ikoner-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>

<body>
    <!--Navbar-->
    <header>
        <div class="nav container">
            <!-- logo -->
            <a href="index.php" class="logo"><i class='bx bx-home'></i>Uia hybel</a>
            <!--Menu icon-->
            <input type="checkbox" name="" id="menu">
            <label for="menu" <i class='bx bx-menu'></i></label>
            <!-- Nav list-->
            <ul class="navbar">
                <li><a href="#Hjem">Hjem</a></li>
                <li><a href="#Omoss">Om oss</a></li>
                <li><a href="#Utleie">Utleie</a></li>
                <li><a href="#Hybler">Hybler</a></li>
            </ul>
            <!-- Logg inn knapp -->
            <a href="log-in.php" class="btn">Logg inn</a>

            <?php
            if (isset($_SESSION['loggedin']) && isset($_SESSION['username']))
            {
                $user_logged = true;
            
                    if ($user_logged) { ?>
                        <li class="nav-item mr-sm-2">
                            <a class="btn" href="components/user/logout.php"><span><i class="btn"></i></span>Logg ut</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item mr-sm-2">
                            <a class="btn" href="components/user/login.php"><span><i class="btn"></i></span>Logg inn</a>
                        </li>
                    <?php } 
                    }?>
            
        </div>

    </header>
    <!-- Hjem -->
    <section class="home container" id="home">
        <div class="home-text">
            <h1>Finn den perfekte <br> hybelen for akkurat <br> deg!</h1>
            <a href="register.php" class="btn">Registrer her</a>
        </div>
    </section>
    <!--om oss-->
    <section class="about container" id="about">
        <div class="about-img">
            <img src="/Assets/Images/about.jpg" alt="">
        </div>
        <div class="about-text">
            <span>Om oss</span>
            <h2>Vi gir deg den beste <br> hybelen for deg!</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus blanditiis dignissimos at commodi, dolores saepe.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis, quod.</p>
            <a href="#" class="btn">Ler mer</a>
        </div>
    </section>
    <!--sales-->
    <section class="sales container" id="sales">
        <!--Box 1-->
        <div class="box">
            <i class='bx bx-user'></i>
            <h3>Din profil</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, ipsum?</p>
        </div>
        <!--Box 2-->
        <div class="box">
            <i class='bx bx-desktop'></i>
            <h3>Oversikt over dine betalinger</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, ipsum?</p>
        </div>
        <!--Box 3-->
        <div class="box">
            <i class='bx bx-home-alt'></i>
            <h3>Din hybel</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, ipsum?</p>
        </div>
    </section>
    <!--properties-->
    <section class="properties container" id="properties">
        <div class="heading">
            <span>Recent</span>
            <h2>Våre hybler</h2>
            <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Culpa, nam?</p>
        </div>
        <div class="properties-container container">
            <!-- Box 1 -->
            <div class="box">
                <img src="/Assets/Images/enkeltmann hybel.png" alt="">
                <h3>3699kr mnd</h3>
                <div class="content">
                    <div class="text">
                        <h3>Enkeltmanns rom</h3>
                        <p>På Campus</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>1</span></i>
                        <i class='bx bx-bath'><span>1</span></i>
                    </div>
                </div>
            </div>
            <!-- Box 2 -->
            <div class="box">
                <img src="/Assets/Images/studenthybel enkeltmann.png" alt="">
                <h3>3699kr mnd</h3>
                <div class="content">
                    <div class="text">
                        <h3>Enkeltmanns rom</h3>
                        <p>På Campus</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>1</span></i>
                        <i class='bx bx-bath'><span>1</span></i>
                    </div>
                </div>
            </div>
            <!-- Box 3 -->
            <div class="box">
                <img src="/Assets/Images/enkeltmann hybel.png" alt="">
                <h3>3699kr mnd</h3>
                <div class="content">
                    <div class="text">
                        <h3>Enkeltmanns rom</h3>
                        <p>På Campus</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>1</span></i>
                        <i class='bx bx-bath'><span>1</span></i>
                    </div>
                </div>
            </div>
            <!-- Box 4 -->
            <div class="box">
                <img src="/Assets/Images/enkeltmann hybel.png" alt="">
                <h3>3699kr mnd</h3>
                <div class="content">
                    <div class="text">
                        <h3>Enkeltmanns rom</h3>
                        <p>På Campus</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>1</span></i>
                        <i class='bx bx-bath'><span>1</span></i>
                    </div>
                </div>
            </div>
            <!-- Box 5 -->
            <div class="box">
                <img src="/Assets/Images/enkeltmann hybel.png" alt="">
                <h3>3699kr mnd</h3>
                <div class="content">
                    <div class="text">
                        <h3>Enkeltmanns rom</h3>
                        <p>På Campus</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>1</span></i>
                        <i class='bx bx-bath'><span>1</span></i>
                    </div>
                </div>
            </div>
            <!-- Box 6 -->
            <div class="box">
                <img src="/Assets/Images/enkeltmann hybel.png" alt="">
                <h3>3699kr mnd</h3>
                <div class="content">
                    <div class="text">
                        <h3>Enkeltmanns rom</h3>
                        <p>På Campus</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed'><span>1</span></i>
                        <i class='bx bx-bath'><span>1</span></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Nyhetsbrev-->
    <section class="newsletter container">
        <h2>Har du noen spørsmål? <br> la oss hjelpe deg</h2>
        <form action="">
            <input type="email" name="" id="email-box" placeholder="dinmail@gmail.com" required>
            <input type="submit" value="Send" class="btn">
        </form>
    </section>
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