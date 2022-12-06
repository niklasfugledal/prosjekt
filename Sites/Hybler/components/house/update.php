<head>
    <title>Rediger</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<?php

require_once('../../../DB/Database.php');

// Initialize the session
session_start();

if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['type'] == 'admin' || 'owner')) {
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

<?php require_once('../../includes/header.php') ?>

<div class="container">
	<?php if (isset($fmsg)) { ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

	<h2 class="my-4">Oppdater leilighetsinformasjon</h2>
	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Sted</label>
			<input type="text" class="form-control" name="location" value="<?php echo $data['location']; ?>" required />
		</div>
		<div class="form-group">
			<label>Pris</label>
			<input type="text" class="form-control" name="price" value="<?php echo $data['price']; ?>" required />
		</div>
		<div class="form-group">
			<label>Kort Beskrivelse</label>
			<input type="text" class="form-control" name="description" value="<?php echo $data['description']; ?>" required />
		</div>
		<div class="form-group">
			<label>Lang Beskrivelse</label>
			<input type="text" class="form-control" name="long_description" value="<?php echo $data['long_description']; ?>" required></input>
		</div>
		<div class="form-group">
			<label>Eier</label>
			<input type="text" class="form-control" name="owner" value="<?php echo $data['owner']; ?>" required />
		</div>
		<div class="form-group">
			<label>Eiers Email</label>
			<input type="email" class="form-control" name="owner_email" value="<?php echo $data['owner_email']; ?>" required></input>
		</div>
		<div class="form-group">
			<label>Eiers Telefonnummer</label>
			<input type="phone" class="form-control" name="owner_phone" value="<?php echo $data['owner_phone']; ?>" required></input>
		</div>
		<div class="form-group">
			<label>Primærrom Størrelse</label>
			<input type="text" class="form-control" name="primary_room" value="<?php echo $data['primary_room']; ?>" required></input>
		</div>
		<div class="form-group">
			<label>Soverom Størrelse</label>
			<input type="text" class="form-control" name="bedroom" value="<?php echo $data['bedroom']; ?>" required></input>
		</div>
		<div class="form-group">
			<label>Etasje</label>
			<input type="text" class="form-control" name="floor" value="<?php echo $data['floor']; ?>" required></input>
		</div>
		<div class="form-group">
			<label>Leie Start</label>
			<input type="date" class="form-control" name="rent_start" value="<?php echo $data['rent_start']; ?>" required></input>
		</div>
		<div class="form-group">
			<label>Leie Slutt</label>
			<input type="date" class="form-control" name="rent_end" value="<?php echo $data['rent_end']; ?>" required></input>
		</div>
		<div class="form-group">
			<label>Bilde</label>
			<input type="file" class="form-control-file" name="image" accept=".png,.gif,.jpg,.webp" required />
		</div>

		<input type="submit" class="btn btn-primary" value="Oppdater" />
	</form>
</div>

<?php require_once('../../includes/footer.php') ?>