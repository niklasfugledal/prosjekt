<?php
session_start();

require_once('../../../Registration/Database.php');

$house_Id = $_GET['houseId'];
<<<<<<< HEAD
$user_id = $_SESSION['id'];
echo($house_Id);
echo($user_id);

$getRequerstRowQuery = "select * from requests where house_Id ='$house_Id' and user_id='$user_id'";
$res2 = mysqli_query($conn, $getRequerstRowQuery);
$requestRowResult = mysqli_fetch_assoc($res2);

$rent_start = $requestRowResult['request_start'];
$rent_end = $requestRowResult['request_end'];

$query1 = "INSERT INTO `records` (user_id, house_Id, rent_start, rent_end) 
    VALUES ('$user_id', '$house_Id', '$rent_start', '$rent_end')";
    
    $res = mysqli_query($conn, $query1);
    if ($res) {
        // sette den gamle raden fra requests
        $DelSql = "DELETE FROM `requests` WHERE house_Id= '$house_Id' and user_id= '$user_id' ";
        $res = mysqli_query($conn, $DelSql);

        if($res){
            echo 'House Rented Successfully';
=======
$user_id = $_GET['userId'];


$getRequestRowQuery = "select * from requests where house_id ='$house_Id' and user_id='$user_id'";
$res2 = mysqli_query($conn, $getRequestRowQuery);
$requestRowResult = mysqli_fetch_assoc($res2);

$rent_start = $requestRowResult['request_start'];
$rent_end = $requestRowResult['request_end'];

$query1 = "INSERT INTO `records` (user_id, house_id, rent_start, rent_end) 
    VALUES ('$user_id', '$house_Id', '$rent_start', '$rent_end')";


    $res = mysqli_query($conn, $query1);
    if ($res) {
        // sette den gamle raden fra requests
        $DelSql = "DELETE FROM `requests` WHERE house_id= '$house_Id' and user_id= '$user_id' ";
        $res = mysqli_query($conn, $DelSql);

        if($res){
            echo 'Leiekontrakten er overført til siden "Hvem leier hos deg?"';
>>>>>>> main
            //header redirect

        }else{
            echo 'Kunne ikke slette requests';
        }

    } else {
        echo 'Failed';
    }


