<?php $data['title'] = 'TRUNG TÂM NHÂN LỰC HÀNG HẢI ALLSEAMAN - Trang Lịch học' ?>
<?php require "header.php"; ?>
<div class="block_01 uk-light uk-section-small uk-background-norepeat uk-background-cover" data-src="images/bg_1.png" uk-img>
    <div class="uk-container">
        <h1 class="uk-text-right uk-text-uppercase">LỊCH HỌC</h1>
    </div>
</div>
<div class="uk-section-xsmall">
    <div class="uk-container">
        <ul class="tab_01 uk-tab" uk-tab="connect: .uk-switcher">
            <li class="uk-active"><a href="">Lịch học</a></li>
            <li><a href="">Đăng ký lịch học</a></li>
        </ul>
        <ul class="uk-switcher">
            <li>
                <ul class="uk-subnav tab_02 uk-subnav-pill" uk-switcher="connect: .lich-hoc">
                    <li class="uk-active"><a href="#">Tuần 1</a></li>
                    <li><a href="#">Tuần 2</a></li>
                    <li><a href="#">Tuần 3</a></li>
                    <li><a href="#">Tuần 4</a></li>
                </ul>
                <ul class="uk-switcher lich-hoc uk-margin-small">
                    <li>
                        <div class="uk-overflow-auto">
                            <table class="uk-table table_lichhoc uk-table-small uk-table-middle uk-table-divider">
                                <tbody>
                                <tr>
                                    <td rowspan="2" class="c1">Lịch học</td>
                                    <td class="c2 uk-text-uppercase">Monday</td>
                                    <td class="c2 uk-text-uppercase">tuesday</td>
                                    <td class="c2 uk-text-uppercase">wednesday</td>
                                    <td class="c2 uk-text-uppercase">thursday</td>
                                    <td class="c2 uk-text-uppercase">friday</td>
                                    <td class="c2 uk-text-uppercase">saturday</td>
                                    <td class="c2 uk-text-uppercase">sunday</td>
                                </tr>
                                <tr>
                                    <td class="c2">Ngày 10/12</td>
                                    <td class="c2">Ngày 11/12</td>
                                    <td class="c2">Ngày 12/12</td>
                                    <td class="c2">Ngày 13/12</td>
                                    <td class="c2">Ngày 14/12</td>
                                    <td class="c2">Ngày 15/12</td>
                                    <td class="c2">Ngày 16/12</td>
                                </tr>
                                <tr>
                                    <td>06:15 - 07:15</td>
                                    <td>Kỹ thuật cứu sinh</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Hải đồ điện tử</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>07:30 - 08:30</td>
                                    <td></td>
                                    <td>Huấn luyện trên mô phỏng</td>
                                    <td></td>
                                    <td></td>
                                    <td>Làm quen tàu gas</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>09:00 - 10:00</td>
                                    <td></td>
                                    <td></td>
                                    <td>Chứa cháy nâng cao</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11:45 - 12:45</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="8" class="c1 uk-text-left">Chiều</td>
                                </tr>
                                <tr>
                                    <td>15:00 - 16:00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>16:30 - 17:30</td>
                                    <td></td>
                                    <td>Làm quen tàu gas</td>
                                    <td>Làm quen tàu gas</td>
                                    <td>Kỹ thuật cứu sinh</td>
                                    <td></td>
                                    <td></td>
                                    <td>Hải đồ điện tử</td>
                                </tr>
                                <tr>
                                    <td>17:45 - 18:45</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Huấn luyện trên mô phỏng</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>19:15 - 20:15</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </li>
            <li>
                <div class="uk-card dangky uk-card-default uk-box-shadow-medium">
                    <div class="uk-card-header uk-text-center">đăng ký lịch học</div>
                    <div class="uk-card-body">
                        <form class="uk-grid-small uk-grid-30 uk-form-stacked" uk-grid>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="form-stacked-text">Họ và tên (*)</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-stacked-text" type="text" placeholder="Nhập họ và tên">
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="form-stacked-text">Email (*)</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-stacked-text" type="text" placeholder="abc@gmail.com">
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="form-stacked-text">Mã số sinh viên (*)</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-stacked-text" type="text" placeholder="Năm 2019">
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="form-stacked-text">Số điện thoại (*)</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-stacked-text" type="tel" placeholder="Nhập số điện thoại">
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="form-stacked-text">Ngành đăng ký</label>
                                <div class="uk-form-controls">
                                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                        <select>
                                            <option value="">- Chọn ngành đăng ký</option>
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
                                <label class="uk-form-label" for="form-stacked-text">Giờ đăng ký</label>
                                <div class="uk-form-controls">
                                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                        <select>
                                            <option value="">Khung giờ 7h-9h45</option>
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
                                <button type="submit" class="uk-button btn_submit uk-border-rounded uk-button-primary uk-button-large">Đăng ký lịch học</button>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<?php require "footer.php"; ?>