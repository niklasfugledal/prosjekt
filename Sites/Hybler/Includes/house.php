<div class="col-md-4 col-sm-6 my-4">
	<div class="card m-auto house" style="width: 20rem;">
		<img class="card-img-top" src="<?= $server; ?>img/house/<?php echo $data['image']; ?>" alt="Card Image Caption">
		<div class="card-body">
			<h4 class="card-title"><?php echo $data['location']; ?></h4>
			<p class="card-text"><?php echo $data['description']; ?></p>

			<div style="display: flex; justify-content: space-between; align-items: center;">
				<div style="font-weight: 600;"><span class="price"><?php echo $data['price']; ?>,-</span></div>

				<!-- Info-button -->
				<button data-houseid="<?php echo $data['id']; ?>" type="button" class="btn btn-success rent-btn" onclick="location='../hybler/viewHouse.php?house=<?php echo $data['id']; ?>'">
					<span id="<?php echo $data['id']; ?>" class="text-white">
						
						<i class="fa-sharp fa-solid fa-magnifying-glass"></i>
						Info
					</span>
				</button>
			</div>
		</div>
	</div>
</div>

