<?php 
$connect2 = mysqli_connect('localhost','root','','futsal');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>
        
  <!-- Custom fonts for this template-->
  <link href="../admin/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../admin/template/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../admin/template/css/sb-admin.css" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <link rel="stylesheet" href="template/css/animate.css">
  


</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">overview</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      
      
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
         
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Log out</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-columns"></i>
          <span>Dashboard</span>
        </a>
      </li>
      
      <li class="nav-item">
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
      <!-- <li class="nav-item">
        <a class="nav-link" href="pdf.php" target="_BLANK">
        <i class="fas fa-plus-circle"></i>
          <span>print</span></a>
      </li> -->
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
		</ol>
		
		<?php 
      $qUser = mysqli_query($connect2,"SELECT * FROM laporan WHERE status='Lunas'");			
		 ?>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100 animated fadeInLeft slow">
              <div class="card-body">
                <div class="card-body-icon">
                  
                </div>
				<div class="mr-5">
                    <h5>Total Pemesanan Selesai</h5>
                </div>
				<br>
					<p stylesheet="font-size:20px;"><?php echo $qUser->num_rows; ?></p>
              </div>
			  <a class="card-footer text-white clearfix small z-1" href="tabel">
			  
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
    </div>
      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Futsal 2020</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

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
        <div class="modal-body">Klik logout jika anda ingin kembali ke halaman Awal.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../../connect/logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../admin/template/vendor/jquery/jquery.min.js"></script>
  <script src="../admin/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <!-- Page level plugin JavaScript-->
  <script src="../admin/template/vendor/chart.js/Chart.min.js"></script>
  <script src="../admin/template/vendor/datatables/jquery.dataTables.js"></script>
  <script src="../admin/template/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../admin/template/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../admin/template/js/demo/datatables-demo.js"></script>
  <script src="../admin/template/js/demo/chart-area-demo.js"></script>

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

  <script type="text/javascript">
  Swal.fire({
  title: 'HI ADMIN!, nice to see u again!.',
  width: 600,
  showConfirmButton: false,
  timer: 1500,
  padding: '3em',
  background: '#fff url(https://sweetalert2.github.io/images/trees.png)',
  backdrop: `
    rgba(0,0,123,0.4)
    url("https://sweetalert2.github.io/images/nyan-cat.gif")
    center left
    no-repeat
  `
});
  </script>
</body>

</html>
