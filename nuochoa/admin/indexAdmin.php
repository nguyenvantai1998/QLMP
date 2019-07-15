<?php

    if(!isset($_SERVER['HTTP_REFERER'])){
        // redirect them to your desired location
        header('location:../index.php');
        exit;
    }

  session_start();
  if($_SESSION['helloTitle']==1){
      echo '<script type="text/javascript">';

      echo "setTimeout(function () { Swal.fire({
      type: 'success',
      title: 'Chào mừng ADMIN !',
      showConfirmButton: false,
      timer: 1500
      });";

      echo '}, 1000);</script>';
      $_SESSION['helloTitle'] = 0;
  }

  ?>
<!-- header -->
<?php include("header.php"); ?>

<!-- Navbar -->
<?php include("navbar.php"); ?>

<!-- side Bar -->
<?php include("sideBar.php"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v2</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- set page show -->
            <?php 
                include("Query/admin_insert.php");
                if(isset($_GET['page']))
                {
                    $page = $_GET['page'];
                    if($page=='them_nha_phan_phoi')
                    {
                        include("./Add/add-distribution.php");
                    }
                    else if($page=='them_san_pham')
                    {
                        include("./Add/product.php");
                    }
                }
                else
                {
                    include("./Select/list-product.php");
                }
          ?>
            <!-- END FORM -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- Footer -->
<?php include("footer.php"); ?>