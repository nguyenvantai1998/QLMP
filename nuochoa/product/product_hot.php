<div class="row-2 box-product">

    <?php

        // pagination
        $t = query_select("SELECT * FROM sp, video	WHERE sp.MaSP = video.MaSP AND sp.trangthai='new'");
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
        $table = query_select("SELECT * FROM sp, video	WHERE sp.MaSP = video.MaSP  AND sp.trangthai='new' limit $start, $limit");
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
                <a href="detail.php?masp=<?php echo $masp ?>">
                    <p class="name"><?php echo $row['Tensp']; ?></p>
                    <p class="price"><?php echo $row['Gia']; ?> VNĐ</p>
                    <p class="price-sale">90.000.000 VNĐ</p>
                </a>
            </div>
        </div>
    </div>

    <?php
            }
        }

    ?>

</div>

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
