<?php
require_once('../../../Registration/Database.php');



$id = $_GET['id'];

/* if (isset($_POST) & !empty($_POST)) {
    $user_id = ($_POST['uid']);
    $house_id = ($_POST['hid']);

    $query = "SELECT * FROM `requests` where `house_id` = . $house_id";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
    $num_of_rows = mysqli_num_rows($result);
	if ($num_of_rows > 0) {
		// output data of each row
		while ($num_of_rows > 0) {
			$num_of_rows--;
        }    

        } else { */
    // Execute query
    $query1 = "INSERT INTO `requests` (user_id, house_id, request_start, request_end) 
    VALUES ('$user_id', '$house_id', '$request_start', '$request_end')"; 
    $res = mysqli_query($conn, $query1);
    if ($res) {
        // header('location: index.php');
        echo 'House Rented Successfully';
    } else {
        echo 'Failed';
        // print_r($res);
    }
 //}
 //}
