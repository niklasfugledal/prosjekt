<?php
session_start();
require_once('../../../DB/Database.php');

$house_id = $_POST['houseID'];
$start = $_POST['start'];
$end = $_POST['end'];

$user_id = $_SESSION['id'];  



$query1 = "INSERT INTO `requests` (user_id, house_id, request_start, request_end) 
VALUES ('$user_id', '$house_id', '$start', '$end')";
$res = mysqli_query($conn, $query1);
if ($res) {
    echo 'House Rented Successfully';
    header("location: ../../viewHouse.php?house=" . $house_id);
} else {
    echo 'Failed';
    // print_r($res);
}





