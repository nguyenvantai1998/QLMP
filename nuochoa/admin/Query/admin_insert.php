
<?php
function insert_loaisp($maloai, $tenloai,$mota)
{
    try {
        include '.\..\..\connect.php';
        include '.\..\..\select.php';
        $table=query_select("select * from loaisp where maloai='".$maloai."'");
        $count=$table->rowCount();
        if ($count>0)
            {
               echo "<script>alert('Mã đã tồn tại')</script>";
            }
        else {
            $sql = "Insert into loaisp(maloai, tenloai,mota) values ('$maloai','$tenloai','$mota') ";
            $conn->exec($sql);
            $conn=null;
        }
       
        
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

// DONE
function insert_admin($tentk, $matkhau, $quyen)
{
    try {
        include './connect.php';
        include './select.php';
        $table=query_select("select * from qttk where tentk='".$tentk."'");
        $count=$table->rowCount();
        if ($count>0)
            {
                echo '<script type="text/javascript">';

                echo "setTimeout(function () { Swal.fire({
                    type: 'error',
                    title: 'Tài khoản đã tồn tại !',
                    showConfirmButton: false,
                    timer: 1500
                  });";
        
                echo '}, 1000);</script>';
            }
        else {

        $sql = "Insert into qttk (matkhau, quyen, tentk) values ('$matkhau',$quyen,'$tentk')";
        $conn->exec($sql);
        $conn=null;
        echo '<script type="text/javascript">';

        echo "setTimeout(function () { Swal.fire({
            type: 'success',
            title: 'Đăng ký thành công !',
            showConfirmButton: false,
            timer: 1500
          });";

        echo '}, 1000);</script>';
        }
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

// DONE
function insert_ncc( $mancc, $tenncc,$diachi,$masothue,$mota)
{
    try {
        include '../connect.php';
        include '../select.php';
        $table=query_select("select * from nhacungcap where mancc='".$mancc."'");
        $count=$table->rowCount();
        if ($count>0)
            {
                echo '<script type="text/javascript">';
                echo "setTimeout(function () { Swal.fire({
                    type: 'error',
                    title: 'Mã nhà cung cấp đã tồn tại !',
                    showConfirmButton: false,
                    timer: 1500
                  });";
                echo '}, 500);</script>';
            }else{
                $sql = "Insert into nhacungcap (mancc,tenncc,diachi,masothue,gioithieu) values ('$mancc','$tenncc','$diachi','$masothue','$mota')";
                $conn->exec($sql);
                $conn=null;
                echo '<script type="text/javascript">';
                echo "setTimeout(function () { Swal.fire({
                    type: 'success',
                    title: 'Thêm nhà cung cấp thành công !',
                    showConfirmButton: false,
                    timer: 1500
                  });";
                echo '}, 500);</script>';
        }
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

function insert_ctkm( $makm, $masp,$tgbd,$tgkt,$tilegiamgia,$ghichu)
{
    try {
        include '..\..\connect.php';
        include '..\..\select.php';
        $table=query_select("select * from ctkm where makm='".$makm."'");
        $count=$table->rowCount();
        if ($count>0)
            {
                echo '<script type="text/javascript">';
                echo "setTimeout(function () { Swal.fire({
                    type: 'error',
                    title: 'Mã chương trình khuyến mãi đã tồn tại !',
                    showConfirmButton: false,
                    timer: 1500
                  });";
                echo '}, 500);</script>';
            }
        else {
        $sql = "Insert into ctkm(ghichu, makm, masp, tgbd,tgkt,tilegiamgia) values ('$ghichu','$makm','$masp','$tgbd','$tgkt',$tilegiamgia)";
        $conn->exec($sql);
        $conn=null;
        echo "<script>alert('hello');</script>";
        echo '<script type="text/javascript">';
                echo "setTimeout(function () { Swal.fire({
                    type: 'success',
                    title: 'Thêm chương trình khuyến mãi thành công !',
                    showConfirmButton: false,
                    timer: 1500
                  });";
                echo '}, 500);</script>';
        }
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

