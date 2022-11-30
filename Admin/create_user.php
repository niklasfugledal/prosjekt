<?php 
include_once('C:\xampp\htdocs\Prosjekt\Includes/Database.php');
include_once('C:\xampp\htdocs\Prosjekt\Sites\Registration/functions.php');	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL - Create user</title>
	<link rel="stylesheet" type="text/css" href="../../Prosjekt/css/styles.css">
	<link rel="stylesheet" type="text/css" href="../../Prosjekt/css/style.css">
	
	<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - create user</h2>
	</div>
	
	<form method="post" action="create_user.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class = "input-group">
			<label>Adresse</label>
			<input type = "text" name ="adress" value="<?php echo $adress; ?>">
		</div>
		<div class = "input-group">
			<label>Telefonnummer</label>
			<input type = "tel" name ="cell" value="<?php echo $cell; ?>">
		</div>
		<div class = "input-group">
			<label>Fødselsdato</label>
			<input type = "date" name ="bday" value="<?php echo $bday; ?>">
		</div>
		<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn"> + Create user</button>
		</div>
	</form>
</body>
</html>