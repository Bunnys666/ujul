<?php 
	include("connect.php");
	
	$username = $_POST['fusername'];
	$password = $_POST['fpassword'];

	$query = mysqli_query($connect,"SELECT * FROM user WHERE username='$username' and password='$password'");
	$data = mysqli_fetch_array($query);

    //data 1 harus admin

	if ($data[1] == 'admin') {
		echo('masuk');
	} else {
	}
?>