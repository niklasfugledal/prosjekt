<?php
require_once('C:\xampp\htdocs\Prosjekt\IS-115-Prosjekt-1\Sites\Registration/Database.php');


if (isset($_POST) & !empty($_POST)) {
    $user_id = ($_POST['uid']);
    $house_id = ($_POST['hid']);

    // Execute query
    $query = "INSERT INTO `records` (user_id, house_id) VALUES ('$user_id', '$house_id')";  // FIKS OPP I DUPLICATE PROBLEM
    $res = mysqli_query($conn, $query);
    if ($res) {
        // header('location: index.php');
        echo 'House Rented Successfully';
    } else {
        echo 'Failed';
        // print_r($res);
    }
}
