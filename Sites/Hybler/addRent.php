<?php
require_once('..\Registration/Database.php');


if (isset($_POST) & !empty($_POST)) {
    $user_id = ($_POST['uid']);
    $house_id = ($_POST['hid']);

    $query = "SELECT * FROM `records` where `house_id` = . $house_id";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
    $num_of_rows = mysqli_num_rows($result);
	if ($num_of_rows > 0) {
		// output data of each row
		while ($num_of_rows > 0) {
			$num_of_rows--;
        }    
        if($data['due_date'] > date('Y-m-d')) {
            die();
        } else {
    // Execute query
    $query1 = "INSERT INTO `records` (user_id, house_id) VALUES ('$user_id', '$house_id')";  // FIKS OPP I DUPLICATE PROBLEM
    $res = mysqli_query($conn, $query1);
    if ($res) {
        // header('location: index.php');
        echo 'House Rented Successfully';
    } else {
        echo 'Failed';
        // print_r($res);
    }
}
    }
}
