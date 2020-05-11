<?php 
	setcookie("username", "", time() - 3600);
	header("Location:../1/admin/login");
 ?>