function insert_kmai($htkm,$makm,$tenkm)
{
    try {
        include '.\..\..\connect.php';
        include '.\..\..\select.php';
        $table=query_select("select * from kmai where makm='".$makm."'");
        $count=$table->rowCount();
        if ($count>0)
            {
               echo "<script>alert('Mã khuyến mãi đã có')</script>";
            }
        else {
        $sql = "Insert into kmai (htkm,makm,tenkm) values ('$htkm','$makm','$tenkm')";
        $conn->exec($sql);
        $conn=null;
        }
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

function insert_quanly($manv,$maql)
{
    try {
        include '.\..\..\connect.php';
        include '.\..\..\select.php';
        $table=query_select("select * from quanly where manv='".$manv."' and maql='".$maql."'");
        $count=$table->rowCount();
        if ($count>0)
            {
               echo "<script>alert('Mã quản lý của nhân viên này đã tồn tại')</script>";
            }
        else {
        $sql = "Insert into quanly (manv,maql) values ('$manv','$maql')";
        $conn->exec($sql);
        $conn=null;
        }
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

// Tài làm
function insert_sp($masp, $maloai, $tensp, $gia, $soluong, $mancc, $ngaysanxuat, $hansudung, $dungtich, $mota, $ngaynhaphang, $trangthai)
{
    try {
        include '../connect.php';
        include '../select.php';
        $table=query_select("select * from sp where MaSP='".$masp."'");
        $count=$table->rowCount();
        if ($count>0)
            {
               echo "<script>alert('Mã sản phẩm đã tồn tại')</script>";
            }
        else {
        $sql = "INSERT INTO `sp`(`MaSP`, `Maloai`, `Tensp`, `Gia`, `Soluong`, `MaNcc`, `Ngaysanxuat`, `hansudung`, `dungtich`, `Mota`, `Ngaynhaphang`, `trangthai`) VALUES ('$masp', '$maloai', '$tensp', '$gia', '$soluong', '$mancc', '$ngaysanxuat', '$hansudung', '$dungtich', '$mota', '$ngaynhaphang', '$trangthai')";
        $conn->exec($sql);
        $conn=null;
        }
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

function insert_tintuc($matin,$noidung,$tieude)
{
    try {
        include '.\..\..\connect.php';
        include '.\..\..\select.php';
        $table=query_select("select * from tintuc where matin='".$matin."'");
        $count=$table->rowCount();
        if ($count>0)
            {
               echo "<script>alert('Tài khoản đã tồn tại')</script>";
            }
        else {
        $sql = "Insert into tintuc (matin,noidung,tieude) values ('$matin','$noidung','$tieude')";
        $conn->exec($sql);
        $conn=null;
        }
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

function insert_video($mamulti,$masp, $matin,$makh,$urlhinh,$urlvideo)
{
    try {
        include '.\..\..\connect.php';
        include '.\..\..\select.php';
        $table=query_select("select * from video where mamulti='".$mamulti."'");
        $count=$table->rowCount();
        if ($count>0)
            {
               echo "<script>alert('Mã video đã tồn tại')</script>";
            }
        else {
        $sql = "Insert into video (mamulti, masp,matin,makh,urlhinh,urlvideo) values ('$mamulti','$masp','$matin','$makh','$urlhinh','$urlvideo')";
        $conn->exec($sql);
        $conn=null;
        }
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

function insert_khachhang($makh,$hoten,$namsinh,$gioitinh,$socmnd,$dienthoai,$DKTT,$DCHT,$ghichu)
{
    try {
        include '.\..\..\connect.php';
        include '.\..\..\select.php';
        $table=query_select("select * from khachhang where makh='".$makh."'");
        $count=$table->rowCount();
        if ($count>0)
            {
               echo "<script>alert('Tài khoản đã tồn tại')</script>";
            }
        else {
        $sql = "Insert into khachhang (makh, hoten, namsinh,gioitinh,socmnd,dienthoai,DKTT,DCHT,ghichu) values ('$makh','$hoten',$namsinh,$gioitinh,'$socmnd','$dienthoai','$DKTT','$DCHT','$ghichu')";
        $conn->exec($sql);
        $conn=null;
        }
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}


?>