<?php include('functions.php') ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Logg inn</title>
	
	<!-- LINK TIL CSS-->
	<link rel="stylesheet" href="./css/style.css">
	<!-- Box ikoner-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>

<body>

	<!--Navbar-->
	<header>
		<div class="nav container">
			<!-- logo -->
			<a href="indexx.php" class="logo"><i class='bx bx-home'></i>Uia hybel</a>

			<!-- Logg inn knapp -->
			<a href="register.php" class="btn">Registrer</a>
		</div>
	</header>

		<div class="login container">
			<div class="login-container">
				<h2>Logg inn for å fortsette</h2>
				<p>Logg inn med dataen du brukte <br> når du registrerte deg.</p>
				
				<!--Logg inn form-->
				<form action="log-in.php" method="post">
					<?php echo display_error(); ?>

					<span>Legg til din email</span>
					<input type="text" name="username" placeholder="Din email" required>

					<span>Skriv inn passord</span>
					<input type="password" name="password" placeholder="Ditt passord" required>

					<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>

				</form>

				<a href="register.php" class="btn">Registrer nå</a>
			</div>
			<!-- logg inn img -->
			<div class="login-image">
				<img src="./Assets/Images/Computer login-rafiki.png" alt="">
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