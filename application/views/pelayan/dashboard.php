<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pelayan - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo site_url('vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
  

  <!-- Page level plugin CSS-->
  <link href=" <?php echo site_url('vendor/datatables/dataTables.bootstrap4.css');?>" rel="stylesheet">
 

  <!-- Custom styles for this template-->
  <link href="<?php echo site_url('css/sb-admin.css');?>" rel="stylesheet">


</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Pelayan</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      
      
          <a class="" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
       
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="login.html">Login</a>
          <a class="dropdown-item" href="register.html">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
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

       

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
           
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nama Menu</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                  <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th> <a href="tambah" class="btn btn-md btn-success">Tambah Menu</a></th>
                  </tr>
                   </tfoot>
                <tbody>
                <?php foreach ($menu as $menu) {  ?>
                  <tr>
                    <td><?php echo $menu->nama_menu ?></td>
                    <td><?php echo $menu->harga ?></td>
                    <td style="<?php $stok = $menu->stok; 
                    if($stok == 'Habis'){ echo 'color: red'; }else{ echo 'color: green'; } ?>"><?php echo $menu->stok ?></td>
                    <td> 
                    <a href="edit/<?php echo $menu->id_menu ?>" class="btn btn-sm btn-success">Edit</a>
                    <a href="hapus/<?php echo $menu->id_menu ?>" class="btn btn-sm btn-danger">Hapus</a></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        
        </div>

      </div>
      <!-- /.container-fluid -->
     

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
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
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo site_url('index.php/login/logout');?>">Logout</a>
        </div>
      </div>
    </div>
  </div>
  

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo site_url('vendor/jquery/jquery.min.js');?>"></script>
 
  <script src="<?php echo site_url('vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
 

  <!-- Core plugin JavaScript-->
  <script src="<?php echo site_url('vendor/jquery-easing/jquery.easing.min.js');?>"></script>
  <!-- Page level plugin JavaScript-->
  <script src="<?php echo site_url('vendor/chart.js/Chart.min.js');?>"></script>
  <script src="<?php echo site_url('vendor/datatables/jquery.dataTables.js');?>"></script>
  <script src="<?php echo site_url('vendor/datatables/dataTables.bootstrap4.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo site_url('js/sb-admin.min.js');?>"></script>
  <!-- Demo scripts for this page-->
  <script src="<?php echo site_url('js/demo/datatables-demo.js');?>"></script>
  <script src="<?php echo site_url('js/demo/chart-area-demo.js');?>"></script>

</body>

</html>
