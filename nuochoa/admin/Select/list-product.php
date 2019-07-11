<?php include("./../select.php"); ?>

<!-- list -->
<div class="row">
    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th>STT</th>
                <th>MaSP</th>
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
            $table = query_select("SELECT * FROM sp, video	WHERE sp.MaSP = video.MaSP");
            $count = $table->rowCount();
            $stt = 1;
            if ($count > 0) {
                foreach ($table as $row) {
        ?>

            <tr>
                <td><?php echo $stt++; ?></td>
                <td><?php echo $row['Maloai'] ?></td>
                <td><?php echo $row['Tensp'] ?></td>
                <td><?php echo $row['Gia'] ?></td>
                <td><?php echo $row['Soluong'] ?></td>
                <td><?php echo $row['trangthai'] ?></td>
                <td><?php echo $row['MaNcc'] ?></td>
                <td>
                    <button 
                        type="button" 
                        class="btn btn-info"
                        
                    >
                        <i class="fas fa-search"></i>
                    </button> &nbsp;
                    <button 
                        type="button" 
                        class="btn btn-danger" 
                    >
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            </tr>

        <?php
                }
            }

            echo ""
            
        ?> 
        </tbody>
    </table><!-- list product -->
</div>
