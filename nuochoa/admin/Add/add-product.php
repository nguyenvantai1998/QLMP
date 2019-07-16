

<form id="" method="post">

    <!-- INFO DISTRIBUTION -->
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">TT nhà cung cấp <span
                class="text-danger">*</span></label>
        <div class="col-sm-10">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" placeholder="Mã nhà cung cấp" name="maNhaCC">
                    <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (empty($_POST["maNhaCC"])) {
                                    echo "<span class='text-danger'>Mã nhà cung cấp cần phải điền!</span>";
                                }
                            }
                        ?>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" placeholder="Tên nhà cung cấp" name="tenNhaCC">
                    <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (empty($_POST["tenNhaCC"])) {
                                    echo "<span class='text-danger'>Tên nhà cung cấp cần phải điền!</span>";
                                }
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>
    <!-- CODE TAX -->
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Mã số thuế <span
                class="text-danger">*</span></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Mã số thuế" name="thueNhaCC">
            <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (empty($_POST["thueNhaCC"])) {
                            echo "<span class='text-danger'>Mã số thuế cần phải điền!</span>";
                        }
                    }
                ?>
        </div>
    </div>
    <!-- ADDRESS-->
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Địa chỉ NCC <span class="text-danger">*</span></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="92 Nguyễn Trãi..." name="diachiNhaCC">
            <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (empty($_POST["diachiNhaCC"])) {
                            echo "<span class='text-danger'>Địa chỉ nhà cung cấp cần phải điền!</span>";
                        }
                    }
                ?>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">Phường</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Quận</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Thành phố</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!-- DESCRIPTION -->
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Mô tả <span class="text-danger">*</span></label><i
            class="fas fa-signal-slash"></i></label>
        <div class="col-sm-10">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="motaNhaCC"></textarea>
            <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (empty($_POST["motaNhaCC"])) {
                            echo "<span class='text-danger'>Mô tả cần phải điền!</span>";
                        }
                    }
                ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-12 col-form-label text-danger">* thông tin bắt buột</label><i
            class="fas fa-signal-slash"></i></label>
    </div>
    <!-- BUTTON SEND -->
    <div class="form-group row text-center">
        <div class="col-sm-12 col-sm-custom">
            <button type="submit" name="submit" class="btn btn-warning">Thêm nhà cung cấp</button>
        </div>
    </div>
</form>
<!-- END FORM -->