<?php $data['title'] = 'Hoàng gia - Trang chủ' ?>
<?php require "header.php"; ?>
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 1915:839; min-height: 300;">

    <ul class="uk-slideshow-items">
        <li>
            <img class="uk-cover" data-src="images/1x/slide.jpg" alt="">
        </li>
        <li>
            <img class="uk-cover" data-src="images/1x/slide.jpg" alt="">
        </li>
        <li>
            <img class="uk-cover" data-src="images/1x/slide.jpg" alt="">
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
<div class="uk-section-small">
    <div class="box_home_1 uk-margin uk-text-center uk-text-uppercase">
        <div class="uk-display-inline-block uk-position-relative">
            <span class="uk-display-inline-block uk-background-default uk-position-relative uk-position-z-index">THƯƠNG HIỆU NỔI TIẾNG</span>
            <hr class="uk-position-center-left uk-margin-remove uk-position-center-right">
        </div>
    </div>
    <div class="uk-container">
        <div class="uk-margin-medium" uk-slider="autoplay: true">

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-light">
                    <ul class="uk-slider-items uk-child-width-auto uk-grid-medium uk-flex-middle uk-grid" uk-grid>
                        <li>
                            <img class="lazyload" data-src="images/1x/brand/oris.jpg" alt="">
                        </li>
                        <li>
                            <img class="lazyload" data-src="images/1x/brand/zenith.jpg" alt="">
                        </li>
                        <li>
                            <img class="lazyload" data-src="images/1x/brand/vacheron.jpg" alt="">
                        </li>
                        <li>
                            <img class="lazyload" data-src="images/1x/brand/tagheuer.jpg" alt="">
                        </li>
                        <li>
                            <img class="lazyload" data-src="images/1x/brand/seiko.jpg" alt="">
                        </li>
                        <li>
                            <img class="lazyload" data-src="images/1x/brand/ressence.jpg" alt="">
                        </li>
                        <li>
                            <img class="lazyload" data-src="images/1x/brand/nomos.jpg" alt="">
                        </li>
                        <li>
                            <img class="lazyload" data-src="images/1x/brand/longines.jpg" alt="">
                        </li>
                        <li>
                            <img class="lazyload" data-src="images/1x/brand/hamilton.jpg" alt="">
                        </li>
                    </ul>
                </div>

            </div>


        </div>
        <div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-small uk-grid" uk-grid>
            <div>
                <a href="catalog.php">
                    <div class="uk-cover-container uk-transition-toggle uk-background-muted">
                        <img class="lazyload uk-transition-scale-up uk-transition-opaque uk-position-cover" data-src="images/1x/brand/vertu.jpg" alt="" uk-cover>
                        <canvas width="960" height="469"></canvas>
                    </div>
                </a>
            </div>
            <div>
                <a href="catalog.php">
                    <div class="uk-cover-container uk-transition-toggle uk-background-muted">
                        <img class="lazyload uk-transition-scale-up uk-transition-opaque uk-position-cover" data-src="images/1x/brand/dong-ho.jpg" alt="" uk-cover>
                        <canvas width="960" height="469"></canvas>
                    </div>
                </a>
            </div>
            <div>
                <a href="catalog.php">
                    <div class="uk-cover-container uk-transition-toggle uk-background-muted">
                        <img class="lazyload uk-transition-scale-up uk-transition-opaque uk-position-cover" data-src="images/1x/brand/vertu.jpg" alt="" uk-cover>
                        <canvas width="960" height="469"></canvas>
                    </div>
                </a>
            </div>
            <div>
                <a href="catalog.php">
                    <div class="uk-cover-container uk-transition-toggle uk-background-muted">
                        <img class="lazyload uk-transition-scale-up uk-transition-opaque uk-position-cover" data-src="images/1x/brand/dong-ho.jpg" alt="" uk-cover>
                        <canvas width="960" height="469"></canvas>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="uk-section-small uk-background-muted">
    <div class="box_home_1 uk-margin uk-text-center uk-text-uppercase">
        <div class="uk-display-inline-block uk-position-relative">
            <span class="uk-display-inline-block uk-background-muted uk-position-relative uk-position-z-index">laptop</span>
            <hr class="uk-position-center-left uk-margin-remove uk-position-center-right">
        </div>
    </div>
    <div class="uk-container uk-padding-remove">
        <div uk-slider="finite: true">

            <div class="uk-position-relative">

                <div class="uk-slider-container">
                    <ul class="uk-slider-items uk-grid-small slide_home_sp uk-grid" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'src' => 'https://cdn.tgdd.vn/Products/Images/44/195381/hp-15-da0443tx-i3-7020u-4gb-1tb-mx110-win10-5sl06-avatar-1-400x400.jpg',
                                'title' => 'Vivo S1',
                                'price' => 6690000,
                            ),
                            array(
                                'src' => 'https://cdn.tgdd.vn/Products/Images/44/195078/lenovo-ideapad-330s-14ikbr-i5-8250u-4gb-1tb-win10-33397-thumb-1-400x400.jpg',
                                'title' => 'Samsung Galaxy A10',
                                'price' => 3090000,
                            ),
                            array(
                                'src' => 'https://cdn.tgdd.vn/Products/Images/44/198789/acer-aspire-a515-53-3153-i3-8145u-4gb-1gb-win10-n-33397-thumb-1-400x400.jpg',
                                'title' => 'iPhone 7 Plus 32GB',
                                'price' => 12490000,
                            ),
                            array(
                                'src' => 'https://cdn.tgdd.vn/Products/Images/44/106875/apple-macbook-air-mqd32sa-a-i5-5350u-400x400.jpg',
                                'title' => 'Xiaomi Redmi Note 7 64GB Trắng',
                                'price' => 4490000,
                            ),
                        );
                        foreach ($data as $key => $value): ?>
                            <li class="uk-width-3-5 uk-width-1-3@s uk-width-1-4@m">
                                <div class="box_1">
                                    <a href="">
                                        <div class="uk-background-default uk-padding">
                                            <div class="uk-cover-container">
                                                <img class="lazyload" data-src="<?= $value['src'] ?>" alt="" uk-cover>
                                                <canvas width="400" height="267"></canvas>
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
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="uk-hidden@s">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

            </div>


        </div>
    </div>
