<?php include('functions.php') ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrer</title>

	<!-- LINK TIL CSS-->
	<link rel="stylesheet" href="./css/style.css">

	<!-- Box ikoner-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>

<body>

	<header>

		<div class="nav container">
			<!-- logo -->
			<a href="indexx.php" class="logo"><i class='bx bx-home'></i>Uia hybel</a>

			<!-- Logg inn knapp -->
			<a href="register.php" class="btn">Registrer</a>
		</div>
	</header>

	<!-- Sign up  -->
	<div class="login container">
		<div class="login-container">
			<h2>Velkommen!</h2>
			<p>Allerede en bruker? <a href="login.php">Logg inn</a></p>
			<!--Logg inn form-->


			<div class="header">
				<h2>Register</h2>
			</div>
			<form method="post" action="register.php">
				<?php echo display_error(); ?>

				<span>Fult navn</span>
				<input type="text" name="username" placeholder="Fult navn" value="<?php echo $username; ?>">

				<span>Email</span>
				<input type="email" name="email" placeholder="Din epost" value="<?php echo $email; ?>">

				<span>Adresse</span>
				<input type = "text" name ="adresse" placeholder="Din adresse" value ="">

				<span>Telefonnummer</span>
				<input type = "tel" name ="telefonnummer" placeholder="Ditt telefonnummer" value ="">

				<span>Fødselsdato</span>
				<input type = "date" name ="fdato" value ="">

				<span>Passord</span>
				<input type="password" name="password_1">

				<span>Bekreft passord</span>
				<input type="password" name="password_2">

				<button type="submit" class="btn" name="register_btn">Register</button>


				<p>
					Allerede en bruker? <a href="log-in.php">Logg inn</a>
				</p>
			</form>


			<!-- logg inn img -->
			<div class="login-image">
				<img src="./Assets/Images/Mobile login-rafiki.png" alt="">
			</div>
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