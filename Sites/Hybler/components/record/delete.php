<?php

require_once('C:\xampp\htdocs\Prosjekt\IS-115-Prosjekt-1\Sites\Registration/Database.php');

$id = $_GET['id'];
$DelSql = "DELETE FROM `records` WHERE id=$id";
$res = mysqli_query($conn, $DelSql);
if($res){
	header('location: view.php');
}else{
	echo "Failed to delete";
}
