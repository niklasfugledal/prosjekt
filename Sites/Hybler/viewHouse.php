<?php
require_once('');


// Initialize the session
session_start();

?>
<?php require('includes/header.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<div class="container text-center">    
  <h3>Leilighetsinformasjon</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="<?= $server; ?>img/house/<?php echo $r['image']; ?>" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
	 
	 <?php
	function getHouseById($house_id){
    global $conn;
    $query = "SELECT * FROM `houses` WHERE id= " . $house_id;
    $result = mysqli_query($conn, $query);
	$num_of_rows = mysqli_num_rows($result);
	if ($num_of_rows > 0) {
		// output data of each row
		while ($num_of_rows > 0) {
			$num_of_rows--;
			$r = mysqli_fetch_assoc($result);
    		
	}
}
}
	?>
	</div>

    <div class="col-sm-4"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
  </div>
</div><br>

</body>
</html>	

<?php require('includes/footer.php') ?>