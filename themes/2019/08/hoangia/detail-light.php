<?php $data['title'] = 'Hoàng gia - Chi tiết Light' ?>
<?php require "header.php"; ?>
<div class="uk-section-xsmall">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-grid-medium uk-grid" uk-grid>
            <div>
                <style>
                    #sync1 .item {
                        margin: 5px;
                        color: #FFF;
                        border-radius: 3px;
                        text-align: center;
                    }
                    #sync2 .item {
                        background-color: transparent;
                        margin: 5px;
                        color: #FFF;
                        border-radius: 3px;
                        text-align: center;
                        cursor: pointer;
                    }
                    #sync2 .item h1 {
                        font-size: 18px;
                    }
                    #sync2 .current .item {
                        background-color: transparent;
                    }
                    .owl-theme .owl-nav {

                    }
                    .owl-theme .owl-nav [class*='owl-'] {
                        transition: all 0.3s ease;
                    }
                    .owl-theme .owl-nav [class*='owl-'].disabled:hover {
                        background-color: #D6D6D6;
                    }
                    #sync1.owl-theme {
                        position: relative;
                    }
                    #sync1.owl-theme .owl-next,
                    #sync1.owl-theme .owl-prev {
                        width: 22px;
                        height: 40px;
                        margin-top: -20px;
                        position: absolute;
                        top: 50%;
                    }
                    #sync1.owl-theme .owl-prev {
                        left: 10px;
                    }
                    #sync1.owl-theme .owl-next {
                        right: 10px;
                    }
                </style>

                <script>
                    deferstyle('assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css', 'carousel-css',1);
                </script>
                <div id="sync1" class="owl-carousel owl-theme uk-margin-small-bottom" uk-lightbox="animation: slide">
                    <?php
                    $data = array(
                        'https://cdn.tgdd.vn/Products/Images/42/114115/iphone-x-64gb-1-400x460-1-400x460.png',
                        'https://cdn.tgdd.vn/Products/Images/42/200294/samsung-galaxy-a50-128gb-blue-400x460.png',
                        'https://cdn.tgdd.vn/Products/Images/42/202703/oppo-f11-pro-128gb-1-400x460.png',
                        'https://cdn.tgdd.vn/Products/Images/42/192003/samsung-galaxy-a9-2018-blue-400x460.png',
                        'https://cdn.tgdd.vn/Products/Images/42/202861/vivo-s1-blue-400x460.png',
                        'https://cdn.tgdd.vn/Products/Images/42/197512/samsung-galaxy-a10-red-400x460.png',
                    );
                    foreach ($data as $k => $v):?>
                    <div class="item">
                        <div class="uk-padding-large uk-padding-remove-bottom uk-padding-remove-top">
                            <a href="<?= $v ?>"><img data-src="<?= $v ?>"></a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div id="sync2" class="owl-carousel owl-theme">
                    <?php
                    $data = array(
                        'https://cdn.tgdd.vn/Products/Images/42/190322/iphone-xs-max-256gb-white-600x600.jpg',
                        'https://cdn.tgdd.vn/Products/Images/42/190324/iphone-xs-256gb-white-600x600.jpg',
                        'https://cdn.tgdd.vn/Products/Images/42/190321/iphone-xs-max-gold-600x600.jpg',
                        'https://cdn.tgdd.vn/Products/Images/42/114111/iphone-x-256gb-a1-600x600.jpg',
                        'https://cdn.tgdd.vn/Products/Images/42/190323/iphone-xs-gold-600x600.jpg',
                        'https://cdn.tgdd.vn/Products/Images/42/114115/iphone-x-64gb-21-600x600.jpg'
                    );
                    foreach ($data as $k => $v):?>
                    <div class="item uk-box-shadow-small">
                        <img data-src="<?= $v ?>">
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div>
                <h1 class="title_detail_1 uk-margin">IPHONE XR - 256 GB - HÀNG CHÍNH HÃNG</h1>
                <ul class="uk-breadcrumb uk-margin-remove breadcrumb-detail">
                    <li><a href="#"><span class="uk-position-relative" style="top: -3px;" uk-icon="home"></span></a></li>
                    <li><a href="#">iPhone</a></li>
                    <li><span>iPhone XR 256 GB</span></li>
                </ul>
                <div class="uk-padding-small box_price uk-background-muted uk-border-rounded uk-box-shadow-small uk-margin-bottom">
                    <div class="price-detail uk-flex uk-flex-middle">
                        <span class="uk-margin-small-right">Giá: 11.000.000</span>
                        <label class="uk-label uk-label-warning uk-text-capitalize">Trả góp 0%</label>
                    </div>
                </div>
                <div class="box_gift uk-border-rounded uk-box-shadow-small uk-padding-small uk-margin">
                    <h5 class="uk-text-uppercase title">khuyến mại</h5>
                    <ul class="uk-list">
                        <li>
                            <i class="fa fa-gift" aria-hidden="true"></i>
                            Giảm thêm 5% tới 300K qua VnPay QR code
                        </li>
                        <li>
                            <i class="fa fa-gift" aria-hidden="true"></i>
                            Hỗ trợ trả góp 0% dành cho các chủ thẻ tín dụng VPBank, MSB Sacombank, VIB và Shinhan Bank
                        </li>
                        <li>
                            <i class="fa fa-gift" aria-hidden="true"></i>
                            Cơ hội trúng điều hoà cao cấp trị giá tới 10 triệu mỗi tuần
                        </li>
                    </ul>
                </div>
                <div class="uk-margin">
                    <a href="" class="btn_buy uk-button uk-box-shadow-small uk-light uk-border-rounded uk-button-danger uk-button-large uk-width-1-1">
                        <h2>MUA NGAY</h2>
                        <div>Tại cửa hàng hoặc ship COD</div>
                    </a>
                </div>
                <div class="uk-margin">
                    <a href="" class="btn_buy uk-button uk-box-shadow-small uk-light uk-border-rounded uk-button-primary uk-button-large uk-width-1-1">
                        <h2>TRẢ GÓP</h2>
                        <div>Visa, Mastercard, HD Saison, FE Credit</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="uk-child-width-1-2@m uk-grid-medium uk-grid" uk-grid>
            <div>
                <h4 class="title_detail_2">Video đánh giá, giới thiệu Gold Chocolate Alligator</h4>
                <iframe src="about:blank" data-src="https://www.youtube.com/embed/cJWHh4VBY8k?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="960" height="540" frameborder="0" allowusermedia uk-responsive uk-video="automute: true"></iframe>
            </div>
            <div>
                <h4 class="title_detail_2">Thông số kỹ thuật của Gold Chocolate Alligator</h4>
                <table class="uk-table table_thongso uk-table-small uk-table-divider">
                    <tbody>
                    <?php
                    $data = array(
                        array('Hãng sản xuất','Samsung'),
                        array('Kích thước màn hình:','6.4”'),
                        array('Độ phân giải màn hình:','3040 x 1400'),
                        array('Hệ điều hành:','Android'),
                        array('Chip xử lý (CPU):','Exynos 9820 8 nhân'),
                        array('RAM:','8Gb'),
                        array('Máy ảnh chính:','Triple camera ( 12 MP x 12 MP x 16 MP)'),
                        array('Bộ nhớ trong:','128Gb'),
                        array('Dung lượng pin (mAh):','4000mAh'),
                    );
                    foreach ($data as $key => $value):?>
                    <tr>
                        <td><?= $value[0] ?></td>
                        <td><?= $value[1] ?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="box_2 uk-margin">
            <div class="uk-grid-medium uk-grid" uk-grid>
                <div class="uk-width-expand">
                    <ul class="uk-child-width-expand@m tab_detail uk-grid-collapse" uk-grid uk-tab="connect: .content-detail">
                        <li class="uk-active"><a href="#">đánh giá chi tiết</a></li>
                        <li><a href="#">thông số kỹ thuật</a></li>
                        <li><a href="#">khách hàng</a></li>
                    </ul>
                    <ul class="content-detail uk-switcher uk-margin">
                        <li>
                            <article class="baiviet">
                                <p>Mua điện thoại Galaxy S10 Plus chính hãng tại Hoàng Hà Mobile
                                    Để hiểu rõ hơn về “siêu phẩm” Galaxy S10 Plus cũng như có những đánh giá chính xác nhất thì những thông tin ngay sau đây sẽ rất có ích cho bạn.</p>
                                <p>Galaxy S10 Plus giữ nguyên vẻ sang trọng của dòng Galaxy S
                                    Galaxy S10 Plus có thiết kế nguyên khối với các đường nét bo tròn làm nên “vẻ đẹp thương hiệu” cao cấp,sang trọng như thường thấy trên các sản phẩm Galaxy S.</p>
                                <figure class="uk-text-center">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/42/114115/iphone-x-64gb1.jpg" alt="">
                                </figure>
                                <p>Máy trang bị màn hình AMOLED kích thước 6.4 inch, kích thước máy 157,7 mm x 75 mm x 7,8 mm. Cũng giống như Galaxy S10, phiên bản Galaxy S10 Plus sử dụng ngôn ngữ thiết kế màn hình Infinity-O. Chúng ta có một lỗ đục hình viên thuốc trên góc phải màn hình. Đây chính là nơi giấu camera selfie cùng cảm biến của máy.Trên Galaxy S10+ sẽ có camera selfie kép. Máy cũngsử dụng hiệu ứng màu sắc quang phổ ở mặt lưng rất đẹp và không bao giờ lỗi mốt.
                                </p>
                                <figure class="uk-text-center">
                                    <img data-src="https://cdn.tgdd.vn/Products/Images/42/114115/iphone-x-64gb15.jpg" alt="">
                                </figure>
                            </article>
                        </li>
                        <li>2</li>
                        <li>3</li>
                    </ul>
                </div>
                <div class="uk-width-1-4@m">
                    <?php require "sidebar-right.php"; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>