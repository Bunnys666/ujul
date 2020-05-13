<?php 
	include('connect.php');
	$id = $_GET['id'];
	$jam_selesai = $_GET['jam_selesai'];
	mysqli_query($connect, "UPDATE laporan SET status='Lunas', jam_selesai=NOW(), total='150000' WHERE id=$id");
	header("Location:../1/admin/tabel.php");
 ?>