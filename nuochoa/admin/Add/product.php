<?php
    if (isset($_POST["submit"]))
    {

        // session
        $_SESSION['Masp'] = $_POST['txtMasp'];
        $_SESSION['Maloai'] = $_POST['slMaloai'];
        $_SESSION['Mancc'] = $_POST['slMaNCC'];
        $_SESSION['dungtich'] = $_POST['txtDungtich'];
        $_SESSION['ngaynhap'] = $_POST['dateNgaynhap'];
        $_SESSION['ngaysanxuat'] = $_POST['dateNgaysanxuat'];
        $_SESSION['hansudung'] = $_POST['txtHansudung'];
        $_SESSION['tensanpham'] = $_POST['txtTensanpham'];
        $_SESSION['gia'] = $_POST['txtGia'];
        $_SESSION['trangthai'] = $_POST['slTrangthai'];
        $_SESSION['mota'] = $_POST['textMota'];
        $_SESSION['soluong'] = $_POST['txtSoluong'];

        // xet error
        if($_POST['txtMasp'] !="" && $_POST['slMaloai'] !=""  && $_POST['slMaNCC'] !="" && $_POST['txtDungtich'] !=""  
            && $_POST['dateNgaynhap'] !="" && $_POST['dateNgaysanxuat'] !="" && $_POST['txtHansudung'] !="" && $_POST['txtTensanpham'] !=""
            && $_POST['txtGia'] !="" && $_POST['txtSoluong'] !="" )
        {
            try{
                $masp = $_POST['txtMasp']; 
                $maloai = $_POST['slMaloai'];
                $mancc = $_POST['slMaNCC'];
                $dungtich = $_POST['txtDungtich'];
                $ngaynhaphang = $_POST['dateNgaynhap'];
                $ngaysanxuat = $_POST['dateNgaysanxuat'];
                $hansudung = $_POST['txtHansudung'];
                $tensp = $_POST['txtTensanpham'];
                $gia = $_POST['txtGia'];
                $trangthai = $_POST['slTrangthai'];
                $mota = $_POST['textMota'];
                $soluong = $_POST['txtSoluong'];
                insert_sp($masp, $maloai, $tensp, $gia, $soluong, $mancc, $ngaysanxuat, $hansudung, $dungtich, $mota, $ngaynhaphang, $trangthai);
            }
            catch(Throwable $th){}
        }
        else
        {
            echo
            "
                <script type='text/javascript'>
                    setTimeout(function () { 
                        Swal.fire({
                            type: 'error',
                            title: 'Nhập đầy đủ các trường !',
                            showConfirmButton: false,
                            timer: 2000
                        });
                    }, 100);
                </script>
            ";
        }
    }
