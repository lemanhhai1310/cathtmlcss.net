<?php $data['title'] = 'TRUNG TÂM NHÂN LỰC HÀNG HẢI ALLSEAMAN - Trang Đăng ký Khóa học' ?>
<?php require "header.php"; ?>
<script>
    deferstyle('https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css', 'flatpickr-css');
</script>
<div class="block_01 uk-light uk-section-small uk-background-norepeat uk-background-cover" data-src="images/bg_1.png" uk-img>
    <div class="uk-container">
        <h1 class="uk-text-right uk-text-uppercase">các khóa học</h1>
    </div>
</div>
<div class="uk-section-xsmall">
    <div class="uk-container">
        <ul class="tab_01 uk-tab uk-margin-remove">
            <li><a href="cackhoahoc.php">Các khóa học</a></li>
            <li class="uk-active"><a href="dangkykhoahoc.php">Đăng ký khóa học</a></li>
        </ul>
        <a href=""><img class="uk-width-1-1 uk-box-shadow-medium" data-src="images/banner_dangky_khoahoc.png" alt=""></a>
        <div class="uk-card dangky uk-card-default uk-box-shadow-medium uk-margin">
            <div class="uk-card-header uk-text-center">đăng ký khóa học</div>
            <div class="uk-card-body">
                <form class="uk-grid-small uk-grid-30 uk-form-stacked" uk-grid>
                    <div class="uk-width-1-2@s">
                        <label class="uk-form-label" for="form-stacked-text">Họ và tên (*)</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="text" placeholder="Nhập họ và tên">
                        </div>
                    </div>
                    <div class="uk-width-1-2@s">
                        <label class="uk-form-label" for="form-stacked-text">Giới tính</label>
                        <div class="uk-form-controls">
                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                <select>
                                    <option value="1">Nam</option>
                                    <option value="1">Nữ</option>
                                </select>
                                <button class="uk-button btn_select uk-width-1-1 uk-button-default" type="button" tabindex="-1">
                                    <span></span>
                                    <span uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-2@s">
                        <label class="uk-form-label" for="form-stacked-text">Email (*)</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="text" placeholder="abc@gmail.com">
                        </div>
                    </div>
                    <div class="uk-width-1-2@s">
                        <label class="uk-form-label" for="form-stacked-text">Số điện thoại (*)</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="tel" placeholder="Nhập số điện thoại">
                        </div>
                    </div>
                    <div class="uk-width-1-2@s">
                        <label class="uk-form-label" for="form-stacked-text">Ngày tháng năm sinh</label>
                        <div class="uk-form-controls">
                            <div class="uk-position-relative">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                                <input class="uk-input selector" id="form-stacked-text" type="text" placeholder="Năm 2019">
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-2@s">
                        <label class="uk-form-label" for="form-stacked-text">Tỉnh thành</label>
                        <div class="uk-form-controls">
                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                <select>
                                    <option value="">Hà Nội</option>
                                    <option value="1">Option 01</option>
                                    <option value="2">Option 02</option>
                                    <option value="3">Option 03</option>
                                    <option value="4">Option 04</option>
                                </select>
                                <button class="uk-button btn_select uk-width-1-1 uk-button-default" type="button" tabindex="-1">
                                    <span></span>
                                    <span uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1@s">
                        <label class="uk-form-label" for="form-stacked-text">Địa chỉ chi tiết</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="text" placeholder="Địa chỉ thường trú của bạn">
                        </div>
                    </div>
                    <div class="uk-width-1-2@s">
                        <label class="uk-form-label" for="form-stacked-text">Khóa đăng ký</label>
                        <div class="uk-form-controls">
                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                <select>
                                    <option value="">-Chọn khóa học</option>
                                    <option value="1">Option 01</option>
                                    <option value="2">Option 02</option>
                                    <option value="3">Option 03</option>
                                    <option value="4">Option 04</option>
                                </select>
                                <button class="uk-button btn_select uk-width-1-1 uk-button-default" type="button" tabindex="-1">
                                    <span></span>
                                    <span uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-2@s">
                        <label class="uk-form-label" for="form-stacked-text">Chọn lịch học theo khóa</label>
                        <div class="uk-form-controls">
                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                <select>
                                    <option value="">Lịch học 2-4-6</option>
                                    <option value="1">Option 01</option>
                                    <option value="2">Option 02</option>
                                    <option value="3">Option 03</option>
                                    <option value="4">Option 04</option>
                                </select>
                                <button class="uk-button btn_select uk-width-1-1 uk-button-default" type="button" tabindex="-1">
                                    <span></span>
                                    <span uk-icon="icon: chevron-down"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1">
                        <p class="desc">*Lưu ý: Người đăng ký cần bắt buộc điền đầy đủ những mục có dấu (*)</p>
                    </div>
                    <div class="uk-width-1-1 uk-text-center">
                        <button type="submit" class="uk-button btn_submit uk-border-rounded uk-button-primary uk-button-large">Đăng ký khóa học</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>