<?php 
include('C:\xampp\htdocs\Prosjekt\Sites\Registration/functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "Du må logge inn først!";
	header('location: ../../../Sites/Registration/log-in.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../../../Sites/Registration/log-in.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../../Prosjekt/css/styles.css">
	<link rel="stylesheet" type="text/css" href="../../Prosjekt/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

	<style>
	.header {
		background: #003366;
		position: center;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
</head>
<body>
    <!--Navbar-->
    <header>
        <div class="nav container">
            <!-- logo -->
            <a href="../Sites/registration/index.php" class="logo"><i class='bx bx-home'></i>Uia hybel</a>
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
		</div>
</header>


	<div class="header">
		<h2>Admin - Hjemmeside</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<img src="../Assets/Images/admin.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'"style="color: red;">logout</a>
                       &nbsp; <a href="create_user.php"> + add user</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>