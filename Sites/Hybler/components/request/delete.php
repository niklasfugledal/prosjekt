<?php

require_once('../../../DB/Database.php');

$id = $_GET['id'];
$DelSql = "DELETE FROM `requests` WHERE id=$id";
$res = mysqli_query($conn, $DelSql);
if($res){
	header('location: requestHouse.php');
}else{
	echo "Failed to delete";
}
