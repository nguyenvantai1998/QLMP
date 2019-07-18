
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
                    <h1 class="m-0 text-dark">Quản trị viên</h1>
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
                include("../select.php");
                if(isset($_GET['page']))
                {
                    $page = $_GET['page'];
                    if($page == 'detail-product')
                    {
                        include("./Detail/detail-product.php");
                    }
                    else if($page=='list_npp')
                    {
                        include("./Select/list-distribution.php");
                    }
                    else if($page=='them_npp')
                    {
                        include("./Add/add-distribution.php");
                    }
                    else if($page=='them_san_pham')
                    {
                        include("./Add/add-product.php");
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
                    else if($page == 'upload')
                    {
                        include("Upload/upload.php");
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