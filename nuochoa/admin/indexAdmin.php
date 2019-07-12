
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

          <!-- FORM ADD PRODUCT -->
    
          <?php 
          include("Query/admin_insert.php");
          include("./Add/add-distribution.php"); 
          ?>
          <!-- END FORM -->

        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

  <!-- Footer -->
  <?php include("footer.php"); ?>