<?php
require_once('../../../Registration/Database.php');

$user_id = ($_SESSION['id']);

$query1 = "INSERT INTO `records` ('$user_id', house_id, request_start, request_end) 
    VALUES ('$user_id', '$house_id', '$request_start', '$request_end')"; 
    $res = mysqli_query($conn, $query1);
    if ($res) {
        // header('location: index.php');
        echo 'House Rented Successfully';
    } else {
        echo 'Failed';
        // print_r($res);
    }

    ?>