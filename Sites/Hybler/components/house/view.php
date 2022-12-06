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
	
	$email = $_SESSION["email"];

	if($_SESSION['type'] == 'owner') {
	$ReadSql = "SELECT * FROM `houses` where owner_email = '$email'";
	$res = mysqli_query($conn, $ReadSql);
	}
	else{
	
	$ReadSql = "SELECT * FROM `houses`";
	$res = mysqli_query($conn, $ReadSql);

	}

?>

<?php require('../../includes/header.php') ?>
<div class="container-fluid my-4">
	<div class="row my-2">
		<h2>UiA Hybel - Alle hybler</h2>
		<a href="add.php"><button type="button" class="btn btn-primary ml-4 pl-2">Legg til</button></a>
	</div>
	<table class="table ">
		<thead>
			<tr>
				<th>SN</th>
				<th>Location</th>
				<th>Price</th>
				<th>Description</th>
				<th>Long Description</th>
				<th>Owner</th>
				<th>Owner Email</th>
				<th>Owner Phone</th>
				<th>Primary Room</th>
				<th>Bedroom</th>
				<th>Floor</th>
				<th>Date Added</th>
				<th>Rent Start</th>
				<th>Rental End</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while ($data = mysqli_fetch_assoc($res)) {
				
			?>
				<tr>
					<th scope="row"><?php echo $data['id']; ?></th>
					<td><?php echo $data['location']; ?></td>
					<td><?php echo $data['price']; ?></td>
					<td><?php echo $data['description']; ?></td>
					<td><?php echo $data['long_description']; ?></td>
					<td><?php echo $data['owner']; ?></td>
					<td><?php echo $data['owner_email']; ?></td>
					<td><?php echo $data['owner_phone']; ?></td>
					<td><?php echo $data['primary_room']; ?></td>
					<td><?php echo $data['bedroom']; ?></td>
					<td><?php echo $data['floor']; ?></td>
					<td><?php
						$date = new DateTime($data['date_added']);
						echo $date->format('Y-m-d');
						?>
					</td>	
					<td><?php echo $data['rent_start']; ?></td>
					<td><?php echo $data['rent_end']; ?></td>

					<td>
						<a href="update.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-info">Endre</button></a>

						<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal<?php echo $data['id']; ?>">Slett</button>

						<!-- Modal -->
						<div class="modal fade" id="myModal<?php echo $data['id']; ?>" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Slett hybel</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p>Er du sikker på at du vil slette?</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Avbryt</button>
										<a href="delete.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-danger"> Ja, slett</button></a>
									</div>
								</div>

							</div>
						</div>

					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>



<?php require('../../includes/footer.php') ?>