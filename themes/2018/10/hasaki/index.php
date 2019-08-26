<?php include('header.php'); ?>
<div class="uk-container">
    <div class="uk-grid-collapse" uk-grid>
        <div class="uk-width-1-6@m"></div>
        <div class="uk-width-expand">
            <div class="uk-grid-small" uk-grid>
                <div class="uk-width-4-5@m">
                    <div class="uk-grid-collapse" id="block_home" uk-grid>
                        <div class="uk-width-3-4@m">
                            <div class="uk-position-relative slider_main" uk-slider>
                                <div class="uk-visible-toggle uk-light">

                                    <ul class="uk-slider-items uk-child-width-1-1">
                                        <li>
                                            <img class="h-100" src="imgs/cailaohoandong-650x400_2.jpg" alt="">
                                        </li>
                                        <li>
                                            <img class="h-100" src="imgs/livestream-home-1280x130-2018-09-26.jpg" alt="">
                                        </li>
                                        <li>
                                            <img class="h-100" src="imgs/merries-home-2018-09-25_1.jpg" alt="">
                                        </li>
                                        <li>
                                            <img class="h-100" src="imgs/larocheposay-2018-09-24.jpg" alt="">
                                        </li>
                                        <li>
                                            <img class="h-100" src="imgs/always-on-banner-fit-me-_-ssmi-home.jpg" alt="">
                                        </li>
                                        <li>
                                            <img class="h-100" src="imgs/nam-650x400-_1__2.jpg" alt="">
                                        </li>
                                    </ul>

                                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                </div>
                                <ul class="uk-slider-nav uk-position-bottom uk-dotnav uk-flex-center uk-margin"></ul>
                            </div>
                        </div>
                        <div class="uk-width-1-4@m">
                            <div class="uk-flex uk-flex-column h-100" style="flex-direction: column;">
                                <a class="uk-flex-1"><img class="h-100" src="imgs/claymask_12-9.jpg" alt=""></a>
                                <a class="uk-flex-1"><img class="h-100" src="imgs/timeless-220x200_1.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-5@m">
                    <div class="card h-100 card2">
                        <div class="card-header bg-white p-2"><h3>CHẤT LƯỢNG CHO TẤT CẢ</h3></div>
                        <div class="card-body p-2 d-flex flex-column">
                            <div class="row form-row uk-flex-1">
                                <div class="col text-center d-flex flex-column align-items-center justify-content-center">
                                    <img src="imgs/img_quality_1.jpg" alt="">
                                    <p>Thanh toán khi nhận hàng</p>
                                </div>
                                <div class="col text-center d-flex flex-column align-items-center justify-content-center">
                                    <img src="imgs/delivery_70X70.png" alt="">
                                    <img class="uk-position-top-right" style="top: 18px; right: 10px;" src="imgs/new_03.png" alt="">
                                    <p>Giao hàng dưới 120 phút</p>
                                </div>
                            </div>
                            <div class="row form-row uk-flex-1">
                                <div class="col text-center d-flex flex-column align-items-center justify-content-center">
                                    <img src="imgs/img_quality_3.jpg" alt="">
                                    <p>14 ngày đổi trả miễn phí</p>
                                </div>
                                <div class="col text-center d-flex flex-column align-items-center justify-content-center">
                                    <img src="imgs/img_quality_4.jpg" alt="">
                                    <p>Hàng chính hãng</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer p-2 bg-white">
                            <div class="media media2">
                                <img class="mr-2 align-self-center" src="imgs/img_hotline.png" alt="">
                                <div class="media-body align-self-center">
                                    <div>Dịch vụ CSKH chu đáo </div>
                                    <div>Hotline: <b>1900 636 900</b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-card card_common uk-margin" id="giatot_daily">
        <div class="uk-card-header uk-padding-small uk-flex uk-flex-middle uk-flex-between">
            <h6 class="uk-card-title uk-margin-remove uk-text-uppercase">DEALS ĐANG DIỄN RA</h6>
            <a class="uk-button uk-button-default uk-link">Xem thêm</a>
        </div>
        <div class="uk-card-body uk-padding-remove">
            <div class="uk-position-relative uk-visible-toggle uk-light slider_item_sp" uk-slider>

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m">
                    <li>
                        <a class="uk-card card_item">
                            <div class="uk-card-header uk-padding-remove uk-inline-clip uk-transition-toggle" tabindex="0">
                                <img src="imgs/im1.jpg" alt="">
                                <img class="uk-transition-scale-up uk-position-cover" src="imgs/in1.jpg" alt="">
                            </div>
                            <div class="uk-card-body pb-3">
                                <div class="price uk-flex uk-flex-middle uk-flex-between">
                                    <span class="new">389,000 đ</span>
                                    <div class="right">
                                        <del class="old">195,000</del>
                                        <span class="sale">-37%</span>
                                    </div>
                                </div>
                                <div class="block_main_info_hsk_deal mb-2">
                                    <div class="product_shopping_deal uk-text-uppercase">BIODERMA</div>
                                    <div class="title_item_shopping_deal vi">Nước Tẩy Trang Bioderma Dành Cho Da Nhạy Cảm 500ml</div>
                                    <div class="title_item_shopping_deal en">Sensibio H2O</div>
                                </div>
                                <div class="block_timer_deal">
                                    <progress id="js-progressbar" class="uk-progress uk-margin-remove" value="92" max="100"></progress>
                                    <small>92% deal đã mua</small>
                                </div>
                                <div class="uk-grid-small uk-grid-collapse uk-child-width-auto uk-flex-middle" uk-grid uk-countdown="date: 2018-10-13T15:30:00+00:00">
                                    <div class="mr-1" style="margin-top: 0px; font-weight: normal;">Deal còn lại</div>
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="uk-countdown-number uk-countdown-days"></div>
                                        <div class="uk-countdown-label uk-text-center uk-visible@s ml-1 mr-1">ngày</div>
                                    </div>
                                    <div>
                                        <div class="uk-countdown-number uk-countdown-hours"></div>
                                    </div>
                                    <div class="uk-countdown-separator">:</div>
                                    <div>
                                        <div class="uk-countdown-number uk-countdown-minutes"></div>
                                    </div>
                                    <div class="uk-countdown-separator">:</div>
                                    <div>
                                        <div class="uk-countdown-number uk-countdown-seconds"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="uk-card card_item">
                            <div class="uk-card-header uk-padding-remove uk-inline-clip uk-transition-toggle" tabindex="0">
                                <img src="imgs/avatar15.jpg" alt="">
                                <img class="uk-transition-scale-up uk-position-cover" src="imgs/sedan-42.jpg" alt="">
                            </div>
                            <div class="uk-card-body">
                                <div class="price uk-flex uk-flex-middle uk-flex-between">
                                    <span class="new">389,000 đ</span>
                                    <div class="right">
                                        <del class="old">195,000</del>
                                        <span class="sale">-37%</span>
                                    </div>
                                </div>
                                <div class="block_main_info_hsk_deal mb-2">
                                    <div class="product_shopping_deal uk-text-uppercase">BIODERMA</div>
                                    <div class="title_item_shopping_deal vi">Nước Tẩy Trang Bioderma Dành Cho Da Nhạy Cảm 500ml</div>
                                    <div class="title_item_shopping_deal en">Sensibio H2O</div>
                                </div>
                                <div class="block_timer_deal mb-3">
                                    <progress id="js-progressbar" class="uk-progress uk-margin-remove" value="92" max="100"></progress>
                                    <small>92% deal đã mua</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="uk-card card_item">
                            <div class="uk-card-header uk-padding-remove uk-inline-clip uk-transition-toggle" tabindex="0">
                                <img src="imgs/im1.jpg" alt="">
                                <img class="uk-transition-scale-up uk-position-cover" src="imgs/in1.jpg" alt="">
                            </div>
                            <div class="uk-card-body">
                                <div class="price uk-flex uk-flex-middle uk-flex-between">
                                    <span class="new">389,000 đ</span>
                                    <div class="right">
                                        <del class="old">195,000</del>
                                        <span class="sale">-37%</span>
                                    </div>
                                </div>
                                <div class="block_main_info_hsk_deal mb-2">
                                    <div class="product_shopping_deal uk-text-uppercase">BIODERMA</div>
                                    <div class="title_item_shopping_deal vi">Nước Tẩy Trang Bioderma Dành Cho Da Nhạy Cảm 500ml</div>
                                    <div class="title_item_shopping_deal en">Sensibio H2O</div>
                                </div>
                                <div class="block_timer_deal mb-3">
                                    <progress id="js-progressbar" class="uk-progress uk-margin-remove" value="92" max="100"></progress>
                                    <small>92% deal đã mua</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="uk-card card_item">
                            <div class="uk-card-header uk-padding-remove uk-inline-clip uk-transition-toggle" tabindex="0">
                                <img src="imgs/im1.jpg" alt="">
                                <img class="uk-transition-scale-up uk-position-cover" src="imgs/in1.jpg" alt="">
                            </div>
                            <div class="uk-card-body">
                                <div class="price uk-flex uk-flex-middle uk-flex-between">
                                    <span class="new">389,000 đ</span>
                                    <div class="right">
                                        <del class="old">195,000</del>
                                        <span class="sale">-37%</span>
                                    </div>
                                </div>
                                <div class="block_main_info_hsk_deal mb-2">
                                    <div class="product_shopping_deal uk-text-uppercase">BIODERMA</div>
                                    <div class="title_item_shopping_deal vi">Nước Tẩy Trang Bioderma Dành Cho Da Nhạy Cảm 500ml</div>
                                    <div class="title_item_shopping_deal en">Sensibio H2O</div>
                                </div>
                                <div class="block_timer_deal mb-3">
                                    <progress id="js-progressbar" class="uk-progress uk-margin-remove" value="92" max="100"></progress>
                                    <small>92% deal đã mua</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="uk-card card_item">
                            <div class="uk-card-header uk-padding-remove uk-inline-clip uk-transition-toggle" tabindex="0">
                                <img src="imgs/im1.jpg" alt="">
                                <img class="uk-transition-scale-up uk-position-cover" src="imgs/in1.jpg" alt="">
                            </div>
                            <div class="uk-card-body">
                                <div class="price uk-flex uk-flex-middle uk-flex-between">
                                    <span class="new">389,000 đ</span>
                                    <div class="right">
                                        <del class="old">195,000</del>
                                        <span class="sale">-37%</span>
                                    </div>
                                </div>
                                <div class="block_main_info_hsk_deal mb-2">
                                    <div class="product_shopping_deal uk-text-uppercase">BIODERMA</div>
                                    <div class="title_item_shopping_deal vi">Nước Tẩy Trang Bioderma Dành Cho Da Nhạy Cảm 500ml</div>
                                    <div class="title_item_shopping_deal en">Sensibio H2O</div>
                                </div>
                                <div class="block_timer_deal mb-3">
                                    <progress id="js-progressbar" class="uk-progress uk-margin-remove" value="92" max="100"></progress>
                                    <small>92% deal đã mua</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="uk-card card_item">
                            <div class="uk-card-header uk-padding-remove uk-inline-clip uk-transition-toggle" tabindex="0">
                                <img src="imgs/im1.jpg" alt="">
                                <img class="uk-transition-scale-up uk-position-cover" src="imgs/in1.jpg" alt="">
                            </div>
                            <div class="uk-card-body">
                                <div class="price uk-flex uk-flex-middle uk-flex-between">
                                    <span class="new">389,000 đ</span>
                                    <div class="right">
                                        <del class="old">195,000</del>
                                        <span class="sale">-37%</span>
                                    </div>
                                </div>
                                <div class="block_main_info_hsk_deal mb-2">
                                    <div class="product_shopping_deal uk-text-uppercase">BIODERMA</div>
                                    <div class="title_item_shopping_deal vi">Nước Tẩy Trang Bioderma Dành Cho Da Nhạy Cảm 500ml</div>
                                    <div class="title_item_shopping_deal en">Sensibio H2O</div>
                                </div>
                                <div class="block_timer_deal mb-3">
                                    <progress id="js-progressbar" class="uk-progress uk-margin-remove" value="19" max="100"></progress>
                                    <small>19% deal đã mua</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="uk-card card_item">
                            <div class="uk-card-header uk-padding-remove uk-inline-clip uk-transition-toggle" tabindex="0">
                                <img src="imgs/im1.jpg" alt="">
                                <img class="uk-transition-scale-up uk-position-cover" src="imgs/in1.jpg" alt="">
                            </div>
                            <div class="uk-card-body">
                                <div class="price uk-flex uk-flex-middle uk-flex-between">
                                    <span class="new">389,000 đ</span>
                                    <div class="right">
                                        <del class="old">195,000</del>
                                        <span class="sale">-37%</span>
                                    </div>
                                </div>
                                <div class="block_main_info_hsk_deal mb-2">
                                    <div class="product_shopping_deal uk-text-uppercase">BIODERMA</div>
                                    <div class="title_item_shopping_deal vi">Nước Tẩy Trang Bioderma Dành Cho Da Nhạy Cảm 500ml</div>
                                    <div class="title_item_shopping_deal en">Sensibio H2O</div>
                                </div>
                                <div class="block_timer_deal mb-3">
                                    <progress id="js-progressbar" class="uk-progress uk-margin-remove" value="92" max="100"></progress>
                                    <small>92% deal đã mua</small>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

            </div>
        </div>
    </div>
    <div class="uk-card card_common uk-margin" id="thuonghieu_noibat">
        <div class="uk-card-header uk-padding-small uk-flex uk-flex-middle uk-flex-between">
            <h6 class="uk-card-title uk-margin-remove uk-text-uppercase">thương hiệu nổi bật</h6>
            <a class="uk-button uk-button-default uk-link">Xem thêm</a>
        </div>
        <div class="uk-card-body uk-padding-small">
            <div class="row">
                <div class="col-md col-sm-3 col-6">
                    <a><img class="img-thumbnail mb-3 mb-md-0" src="imgs/brand/loreal-paris-logo.jpg" alt=""></a>
                </div>
                <div class="col-md col-sm-3 col-6">
                    <a><img class="img-thumbnail mb-3 mb-md-0" src="imgs/brand/logo_laroche.jpg" alt=""></a>
                </div>
                <div class="col-md col-sm-3 col-6">
                    <a><img class="img-thumbnail mb-3 mb-md-0" src="imgs/brand/logo_cetaphil.jpg" alt=""></a>
                </div>
                <div class="col-md col-sm-3 col-6">
                    <a><img class="img-thumbnail mb-3 mb-md-0" src="imgs/brand/eucerin-logo.jpg" alt=""></a>
                </div>
                <div class="col-md col-sm-3 col-6">
                    <a><img class="img-thumbnail mb-3 mb-md-0" src="imgs/brand/maybelline-logo.jpg" alt=""></a>
                </div>
                <div class="col-md col-sm-3 col-6">
                    <a><img class="img-thumbnail mb-3 mb-md-0" src="imgs/brand/moony.jpg" alt=""></a>
                </div>
                <div class="col-md col-sm-3 col-6">
                    <a><img class="img-thumbnail mb-3 mb-md-0" src="imgs/brand/logo_vichy.jpg" alt=""></a>
                </div>
                <div class="col-md col-sm-3 col-6">
                    <a><img class="img-thumbnail mb-3 mb-md-0" src="imgs/brand/MERRIRS.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-card card_common uk-margin home_seg_trang_diem">
        <div class="uk-card-header uk-padding-small uk-flex uk-flex-middle uk-flex-between flex-column flex-md-row">
            <h6 class="uk-card-title uk-margin-remove uk-text-uppercase">trang điểm</h6>
            <nav class="uk-navbar-container uk-flex-auto uk-navbar-transparent site_link" uk-navbar>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="#">Tẩy Trang</a></li>
                        <li><a href="#">Trang Điểm Môi</a></li>
                        <li><a href="#">Trang Điểm Mặt</a></li>
                        <li><a href="#">Trang Điểm Vùng Mắt</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="uk-card-body uk-padding-remove">
            <div class="uk-grid-collapse" uk-grid>
                <div class="uk-width-1-6@m">
                    <div class="card_left h-100">
                        <a><img src="imgs/brand/artboard_4_5.jpg" alt=""></a>
                        <div class="uk-card">
                            <div class="uk-card-body uk-padding-small">
                                <a class="uk-button uk-button-default">Son dưỡng</a>
                                <a class="uk-button uk-button-default">Phấn phủ</a>
                                <a class="uk-button uk-button-default">Phấn mắt</a>
                                <a class="uk-button uk-button-default">Kem nền</a>
                                <a class="uk-button uk-button-default">Kẻ mắt</a>
                                <a class="uk-button uk-button-default">che khuyết điểm</a>
                                <a class="uk-button uk-button-default">mascara</a>
                                <a class="uk-button uk-button-default">bấm mi</a>
                                <a class="uk-button uk-button-default">tẩy trang mặt</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand@m">
                    <div class="uk-grid-collapse" uk-grid>
                        <div><a><img src="imgs/brand/omg-desktop_4.jpg" alt=""></a></div>
                        <div><a><img src="imgs/brand/5_lopneni_366x200_1.jpg" alt=""></a></div>
                        <div><a><img src="imgs/brand/artboard_5_copy.jpg" alt=""></a></div>
                    </div>
                    <div class="uk-position-relative uk-visible-toggle uk-light slider_item_sp" uk-slider>

                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-5@m">
                            <li>
                                <a class="uk-card card_item">
                                    <div class="uk-card-header uk-padding-remove uk-inline-clip uk-transition-toggle" tabindex="0">
                                        <img src="imgs/im1.jpg" alt="">
                                        <img class="uk-transition-scale-up uk-position-cover" src="imgs/in1.jpg" alt="">
                                    </div>
                                    <div class="uk-card-body pb-3">
                                        <div class="price uk-flex uk-flex-middle uk-flex-between">
                                            <span class="new">389,000 đ</span>
                                            <div class="right">
                                                <del class="old">195,000</del>
                                                <span class="sale">-37%</span>
                                            </div>
                                        </div>
                                        <div class="block_main_info_hsk_deal mb-2">
                                            <div class="product_shopping_deal uk-text-uppercase">BIODERMA</div>
                                            <div class="title_item_shopping_deal vi">Nước Tẩy Trang Bioderma Dành Cho Da Nhạy Cảm 500ml</div>
                                            <div class="title_item_shopping_deal en">Sensibio H2O</div>
                                        </div>
                                        <div class="block_timer_deal">
                                            <progress id="js-progressbar" class="uk-progress uk-margin-remove" value="92" max="100"></progress>
                                            <small>92% deal đã mua</small>
                                        </div>
                                        <div class="uk-grid-small uk-grid-collapse uk-child-width-auto uk-flex-middle" uk-grid uk-countdown="date: 2018-10-02T15:30:00+00:00">
                                            <div class="mr-1" style="margin-top: 0px; font-weight: normal;">Deal còn lại</div>
                                            <div class="uk-flex uk-flex-middle">
                                                <div class="uk-countdown-number uk-countdown-days"></div>
                                                <div class="uk-countdown-label uk-text-center uk-visible@s ml-1 mr-1">ngày</div>
                                            </div>
                                            <div>
                                                <div class="uk-countdown-number uk-countdown-hours"></div>
                                            </div>
                                            <div class="uk-countdown-separator">:</div>
                                            <div>
                                                <div class="uk-countdown-number uk-countdown-minutes"></div>
                                            </div>
                                            <div class="uk-countdown-separator">:</div>
                                            <div>
                                                <div class="uk-countdown-number uk-countdown-seconds"></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="uk-card card_item">
                                    <div class="uk-card-header uk-padding-remove uk-inline-clip uk-transition-toggle" tabindex="0">
                                        <img src="imgs/avatar15.jpg" alt="">
                                        <img class="uk-transition-scale-up uk-position-cover" src="imgs/sedan-42.jpg" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="price uk-flex uk-flex-middle uk-flex-between">
                                            <span class="new">389,000 đ</span>
                                            <div class="right">
                                                <del class="old">195,000</del>
                                                <span class="sale">-37%</span>
                                            </div>
                                        </div>
                                        <div class="block_main_info_hsk_deal mb-2">
                                            <div class="product_shopping_deal uk-text-uppercase">BIODERMA</div>
                                            <div class="title_item_shopping_deal vi">Nước Tẩy Trang Bioderma Dành Cho Da Nhạy Cảm 500ml</div>
                                            <div class="title_item_shopping_deal en">Sensibio H2O</div>
                                        </div>
                                        <div class="block_timer_deal mb-3">
                                            <progress id="js-progressbar" class="uk-progress uk-margin-remove" value="92" max="100"></progress>
                                            <small>92% deal đã mua</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="uk-card card_item">
                                    <div class="uk-card-header uk-padding-remove uk-inline-clip uk-transition-toggle" tabindex="0">
                                        <img src="imgs/im1.jpg" alt="">
                                        <img class="uk-transition-scale-up uk-position-cover" src="imgs/in1.jpg" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="price uk-flex uk-flex-middle uk-flex-between">
                                            <span class="new">389,000 đ</span>
                                            <div class="right">
                                                <del class="old">195,000</del>
                                                <span class="sale">-37%</span>
                                            </div>
                                        </div>
                                        <div class="block_main_info_hsk_deal mb-2">
                                            <div class="product_shopping_deal uk-text-uppercase">BIODERMA</div>
                                            <div class="title_item_shopping_deal vi">Nước Tẩy Trang Bioderma Dành Cho Da Nhạy Cảm 500ml</div>
                                            <div class="title_item_shopping_deal en">Sensibio H2O</div>
                                        </div>
                                        <div class="block_timer_deal mb-3">
                                            <progress id="js-progressbar" class="uk-progress uk-margin-remove" value="92" max="100"></progress>
                                            <small>92% deal đã mua</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="uk-card card_item">
                                    <div class="uk-card-header uk-padding-remove uk-inline-clip uk-transition-toggle" tabindex="0">
                                        <img src="imgs/im1.jpg" alt="">
                                        <img class="uk-transition-scale-up uk-position-cover" src="imgs/in1.jpg" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="price uk-flex uk-flex-middle uk-flex-between">
                                            <span class="new">389,000 đ</span>
                                            <div class="right">
                                                <del class="old">195,000</del>
                                                <span class="sale">-37%</span>
                                            </div>
                                        </div>
                                        <div class="block_main_info_hsk_deal mb-2">
                                            <div class="product_shopping_deal uk-text-uppercase">BIODERMA</div>
                                            <div class="title_item_shopping_deal vi">Nước Tẩy Trang Bioderma Dành Cho Da Nhạy Cảm 500ml</div>
                                            <div class="title_item_shopping_deal en">Sensibio H2O</div>
                                        </div>
                                        <div class="block_timer_deal mb-3">
                                            <progress id="js-progressbar" class="uk-progress uk-margin-remove" value="92" max="100"></progress>
                                            <small>92% deal đã mua</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="uk-card card_item">
                                    <div class="uk-card-header uk-padding-remove uk-inline-clip uk-transition-toggle" tabindex="0">
                                        <img src="imgs/im1.jpg" alt="">
                                        <img class="uk-transition-scale-up uk-position-cover" src="imgs/in1.jpg" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="price uk-flex uk-flex-middle uk-flex-between">
                                            <span class="new">389,000 đ</span>
                                            <div class="right">
                                                <del class="old">195,000</del>
                                                <span class="sale">-37%</span>
                                            </div>
                                        </div>
                                        <div class="block_main_info_hsk_deal mb-2">
                                            <div class="product_shopping_deal uk-text-uppercase">BIODERMA</div>
                                            <div class="title_item_shopping_deal vi">Nước Tẩy Trang Bioderma Dành Cho Da Nhạy Cảm 500ml</div>
                                            <div class="title_item_shopping_deal en">Sensibio H2O</div>
                                        </div>
                                        <div class="block_timer_deal mb-3">
                                            <progress id="js-progressbar" class="uk-progress uk-margin-remove" value="92" max="100"></progress>
                                            <small>92% deal đã mua</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="uk-card card_item">
                                    <div class="uk-card-header uk-padding-remove uk-inline-clip uk-transition-toggle" tabindex="0">
                                        <img src="imgs/im1.jpg" alt="">
                                        <img class="uk-transition-scale-up uk-position-cover" src="imgs/in1.jpg" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="price uk-flex uk-flex-middle uk-flex-between">
                                            <span class="new">389,000 đ</span>
                                            <div class="right">
                                                <del class="old">195,000</del>
                                                <span class="sale">-37%</span>
                                            </div>
                                        </div>
                                        <div class="block_main_info_hsk_deal mb-2">
                                            <div class="product_shopping_deal uk-text-uppercase">BIODERMA</div>
                                            <div class="title_item_shopping_deal vi">Nước Tẩy Trang Bioderma Dành Cho Da Nhạy Cảm 500ml</div>
                                            <div class="title_item_shopping_deal en">Sensibio H2O</div>
                                        </div>
                                        <div class="block_timer_deal mb-3">
                                            <progress id="js-progressbar" class="uk-progress uk-margin-remove" value="19" max="100"></progress>
                                            <small>19% deal đã mua</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="uk-card card_item">
                                    <div class="uk-card-header uk-padding-remove uk-inline-clip uk-transition-toggle" tabindex="0">
                                        <img src="imgs/im1.jpg" alt="">
                                        <img class="uk-transition-scale-up uk-position-cover" src="imgs/in1.jpg" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="price uk-flex uk-flex-middle uk-flex-between">
                                            <span class="new">389,000 đ</span>
                                            <div class="right">
                                                <del class="old">195,000</del>
                                                <span class="sale">-37%</span>
                                            </div>
                                        </div>
                                        <div class="block_main_info_hsk_deal mb-2">
                                            <div class="product_shopping_deal uk-text-uppercase">BIODERMA</div>
                                            <div class="title_item_shopping_deal vi">Nước Tẩy Trang Bioderma Dành Cho Da Nhạy Cảm 500ml</div>
                                            <div class="title_item_shopping_deal en">Sensibio H2O</div>
                                        </div>
                                        <div class="block_timer_deal mb-3">
                                            <progress id="js-progressbar" class="uk-progress uk-margin-remove" value="92" max="100"></progress>
                                            <small>92% deal đã mua</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-container pt-5 pb-0">
    <div class="text-center">
        <div class="main-section uk-text-center">
            <h3>Gợi ý dành riêng cho bạn</h3>
        </div>
    </div>
    <div class="uk-child-width-1-2 uk-child-width-1-6@m uk-grid-small py-4" uk-grid>
        <div>
            <a class="uk-card card_item uk-card-default bg-white border-0">
                <div class="uk-card-header uk-padding-remove uk-inline-clip uk-transition-toggle" tabindex="0">
                    <img src="imgs/im1.jpg" alt="">
                    <img class="uk-transition-scale-up uk-position-cover" src="imgs/in1.jpg" alt="">
                </div>
                <div class="uk-card-body pb-3">
                    <div class="price uk-flex uk-flex-middle uk-flex-between">
                        <span class="new">389,000 đ</span>
                        <div class="right">
                            <del class="old">195,000</del>
                            <span class="sale">-37%</span>
                        </div>
                    </div>
                    <div class="block_main_info_hsk_deal mb-2">
                        <div class="product_shopping_deal uk-text-uppercase">BIODERMA</div>
                        <div class="title_item_shopping_deal vi">Nước Tẩy Trang Bioderma Dành Cho Da Nhạy Cảm 500ml</div>
                        <div class="title_item_shopping_deal en">Sensibio H2O</div>
                    </div>
                    <div class="block_timer_deal">
                        <progress id="js-progressbar" class="uk-progress uk-margin-remove" value="92" max="100"></progress>
                        <small>92% deal đã mua</small>
                    </div>
                    <div class="uk-grid-small uk-grid-collapse uk-child-width-auto uk-flex-middle" uk-grid uk-countdown="date: 2018-10-13T15:30:00+00:00">
                        <div class="mr-1" style="margin-top: 0px; font-weight: normal;">Deal còn lại</div>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-countdown-number uk-countdown-days"></div>
                            <div class="uk-countdown-label uk-text-center uk-visible@s ml-1 mr-1">ngày</div>
                        </div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-hours"></div>
                        </div>
                        <div class="uk-countdown-separator">:</div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-minutes"></div>
                        </div>
                        <div class="uk-countdown-separator">:</div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-seconds"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div>
            <a class="uk-card card_item uk-card-default bg-white border-0">
                <div class="uk-card-header uk-padding-remove uk-inline-clip uk-transition-toggle" tabindex="0">
                    <img src="imgs/im1.jpg" alt="">
                    <img class="uk-transition-scale-up uk-position-cover" src="imgs/in1.jpg" alt="">
                </div>
                <div class="uk-card-body pb-3">
                    <div class="price uk-flex uk-flex-middle uk-flex-between">
                        <span class="new">389,000 đ</span>
                        <div class="right">
                            <del class="old">195,000</del>
                            <span class="sale">-37%</span>
                        </div>
                    </div>
                    <div class="block_main_info_hsk_deal mb-2">
                        <div class="product_shopping_deal uk-text-uppercase">BIODERMA</div>
                        <div class="title_item_shopping_deal vi">Nước Tẩy Trang Bioderma Dành Cho Da Nhạy Cảm 500ml</div>
                        <div class="title_item_shopping_deal en">Sensibio H2O</div>
                    </div>
                    <div class="block_timer_deal">
                        <progress id="js-progressbar" class="uk-progress uk-margin-remove" value="92" max="100"></progress>
                        <small>92% deal đã mua</small>
                    </div>
                    <div class="uk-grid-small uk-grid-collapse uk-child-width-auto uk-flex-middle" uk-grid uk-countdown="date: 2018-10-13T15:30:00+00:00">
                        <div class="mr-1" style="margin-top: 0px; font-weight: normal;">Deal còn lại</div>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-countdown-number uk-countdown-days"></div>
                            <div class="uk-countdown-label uk-text-center uk-visible@s ml-1 mr-1">ngày</div>
                        </div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-hours"></div>
                        </div>
                        <div class="uk-countdown-separator">:</div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-minutes"></div>
                        </div>
                        <div class="uk-countdown-separator">:</div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-seconds"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div>
            <a class="uk-card card_item uk-card-default bg-white border-0">
                <div class="uk-card-header uk-padding-remove uk-inline-clip uk-transition-toggle" tabindex="0">
                    <img src="imgs/im1.jpg" alt="">
                    <img class="uk-transition-scale-up uk-position-cover" src="imgs/in1.jpg" alt="">
                </div>
                <div class="uk-card-body pb-3">
                    <div class="price uk-flex uk-flex-middle uk-flex-between">
                        <span class="new">389,000 đ</span>
                        <div class="right">
                            <del class="old">195,000</del>
                            <span class="sale">-37%</span>
                        </div>
                    </div>
                    <div class="block_main_info_hsk_deal mb-2">
                        <div class="product_shopping_deal uk-text-uppercase">BIODERMA</div>
                        <div class="title_item_shopping_deal vi">Nước Tẩy Trang Bioderma Dành Cho Da Nhạy Cảm 500ml</div>
                        <div class="title_item_shopping_deal en">Sensibio H2O</div>
                    </div>
                    <div class="block_timer_deal">
                        <progress id="js-progressbar" class="uk-progress uk-margin-remove" value="92" max="100"></progress>
                        <small>92% deal đã mua</small>
                    </div>
                    <div class="uk-grid-small uk-grid-collapse uk-child-width-auto uk-flex-middle" uk-grid uk-countdown="date: 2018-10-13T15:30:00+00:00">
                        <div class="mr-1" style="margin-top: 0px; font-weight: normal;">Deal còn lại</div>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-countdown-number uk-countdown-days"></div>
                            <div class="uk-countdown-label uk-text-center uk-visible@s ml-1 mr-1">ngày</div>
                        </div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-hours"></div>
                        </div>
                        <div class="uk-countdown-separator">:</div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-minutes"></div>
                        </div>
                        <div class="uk-countdown-separator">:</div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-seconds"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div>
            <a class="uk-card card_item uk-card-default bg-white border-0">
                <div class="uk-card-header uk-padding-remove uk-inline-clip uk-transition-toggle" tabindex="0">
                    <img src="imgs/im1.jpg" alt="">
                    <img class="uk-transition-scale-up uk-position-cover" src="imgs/in1.jpg" alt="">
                </div>
                <div class="uk-card-body pb-3">
                    <div class="price uk-flex uk-flex-middle uk-flex-between">
                        <span class="new">389,000 đ</span>
                        <div class="right">
                            <del class="old">195,000</del>
                            <span class="sale">-37%</span>
                        </div>
                    </div>
                    <div class="block_main_info_hsk_deal mb-2">
                        <div class="product_shopping_deal uk-text-uppercase">BIODERMA</div>
                        <div class="title_item_shopping_deal vi">Nước Tẩy Trang Bioderma Dành Cho Da Nhạy Cảm 500ml</div>
                        <div class="title_item_shopping_deal en">Sensibio H2O</div>
                    </div>
                    <div class="block_timer_deal">
                        <progress id="js-progressbar" class="uk-progress uk-margin-remove" value="92" max="100"></progress>
                        <small>92% deal đã mua</small>
                    </div>
                    <div class="uk-grid-small uk-grid-collapse uk-child-width-auto uk-flex-middle" uk-grid uk-countdown="date: 2018-10-13T15:30:00+00:00">
                        <div class="mr-1" style="margin-top: 0px; font-weight: normal;">Deal còn lại</div>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-countdown-number uk-countdown-days"></div>
                            <div class="uk-countdown-label uk-text-center uk-visible@s ml-1 mr-1">ngày</div>
                        </div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-hours"></div>
                        </div>
                        <div class="uk-countdown-separator">:</div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-minutes"></div>
                        </div>
                        <div class="uk-countdown-separator">:</div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-seconds"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div>
            <a class="uk-card card_item uk-card-default bg-white border-0">
                <div class="uk-card-header uk-padding-remove uk-inline-clip uk-transition-toggle" tabindex="0">
                    <img src="imgs/im1.jpg" alt="">
                    <img class="uk-transition-scale-up uk-position-cover" src="imgs/in1.jpg" alt="">
                </div>
                <div class="uk-card-body pb-3">
                    <div class="price uk-flex uk-flex-middle uk-flex-between">
                        <span class="new">389,000 đ</span>
                        <div class="right">
                            <del class="old">195,000</del>
                            <span class="sale">-37%</span>
                        </div>
                    </div>
                    <div class="block_main_info_hsk_deal mb-2">
                        <div class="product_shopping_deal uk-text-uppercase">BIODERMA</div>
                        <div class="title_item_shopping_deal vi">Nước Tẩy Trang Bioderma Dành Cho Da Nhạy Cảm 500ml</div>
                        <div class="title_item_shopping_deal en">Sensibio H2O</div>
                    </div>
                    <div class="block_timer_deal">
                        <progress id="js-progressbar" class="uk-progress uk-margin-remove" value="92" max="100"></progress>
                        <small>92% deal đã mua</small>
                    </div>
                    <div class="uk-grid-small uk-grid-collapse uk-child-width-auto uk-flex-middle" uk-grid uk-countdown="date: 2018-10-13T15:30:00+00:00">
                        <div class="mr-1" style="margin-top: 0px; font-weight: normal;">Deal còn lại</div>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-countdown-number uk-countdown-days"></div>
                            <div class="uk-countdown-label uk-text-center uk-visible@s ml-1 mr-1">ngày</div>
                        </div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-hours"></div>
                        </div>
                        <div class="uk-countdown-separator">:</div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-minutes"></div>
                        </div>
                        <div class="uk-countdown-separator">:</div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-seconds"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div>
            <a class="uk-card card_item uk-card-default bg-white border-0">
                <div class="uk-card-header uk-padding-remove uk-inline-clip uk-transition-toggle" tabindex="0">
                    <img src="imgs/im1.jpg" alt="">
                    <img class="uk-transition-scale-up uk-position-cover" src="imgs/in1.jpg" alt="">
                </div>
                <div class="uk-card-body pb-3">
                    <div class="price uk-flex uk-flex-middle uk-flex-between">
                        <span class="new">389,000 đ</span>
                        <div class="right">
                            <del class="old">195,000</del>
                            <span class="sale">-37%</span>
                        </div>
                    </div>
                    <div class="block_main_info_hsk_deal mb-2">
                        <div class="product_shopping_deal uk-text-uppercase">BIODERMA</div>
                        <div class="title_item_shopping_deal vi">Nước Tẩy Trang Bioderma Dành Cho Da Nhạy Cảm 500ml</div>
                        <div class="title_item_shopping_deal en">Sensibio H2O</div>
                    </div>
                    <div class="block_timer_deal">
                        <progress id="js-progressbar" class="uk-progress uk-margin-remove" value="92" max="100"></progress>
                        <small>92% deal đã mua</small>
                    </div>
                    <div class="uk-grid-small uk-grid-collapse uk-child-width-auto uk-flex-middle" uk-grid uk-countdown="date: 2018-10-13T15:30:00+00:00">
                        <div class="mr-1" style="margin-top: 0px; font-weight: normal;">Deal còn lại</div>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-countdown-number uk-countdown-days"></div>
                            <div class="uk-countdown-label uk-text-center uk-visible@s ml-1 mr-1">ngày</div>
                        </div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-hours"></div>
                        </div>
                        <div class="uk-countdown-separator">:</div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-minutes"></div>
                        </div>
                        <div class="uk-countdown-separator">:</div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-seconds"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>