     <!-- FORM -->
     <form>
                                <!-- INFO PRODUCT -->
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Thông tin SP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="35463">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputState">Loại</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected>Loại</option>
                                                    <option value="...">...</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState">Nhà cung cấp</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected>Nhà cung cấp</option>
                                                    <option value="...">...</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState">Dung tích(ml)</label>
                                                <input type="number" class="form-control" placeholder="500">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputState">Ngày sản xuất</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState">Ngày nhập</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState">Hạn sử dụng</label>
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- NAME PRODUCT-->
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Possess The Secret...">
                                    </div>
                                </div>
                                <!-- PRICE -->
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Giá SP</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" placeholder="99000">
                                    </div>
                                </div>
                                <!-- QUATITY -->
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Số lượng<i
                                            class="fas fa-signal-slash"></i></label>
                                    <!-- <div class="col-sm-6">
                                        <input type="number" class="form-control" placeholder="Số lượng sản phẩm">
                                    </div>
                                    <div class="col-sm-6">
                                            <select id="inputState" class="form-control">
                                                    <option selected>Trạng thái</option>
                                                    <option value="1">1</option>
                                                </select>
                                        </div> -->
                                    <div class="col-sm-10">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="number" class="form-control"
                                                    placeholder="Số lượng sản phẩm">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <select id="inputState" class="form-control">
                                                    <option selected>Trạng thái</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Mô tả</label><i
                                        class="fas fa-signal-slash"></i></label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                </div>
                                <!-- BUTTON SEND -->
                                <div class="form-group row">
                                    <div class="col-sm-12 col-sm-custom">
                                        <button type="submit" class="btn btn-warning">Thêm sản phẩm</button>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM -->