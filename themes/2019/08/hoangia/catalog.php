<?php $data['title'] = 'Hoàng gia - Danh mục' ?>
<?php require "header.php"; ?>
<div class="uk-container uk-padding-remove">
    <ul class="uk-breadcrumb uk-flex-middle uk-margin-remove breadcrumb-catalog">
        <li><a href="#"><span class="uk-position-relative" style="top: -3px;" uk-icon="home"></span></a></li>
        <li><a href="#">Điện thoại cao cấp</a></li>
        <li><span>Vertu Luxury</span></li>
    </ul>
    <div class="uk-grid-medium" uk-grid>
        <div class="uk-width-1-5@m uk-visible@m">
            <?php require "sidebar-left.php"; ?>
        </div>
        <div class="uk-width-expand">
            <figure>
                <a href=""><img src="images/1x/banner_danhmuc.jpg" alt=""></a>
            </figure>
            <div class="uk-grid-medium" uk-grid>
                <?php
                $data = array(
                    array(
                        'src' => 'https://cdn.tgdd.vn/Products/Images/7077/194536/apple-watch-s3-gps-42mm-vien-nhom-day-cao-su-den-nt-400x400.jpg',
                        'title' => 'Vivo S1',
                        'price' => 6690000,
                    ),
                    array(
                        'src' => 'https://cdn.tgdd.vn/Products/Images/7077/194392/apple-watch-s4-gps-44mm-vien-nhom-day-cao-su-den-nt-400x400.jpg',
                        'title' => 'Samsung Galaxy A10',
                        'price' => 3090000,
                    ),
                    array(
                        'src' => 'https://cdn.tgdd.vn/Products/Images/7077/194338/apple-watch-s4-gps-44mm-vien-nhom-day-vai-hong-nt-400x400.jpg',
                        'title' => 'iPhone 7 Plus 32GB',
                        'price' => 12490000,
                    ),
                    array(
                        'src' => 'https://cdn.tgdd.vn/Products/Images/7077/194323/apple-watch-s4-gps-40mm-vien-nhom-mau-hong-nt-400x400.jpg',
                        'title' => 'Xiaomi Redmi Note 7 64GB Trắng',
                        'price' => 4490000,
                    ),

                    array(
                        'src' => 'https://cdn.tgdd.vn/Products/Images/42/200330/oppo-a5s-red-400x400.jpg',
                        'title' => 'OPPO A5s',
                        'price' => 3990000,
                    ),
                    array(
                        'src' => 'https://cdn.tgdd.vn/Products/Images/42/202268/huawei-y9-prime-2019-blue-2-400x400.jpg',
                        'title' => 'Huawei Y9 Prime (2019)',
                        'price' => 5840000,
                    ),
                    array(
                        'src' => 'https://cdn.tgdd.vn/Products/Images/522/163645/ipad-wifi-32gb-2018-thumb-33397-123-123321-600x600-400x400.jpg',
                        'title' => 'iPad Wifi 2018 32GB',
                        'price' => 7490000,
                    ),

                    array(
                        'src' => 'https://cdn.tgdd.vn/Products/Images/7077/194536/apple-watch-s3-gps-42mm-vien-nhom-day-cao-su-den-nt-400x400.jpg',
                        'title' => 'Vivo S1',
                        'price' => 6690000,
                    ),
                    array(
                        'src' => 'https://cdn.tgdd.vn/Products/Images/7077/194392/apple-watch-s4-gps-44mm-vien-nhom-day-cao-su-den-nt-400x400.jpg',
                        'title' => 'Samsung Galaxy A10',
                        'price' => 3090000,
                    ),
                    array(
                        'src' => 'https://cdn.tgdd.vn/Products/Images/7077/194338/apple-watch-s4-gps-44mm-vien-nhom-day-vai-hong-nt-400x400.jpg',
                        'title' => 'iPhone 7 Plus 32GB',
                        'price' => 12490000,
                    ),
                    array(
                        'src' => 'https://cdn.tgdd.vn/Products/Images/7077/194323/apple-watch-s4-gps-40mm-vien-nhom-mau-hong-nt-400x400.jpg',
                        'title' => 'Xiaomi Redmi Note 7 64GB Trắng',
                        'price' => 4490000,
                    ),

                    array(
                        'src' => 'https://cdn.tgdd.vn/Products/Images/42/200330/oppo-a5s-red-400x400.jpg',
                        'title' => 'OPPO A5s',
                        'price' => 3990000,
                    ),
                );
                foreach ($data as $key => $value): ?>
                    <div class="uk-width-1-2 uk-width-1-3@s uk-width-1-4@m">
                        <div class="box_1">
                            <a href="detail-light.php">
                                <div class="uk-background-default uk-padding">
                                    <div class="uk-cover-container">
                                        <img class="lazyload" data-src="<?= $value['src'] ?>" alt="" uk-cover>
                                        <canvas width="960" height="960"></canvas>
                                    </div>
                                </div>
                            </a>
                            <div class="uk-margin-small uk-text-center info_sp">
                                <div class="catalog">Vertu Signature S | MSP: 100010</div>
                                <h3 class="title uk-text-truncate uk-margin-small"><a href=""><?= $value['title'] ?></a></h3>
                                <div class="price uk-margin-small"><?= number_format($value['price']); ?></div>
                                <div class="uk-button-group">
                                    <a href="" class="uk-button uk-form-small uk-text-capitalize uk-button-secondary">Chi tiết</a>
                                    <a href="" class="uk-button uk-form-small uk-text-capitalize uk-button-primary">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="uk-section-xsmall"></div>
</div>
<?php require "footer.php"; ?>