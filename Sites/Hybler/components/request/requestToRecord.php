<?php
session_start();

require_once('../../../Registration/Database.php');

$house_Id = $_GET['houseId'];
$user_id = $_SESSION['id'];
echo($house_Id);
echo($user_id);

$getRequerstRowQuery = "select * from requests where house_id ='$house_Id' and user_id='$user_id'";
$res2 = mysqli_query($conn, $getRequerstRowQuery);
$requestRowResult = mysqli_fetch_assoc($res2);

$rent_start = $requestRowResult['request_start'];
$rent_end = $requestRowResult['request_end'];

$query1 = "INSERT INTO `records` (user_id, house_id, rent_start, rent_end) 
    VALUES ('$user_id', '$house_Id', '$rent_start', '$rent_end')";

echo ($query1);
    $res = mysqli_query($conn, $query1);
    if ($res) {
        // sette den gamle raden fra requests
        $DelSql = "DELETE FROM `requests` WHERE house_id= '$house_Id' and user_id= '$user_id' ";
        $res = mysqli_query($conn, $DelSql);

        if($res){
            echo 'House Rented Successfully';
            //header redirect

        }else{
            echo 'Kunne ikke slette requests';
        }

    } else {
        echo 'Failed';
    }


