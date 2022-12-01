<?php

require_once('../../../Registration/Database.php');

// Initialize the session
session_start();

if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['type'] == 'admin')) {
	echo "Unauthorized Access";
	return;
}

$id = $_GET['id'];

$SelSql = "SELECT * FROM `houses` WHERE id=$id";
$res = mysqli_query($conn, $SelSql);
$data = mysqli_fetch_assoc($res);


if (isset($_POST) & !empty($_POST)) {
	$location = ($_POST['location']);
	$price = ($_POST['price']);
	$description = ($_POST['description']);
	$long_description = ($_POST['long_description']);
	$owner = ($_POST['owner']);
	$owner_email = ($_POST['owner_email']);
	$owner_phone = ($_POST['owner_phone']);
	$primary_room = ($_POST['primary_room']);
	$bedroom = ($_POST['bedroom']);
	$floor = ($_POST['floor']);
	$rent_start =  ($_POST['rent_start']);
	$rent_end = ($_POST['rent_end']);
	// store n upload image
	$image = $_FILES['image']['name'];
	$dir = $path . "img/house/";
	$temp_name = $_FILES['image']['tmp_name'];
	if ($image != "") {
		if (file_exists($dir . $image)) {
			$image = time() . '_' . $image;
		}
		$fdir = $dir . $image;
		move_uploaded_file($temp_name, $fdir);
	}

	// Execute query
	$query = "UPDATE `houses` 
	SET location='$location',
		price='$price',
		description='$description',
		long_description='$long_description',
		owner='$owner',
		owner_email='$owner_email',
		owner_phone='$owner_phone',
		primary_room='$primary_room',
		bedroom='$bedroom',
		floor='$floor',
		rent_start='$rent_start',
		rent_end='$rent_end',
		image='$image'
	WHERE id='$id'";

	$res = mysqli_query($conn, $query); // get result
	if ($res) {
		header('location: view.php');
	} else {
		$fmsg = "Failed to Insert data.";
		// print_r($res);
	}
}
?>

<?php require_once('../../Hybel.inc/header.php') ?>

<div class="container">
	<?php if (isset($fmsg)) { ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

	<h2 class="my-4">Oppdater leilighetsinformasjon</h2>
	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Location</label>
			<input type="text" class="form-control" name="location" value="<?php echo $data['location']; ?>" required />
		</div>
		<div class="form-group">
			<label>Price</label>
			<input type="text" class="form-control" name="price" value="<?php echo $data['price']; ?>" required />
		</div>
		<div class="form-group">
			<label>Short Description</label>
			<input type="text" class="form-control" name="description" value="<?php echo $data['description']; ?>" required />
		</div>
		<div class="form-group">
			<label>Long Description</label>
			<textarea type="text" class="form-control" name="long_description" value="<?php echo $data['long_description']; ?>" required></textarea>
		</div>
		<div class="form-group">
			<label>Owner</label>
			<input type="text" class="form-control" name="owner" value="<?php echo $data['owner']; ?>" required />
		</div>
		<div class="form-group">
			<label>Owner Email</label>
			<textarea type="email" class="form-control" name="owner_email" value="<?php echo $data['owner_email']; ?>" required></textarea>
		</div>
		<div class="form-group">
			<label>Owner Phone number</label>
			<textarea type="phone" class="form-control" name="owner_phone" value="<?php echo $data['owner_phone']; ?>" required></textarea>
		</div>
		<div class="form-group">
			<label>Primary room size</label>
			<textarea type="text" class="form-control" name="primary_room" value="<?php echo $data['primary_room']; ?>" required></textarea>
		</div>
		<div class="form-group">
			<label>Bedroom size</label>
			<textarea type="text" class="form-control" name="bedroom" value="<?php echo $data['bedroom']; ?>" required></textarea>
		</div>
		<div class="form-group">
			<label>Floor location</label>
			<textarea type="text" class="form-control" name="floor" value="<?php echo $data['floor']; ?>" required></textarea>
		</div>
		<div class="form-group">
			<label>Rent Start</label>
			<input type="date" class="form-control" name="rent_start" value="<?php echo $data['rent_start']; ?>" required></textarea>
		</div>
		<div class="form-group">
			<label>Rent end</label>
			<input type="date" class="form-control" name="rent_end" value="<?php echo $data['rent_end']; ?>" required></textarea>
		</div>
		<div class="form-group">
			<label>Image</label>
			<input type="file" class="form-control-file" name="image" accept=".png,.gif,.jpg,.webp" required />
		</div>

		<input type="submit" class="btn btn-primary" value="Update" />
	</form>
</div>

<?php require_once('../../Hybel.inc/footer.php') ?>