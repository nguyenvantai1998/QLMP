<?php
    include("select.php");   
    $user = $password = "";
    if (isset($_POST["submit"])) {
        if ($_POST['user'] != "" && $_POST['password'] != "") {
            try {    
                $user = $_POST['user'];
                $password = $_POST['password'];
                $query = query_select("select * from qttk where qttk.TenTK='$user' and qttk.Matkhau='$password'");
                $count = $query->rowCount();
                // echo $count;
                if($count==0){
                    echo '<script type="text/javascript">';

                    echo "setTimeout(function () { Swal.fire({
                        type: 'error',
                        title: 'Tên tài khoản hoặc mật khẩu sai !',
                        showConfirmButton: false,
                        timer: 1500
                      });";
            
                    echo '}, 1000);</script>';
                }else{

                    // $query = query_select("select * from qttk where qttk.TenTK='$user' and qttk.Matkhau='$password'");
                    // $count = $query->rowCount();
                    // echo $count;
                    // if($count==0){
foreach($query as $row){
    $session_id = $row['Quyen'];
    // echo $session_id;
    if( $session_id == 1){
        echo '<script type="text/javascript">';

        echo "setTimeout(function () { Swal.fire({
            type: 'success',
            title: 'Chào mừng ADMIN !',
            showConfirmButton: false,
            timer: 1500
          });";

        echo '}, 1000);</script>';

        header("location:admin/indexAdmin.php");
    }else{
        echo '<script type="text/javascript">';

                    echo "setTimeout(function () { Swal.fire({
                        type: 'success',
                        title: 'Đăng nhập thành công',
                        showConfirmButton: false,
                        timer: 1500
                      });";
            
                    echo '}, 1000);</script>';
    }
}
                    
                }
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

<!-- Head -->
<head>

<title>Đăng nhập</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<link href="./assets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

<!-- Style --> <link rel="stylesheet" href="./assets/css/login.css" type="text/css" media="all">

<!-- Fonts -->
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<!-- //Fonts -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<!-- //Head -->

<!-- Body -->
<body>

	<h1>EXISTING LOGIN FORM</h1>

	<div class="w3layoutscontaineragileits">
	<h2>Dăng nhập</h2>
		<form action="" method="post">
			<input type="text" name="user" placeholder="Nhập tài khoản" required>
			<input type="password" name="password" placeholder="Nhập mật khẩu" required>
			<ul class="agileinfotickwthree">
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>Remember me</label>
					<a href="#">Forgot password?</a>
				</li>
			</ul>
			<div class="aitssendbuttonw3ls">
				<input type="submit" name="submit" value="LOGIN">
				<p> Bạn chưa có tài khoản ? <span>→</span> <a class="w3_play_icon1" href="#small-dialog1"> Đăng ký ngay</a></p>
				<div class="clear"></div>
			</div>
		</form>
	</div>
	

	<?php
    include("admin/Query/admin_insert.php");   
	$userReg = $passwordReg = $rePasswordReg = "";
	$roleId = 2;
    if (isset($_POST["submit-reg"])) {
        if ($_POST['user-reg'] != "" && $_POST['pass-reg'] != "" && $_POST['re-pass-reg'] != "") {
            try {    
                $userReg = $_POST['user-reg'];
                $passwordReg = $_POST['pass-reg'];
				$rePasswordReg = $_POST['re-pass-reg'];
				// insert_admin($userReg, $passwordReg,"2");
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

	<!-- for register popup -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="contact-form1">
			<div class="contact-w3-agileits">
				<h3>Đăng ký</h3>
				<form action="" method="post">
						<div class="form-sub-w3ls">
							<input placeholder="Nhập tài khoản" type="text" name="user-reg" required>
							<div class="icon-agile">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Nhập mật khẩu" class="mail" type="password" name="pass-reg" required>
							<div class="icon-agile">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Nhập lại mật khẩu"  type="password" name="re-pass-reg" required>
							<div class="icon-agile">
								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
								<!-- <div style="color:red;">nhập lại password chưa đúng!</div>
								 -->
								 <?php
if (isset($_POST["submit"])) {
    if ($_POST["pass-reg"] != $_POST["re-pass-reg"]) {
        echo '<div style="color:red;">nhập lại password chưa đúng!</div>';
	}
	// if(empty($_POST["re-pass-reg"])){
	// 	echo '<div style="color:red;">cần điền đầy đủ!</div>';
	// }
}
?>
							</div>
						</div>
					<div class="submit-w3l">
						<input type="submit" name="submit-reg" value="Đăng ký">
					</div>
				</form>
			</div>
		</div>	
	</div>
	<!-- //for register popup -->
	
	<div class="w3footeragile">
		<p> &copy; 2017 Existing Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
	</div>

	
	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>

	<!-- pop-up-box-js-file -->  
		<script src="assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box-js-file -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</body>
<!-- //Body -->

</html>