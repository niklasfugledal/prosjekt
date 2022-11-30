<?php
require_once('../../../Registration/Database.php');

$id = $_GET['id'];
$DelSql = "DELETE FROM `houses` WHERE id=$id";
$res = mysqli_query($conn, $DelSql);
if($res){
	header('location: view.php');
}else{
	echo "Failed to delete";
}
?>