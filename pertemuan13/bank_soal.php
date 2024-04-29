<?php
  $menu = 'bank_soal';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bank Soal</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <!-- Navbar -->

  <?php

    include_once('layouts/header.php');

  ?>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  <?php

    include_once('layouts/sidebar.php')

  ?>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bank Soal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Bank Soal</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Bank Soal</h3>

          <div class="card-tools">

            <a href="bank_soal_tambah.php" class="btn btn-sm btn-primary"> Tambah Soal </a>

          </div>
        </div>
        <div class="card-body">
          
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Kode Soal</td>
                        <td>Soal</td>
                        <td>Aksi</td>

                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>OO1</td>
                        <td>Soallll</td>
                        <td>
                            <a href="bank_soal_edit.php" class="btn btn-sm btn-warning" title="Edit Data"><i class="fa fa-edit"></i></a>
                            <a href="bank_soal_hapus.php" class="btn btn-sm btn-danger" title="Hapus Data"><i class="fa fa-trash"></i></a>
                        </td>

                    </tr>

                    <tr>
                        <td>2</td>
                        <td>OO1</td>
                        <td>Soallll</td>
                        <td>
                            <a href="bank_soal_edit.php" class="btn btn-sm btn-warning" title="Edit Data"><i class="fa fa-edit"></i></a>
                            <a href="bank_soal_hapus.php" class="btn btn-sm btn-danger" title="Hapus Data"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  <?php

    include_once('layouts/footer.php');

  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
