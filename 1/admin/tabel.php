
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=0, shrink-to-fit=no">
  <title>Admin | Tabel user</title>
  
  <!-- Custom fonts for this template-->
  <link href="../admin/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../admin/template/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../admin/template/css/sb-admin.css" rel="stylesheet">

  <!-- animate css lurd -->  
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">overview</a>
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
          <a class="dropdown-item" href="../proses/logout.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
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
        
      <li class="nav-item">
        <a class="nav-link" href="charts">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Grafik</span></a>
      </li>

      <li class="nav-item active">
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
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">List Pemesanan</li>
        </ol>

        <?php 
        $con2 = mysqli_connect('localhost', 'root','','futsal');
        $user=mysqli_query(
          $con2,"SELECT * FROM laporan ORDER BY id DESC");
        
        ?>
        <!-- DataTables Example -->
        <div class="card mb-3 animated fadeInLeft slow">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Tabel Pemesanan</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th style="width: 8%;" >Nama Pemesan</th>
                    <th style="width: 8%;">No.Telefon</th>
                    <th style="width: 8%;">Jam Mulai</th>
                    <th style="width: 8%;">Jam Selesai</th>
                    <th style="width: 10%;">Jenis Lapangan</th>
                    <th style="width: 8%;">Tanggal Laporan</th>
                    <th style="width: 8%;">Total</th>
                    <th style="width: 8%;">STATUS</th>
                    <th style="width:8%;">Command</th>
                </thead>    
                <tbody>
                <?php
                
                while($data=mysqli_fetch_array($user)){
                  echo "<tr>
                    <td>$data[username]</td>
                    <td>$data[no_hp]</td> 
                    <td>$data[jam]</td>
                    <td>$data[jam_selesai]</td>
                    <td>$data[jenis_lapangan]</td>      
                    <td>$data[tgl_laporan]</td>
                    <td>$data[total]</td>
                    <td>$data[status]</td>
                    "; 
                    
                  ?>
                
                  <td> 

                <a href=<?php echo '../../connect/berhasil-laporan.php?id=' . $data["id"] ?>>
                    <button type='button' class='btn btn-info '>Update</i></button>
                </a>
     
                <a href=<?php echo '../../connect/reject-laporan.php?id=' . $data["id"]?>>
                    <button type='button' class='btn btn-danger'>Cancel</button>
                </td>

                  </tr>
             <?php
              }
              
                ?>
                </tbody>
              </table>
              
            </div>
          
            <a href="pdf.php" target="_BLANK" class="btn btn-success">Print PDF <i class="fas fa-print"></i></a>
          
          </div>
      </div>
      <!-- /.container-fluid -->

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

  <!-- Page level plugin JavaScript-->
  <script src="../admin/template/vendor/datatables/jquery.dataTables.js"></script>
  <script src="../admin/template/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Demo scripts for this page-->              
  <script src="../admin/template/vendor/jquery/jquery.min.js"></script>
  <script src="../admin/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <!-- Page level plugin JavaScript-->
  <script src="../admin/template/vendor/datatables/jquery.dataTables.js"></script>
  <script src="../admin/template/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../admin/template/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../admin/template/js/demo/datatables-demo.js"></script>

  <!-- Bootstrap core JavaScript-->
  <script src="../admin/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Futsal 2020</span>
          </div>
        </div>
      </footer>


    
</body>

</html>
