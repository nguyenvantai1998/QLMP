<?php $tt = $_GET['tt'];?>

<!-- detail -->
<main id="mainDetail">
    <!-- trademark -->
    <section class="productTrademark">
        <div class="pr-tr-container">
            <div class="title">
                <h3><span><?php echo $tt; ?></span></h3>
            </div>
            
            <div class="list-product">

            <?php
                $table = query_select("SELECT * FROM sp, video, nhacungcap, ctkm WHERE  sp.MaSP = ctkm.MaSP AND sp.MaNcc = nhacungcap.MaNCC AND sp.MaSP = video.MaSP AND sp.trangthai='$tt'");
                $count = $table->rowCount();
                if ($count > 0) {
                    foreach ($table as $row) {
                    $masp = $row['MaSP'];
            ?>

                <div class="item-product">
                    <div class="box">
                        <div class="img">
                            <a href="?p=detail&&masp=<?php echo $masp ?>"><img src="<?php echo $row['URLHinh'] ?>" alt=""></a>
                        </div>
                        <div class="content">
                            <p class="name-product"><a href="#"><?php echo  mysubstr( $row['Tensp'], 20 )?></a></p>
                            <p class="brand-product"><a href="#"><?php echo $row['TenNCC'] ?></a></p>
                            <p class="price"><?php echo number_format( $row['Gia'] ); ?> VNĐ</p>
                        </div>
                        <div class="member-gold">
                            <p class="price-gold">
                                <?php 
                                    if($row['Tilegiamgia'] != 0)
                                    {
                                        echo number_format( ($row['Gia'] * $row['Tilegiamgia'])/100 ); 
                                    }
                                    else
                                    {
                                        echo number_format( $row['Gia'] );
                                    }
                                ?> đ
                            </p>
                            <p class="price-member">
                                <?php
                                    if($row['member'] !=0)
                                    {
                                        echo number_format( ($row['Gia'] * $row['member'])/100 );
                                    }
                                    else
                                    {
                                        echo number_format( $row['Gia'] );
                                    }
                                ?> đ
                            </p>
                        </div>
                    </div>
                </div>
            
            <?php
                    }
                }

                else{
                    echo "<h4>Hiện tại đang hết hàng...</h4>";
                }

            ?>

            </div>
        </div>
    </section>

</main>