?>
<!-- FORM -->
<form action="" method="POST">
    <!-- INFO PRODUCT -->
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Mã sản phẩm:</label>
        <div class="col-sm-10">
            <!-- mã sản phẩm -->
            <input 
                type="text" 
                class="form-control" 
                placeholder="35463"
                value="<?php if (isset($_SESSION['Masp'] )) { echo $_SESSION['Masp']; }?>"
                style="margin-bottom:10px;"
                name="txtMasp"
                id="myInput"
            >
            <div class="showErr" style="height:24px;width:100%;">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (empty($_POST["txtMasp"])) {
                            echo "<span class='badge badge-danger'>Nhập mã sản phẩm!</span>";
                        }
                    }
                ?>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">Mã loại:</label>
                    <select 
                        id="inputState" 
                        class="form-control"
                        value="<?php if (isset($_SESSION['Maloai'] )) { echo $_SESSION['Maloai']; }?>"
                        name="slMaloai"
                    >
                        <option>Mã loại</option>
                        <option value="NH">NH</option>
                    </select>

                    <div class="showErr" style="height:24px;width:100%;">
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (empty($_POST["slMaloai"])) {
                                    echo "<span class='badge badge-danger'>Nhập mã loại!</span>";
                                }
                            }
                        ?>
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <label for="inputState">Mã nhà cung cấp:</label>
                    <select 
                        id="inputState" 
                        class="form-control"
                        value="<?php if (isset($_SESSION['Mancc'] )) { echo $_SESSION['Mancc']; }?>"
                        name="slMaNCC"
                    >
                        <option selected>Nhà cung cấp</option>
                        <option value="ORL">ORL</option>
                    </select>

                    <div class="showErr" style="height:24px;width:100%;">
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (empty($_POST["slMaNCC"])) {
                                    echo "<span class='badge badge-danger'>Nhập mã nhà cung cấp!</span>";
                                }
                            }
                        ?>
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <label for="inputState">Dung tích(ml):</label>
                    <input 
                        type="number" 
                        class="form-control" 
                        placeholder="500"
                        value="<?php if (isset($_SESSION['dungtich'] )) { echo $_SESSION['dungtich']; }?>"
                        name="txtDungtich"
                    >

                    <div class="showErr" style="height:24px;width:100%;">
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (empty($_POST["txtDungtich"])) {
                                    echo "<span class='badge badge-danger'>Nhập dung tích sản phẩm!</span>";
                                }
                            }
                        ?>
                    </div>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">Ngày nhập:</label>
                    <input 
                        type="date" 
                        class="form-control"
                        value="<?php if (isset($_SESSION['ngaynhap'] )) { echo $_SESSION['ngaynhap']; }?>"
                        name="dateNgaynhap"
                    >
                    <div class="showErr" style="height:24px;width:100%;">
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (empty($_POST["dateNgaynhap"])) {
                                    echo "<span class='badge badge-danger'>Nhập nhày nhập!</span>";
                                }
                            }
                        ?>
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <label for="inputState">Ngày sản xuất:</label>
                    <input 
                        type="date" 
                        class="form-control"
                        name="dateNgaysanxuat"
                        value="<?php if (isset($_SESSION['ngaysanxuat'] )) { echo $_SESSION['ngaysanxuat']; }?>"
                    >
                    <div class="showErr" style="height:24px;width:100%;">
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (empty($_POST["dateNgaysanxuat"])) {
                                    echo "<span class='badge badge-danger'>Nhập ngày sản xuất!</span>";
                                }
                            }
                        ?>
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <label for="inputState">Hạn sử dụng</label>
                    <input 
                        type="number" 
                        class="form-control" 
                        minlength="1"
                        value="<?php if (isset($_SESSION['hansudung'] )) { echo $_SESSION['hansudung']; }?>"
                        name="txtHansudung"
                    >
                    <div class="showErr" style="height:24px;width:100%;">
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (empty($_POST["txtHansudung"])) {
                                    echo "<span class='badge badge-danger'>Nhập hạn sử dụng!</span>";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NAME PRODUCT-->
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Tên sản phẩm:</label>
        <div class="col-sm-10">
            <input 
                type="text" 
                class="form-control" 
                placeholder="Possess The Secret..."
                name="txtTensanpham"
                value="<?php if (isset($_SESSION['tensanpham'] )) { echo $_SESSION['tensanpham']; }?>"
            >
            <div class="showErr" style="height:24px;width:100%;">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (empty($_POST["txtTensanpham"])) {
                            echo "<span class='badge badge-danger'>Nhập tên sản phẩm!</span>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- PRICE -->
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Giá sản phẩm:</label>
        <div class="col-sm-10">
            <input 
                type="number" 
                class="form-control" 
                placeholder="99000"
                name="txtGia"
                value="<?php if (isset($_SESSION['gia'] )) { echo $_SESSION['gia']; }?>"
            >
            <div class="showErr" style="height:24px;width:100%;">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (empty($_POST["txtGia"])) {
                            echo "<span class='badge badge-danger'>Nhập giá sản phẩm!</span>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- QUATITY -->
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Số lượng: <i class="fas fa-signal-slash"></i></label>
        <div class="col-sm-10">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input 
                        type="number" 
                        class="form-control" 
                        placeholder="Số lượng sản phẩm"
                        name="txtSoluong"
                        value="<?php if (isset($_SESSION['soluong'] )) { echo $_SESSION['soluong']; }?>"
                    >

                    <div class="showErr" style="height:24px;width:100%;">
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (empty($_POST["txtSoluong"])) {
                                    echo "<span class='badge badge-danger'>Nhập số lượng sản phẩm!</span>";
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <select 
                        id="inputState" 
                        class="form-control"
                        name="slTrangthai"
                        value=""
                    >
                        <option value="con hang">Trạng thái</option>
                        <option value="hot">Hot</option>
                        <option value="new">new</option>
                        <option value="het">Hết hàng</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Mô tả sản phẩm:</label><i
            class="fas fa-signal-slash"></i></label>
        <div class="col-sm-10">
            <textarea 
                class="form-control" 
                id="exampleFormControlTextarea1" 
                rows="3"
                name="textMota"
            ></textarea>
        </div>
    </div>

    <!-- BUTTON SEND -->
    <div class="form-group row">
        <div class="col-sm-12 col-sm-custom">
            <button 
                name="submit" 
                type="submit" 
                class="btn btn-warning pull-right"
            >Thêm sản phẩm</button>
        </div>
    </div>

</form>
<!-- END FORM -->