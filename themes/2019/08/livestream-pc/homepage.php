<?php include_once "header.php"; ?>
<div class="uk-section-small">
    <div class="uk-container">
        <div class="uk-grid-collapse uk-grid-match" uk-grid>
            <div class="uk-width-expand">
                <div class="uk-cover-container">
                    <img src="imgs/fallback.png" alt="" uk-cover>
                    <canvas width="761" height="427"></canvas>
                    <div class="uk-position-cover uk-flex uk-flex-column">
                        <div class="uk-flex-auto uk-flex uk-flex-between uk-flex-middle">
                            <div class="tv-doibong c1">
                                <img src="imgs/1200px-Man_Utd_FC_.svg.png" alt="">
                            </div>
                            <div class="tv-thongso">
                                <div class="tv-info x1">
                                    <div class="c3 uk-text-truncate">UEFA Champions League</div>
                                    <div class="c1">02:00</div>
                                    <div class="c2">03-04-2019</div>
                                </div>
                                <img src="imgs/music-player-play.png" alt="">
                            </div>
                            <div class="tv-doibong c1">
                                <img src="imgs/1010px-FC_Barcelona_logo.svg.png" alt="">
                            </div>
                        </div>
                        <div class="uk-padding-small" style="flex: initial">
                            <div class="uk-flex uk-flex-middle uk-flex-between" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="tv-box4">
                                        <span>live</span>
                                        Trực tiếp
                                    </div>
                                    <h2 class="tv-title-2 uk-text-truncate">Manchester United - Barcelona</h2>
                                </div>
                                <div class="uk-width-auto">
                                    <a href="#" class="uk-button tv-btn c1 uk-button-secondary">xem ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-3@m">
                <div class="uk-card tv-card2 uk-flex uk-flex-column">
                    <div class="uk-card-header">
                        <h2 class="tv-title-1">CÁ CƯỢC BÓNG ĐÁ</h2>
                    </div>
                    <div class="uk-card-body uk-flex-auto uk-overflow-auto">
                    <?php
                    $data = array(
                        array(
                            'img' => 'imgs/ca_cuoc_bong_da/188bet-logo.png',
                            'title' => 'Cược chấp Hiệp 1',
                            'desc' => 'MU +1.5 > 2.75',
                        ),
                        array(
                            'img' => 'imgs/ca_cuoc_bong_da/fb88_logo_n0_tagline.png',
                            'title' => 'Cược chấp Hiệp 1',
                            'desc' => 'MU +1.5 > 2.75',
                        ),
                        array(
                            'img' => 'imgs/ca_cuoc_bong_da/logo_fabet.png',
                            'title' => 'Cược chấp Hiệp 1',
                            'desc' => 'MU +1.5 > 2.75',
                        ),
                        array(
                            'img' => 'imgs/ca_cuoc_bong_da/Lucky88_Final_onBlack.png',
                            'title' => 'Cược chấp Hiệp 1',
                            'desc' => 'MU +1.5 > 2.75',
                        ),
                        array(
                            'img' => 'imgs/ca_cuoc_bong_da/one88.png',
                            'title' => 'Cược chấp Hiệp 1',
                            'desc' => 'MU +1.5 > 2.75',
                        ),
                        array(
                            'img' => 'imgs/ca_cuoc_bong_da/One88_Logo_Marketing-02.png',
                            'title' => 'Cược chấp Hiệp 1',
                            'desc' => 'MU +1.5 > 2.75',
                        ),
                        array(
                            'img' => 'imgs/ca_cuoc_bong_da/188bet-logo.png',
                            'title' => 'Cược chấp Hiệp 1',
                            'desc' => 'MU +1.5 > 2.75',
                        ),
                        array(
                            'img' => 'imgs/ca_cuoc_bong_da/fb88_logo_n0_tagline.png',
                            'title' => 'Cược chấp Hiệp 1',
                            'desc' => 'MU +1.5 > 2.75',
                        ),
                        array(
                            'img' => 'imgs/ca_cuoc_bong_da/logo_fabet.png',
                            'title' => 'Cược chấp Hiệp 1',
                            'desc' => 'MU +1.5 > 2.75',
                        ),
                        array(
                            'img' => 'imgs/ca_cuoc_bong_da/Lucky88_Final_onBlack.png',
                            'title' => 'Cược chấp Hiệp 1',
                            'desc' => 'MU +1.5 > 2.75',
                        ),
                        array(
                            'img' => 'imgs/ca_cuoc_bong_da/one88.png',
                            'title' => 'Cược chấp Hiệp 1',
                            'desc' => 'MU +1.5 > 2.75',
                        ),
                        array(
                            'img' => 'imgs/ca_cuoc_bong_da/One88_Logo_Marketing-02.png',
                            'title' => 'Cược chấp Hiệp 1',
                            'desc' => 'MU +1.5 > 2.75',
                        ),
                    );
                    foreach ($data as $k1 => $v1){ ?>
                        <div class="tv-box3">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="tv_bg_img uk-flex uk-flex-middle uk-flex-center"><img src="<?= $v1['img'] ?>" alt=""></div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="title"><?= $v1['title'] ?></div>
                                    <div class="title"><?= $v1['desc'] ?></div>
                                </div>
                                <div class="uk-width-auto">
                                    <a href="#" class="uk-button tv-btn uk-button-secondary">đặt kèo</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tv-block-1">
    <div class="uk-container">
        <div class="uk-flex-middle uk-flex-between" uk-grid>
            <div>
                <h2 class="tv-title-1">LỊCH PHÁT SÓNG</h2>
            </div>
            <div>
                <ul class="tv-tab uk-subnav uk-subnav-pill" uk-switcher="connect: .switcher-container">
                    <li><a href="#">Tất cả trận đấu</a></li>
                    <li><a href="#">Trận đấu HOT</a></li>
                    <li><a href="#">Hôm nay</a></li>
                    <li><a href="#">Ngày mai</a></li>
                    <li><a href="#">Tuần này</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="uk-section-xsmall tv-block-bg">
    <div class="uk-container">
        <ul class="uk-switcher switcher-container uk-margin">
            <li>
                <div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-small" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'img' => 'imgs/Layer 6.png',
                            'title' => 'Manchester United - Alentico Manrid',
                            'desc' => 'Tứ Kết - King’s Cup 2019',
                            'live' => false,
                        ),
                        array(
                            'img' => 'imgs/Layer 6.png',
                            'title' => 'Manchester United - Alentico Manrid',
                            'desc' => 'Chung kết -  Champions League',
                            'live' => true,
                        ),
                        array(
                            'img' => 'https://znews-photo.zadn.vn/w480/Uploaded/mdf_usoddd/2019_06_21/01z_3x2_dvh.jpg',
                            'title' => 'Arsenal - Newcastle',
                            'desc' => 'UEFA Champions League',
                            'live' => false,
                        ),
                        array(
                            'img' => 'https://znews-photo.zadn.vn/w480/Uploaded/mdf_usoddd/2019_06_21/01z_3x2_dvh.jpg',
                            'title' => 'Manchester United - Alentico Manrid',
                            'desc' => 'Tứ Kết - King’s Cup 2019',
                            'live' => false,
                        ),
                        array(
                            'img' => 'https://znews-photo.zadn.vn/w660/Uploaded/pgi_ubnatyvau/2019_06_19/jorginhowouldbesurprisedtoseerelaxedsarrileavechelsea__644517_.jpg',
                            'title' => 'Manchester United - Alentico Manrid',
                            'desc' => 'Tứ Kết - King’s Cup 2019',
                            'live' => false,
                        ),
                        array(
                            'img' => 'https://image-us.24h.com.vn/upload/2-2019/images/2019-04-11/MU-thua-Barca-0-1-Con-khong-hi-vong-nguoc-dong-kinh-dien-mu1-1554949432-387-width660height435.jpg',
                            'title' => 'Manchester United - Alentico Manrid',
                            'desc' => 'Chung kết -  Champions League',
                            'live' => false,
                        ),
                        array(
                            'img' => 'https://znews-photo.zadn.vn/w480/Uploaded/mdf_usoddd/2019_06_21/01z_3x2_dvh.jpg',
                            'title' => 'Arsenal - Newcastle',
                            'desc' => 'UEFA Champions League',
                            'live' => false,
                        ),
                        array(
                            'img' => 'https://znews-photo.zadn.vn/w480/Uploaded/mdf_usoddd/2019_06_21/01z_3x2_dvh.jpg',
                            'title' => 'Manchester United - Alentico Manrid',
                            'desc' => 'Tứ Kết - King’s Cup 2019',
                            'live' => false,
                        ),
                    );
                    foreach ($data as $k1 => $v1){ ?>
                        <div>
                            <a class="uk-link-reset" href="#">
                                <div class="tv-card1 uk-box-shadow-medium">
                                    <div class="uk-cover-container">
                                        <img src="<?= $v1['img'] ?>" alt="" uk-cover>
                                        <canvas width="510" height="188"></canvas>
                                        <div class="uk-position-cover uk-overlay uk-overlay-primary <?= ($v1['live']) ? 'live' : 'hi'?>"></div>
                                        <div class="uk-position-cover uk-flex uk-flex-column">
                                            <div class="tv-box2 uk-flex uk-flex-middle uk-flex-between">
                                                <div class="tv-doibong">
                                                    <img src="imgs/FC_Southampton.png" alt="">
                                                </div>
                                                <div class="tv-thongso">
                                                    <?= ($v1['live']) ? '<span class="tv-live">live</span>' : '<div class="tv-info">
                                                <div class="c1">02:00</div>
                                                <div class="c2">03-04</div>
                                            </div>' ?>
                                                    <img src="imgs/music-player-play.png" alt="">
                                                </div>
                                                <div class="tv-doibong">
                                                    <img src="imgs/Chelsea_icon.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tv-box1">
                                        <h5 class="title uk-text-truncate"><?= $v1['title'] ?></h5>
                                        <div class="desc uk-text-truncate"><?= $v1['desc'] ?></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </li>
            <li>Hello again!</li>
            <li>Bazinga!</li>
        </ul>
    </div>
</div>
<?php include_once "footer.php"; ?>