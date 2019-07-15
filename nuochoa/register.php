<?php
  include("./admin/Query/admin_insert.php");
  include './connect.php';
	$userReg = $passwordReg = $rePasswordReg = "";
	$roleId = 2;
    if (isset($_POST["submit-reg"])) {
        if ($_POST['user-reg'] != "" && $_POST['password-reg'] != "" && $_POST['re-password-reg'] != "" && $_POST["re-password-reg"] == $_POST["password-reg"]) {
            try {    
                $userReg = $_POST['user-reg'];
                $passwordReg = $_POST['password-reg'];
			        	$rePasswordReg = $_POST['re-password-reg'];
                insert_admin($userReg, $passwordReg,"2");
                $userReg = $passwordReg = $rePasswordReg = "";
            } catch (Throwable $th) {
            }
        } else {
            echo '<script type="text/javascript">';
    
            echo "setTimeout(function () { Swal.fire({
                type: 'error',
                title: 'Nhập đầy đủ các trường !',
                showConfirmButton: false,
                timer: 1500
              });";
    
            echo '}, 1000);</script>';
        }
    }
       
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/css/adminlte.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="assets/plugins/iCheck/flat/blue.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>

                <form action="" method="post">
                    <div class="form-group has-feedback">
                        <span class="fa fa-user form-control-feedback"></span> USER
                        <input type="text" class="form-control" placeholder="Nhập tài khoản" name="user-reg">
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (empty($_POST["user-reg"])) {
                                    echo "<span class='text-danger'>Nhập tài khoản!</span>";
                                }
                            }
                        ?>
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (strlen($_POST["user-reg"])<6) {
                                    echo "<br/><span class='text-danger'>Tài khoản phải lớn hơn 6 ký tự!</span>";
                                }
                            }
                        ?>
                    </div>
                    <div class="form-group has-feedback">
                        <span class="fa fa-lock form-control-feedback"></span> Password
                        <input type="password" class="form-control" placeholder="Password" name="password-reg">
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (empty($_POST["password-reg"])) {
                                    echo "<span class='text-danger'>Nhập mật khẩu!</span>";
                                }
                            }
                        ?>
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (strlen($_POST["password-reg"])<6) {
                                    echo "<br/><span class='text-danger'>Mật khẩu phải lớn hơn 6 ký tự!</span>";
                                }
                            }
                        ?>
                    </div>
                    <div class="form-group has-feedback">
                        <span class="fa fa-lock form-control-feedback"></span>Re-type Password
                        <input type="password" class="form-control" placeholder="Retype password"
                            name="re-password-reg">
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (empty($_POST["re-password-reg"])) {
                                    echo "<span class='text-danger'>Nhập lại mật khẩu!</span>";
                                }
                            }
                            ?>
                             <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (strlen($_POST["re-password-reg"])<6) {
                                    echo "<br/><span class='text-danger'>Mật khẩu phải lớn hơn 6 ký tự!</span>";
                                }
                            }
                             ?>
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if ($_POST["re-password-reg"] != $_POST["password-reg"]) {
                                    echo "<br/><span class='text-danger'>Mật khẩu chưa khớp!</span>";
                                }
                            }
                            ?>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <!-- <div class="checkbox icheck">
              <label>
                <input type="checkbox"> I agree to the <a href="#">terms</a>
              </label>
            </div> -->
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="submit-reg"
                                class="btn btn-primary btn-block btn-flat">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- 
      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fa fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fa fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->

                <a href="login.php" class="text-center">Tôi đã có tài khoản !</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
    <!-- jQuery -->
    <script src="./assets/js/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- iCheck -->
    <script src="assets/plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="assets/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/js/adminlte.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <script>
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        })
    })
    </script>
</body>

</html>