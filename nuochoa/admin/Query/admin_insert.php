
<?php
function insert_loaisp($maloai, $tenloai,$mota)
{
    try {
        include './../connect.php';
        $sql = "Insert into loaisp(maloai, tenloai,mota) values ('$maloai','$tenloai','$mota') ";
        $conn->exec($sql);
        $conn=null;
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}


function insert_admin($tentk, $matkhau, $quyen)
{
    try {
        include './../connect.php';
        $sql = "Insert into qttk (matkhau, quyen, tentk) values ('$matkhau',$quyen,'$tentk')";
        $conn->exec($sql);
        $conn=null;
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

function insert_ncc( $mancc, $tenncc,$diachi,$masothue,$mota)
{
    try {
        include './../connect.php';
        $sql = "Insert into nhacungcap (mancc,tenncc,diachi,masothue,gioithieu) values ('$mancc','$tenncc','$diachi','$masothue','$mota')";
        $conn->exec($sql);
        $conn=null;
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

function insert_ctkm( $makm, $masp,$tgbd,$tgkt,$tilegiamgia,$ghichu)
{
    try {
        include './../connect.php';
        $sql = "Insert into ctkm (ghichu, makm, masp, tgbd,tgkt,tilegiamgia) values ('$ghichu','$makm','$masp','$tgbd','$tgkt',$tilegiamgia)";
        $conn->exec($sql);
        $conn=null;
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

function insert_kmai($htkm,$makm,$tenkm)
{
    try {
        include './../connect.php';
        $sql = "Insert into kmai (htkm,makm,tenkm) values ('$htkm','$makm','$tenkm')";
        $conn->exec($sql);
        $conn=null;
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

function insert_quanly($manv,$maql)
{
    try {
        include './../connect.php';
        $sql = "Insert into quanly (manv,maql) values ('$manv','$maql')";
        $conn->exec($sql);
        $conn=null;
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}


function insert_sp($masp,$tensp,$gia,$maloai,$soluong,$mancc,$ngaynhaphang,$ngaysanxuat,$trangthai,$mota,$hansudung,$dungtich)
{
    try {
        include './../connect.php';
        $sql = "Insert into sp (masp,tensp,gia,maloai,soluong,mancc,ngaynhaphang,ngaysanxuat,trangthai,mota,hansudung,dungtich) values ('$masp','$tensp',$gia,'$maloai',$soluong,'$mancc','$ngaynhaphang','$ngaysanxuat','$trangthai','$mota',$hansudung,$dungtich)";
        $conn->exec($sql);
        $conn=null;
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

function insert_tintuc($matin,$noidung,$tieude)
{
    try {
        include './../connect.php';
        $sql = "Insert into tintuc (matin,noidung,tieude) values ('$matin','$noidung','$tieude')";
        $conn->exec($sql);
        $conn=null;
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

function insert_video($mamulti,$masp, $matin,$makh,$urlhinh,$urlvideo)
{
    try {
        include './../connect.php';
        $sql = "Insert into video (mamulti, masp,matin,makh,urlhinh,urlvideo) values ('$mamulti','$masp','$matin','$makh','$urlhinh','$urlvideo')";
        $conn->exec($sql);
        $conn=null;
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

function insert_khachhang($makh,$hoten,$namsinh,$gioitinh,$socmnd,$dienthoai,$DKTT,$DCHT,$ghichu)
{
    try {
        include './../connect.php';
        $sql = "Insert into khachhang (makh, hoten, namsinh,gioitinh,socmnd,dienthoai,DKTT,DCHT,ghichu) values ('$makh','$hoten',$namsinh,$gioitinh,'$socmnd','$dienthoai','$DKTT','$DCHT','$ghichu')";
        $conn->exec($sql);
        $conn=null;
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}


?>