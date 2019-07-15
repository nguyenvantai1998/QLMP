<?php include("./../select.php"); ?>

<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>100</h3>

                <p>Số lượng</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-list"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->

    <div class="col-lg-6 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>Sản Phẩm</h3>

                <p>Danh sách sản phẩm...</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-list"></i>
            </div>
        </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <a href="indexAdmin.php?page=them_san_pham">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>Thêm</h3>

                    <p>Thêm sản phẩm mới...</p>
                </div>
                <div class="icon">
                    <i class="ion ion-plus"></i>
                </div>
            </div>
        </a>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->

<!-- list -->
<div class="row">
    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã Sản Phẩm</th>
                <th>Mã Loại</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Trạng Thái</th>
                <th>MaNCC</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

        <?php
            $table = query_select("SELECT * FROM sp");
            $count = $table->rowCount();
            $stt = 1;
            if ($count > 0) {
                foreach ($table as $row) {
        ?>

            <tr>
                <td><?php echo $stt++; ?></td>
                <td><?php echo $row['MaSP'] ?></td>
                <td><?php echo $row['Maloai'] ?></td>
                <td><?php echo $row['Tensp'] ?></td>
                <td><?php echo $row['Gia'] ?></td>
                <td><?php echo $row['Soluong'] ?></td>
                <td><?php echo $row['trangthai'] ?></td>
                <td><?php echo $row['MaNcc'] ?></td>
                <td>
                    <a id="example" href="?masp=<?php echo $row['MaSP']; ?>">
                        <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#myModalDetail">
                            <i class="fas fa-search"></i>
                        </button>
                    </a>&nbsp;

                    <button type="button" class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            </tr>

            <?php
                }
            }
            else
            {
                echo "<h2>Hiện tại chưa có sản phẩm...</h2>";
            }
        ?>
        </tbody>
    </table><!-- list product -->
</div>

<!-- modal detail -->
<?php include('list-product-detail.php'); ?>