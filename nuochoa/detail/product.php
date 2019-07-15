
<?php $masp = $_GET['masp']; ?>

<?php
    $table = query_select("SELECT * FROM sp, nhacungcap, video WHERE sp.MaNcc = nhacungcap.MaNCC AND sp.MaSP = video.MaSP AND sp.MaSP= '$masp'");
    $count = $table->rowCount();
    // echo $count['Masp'];
    if ($count > 0) {
        foreach ($table as $row) {
?>

    <div class="col-left detail">
        <div class="title-name">
            <div class="brand"> <?php echo $row['TenNCC']; ?> </div>
            <div class="name"> <?php echo $row['Tensp']; ?> </div>
        </div>

        <div class="row box">
            <div class="left-img">
                <div class="list-img-product">
                    <img src="<?php echo $row['URLHinh'] ?>" class="tabImgDetail" alt="">
                    <!-- <img src="./assets/img/19b62738ccd9e79d308c6aa1632638b6.jpg" class="tabImgDetail" alt="">
                    <img src="./assets/img/dt-2.jpg" class="tabImgDetail"alt="">
                    <img src="./assets/img/1540266151.5082.png" class="tabImgDetail" alt="">
                    <img src="./assets/img/1540266151.5082.png" class="tabImgDetail" alt=""> -->
                </div>

                <div class="list-button-img">
                    <button class="buttonTabImgDetail buttonTabImgDetail-active">
                        <img src="<?php echo $row['URLHinh'] ?>">
                    </button>
                    <!-- <button class="buttonTabImgDetail">
                        <img src="./assets/img/1540266151.5082.png">
                    </button>
                    <button class="buttonTabImgDetail">
                        <img src="./assets/img/1540266151.5082.png">
                    </button>
                    <button class="buttonTabImgDetail">
                        <img src="./assets/img/1540266151.5082.png">
                    </button>
                    <button class="buttonTabImgDetail">
                        <img src="./assets/img/1540266151.5082.png">
                    </button> -->
                </div>
            </div>
            <div class="right-content">
                <div class="row-1">
                    <ul class="content">
                        <li><span>Nhãn hiệu</span>: <span><?php echo $row['TenNCC']; ?></span></li>
                        <li><span>Trạng thái</span>: <span> <?php echo $row['trangthai']; ?> </span></li>
                        <li><span>Ngày nhập hàng</span>: <span><?php echo $row['Ngaynhaphang']; ?></span></li>
                        <li><span>Hạng sử dụng</span>: <span><?php echo $row['hansudung']; ?> ngày</span></li>
                        <li><span>Mã nhà cung cấp</span>: <span><?php echo $row['MaNcc']; ?></span></li>
                        <li><span>Giá</span>: <span><?php echo $row['Gia']; ?> VNĐ</span></li>
                    </ul>
                </div>

                <div class="row-2">
                    <h4 class="title-sub">Mô tả</h4>
                    <p><?php echo $row['Mota']; ?></p>
                </div>
            </div>
        </div>
    </div>

<?php
        }
    }
?>


