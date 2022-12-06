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

	$ReadSql = "SELECT DISTINCT 
	records.id as id,
	houses.id as houseId,
	houses.location as location,
	houses.owner as owner,
	houses.price as price,
	houses.owner_email as owner_email,
	users.name as name,
	users.email as user_email
	FROM records
	JOIN houses
	ON records.house_id = houses.id
	JOIN users
	ON records.user_id = users.id";
	
	$res = mysqli_query($conn, $ReadSql);	

?>

<?php require('../../includes/header.php') ?>
<div class="container-fluid my-4">
	<div class="row my-2">
		<h2>UiA Hybel - Utleieoversikt</h2>
	</div>
	<table class="table ">
		<thead>
			<tr>
				<th>ID</th>
				<th>Hybel ID</th>
				<th>Leietaker</th>
				<th>Leietakers Email</th>
				<th>Lokasjon</th>
                <th>Pris</th>
				<th>Hybeleier</th>
				<th>Hybeleiers Email</th>
				<th>Handlinger</th>
			</tr>
		</thead>
		<tbody>
			<?php

			while ($data = mysqli_fetch_assoc($res)) {
			?>
				<tr>
					<th scope="row"><?php echo $data['id']; ?></th>
					<td><?php echo $data['houseId']; ?></td>
					<td><?php echo $data['name']; ?></td>
					<td><?php echo $data['user_email']; ?></td>
					<td><?php echo $data['location']; ?></td>
					<td><?php echo $data['price']; ?></td>
					<td><?php echo $data['owner']; ?></td>
					<td><?php echo $data['owner_email']; ?></td>

					<td>
						<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal<?php echo $data['id']; ?>">Slett</button>

						<!-- Modal -->
						<div class="modal fade" id="myModal<?php echo $data['id']; ?>" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Slett</h5>
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