</div>
<div class="uk-section-small">
    <div class="box_home_1 uk-margin uk-text-center uk-text-uppercase">
        <div class="uk-display-inline-block uk-position-relative">
            <span class="uk-display-inline-block uk-background-default uk-position-relative uk-position-z-index">đồng hồ</span>
            <hr class="uk-position-center-left uk-margin-remove uk-position-center-right">
        </div>
    </div>
    <div class="uk-container uk-padding-remove">
        <div uk-slider="finite: true">

            <div class="uk-position-relative">

                <div class="uk-slider-container">
                    <ul class="uk-slider-items uk-grid-small slide_home_sp uk-grid" uk-grid>
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
                        );
                        foreach ($data as $key => $value): ?>
                            <li class="uk-width-3-5 uk-width-1-3@s uk-width-1-4@m">
                                <div class="box_1">
                                    <a href="">
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
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="uk-hidden@s">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

            </div>


        </div>
    </div>
</div>
<div class="uk-section-small uk-background-muted">
    <div class="box_home_1 uk-margin uk-text-center uk-text-uppercase">
        <div class="uk-display-inline-block uk-position-relative">
            <span class="uk-display-inline-block uk-background-muted uk-position-relative uk-position-z-index">iphone</span>
            <hr class="uk-position-center-left uk-margin-remove uk-position-center-right">
        </div>
    </div>
    <div class="uk-container uk-padding-remove">
        <div uk-slider="finite: true">

            <div class="uk-position-relative">

                <div class="uk-slider-container">
                    <ul class="uk-slider-items uk-grid-small slide_home_sp uk-grid" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'src' => 'https://cdn.tgdd.vn/Products/Images/42/202861/vivo-s1-blue-400x400.jpg',
                                'title' => 'Vivo S1',
                                'price' => 6690000,
                            ),
                            array(
                                'src' => 'https://cdn.tgdd.vn/Products/Images/42/197512/samsung-galaxy-a10-red-400x400.jpg',
                                'title' => 'Samsung Galaxy A10',
                                'price' => 3090000,
                            ),
                            array(
                                'src' => 'https://cdn.tgdd.vn/Products/Images/42/78124/iphone-7-plus-32gb-gold-400x400.jpg',
                                'title' => 'iPhone 7 Plus 32GB',
                                'price' => 12490000,
                            ),
                            array(
                                'src' => 'https://cdn.tgdd.vn/Products/Images/42/209621/xiaomi-redmi-note-7-64gb-trang-1-400x400.jpg',
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
                        );
                        foreach ($data as $key => $value): ?>
                            <li class="uk-width-3-5 uk-width-1-3@s uk-width-1-4@m">
                                <div class="box_1">
                                    <a href="">
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
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="uk-hidden@s">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

            </div>


        </div>
    </div>
