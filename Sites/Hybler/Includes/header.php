<?php

$server = 'http://' . $_SERVER['SERVER_NAME'] . '/prosjekt/sites/hybler/';

$user_logged = false;

?>
<!DOCTYPE html>
<html>

<head>
	<title>House Rental Management System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo $server; ?>headerstyle/header.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<style type="text/css">
		body {
			font: 14px sans-serif;
		}

		.wrapper {
			width: 350px;
			padding: 20px;
		}
	</style>
</head>

<body>
	<header class="d-flex w-100">
		<nav class="navbar navbar-expand-lg w-100 bg-light">
			<div class="navbar-collapse collapse justify-content-between">
				<ul class="navbar-nav" id="navbar">
					<li class="nav-item active">
						<a class="nav-link text-dark" href="<?php echo $server; ?>index.php">
							<i class="fa fa-home text-dark"></i> UiA Hybel </a>
					</li>

					<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
						$user_logged = true;
						if ($_SESSION['type'] == 'admin') { ?>
							<li class="nav-item">
								<a class="nav-link text-dark" href="<?php echo $server; ?>components/house/view.php">Alle leiligheter</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-dark" href="<?php echo $server; ?>components/record/view.php">Utleieoversikt</a>
							</li>
					<?php }
					} ?>

					<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
						$user_logged = true;
						if ($_SESSION['type'] == 'owner') { ?>
							<li class="nav-item">
								<a class="nav-link text-dark" href="<?php echo $server; ?>components/house/view.php">Dine leiligheter</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-dark" href="<?php echo $server; ?>components/record/ownerView.php">Hvem leier hos deg?</a>
							</li>
							
					<?php }
					} ?>

				</ul>
				
				<?php
				
				if ($user_logged) { ?>
					<input type="text" value="<?= $_SESSION['id'] ?>" id="userID" hidden />
				<?php }
				?>
				
				
					<?php
					if ($user_logged) { ?>

					
					<li class="nav-item mr-sm-2">
							<a class="nav-link btn btn-dark text-white" href="<?php echo $server; ?>components/user/profile.php"><span><i class="fa fa-sign-out text-white"></i></span>Profil</a>
					</li>


					<?php 
					if($_SESSION['type'] != 'renter'){ ?>
					<li class="nav-item mr-sm-2">
					<a class="nav-link btn btn-dark text-white" href="<?php echo $server; ?>components/request/requestHouse.php"><span><i class="fa fa-sign-out text-white"></i></span>Forespørsler</a>
					</li>
					<?php }
					?>

						<li class="nav-item mr-sm-2">
							<a class="nav-link btn btn-dark text-white" href="<?php echo $server; ?>components/user/logout.php"><span><i class="fa fa-sign-out text-white"></i></span>Logg ut</a>
						</li>
						
					<?php } else { ?>
						<li class="nav-item mr-sm-2">
							<a class="nav-link btn btn-primary text-white" href="<?php echo $server; ?>components/user/login.php"><span><i class="fa fa-sign-in text-white"></i></span> Logg inn</a>
						</li>
					<?php } ?>
					
				</ul>
			</div>
		</nav>
	</header>

	<div class="container-fluid page-container">