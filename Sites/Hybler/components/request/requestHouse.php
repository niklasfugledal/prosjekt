<?php

require_once('../../../Registration/Database.php');

// Initialize the session
session_start();

if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['type'] == 'admin' || 'owner')) {
	echo "Unauthorized Access";
	return;
}

$email = $_SESSION["email"];

if($_SESSION['type'] == 'owner') {
$ReadSql = "SELECT DISTINCT 
requests.id as id,
requests.house_id as houseId,
requests.user_id as userId,
requests.request_start as start,
requests.request_end as end,
houses.location as location,
houses.price as price,
users.email as user_email,
users.cell as user_cell,
users.name as name
FROM requests
JOIN houses
ON requests.house_id = houses.id
JOIN users
ON requests.user_id = users.id
WHERE houses.owner_email = '$email'";

$res = mysqli_query($conn, $ReadSql);

}

?>

<?php require('../../includes/header.php') ?>
<div class="container-fluid my-4">
	<div class="row my-2">
		<h2>UiA Hybel - Forespørsler</h2>
	</div>
	<table class="table ">
		<thead>
			<tr>
				<th>ID</th>
				<th>Hybel ID</th>
				<th>Bruker ID</th>
                <th>Leie starter</th>
                <th>Leie ender</th>
				<th>Lokasjon</th>
                <th>Pris</th>
                <th>Leietaker</th>
				<th>Leietakers Email</th>
				<th>Leietakers Tlf.</th>
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
					<td><?php echo $data['userId']; ?></td>
                    <td><?php echo $data['start']; ?></td>
					<td><?php echo $data['end']; ?></td>
                    <td><?php echo $data['location']; ?></td>
                    <td><?php echo $data['price']; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['user_email']; ?></td>
                    <td><?php echo $data['user_cell']; ?></td>		
                    
                    			

					<td>
						
						<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal<?php echo $data['id']; ?>">Godta</button>
						<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal<?php echo $data['id']; ?>">Slett</button>
						

						<!-- Modal slett -->
						<div class="modal fade" id="myModal<?php echo $data['id']; ?>" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Slett forespørsel</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p>Er du sikker på at du vil slette forespørselen?</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Avbryt</button>
										<a href="delete.php?id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-danger"> Ja, Slett</button></a>
									</div>
								</div>

							</div>
						</div>

						<!-- Modal godta -->
						<div class="modal fade" id="modal<?php echo $data['id']; ?>" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Godta forespørsel</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p>Er du sikker på at du vil godta forespørselen?</p>
									</div>
									<div class="modal-footer">

										<button type="button" class="btn btn-default" data-dismiss="modal">Avbryt</button>
										<a href="requestToRecord.php?houseId=<?php echo $data['houseId']; ?>"><button type="button" class="btn btn-primary"> Godta</button></a>
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