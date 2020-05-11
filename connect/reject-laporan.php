<?php 
	include('connect.php');
	$id = $_GET['id'];
	
	mysqli_query($connect, "UPDATE laporan SET status='Cancel' WHERE id=$id");

	header("Location:../1/admin/tabel.php");
 ?>