</div>
<div class="uk-section-small">
    <div class="box_home_1 uk-margin uk-text-center uk-text-uppercase">
        <div class="uk-display-inline-block uk-position-relative">
            <span class="uk-display-inline-block uk-background-default uk-position-relative uk-position-z-index">kiến thức - thông tin</span>
            <hr class="uk-position-center-left uk-margin-remove uk-position-center-right">
        </div>
    </div>
    <div class="uk-container">
        <div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-medium uk-grid" uk-grid>
            <?php
            $data = array(
                array(
                    'src' => 'https://sohanews.sohacdn.com/zoom/434_271/2019/8/24/us-chamber-of-commerce-1566618679690186911705-crop-15666186856702003381502.jpg',
                    'title' => 'Doanh nghiệp Mỹ từ chối yêu cầu rút khỏi Trung Quốc của Tổng thống Trump',
                ),
                array(
                    'src' => 'https://photo2.tinhte.vn/data/attachment-files/2019/08/4756248_COVER_o_nhiem_tinhte.jpg',
                    'title' => 'Các hạt bụi ô nhiễm trong không khí vẫn có thể giết người ngay khi ở nồng độ thấp',
                ),
                array(
                    'src' => 'https://sohanews.sohacdn.com/zoom/412_259/2019/8/24/051019ustariff960x540-15665822289131811226664-crop-15665822402171518357976.jpg',
                    'title' => 'CNBC: 75 tỉ USD hàng hóa bị TQ cho "lên thớt", ông Trump liền giáng cấp ông Tập từ bạn thành thù - Điềm rất xấu?',
                ),
                array(
                    'src' => 'https://sohanews.sohacdn.com/zoom/412_259/2019/8/23/4c8a-icmpfxa9072199-15665291248851409417056-crop-1566529135896270592543.jpg',
                    'title' => 'Báo Trung Quốc nói gì về tiêm kích Su-30MK2 hiện đại nhất của Không quân Việt Nam?',
                ),
            );
            foreach ($data as $key => $value): ?>
                <div>
                    <div class="uk-box-shadow-small">
                        <div class="uk-cover-container uk-transition-toggle uk-margin-small uk-background-muted">
                            <img class="uk-transition-scale-up uk-transition-opaque uk-position-cover lazyload" data-src="<?= $value['src'] ?>" alt="" uk-cover>
                            <canvas width="960" height="589"></canvas>
                        </div>
                    </div>
                    <div class="uk-text-center uk-margin-small news_home_1">
                        <time>10/06/2019</time>
                        <h5 class="title uk-margin-small uk-text-uppercase"><a href=""><?= $value['title'] ?></a></h5>
                        <a href="" class="uk-button uk-button-default uk-text-capitalize uk-form-small">Xem thêm</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>