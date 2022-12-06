<?php
session_start();

require_once('../../../DB/Database.php');

$house_Id = $_GET['houseId'];
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
        
        $DelSql = "DELETE FROM `requests` WHERE house_id= '$house_Id' and user_id= '$user_id' ";
        $res = mysqli_query($conn, $DelSql);

        if($res){
            echo 'Leiekontrakten er overført til siden "Hvem leier hos deg?"';
            header("location: requestHouse.php");

        }else{
            echo 'Kunne ikke slette requests';
        }

    } else {
        echo 'Failed';
    }


