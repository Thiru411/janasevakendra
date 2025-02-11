<!DOCTYPE html>
<html lang="en">
<head>
 
  <?php $this->load->view('inc/script-top.php'); ?> 

</head>
<body class="<?=body_style?>">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="<?=base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <?php $this->load->view('inc/nav-top.php'); ?> 

  <?php $this->load->view('inc/nav-side.php'); ?> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-blog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Records</span>
                <span class="info-box-number">
                  <small></small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

      
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">

        
          <!-- /.col -->
       
          <!-- Left col -->
          
          <!-- /.col -->

          
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <?php $this->load->view('inc/footer.php'); ?> 
  
</div>
<!-- ./wrapper -->

<?php $this->load->view('inc/script-bottom.php'); ?> 

</body>
</html>
