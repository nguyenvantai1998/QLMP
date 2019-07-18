<?php

    if(!isset($_SERVER['HTTP_REFERER'])){
        // redirect them to your desired location
        header('location:../index.php');
        exit;
    }
  session_start();
  $_SESSION['isLoged'] = true;
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
                include("Query/admin_update.php");
                include("Query/admin_delete.php");
                include("../select.php");
                if(isset($_GET['page']))
                {
                    $page = $_GET['page'];
                    if($page=='list_npp')
                    {
                        include("./Select/list-distribution.php");
                    }
                    else if($page=='them_npp')
                    {
                        include("./Add/add-distribution.php");
                    }
                    else if($page=='them_san_pham')
                    {
                        include("./Add/product.php");
                    }
                    else if($page=='list_ct_km')
                    {
                        include("./Select/list-ctkm.php");
                    }
                    else if($page=='them_ct_km')
                    {
                        include("./Add/add-dicount.php");
                    }else if($page=='list_km')
                    {
                        include("./Select/list-km.php");
                    }else if($page=='them_km')
                    {
                        include("./Add/add-km.php");
                    }
                    else if($page=='loai_sp')
                    {
                        include("./Select/list-loai-sp.php");
                    }
                    else if($page=='them_loai')
                    {
                        include("./Add/add-category.php");
                    }
                    else if($page=='list_tin_tuc')
                    {
                        include("./Select/list-tin-tuc.php");
                    }
                    else if($page=='them_tin_tuc')
                    {
                        include("./Add/add-news.php");
                    }
                    else if($page=='doi_mk')
                    {
                        include("./Update/update-password.php");
                    }
                    else if($page=='sua_tin_tuc')
                    {
                        include("./Update/update-news.php");
                    }
                    else if($page=='xoa_tin_tuc')
                    {
                        include("./Delete/delete-news.php");
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