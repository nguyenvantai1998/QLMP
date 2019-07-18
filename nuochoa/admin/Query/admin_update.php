<?php 
    function update_sanpham($masp, $maloai, $tensp, $gia, $soluong, $mancc, $ngaysanxuat, $hansudung, $dungtich, $motaSP, $ngaynhaphang, $trangthai)
    {
        $sql = "UPDATE sp SET MaSP='$masp', Maloai='$maloai', Tensp='$tensp', Gia='$gia', Soluong='$soluong', MaNcc='$mancc', Ngaysanxuat='$ngaysanxuat', hansudung='$hansudung', dungtich='$dungtich', MotaSP='$motaSP', Ngaynhaphang='$ngaynhaphang', trangthai='$trangthai' WHERE sp.MaSP='$masp'";
        include '../connect.php';

        if($conn->query($sql))
        {
            echo 
                "
                <script type='text/javascript'>
                    setTimeout(function () { 
                        Swal.fire({
                            type: 'success',
                            title: 'Cập nhật thành công !',
                            showConfirmButton: false,
                            timer: 1000
                        });
                    }, 1);
                </script>
            ";
        }
    }
?>