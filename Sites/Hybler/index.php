<?php
require_once('C:\xampp\htdocs\Prosjekt\Includes/Database.php');


// Initialize the session
session_start();

?>
<?php require('C:\xampp\htdocs\Prosjekt\Sites\Hybler\Hybel.inc/header.php') ?>
<div class="d-flex mt-4 mx-4">
	<h3 class="row">Welcome,&nbsp;
		<b><?php // check user login and output username
			if ($user_logged) {
				$user_id = ($_SESSION['id']);
				$select_sql = "SELECT name FROM `users` WHERE id='$user_id'";
				$result = mysqli_query($conn, $select_sql);
				if ($result->num_rows > 0) {
					$row = mysqli_fetch_assoc($result);
					echo $row["name"];
					if (!$row["name"]) {
						echo "Guest";
					}
				}
			} else {
				echo "Guest";
			}
			?></b>
	</h3>
</div>

<div class="d-flex m-2">
	Choose a house to rent.
</div>

<div class="d-flex my-2">
	<?php // output success or failed message.
	if (isset($smsg)) { ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
	<?php if (isset($fmsg)) { ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
</div>

<div class="m-2 text-primary" id="statusBox"></div>

<div class="row main-section">
	<?php
	$SelSql = "SELECT * FROM `houses`";
	$res = mysqli_query($conn, $SelSql);
	$num_of_rows = mysqli_num_rows($res);
	if ($num_of_rows > 0) {
		// output data of each row
		while ($num_of_rows > 0) {
			$num_of_rows--;
			$r = mysqli_fetch_assoc($res);
			include('includes/house.php');
		}
	} else {
		echo '<div class="container">No Houses Available</div>';
	}
	?>
</div>

<?php require('includes/footer.php') ?>