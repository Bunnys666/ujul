<?php 

$con2 = mysqli_connect('localhost', 'root','','futsal');

for($i=1;$i<=12;$i++){
	if ($i < 10) {
		$BulanQuery[] = mysqli_query($con2,"SELECT * FROM laporan WHERE tgl_laporan BETWEEN '2020-0".$i."-00' AND '2020-0".$i."-30'");
	} else {
		$BulanQuery[] = mysqli_query($con2,"SELECT * FROM laporan WHERE tgl_laporan BETWEEN '2020-".$i."-00' AND '2020-".$i."-30'");
	}
};

echo "<script>";
echo "var T2020 = [";
for($i=0;$i<=11;$i++){
	if ($i!=11) {
		echo $BulanQuery[$i]->num_rows.",";
	} else {
		echo $BulanQuery[$i]->num_rows;
	}
};

echo "];";
echo "console.log(T2020)";
echo "</script>";
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Graphic | Admin</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

  <!-- Custom fonts for this template-->
  <link href="../admin/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../admin/template/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../admin/template/css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="template/css/animate.css">
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">overview </a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
   
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="dashboard">
        <i class="fas fa-columns"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="charts">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Grafik</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tabel">
          <i class="fas fa-fw fa-table"></i>
          <span>Laporan</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pemesanan">
        <i class="fas fa-plus-circle"></i>
          <span>Tambah Laporan</span></a>
      </li>
    </ul>

    <div id="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="../admin/AdminOverview">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Chart</li>
        </ol>
        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Graphic Pemesanan (Tahunan)</div>
          <div class="card-body animated fadeInLeft slow">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>
<br><br>
  </div>
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">klik logout jika anda ingin kembali ke halaman Awal</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../../connect/logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="template/vendor/jquery/jquery.min.js"></script>
  <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->

  <!-- Page level plugin JavaScript-->
  <script src="template/vendor/chart.js/Chart.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="template/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="template/js/demo/chart-area-demo.js"></script>
</body>
</html>
