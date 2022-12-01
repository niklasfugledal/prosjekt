<?php

require_once('../../../Registration/Database.php');

// Initialize the session
session_start();

if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['type'] == 'admin')) {
	echo "Unauthorized Access";
	return;
}

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
	$dir = "../../img/house/";
	$temp_name = $_FILES['image']['tmp_name'];
	if ($image != "") {
		if (file_exists($dir . $image)) {
			$image = time() . '_' . $image;
		}
		$fdir = $dir . $image;
		move_uploaded_file($temp_name, $fdir);
	}


	// Execute query
	$query = "INSERT INTO `houses` (
		location, 
		price, 
		description, 
		long_description,
		owner, 
		owner_email, 
		owner_phone, 
		primary_room, 
		bedroom,
		floor,
		rent_start,
		rent_end,
		image) 
		
		VALUES ('$location', '$price', '$description', '$long_description', '$owner','$owner_email','$owner_phone','$primary_room','$bedroom', '$floor', '$rent_start', '$rent_end', '$image')";

	$res = mysqli_query($conn, $query);
	if ($res) {
		header('location: view.php');
	} else {
		$fmsg = "Failed to Insert data.";
		print_r($res);
		// print_r($res->error_list);
	}
}
?>

<?php require_once('../../Hybel.inc/header.php') ?>

<div class="container">
	<?php if (isset($fmsg)) { ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
	<h2 class="my-4">Add New House</h2>

	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Location</label>
			<input type="text" class="form-control" name="location" value="" required />
		</div>
		<div class="form-group">
			<label>Price</label>
			<input type="text" class="form-control" name="price" value="" required />
		</div>
		<div class="form-group">
			<label>Short Description</label>
			<textarea type="text" class="form-control" name="description" value="" required></textarea>
		</div>
		<div class="form-group">
			<label>Long Description</label>
			<textarea type="text" class="form-control" name="description" value="" required></textarea>
		</div>
		<div class="form-group">
			<label>Owner</label>
			<textarea type="text" class="form-control" name="owner" value="" required></textarea>
		</div>
		<div class="form-group">
			<label>Owner Email</label>
			<textarea type="email" class="form-control" name="owner_email" value="" required></textarea>
		</div>
		<div class="form-group">
			<label>Owner Phone number</label>
			<textarea type="phone" class="form-control" name="owner_phone" value="" required></textarea>
		</div>
		<div class="form-group">
			<label>Primary room size</label>
			<textarea type="text" class="form-control" name="primary_room" value="" required></textarea>
		</div>
		<div class="form-group">
			<label>Bedroom size</label>
			<textarea type="text" class="form-control" name="bedroom" value="" required></textarea>
		</div>
		<div class="form-group">
			<label>Floor location</label>
			<textarea type="text" class="form-control" name="floor" value="" required></textarea>
		</div>
		<div class="form-group">
			<label>Rent Start</label>
			<input type="date" class="form-control" name="rent_start" value="" required></textarea>
		</div>
		<div class="form-group">
			<label>Rent end</label>
			<input type="date" class="form-control" name="rent_end" value="" required></textarea>
		</div>
		<div class="form-group">
			<label>Image</label>
			<input type="file" class="form-control-file" name="image" accept=".png,.gif,.jpg,.webp" required />
		</div>
		<input type="submit" class="btn btn-primary" value="Add House" />
	</form>


</div>

<?php require_once('../../Hybel.inc/footer.php') ?>