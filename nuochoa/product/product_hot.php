<div class="row-2 box-product">

    <?php
        $table = query_select("SELECT * FROM sp, video	WHERE sp.MaSP = video.MaSP");
        $count = $table->rowCount();
        if ($count > 0) {
            foreach ($table as $row) {
                // echo $row['Tensp'];
    ?>

    <div class="box">
        <div>
            <div class="img">
                <img src="./assets/img/product-1.png" alt="">
            </div>
            <div class="name-price-sale">
                <p class="name"><?php echo $row['Tensp']; ?></p>
                <p class="price"><?php echo $row['Gia']; ?> VNĐ</p>
                <p class="price-sale">90.000.000 VNĐ</p>
            </div>
        </div>
    </div>




    <?php
            }
        }

    ?>

    


</div>
