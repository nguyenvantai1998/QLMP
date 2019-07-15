<!-- header -->
<?php include("header.php"); ?>

<!-- slider banner -->
<?php include("sliderBanner.php"); ?>

</div>
</div>
</header> <!-- /header -->


<!-- main -->
<main id="main">

    <!-- set page show -->
    <?php 
        if(isset($_GET['page']))
        {
            $page = $_GET['page'];
            if($page == 'sp_nam'){
                include('product-type.php');
            }
        }
        else
        { ?>

        <!-- main 1 -->
        <div class="main-1 m-container">

            <?php include("slideBar.php"); ?>

            <!-- product -->
            <div class="boxProduct">

                <!-- combo -->
                <section class="product-1 product-combo">

                    <div class="pr-container">

                        <!-- title -->
                        <div class="row-1 title">
                            <div class="bg-tt-1">
                                <h2>Sản Phẩm Mới</h2>
                            </div>
                        </div>

                        <!-- list product hot -->
                        <?php include("product/product_hot.php"); ?>

                    </div>

                </section>
            </div>
        </div>

        <!-- main 2 -->
        <div class="main-2 m2-container">
            <!-- liquidation -->
            <section class="product-2 product-liquidation">

                <div class="pr-container">
                    <div class="row-1 title">
                        <div class="bg-tt-1">
                            <h2>Sản Phẩm Sale</h2>
                        </div>
                    </div>

                    <!-- list sản phẩm giảm giá -->
                    <?php include("./product/product_sale.php"); ?>

                </div>

            </section>
        </div>

    <?php
        }
    ?>





</main>

<!-- footer -->
<?php include("footer.php") ?>