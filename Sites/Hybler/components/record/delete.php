<?php

require_once('../../../Registration/Database.php');
session_start();

$id = $_GET['id'];
$DelSql = "DELETE FROM `records` WHERE id=$id";
$res = mysqli_query($conn, $DelSql);
if($res){
if($_SESSION['type'] == 'admin'){

	header('location: view.php');
}
if($_SESSION['type'] == 'owner'){

	header('location: ownerView.php');

}else{
	echo "Failed to delete";
}
}
