<?php
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "Du må logge inn først!";
	header('location: log-in.php');
}
// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: log-in.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Hjemmeside</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>
<body>
	   <!--Navbar-->
	   <header>
        <div class="nav container">
            <!-- logo -->
            <a href="indexx.php" class="logo"><i class='bx bx-home'></i>Uia hybel</a>
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
		<h2>Hjemmeside</h2>
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
			<img src="./Assets/Images/user.jpg">

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="indexx.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>

	<h1>Bruker informasjon</h1>
<div class="header">
        <h3>Please Fill-out All Fields</h3>
        <form method="post" action="#" >
          <div class="input-group">
            <label>Brukernavn</label>
            <input type="text" name="username" placeholder="Enter your Fullname" value="<?php echo $row['username']; ?>" required />
          </div>
          <div class="input-group">
            <label>Email</label>
            <input type="text" name="email" placeholder="Enter your Gender" required value="<?php echo $row['email']; ?>" />
          </div>
          <div class="input-group">
            <label>Adresse</label>
            <input type="text" name="adress" placeholder="Enter your Age" value="<?php echo $row['adress']; ?>">
          </div>
          <div class="input-group">
            <label>Telefonnummer</label>
            <input type="tel" name="cell" required placeholder="Enter your Address" value="<?php echo $row['cell']; ?>"></textarea>
          </div>
		  <div class="input-group">
            <label>Fødselsdato</label>
            <input type="date" name="bday" required placeholder="Enter your Address" value="<?php echo $row['bday']; ?>"></textarea>
          </div>
          <div class="input-group">
            <input type="submit" name="submit" class="btn">
          </div>
        </form>
      </div>
</body>
</html>

<?php
      if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $adress = $_POST['adress'];
        $cell = $_POST['cell'];
		$bday = $_POST['bday'];

      $query = "UPDATE users SET username = '$username',
                      email = '$email', adress = $adress, cell = '$cell', bday = '$bday'
                      WHERE user_id = '$id'";
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "indexx.php";
        </script>
        <?php
             }               
?>