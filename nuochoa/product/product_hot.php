<div class="row-2 box-product">
    <!-- select -->
    <?php
        // pagination
        $t = query_select("SELECT * FROM sp, video, ctkm, kmai	WHERE sp.MaSP = video.MaSP AND sp.trangthai='new' AND sp.MaSP = ctkm.MaSP AND ctkm.MaKm = kmai.MaKm");
        $total = $t->rowCount();

        $start = 0;
        $limit = 8;

        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $start = ($id-1)*$limit;
        }
        else
        {
            $id = 1;
        }

        $page = ceil($total/$limit);
        $table = query_select("SELECT * FROM sp, video, ctkm, kmai WHERE sp.MaSP = video.MaSP  AND sp.trangthai='new' AND sp.MaSP = ctkm.MaSP AND ctkm.MaKm = kmai.MaKm limit $start, $limit");
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
                <a href="?p=detail&&masp=<?php echo $masp ?>">
                    <p class="name"><?php echo mysubstr($row['Tensp'],15) ?></p>
                    <p class="price"><?php echo number_format( $row['Gia'] ); ?> VNĐ</p>
                    <p class="price-sale"><?php echo number_format( ($row['Gia'] * $row['Tilegiamgia'])/100 ); ?> VNĐ</p>
                </a>
            </div>
        </div>
    </div>

    <?php
            }
        }

    ?>

</div>

<!-- pagiation -->
<?php 
    if($count >=8)
    {
        ?>
    <div class="row-pagination">
        <ul class="pagination">
            <?php 
                if($id > 1){
            ?>
                <li><a href="?id=<?php echo ($id-1); ?>">Prev</a></li>
            <?php } ?>

            <?php 
                for($i=1;$i <= $page;$i++)
                { ?>

                    <li><a href="?id=<?php echo $i; ?>"><?php echo $i; ?></a></li>

                <?php
                }
            ?>

            <?php 
                if($id !=$page)
                {
                    ?>
                    <li><a href="?id=<?php echo ($id+1); ?>">Next</a></li>
                <?php
                }
            ?>
        </ul>
    </div>

        <?php
    }

?>


