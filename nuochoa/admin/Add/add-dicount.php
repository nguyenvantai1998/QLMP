<?php
   if (isset($_POST["submit"])) {
       if ($_POST['maKM'] != "" && $_POST['motaCTKM'] != "") {
           try {
            //    $makm = $_POST['maKM'];
            //    $masp = $_POST['codesp'];
            //    $tgbd = $_POST['tgbatdau'];
            //    $tgkt = $_POST['tgketthuc'];
            //    $tilegiamgia = $_POST['htkm'];
            //    $ghichu = $_POST['motaCTKM'];
               $makm = 'km1';
               $masp = 'nh1';
               $tgbd = '2019-07-08';
               $tgkt = '2019-07-08';
               $tilegiamgia = '50';
               $ghichu = '3333';
            //    Insert into ctkm(ghichu, makm, masp, tgbd,tgkt,tilegiamgia) values ('ádasd','km1','nh1','2019-07-08','2019-07-08','20')
            //    echo $makm;
            //    echo $masp;
            //    echo $tgbd;
            //    echo $tgkt;
            //    echo $tilegiamgia;
            //    echo $ghichu;
               insert_ctkm($makm,$masp,$tgbd,$tgkt,$tilegiamgia,$ghichu);
           } catch (Throwable $th) {
               echo $th;
           }
       } else {
           echo '<script type="text/javascript">';
   
           echo "setTimeout(function () { Swal.fire({
               type: 'error',
               title: 'Nhập đầy đủ các trường !',
               showConfirmButton: false,
               timer: 1500
           });";
   
           echo '}, 1000);</script>';
       }
   }
   ?>
<!-- FORM -->
<form id="" method="post">
   <!-- CODE DISCOUNT -->
   <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Mã Khuyến mãi<span
         class="text-danger">*</span></label>
      <div class="col-sm-10">
         <input type="text" class="form-control" placeholder="KM00xxx" name="maKM">
      </div>
   </div>
   <!-- TIME START AND END DISCOUNT -->
   <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">TG bắt đầu và kết thúc <span
         class="text-danger">*</span></label>
      <div class="col-sm-10">
         <div class="form-row">
            <div class="form-group col-md-6">
               <input type="date" class="form-control" name="tgbatdau" value="<?php echo date("Y-m-d")?>">
            </div>
            <div class="form-group col-md-6">
               <input type="date" class="form-control" name="tgketthuc" value="<?php echo date("Y-m-d")?>">
            </div>
         </div>
      </div>
   </div>
   <!--INFO DISCOUNT-->
   <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">thông tin CT<span class="text-danger">*</span></label>
      <div class="col-sm-10">
         <div class="form-row">
            <div class="form-group col-md-6">
               <label>Sản phẩm</label>
               <select class="form-control" name="codesp">
                  <?php
                     $tablesp = query_select("SELECT * FROM sp");
                     $countsp = $tablesp->rowCount();
                     if ($countsp > 0) {
                     foreach ($tablesp as $rowsp) {
                     ?>
                  <option value="<?php echo $rowsp['MaSP'] ?>"><?php echo $rowsp['Tensp'];echo "-"; echo $rowsp['MaSP']; ?></option>
                  <?php
                     }
                     }
                     else
                     {
                     echo "<h2>Hiện tại chưa có sản phẩm...</h2>";
                     }
                     ?>
               </select>
            </div>
            <div class="form-group col-md-6">
               <label for="inputState">Sale</label>
               <select id="inputState" class="form-control" name="htkm">
                  <!-- <option selected>Choose...</option>
                     <option>...</option> -->
                  <?php
                     $table = query_select("SELECT * FROM kmai");
                     $count = $table->rowCount();
                     if ($count > 0) {
                         foreach ($table as $row) {
                     ?>
                  <option value="<?php echo $row['MaKm'] ?>">
                     <?php echo $row['tenkm']; echo '&nbsp'; echo $row['HTKM'];?>
                  </option>
                  <?php
                     }
                     }
                     else
                     {
                     echo "<h2>Hiện tại chưa có sản phẩm...</h2>";
                     }
                     ?>
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
         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="motaCTKM"></textarea>
      </div>
   </div>
   <div class="form-group row">
      <label for="inputPassword3" class="col-sm-12 col-form-label text-danger">* thông tin bắt buột</label><i
         class="fas fa-signal-slash"></i></label>
   </div>
   <!-- BUTTON SEND -->
   <div class="form-group row text-center">
      <div class="col-sm-12 col-sm-custom">
         <button type="submit" name="submit" class="btn btn-warning">Thêm khuyến mãi</button>
      </div>
   </div>
</form>
<!-- END FORM -->