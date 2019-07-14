<div class="row-2 box-product">
    
    <?php
        $table = query_select("SELECT * FROM sp, video, ctkm, kmai WHERE sp.MaSP = video.MaSP AND sp.MaSP = ctkm.MaSP AND ctkm.MaKm = kmai.MaKm");
        $count = $table->rowCount();
        if ($count > 0) {
            foreach ($table as $row) {
            $masp = $row['MaSP'];
    ?>

    <div class="box">
        <div>
            <div class="img">
                <img src="<?php echo $row['URLHinh']; ?>" alt="">
            </div>
            <div class="name-price-sale">
                <p class="name"><?php echo $row['Tensp']; ?></p>
                <p class="price">
                    <span><?php echo $row['Gia']; ?> VNĐ</span>
                    <span class="sale">(- <?php echo $row['HTKM']; ?>)</span>
                </p>
                <p class="price-sale"><?php echo ($row['Gia'] * $row['Tilegiamgia'])/100; ?> VNĐ</p>
            </div>
        </div>
    </div>


    <?php
            }
        }

    ?>

</div>