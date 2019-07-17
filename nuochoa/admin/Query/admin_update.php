
<?php

function update_loaisp($maloai, $tenloai,$mota)
{
    try {
        include '.\..\..\connect.php';
        include '.\..\..\select.php';
        $table=query_select("select * from loaisp where maloai='".$maloai."'");
        $count=$table->rowCount();
        if ($count==0)
            {
               echo "<script>alert('Không tìm thấy dữ liệu cần cập nhật')</script>";
            }
        else {
            $sql = "update loaisp set tenloai='$tenloai',mota='$mota' where maloai='$maloai'";
            $conn->exec($sql);
            $conn=null;             
            echo "<script>alert('đã cập nhật dữ liệu')</script>";
        }
       
        
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}


function update_admin($tentk, $matkhau, $quyen)
{
    try {
        include '.\..\..\connect.php';
        include '.\..\..\select.php';
        $table=query_select("select * from qttk where tentk='".$tentk."'");
        $count=$table->rowCount();
        if ($count==0)
            {
                echo "<script>alert('Không tìm thấy dữ liệu cần cập nhật')</script>";
            }
        else {

        $sql = "update qttk set matkhau='$matkhau',quyen='$quyen' where tentk='$tentk'";
        $conn->exec($sql);
        $conn=null;             
        echo "<script>alert('đã cập nhật dữ liệu')</script>";
        }
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

function update_ncc( $mancc, $tenncc,$diachi,$masothue,$mota)
{
    try {
        include '../connect.php';
        include '../select.php';
        $table=query_select("select * from nhacungcap where mancc='".$mancc."'");
        $count=$table->rowCount();
        if ($count==0)
            {
                echo "<script>alert('Không tìm thấy dữ liệu cần cập nhật')</script>";
            }else{
                $sql = "update nhacungcap set tenncc='$tenncc',diachi='$diachi',masothue='$masothue',gioithieu='$mota' where mancc='$mancc'";
                $conn->exec($sql);
                $conn=null;             
                echo "<script>alert('đã cập nhật dữ liệu')</script>";              
        }
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

function update_ctkm( $makm, $masp,$tgbd,$tgkt,$tilegiamgia,$ghichu)
{
    try {
        include '.\..\..\connect.php';
        include '.\..\..\select.php';
        $table=query_select("select * from ctkm where makm='".$makm."'");
        $count=$table->rowCount();
        if ($count==0)
            {
                echo "<script>alert('Không tìm thấy dữ liệu cần cập nhật')</script>";
            }
        else {
        $sql = "update ctkm set ghichu='$ghichu', tgbd='$tgbd',tgkt='$tgkt',tilegiamgia='$tilegiamgia' where makm='$makm' and masp='$masp'";
        $conn->exec($sql);
        $conn=null;   
        echo "<script>alert('đã cập nhật dữ liệu')</script>";
        }
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

function update_kmai($htkm,$makm,$tenkm)
{
    try {
        include '.\..\..\connect.php';
        include '.\..\..\select.php';
        $table=query_select("select * from kmai where makm='".$makm."'");
        $count=$table->rowCount();
        if ($count==0)
            {
                echo "<script>alert('Không tìm thấy dữ liệu cần cập nhật')</script>";
            }
        else {
        $sql = "update  kmai set htkm='$htkm',tenkm='$tenkm' where makm='$makm'";
        $conn->exec($sql);
        $conn=null;             
        echo "<script>alert('đã cập nhật dữ liệu')</script>";
        }
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

// function update_quanly($manv,$maql)
// {
//     try {
//         include '.\..\..\connect.php';
//         include '.\..\..\select.php';
//         $table=query_select("select * from quanly where manv='".$manv."' and maql='".$maql."'");
//         $count=$table->rowCount();
//         if ($count==0)
//             {
//                 echo "<script>alert('Không tìm thấy dữ liệu cần cập nhật')</script>";
//             }
//         else {
//         $sql = "update quanly (manv,maql) values ('$manv','$maql')";
//         $conn->exec($sql);
//         $conn=null;             
//         echo "<script>alert('đã cập nhật dữ liệu')</script>";
//         }
//     } catch (PDOException $e) {
//         echo "connection failed: " . $e->getMessage();
//     }
// }


function update_sp($masp,$tensp,$gia,$maloai,$soluong,$mancc,$ngaynhaphang,$ngaysanxuat,$trangthai,$mota,$hansudung,$dungtich)
{
    try {
        include '.\..\..\connect.php';
        include '.\..\..\select.php';
        $table=query_select("select * from sp where masp='".$masp."'");
        $count=$table->rowCount();
        if ($count==0)
            {
                echo "<script>alert('Không tìm thấy dữ liệu cần cập nhật')</script>";
            }
        else {
        $sql = "update sp set tensp='$tensp',gia='$gia', maloai='$maloai',soluong='$soluong',mancc='$mancc',ngaynhaphang='$ngaynhaphang',ngaysanxuat='$ngaysanxuat',trangthai='$trangthai',mota='$mota',hansudung='$hansudung',dungtich='$dungtich' where masp='$masp'";
        $conn->exec($sql);
        $conn=null;             
        echo "<script>alert('đã cập nhật dữ liệu')</script>";
        }
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

function update_tintuc($matin,$noidung,$tieude)
{
    try {
        include '.\..\..\connect.php';
        include '.\..\..\select.php';
        $table=query_select("select * from tintuc where matin='".$matin."'");
        $count=$table->rowCount();
        if ($count==0)
            {
                echo "<script>alert('Không tìm thấy dữ liệu cần cập nhật')</script>";
            }
        else {
        $sql = "update  tintuc set noidung='$noidung',tieude='$tieude' where matin='$matin'";
        $conn->exec($sql);
        $conn=null;             
        echo "<script>alert('đã cập nhật dữ liệu')</script>";
        }
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

function update_video($mamulti,$masp, $matin,$makh,$urlhinh,$urlvideo)
{
    try {
        include '.\..\..\connect.php';
        include '.\..\..\select.php';
        $table=query_select("select * from video where mamulti='".$mamulti."'");
        $count=$table->rowCount();
        if ($count==0)
            {
                echo "<script>alert('Không tìm thấy dữ liệu cần cập nhật')</script>";
            }
        else {
        $sql = "update video set masp='$masp',matin='$matin',makh='$makh',urlhinh='$urlhinh',urlvideo='$urlvideo' where mamulti='$mamulti'";
        $conn->exec($sql);
        $conn=null;             
        echo "<script>alert('đã cập nhật dữ liệu')</script>";
        }
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}

function update_khachhang($makh,$hoten,$namsinh,$gioitinh,$socmnd,$dienthoai,$DKTT,$DCHT,$ghichu)
{
    try {
        include '.\..\..\connect.php';
        include '.\..\..\select.php';
        $table=query_select("select * from khachhang where makh='".$makh."'");
        $count=$table->rowCount();
        if ($count==0)
            {
                echo "<script>alert('Không tìm thấy dữ liệu cần cập nhật')</script>";
            }
        else {
        $sql = "update khachhang set hoten='$hoten', namsinh='$namsinh',gioitinh='$gioitinh',socmnd='$socmnd',dienthoai='$dienthoai',DKTT='$DKTT',DCHT='$DCHT',ghichu='$ghichu' where makh='$makh'";
        $conn->exec($sql);
        $conn=null;             
        echo "<script>alert('đã cập nhật dữ liệu')</script>";
        }
    } catch (PDOException $e) {
        echo "connection failed: " . $e->getMessage();
    }
}


?>