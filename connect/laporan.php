<?php 

	include("connect.php");
	
	$username = $_POST['fusername'];
	$no_hp = $_POST['fno_hp'];
	$jam = $_POST['fjam'];
	$jenis_lapangan = $_POST['fjenis_lapangan'];
	$total = $_POST['ftotal'];

	$query = mysqli_query($connect,"INSERT INTO laporan VALUES ('','$username','$no_hp','$jam',NOW(),'$jenis_lapangan' ,NOW(),'$total','Belum Lunas')");
	
	if ($query) {
		echo('masuk');
	} else {
		header("Location: pemesanan");
	}

 ?>