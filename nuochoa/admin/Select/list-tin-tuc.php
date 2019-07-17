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
                <h3>Tin tức</h3>

                <p>Danh sách tin tức...</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-list"></i>
            </div>
        </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <a href="indexAdmin.php?page=them_tin_tuc">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>Thêm</h3>

                    <p>Thêm tin tức...</p>
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
                <th>Mã tin</th>
                <th>Tên tin tức</th>
                <th>Nội dung</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

        <?php
            $table = query_select("SELECT * FROM tintuc");
            $count = $table->rowCount();
            $stt = 1;
            if ($count > 0) {
                foreach ($table as $row) {
        ?>

            <tr>
                <td><?php echo $stt++; ?></td>
                <td><?php echo $row['MaTin'] ?></td>
                <td><?php echo $row['Tieude'] ?></td>
                <td>
                <?php
                $str = $row['Noidung']; //Tạo chuỗi
                $str = strip_tags($str); //Lược bỏ các tags HTML
                if(strlen($str)>100) { //Đếm kí tự chuỗi $str, 100 ở đây là chiều dài bạn cần quy định
                $strCut = substr($str, 0, 100); //Cắt 100 kí tự đầu
                $str = substr($strCut, 0, strrpos($strCut, ' ')).'... <a href="#">Read More</a>'; //Tránh trường hợp cắt dang dở như "nội d... Read More"
                }
                echo $str;
                ?>
                </td>
                <td>
                <script type="text/javascript">
                     function test(click_ID){
                        // var click_ID = document.getElementById("editID").value;
                         alert(click_ID);
                        console.log(click_ID);
                     }
                </script>
                    <a id="example">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalEditCategory" onclick="test(<?php echo $row['MaLoai']?>)">
                        <i class="fas fa-edit"></i>
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
<!-- Modal -->
<div class="modal fade" id="modalEditCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>