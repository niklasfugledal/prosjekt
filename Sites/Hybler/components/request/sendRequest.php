<?php
session_start();
require_once('../../../Registration/Database.php');

$house_id = $_POST['houseID'];
$start = $_POST['start'];
$end = $_POST['end'];
<<<<<<< HEAD
=======

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
>>>>>>> main

$user_id = $_SESSION['id'];

<<<<<<< HEAD
echo $house_id ." ";

$query1 = "INSERT INTO `requests` (user_id, house_id, request_start, request_end) 
    VALUES ('$user_id', '$house_id', '$start', '$end')";
$res = mysqli_query($conn, $query1);
if ($res) {
    // header('location: index.php');
    echo 'House Rented Successfully';
} else {
    echo 'Failed';
    // print_r($res);
}
=======



>>>>>>> main
