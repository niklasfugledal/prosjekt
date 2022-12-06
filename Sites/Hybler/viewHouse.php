
<?php
require_once('../DB/Database.php');


// Initialize the session
session_start();
$house_id = $_GET['house'];

 require('includes/header.php');
      

	  
    $query = "SELECT * FROM `houses` WHERE id = " . $house_id;
    $result = mysqli_query($conn, $query);
    $num_of_rows = mysqli_num_rows($result);
	  if ($num_of_rows > 0) {
		// output data of each row
		while ($num_of_rows > 0) {
			$num_of_rows--;
    }
    } 
    $data = mysqli_fetch_assoc($result);
    include('includes/houseInfo.php');


require('includes/footer.php') 

?>