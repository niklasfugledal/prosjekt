<?php
require_once('../Registration/Database.php');


// Initialize the session
session_start();
$house_id = $_GET['house'];
?>
<?php require('../Hybler/Hybel.inc/header.php');
     
?>


<?php
	  
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
    include('i../../Hybel.inc/houseInfo.php');
?>






<?php require('../Hybler/Hybel.inc/footer.php'); ?>