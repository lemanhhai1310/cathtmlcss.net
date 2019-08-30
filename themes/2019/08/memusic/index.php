<?php $data['title'] = 'Memusic - Trang chủ' ?>
<?php require "header.php"; ?>
<div class="uk-container uk-padding-remove">
    <div class="uk-padding-small uk-padding-remove-top uk-padding-remove-bottom box_padding">
        <div uk-slideshow="ratio: 1020:571">
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                <ul class="uk-slideshow-items">
                    <li>
                        <img class="lazyload" src="images/banner1.jpg" alt="" uk-cover>
                    </li>
                    <li>
                        <img class="lazyload" data-src="images/banner1.jpg" alt="" uk-cover>
                    </li>
                    <li>
                        <img class="lazyload" data-src="images/banner1.jpg" alt="" uk-cover>
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

            </div>
            <ul class="uk-slideshow-nav dot_slide_home uk-dotnav uk-flex-center uk-margin"></ul>
        </div>
    </div>
</div>
<div class="uk-background-norepeat uk-background-top-center uk-section-xsmall lazy" data-src="images/bg-movive.png" uk-img>
    <div class="uk-container uk-padding-remove">
        <div class="uk-flex uk-light uk-flex-middle uk-flex-between uk-padding-small uk-padding-remove-top uk-padding-remove-bottom">
            <h3 class="title_name">MV</h3>
            <a href="" class="link_more">xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </div>
        <div class="uk-visible@s uk-padding-small uk-padding-remove-bottom uk-padding-remove-top uk-margin">
            <div class="uk-grid-medium uk-grid" uk-grid>
                <div class="uk-width-1-3@m">
                    <ul class="uk-tab-left mv_video_left uk-tab" uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
                        <?php
                        $data = array(
                            'Gia Đình',
                            'Ai Là Người Thương Em',
                            'Độ Ta Không Độ Nàng',
                            'Nhan Sắc',
                            'Bên Anh Thêm Được Không',
                        );
                        foreach ($data as $key => $value):?>
                        <li class="<?= ($key === 1) ? 'uk-active' : '' ?>">
                            <a href="">
                                <div class="uk-grid-small uk-grid uk-light" uk-grid="">
                                    <div class="uk-width-auto uk-first-column">
                                        <div class="uk-cover-container uk-border-rounded">
                                            <img data-src="images/img-play.png" alt="" uk-cover="" class="uk-cover lazyload" style="height: 56px; width: 56px;">
                                            <canvas width="55" height="55"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="box_1 uk-padding-remove" style="background-image: none">
                                            <h6 class="uk-margin-remove title uk-text-truncate"><?= $value ?></h6>
                                            <div class="author uk-text-capitalize">Quân A.P</div>
                                        </div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <div class="uk-child-width-auto uk-flex-between uk-grid" uk-grid="">
                                            <div class="uk-first-column time1" style="font-size: 12px;">04:50</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="uk-width-expand">
                    <ul id="component-tab-left" class="uk-switcher">
                        <li></li>
                        <li>
                            <div class="mv_video uk-cover-container uk-border-rounded uk-box-shadow-medium">
                                <img class="lazyload" data-src="https://photo-zmp3.zadn.vn/banner/b/9/a/5/b9a5e41ecdf3506cd8b3971c0d5de4b3.jpg" alt="" uk-cover>
                                <canvas width="960" height="539"></canvas>
                                <a href="" class="uk-position-cover"><img class="uk-position-center icon1" src="images/play.png" alt=""></a>
                                <div class="uk-padding-small box_1 uk-position-bottom" style="padding-bottom: 10px;">
                                    <h4 class="uk-margin-remove title_name_1"><a href="">Sống Chết Có Nhau (Single)</a></h4>
                                    <div class="author"><a href="#author">Sơn Tùng MTP</a></div>
                                </div>
                            </div>
                        </li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="uk-hidden@s box_content uk-margin">
            <div class="uk-position-relative uk-visible-toggle uk-padding-small uk-padding-remove-top uk-padding-remove-left uk-padding-remove-right" tabindex="-1" uk-slider="finite: true;">

                <ul class="uk-slider-items uk-child-width-1-5@m uk-grid-small uk-grid" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'https://photo-zmp3.zadn.vn/banner/d/7/7/e/d77ecb29097fe17876d40bc2e1833650.jpg',
                            'title' => 'nhạc <br> đồng quê',
                            'name' => 'Quân A.P',
                        ),
                        array(
                            'src' => 'https://photo-zmp3.zadn.vn/banner/9/9/7/d/997dc7d75aaad461610eaa90955c3bd6.jpg',
                            'title' => 'nhạc <br> rock',
                            'name' => 'Sơn Tùng MTP',
                        ),
                        array(
                            'src' => 'https://photo-zmp3.zadn.vn/banner/b/9/a/5/b9a5e41ecdf3506cd8b3971c0d5de4b3.jpg',
                            'title' => 'nhạc <br> trữ tình',
                            'name' => 'Hương Tràm',
                        ),
                        array(
                            'src' => 'https://photo-zmp3.zadn.vn/banner/0/f/c/8/0fc81520f899f2f985606c22a924c6bc.jpg',
                            'title' => 'các bài hát <br> về mẹ',
                            'name' => 'Hồ Ngọc Hà',
                        ),
                        array(
                            'src' => 'https://photo-zmp3.zadn.vn/banner/1/4/0/f/140f2449725fbcf89677bdda52a3ddec.jpg',
                            'title' => 'nhạc <br> đồng quê',
                            'name' => 'MIN',
                        ),
                        array(
                            'src' => 'https://photo-zmp3.zadn.vn/banner/1/8/d/0/18d08771a5a4a7b3a9f1a63fcd7aa74f.jpg',
                            'title' => 'nhạc <br> phim',
                            'name' => 'Quân A.P',
                        ),
                    );
                    foreach ($data as $key => $value): ?>
                        <li class="uk-width-4-5 uk-width-1-2@s uk-width-1-3@m">
                            <div class="mv_video uk-cover-container uk-border-rounded uk-box-shadow-medium">
                                <img class="lazyload" data-src="<?= $value['src'] ?>" alt="" uk-cover>
                                <canvas width="960" height="539"></canvas>
                                <a href="" class="uk-position-cover"><img class="uk-position-center icon1" src="images/play.png" alt=""></a>
                                <div class="uk-padding-small box_1 uk-position-bottom" style="padding-bottom: 10px;">
                                    <h4 class="uk-margin-remove title_name_1"><a href="">Sống Chết Có Nhau (Single)</a></h4>
                                    <div class="author"><a href="#author">Sơn Tùng MTP</a></div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>

            </div>
        </div>
        <div class="uk-flex uk-flex-middle uk-flex-between uk-padding-small uk-padding-remove-top uk-padding-remove-bottom">
            <h3 class="title_name">Chart</h3>
            <a href="" class="uk-button uk-button-default uk-border-rounded uk-flex-inline uk-flex-middle btn_play_all"><span uk-icon="play"></span> Play all</a>
        </div>
        <div class="uk-padding-small uk-padding-remove-bottom uk-padding-remove-top uk-margin-small">
            <div class="uk-grid-small uk-grid" uk-grid>
                <?php
                $data = array(
                    array(
                        'src' => 'https://i.scdn.co/image/5570996211d2ef04e38deb3824fa3f443666d089',
                        'title' => 'Ai Là Người Thương Em',
                        'name' => 'Quân A.P',
                    ),
                    array(
                        'src' => 'images/album/img2.png',
                        'title' => 'Làm người luôn yêu em',
                        'name' => 'Sơn Tùng MTP',
                    ),
                    array(
                        'src' => 'images/album/img3.png',
                        'title' => 'Anh muốn em sống sao',
                        'name' => 'Hương Tràm',
                    ),
                    array(
                        'src' => 'images/album/img4.png',
                        'title' => 'Nỗi nhớ đầy vơi',
                        'name' => 'Hồ Ngọc Hà',
                    ),
                    array(
                        'src' => 'images/album/img5.png',
                        'title' => 'Đừng yêu nữa em mệt rồi',
                        'name' => 'MIN',
                    ),
                    array(
                        'src' => 'https://i.scdn.co/image/5570996211d2ef04e38deb3824fa3f443666d089',
                        'title' => 'Ai Là Người Thương Em',
                        'name' => 'Quân A.P',
                    ),
                    array(
                        'src' => 'images/album/img2.png',
                        'title' => 'Làm người luôn yêu em',
                        'name' => 'Sơn Tùng MTP',
                    ),
                    array(
                        'src' => 'images/album/img3.png',
                        'title' => 'Anh muốn em sống sao',
                        'name' => 'Hương Tràm',
                    ),
                    array(
                        'src' => 'images/album/img4.png',
                        'title' => 'Nỗi nhớ đầy vơi',
                        'name' => 'Hồ Ngọc Hà',
                    ),
                    array(
                        'src' => 'images/album/img5.png',
                        'title' => 'Đừng yêu nữa em mệt rồi',
                        'name' => 'MIN',
                    ),
                );
                foreach ($data as $key => $value): ?>
                    <div class="uk-width-1-2 uk-width-1-4@s uk-width-1-5@m">
                        <div class="uk-position-relative box_3 uk-overflow-hidden">
                            <div class="uk-cover-container box_2">
                                <span class="uk-badge uk-position-top-left uk-position-z-index"></span>
                                <i class="stt uk-position-top-left uk-position-z-index"><?= $key + 1; ?></i>
                                <img class="lazyload" data-src="<?= $value['src'] ?>" alt="" uk-cover>
                                <canvas width="960" height="960"></canvas>
                                <a class="uk-position-cover" href="#play"><span class="icon-play uk-position-center"></span></a>
                            </div>
                            <div class="uk-padding-small box_1 uk-position-bottom">
                                <h6 class="uk-margin-remove title uk-text-truncate"><a href="#title"><?= $value['title'] ?></a></h6>
                                <div class="author"><a href="#author"><?= $value['name'] ?></a></div>
                            </div>
                        </div>
                        <div class="uk-text-center uk-position-relative" style="margin-top: -14px;">
                            <div class="uk-button luot_nghe uk-button-secondary uk-border-rounded"><i class="material-icons">headset</i> <span class="uk-text-middle">1242 lượt nghe</span></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="box_content_main uk-margin">
            <div class="uk-position-relative uk-position-z-index">
                <div class="uk-flex uk-margin-medium-top uk-margin-small-bottom uk-flex-middle uk-flex-between uk-padding-small uk-padding-remove-top uk-padding-remove-bottom">
                    <h3 class="title_name">Chủ đề</h3>
                    <a href="" class="link_more">xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
                <div class="uk-visible@s uk-padding-small uk-padding-remove-bottom uk-padding-remove-top uk-margin-small">
                    <div class="uk-grid-small uk-grid" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'src' => 'images/chu-de/nhac_dong_que.png',
                                'title' => 'nhạc <br> đồng quê',
                                'name' => 'Quân A.P',
                            ),
                            array(
                                'src' => 'images/chu-de/nhac_rock.png',
                                'title' => 'nhạc <br> rock',
                                'name' => 'Sơn Tùng MTP',
                            ),
                            array(
                                'src' => 'images/chu-de/nhac_tru_tinh.png',
                                'title' => 'nhạc <br> trữ tình',
                                'name' => 'Hương Tràm',
                            ),
                            array(
                                'src' => 'images/chu-de/bai_hat_ve_me.png',
                                'title' => 'các bài hát <br> về mẹ',
                                'name' => 'Hồ Ngọc Hà',
                            ),
                            array(
                                'src' => 'images/chu-de/nhac_dong_que.png',
                                'title' => 'nhạc <br> đồng quê',
                                'name' => 'MIN',
                            ),
                            array(
                                'src' => 'images/chu-de/nhac_phim.png',
                                'title' => 'nhạc <br> phim',
                                'name' => 'Quân A.P',
                            ),
                        );
                        foreach ($data as $key => $value): ?>
                            <div class="uk-width-1-1 uk-width-1-2@s uk-width-1-3@m">
                                <div class="uk-cover-container uk-light uk-box-shadow-medium">
                                    <img class="lazyload" data-src="<?= $value['src'] ?>" alt="" uk-cover>
                                    <canvas width="380" height="220"></canvas>
                                    <div class="nation-<?= $key + 1 ?> uk-position-right">
                                        <div class="uk-position-bottom uk-padding-small">
                                            <h3><?= $value['title'] ?></h3>
                                            <a href="" class="link_more">xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="uk-hidden@s box_content uk-margin-bottom">
                    <div class="uk-position-relative uk-visible-toggle uk-padding-small uk-padding-remove-top uk-padding-remove-left uk-padding-remove-right" tabindex="-1" uk-slider="finite: true;">

                        <ul class="uk-slider-items uk-child-width-1-5@m uk-grid-small uk-grid" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'src' => 'images/chu-de/nhac_dong_que.png',
                                    'title' => 'nhạc <br> đồng quê',
                                    'name' => 'Quân A.P',
                                ),
                                array(
                                    'src' => 'images/chu-de/nhac_rock.png',
                                    'title' => 'nhạc <br> rock',
                                    'name' => 'Sơn Tùng MTP',
                                ),
                                array(
                                    'src' => 'images/chu-de/nhac_tru_tinh.png',
                                    'title' => 'nhạc <br> trữ tình',
                                    'name' => 'Hương Tràm',
                                ),
                                array(
                                    'src' => 'images/chu-de/bai_hat_ve_me.png',
                                    'title' => 'các bài hát <br> về mẹ',
                                    'name' => 'Hồ Ngọc Hà',
                                ),
                                array(
                                    'src' => 'images/chu-de/nhac_dong_que.png',
                                    'title' => 'nhạc <br> đồng quê',
                                    'name' => 'MIN',
                                ),
                                array(
                                    'src' => 'images/chu-de/nhac_phim.png',
                                    'title' => 'nhạc <br> phim',
                                    'name' => 'Quân A.P',
                                ),
                            );
                            foreach ($data as $key => $value): ?>
                                <li class="uk-width-2-3 uk-width-1-2@s uk-width-1-3@m">
                                    <div class="uk-cover-container uk-light uk-box-shadow-medium">
                                        <img class="lazyload" data-src="<?= $value['src'] ?>" alt="" uk-cover>
                                        <canvas width="380" height="220"></canvas>
                                        <div class="nation-<?= $key + 1 ?> uk-position-right">
                                            <div class="uk-position-bottom uk-padding-small">
                                                <h3><?= $value['title'] ?></h3>
                                                <a href="" class="link_more">xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                    </div>
                </div>
                <div class="uk-flex uk-margin-medium-top uk-margin-small-bottom uk-flex-middle uk-flex-between uk-padding-small uk-padding-remove-top uk-padding-remove-bottom">
                    <h3 class="title_name">New Hit</h3>
                    <a href="" class="link_more">xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
                <div class="uk-padding-small uk-padding-remove-bottom uk-padding-remove-top uk-margin-small">
                    <div class="uk-grid-medium uk-child-width-1-2@m uk-grid" uk-grid>
                        <div>
                            <div class="uk-cover-container uk-margin-small">
                                <img class="lazyload" data-src="images/new-hit/img1.png" alt="" uk-cover>
                                <canvas width="960" height="409"></canvas>
                            </div>
                            <div class="uk-child-width-auto uk-flex-between uk-margin-medium-bottom uk-grid" uk-grid>
                                <div>
                                    <h4 class="uk-margin-remove title_name_1 uk-text-center"><a href="">Sống Chết Có Nhau (Single)</a></h4>
                                    <div class="author"><a href="#author">Quân A.P</a></div>
                                </div>
                                <div>
                                    <div class="uk-button luot_nghe uk-button-secondary uk-border-rounded"><i class="material-icons">headset</i> <span class="uk-text-middle">1242 lượt nghe</span></div>
                                </div>
                            </div>
                            <ul class="uk-list">
                                <?php
                                $data = array(
                                    'Gia Đình',
                                    'Ai Là Người Thương Em',
                                    'Có Tất Cả Nhưng Thiếu Anh',
                                );
                                foreach ($data as $k => $v):?>
                                    <li class="uk-margin">
                                        <div class="uk-grid-small uk-grid" uk-grid>
                                            <div class="uk-width-auto">
                                                <div class="uk-cover-container uk-border-rounded">
                                                    <img class="lazyload" data-src="images/img-play.png" alt="" uk-cover>
                                                    <canvas width="55" height="55"></canvas>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <div class="box_1 uk-padding-remove">
                                                    <h6 class="uk-margin-remove title uk-text-truncate"><a href="#title"><?= $v ?></a></h6>
                                                    <div class="author"><a href="#author">Quân A.P</a></div>
                                                    <div class="luot_nghe_1"><i class="material-icons">headset</i> <span>1242 lượt nghe</span></div>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-3">
                                                <div class="uk-child-width-auto uk-flex-between uk-grid" uk-grid>
                                                    <div>04:50</div>
                                                    <div>
                                                        <a href="#" class="uk-link-reset"><span uk-icon="more"></span></a>
                                                        <div class="uk-dropdown uk-padding-remove list-more-acts" uk-dropdown="mode: click; pos: bottom-right">
                                                            <ul class="uk-list uk-padding-remove">
                                                                <li><a href=""><span class="uk-margin-small-right" uk-icon="icon: plus; ratio:0.8;"></span> Thêm vào</a></li>
                                                                <li><a href=""><span class="uk-margin-small-right" uk-icon="icon: social; ratio:0.8;"></span> Chia sẻ</a></li>
                                                                <li><a href=""><span class="uk-margin-small-right" uk-icon="icon: download; ratio:0.8;"></span> Tải xuống</a></li>
                                                                <li><a href=""><span class="uk-margin-small-right" uk-icon="icon: ban; ratio:0.8;"></span> Chặn</a></li>
                                                                <li><a href=""><span class="uk-margin-small-right" uk-icon="icon: warning; ratio:0.8;"></span> Thông tin</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div>
                            <div class="uk-cover-container uk-margin-small">
                                <img class="lazyload" data-src="images/new-hit/img2.png" alt="" uk-cover>
                                <canvas width="960" height="409"></canvas>
                            </div>
                            <div class="uk-child-width-auto uk-flex-between uk-margin-medium-bottom uk-grid" uk-grid>
                                <div>
                                    <h4 class="uk-margin-remove title_name_1 uk-text-center"><a href="">Đóa hoa hồng</a></h4>
                                    <div class="author"><a href="#author">Chi Pu</a></div>
                                </div>
                                <div>
                                    <div class="uk-button luot_nghe uk-button-secondary uk-border-rounded"><i class="material-icons">headset</i> <span class="uk-text-middle">1242 lượt nghe</span></div>
                                </div>
                            </div>
                            <ul class="uk-list">
                                <?php
                                $data = array(
                                    'Gia Đình',
                                    'Ai Là Người Thương Em',
                                    'Có Tất Cả Nhưng Thiếu Anh',
                                );
                                foreach ($data as $k => $v):?>
                                    <li class="uk-margin">
                                        <div class="uk-grid-small uk-grid" uk-grid>
                                            <div class="uk-width-auto">
                                                <div class="uk-cover-container uk-border-rounded">
                                                    <img class="lazyload" data-src="images/img-play.png" alt="" uk-cover>
                                                    <canvas width="55" height="55"></canvas>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <div class="box_1 uk-padding-remove">
                                                    <h6 class="uk-margin-remove title uk-text-truncate"><a href="#title"><?= $v ?></a></h6>
                                                    <div class="author"><a href="#author">Quân A.P</a></div>
                                                    <div class="luot_nghe_1"><i class="material-icons">headset</i> <span>1242 lượt nghe</span></div>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-3">
                                                <div class="uk-child-width-auto uk-flex-between uk-grid" uk-grid>
                                                    <div>04:50</div>
                                                    <div>
                                                        <a href="#" class="uk-link-reset"><span uk-icon="more"></span></a>
                                                        <div class="uk-dropdown uk-padding-remove list-more-acts" uk-dropdown="mode: click; pos: bottom-right">
                                                            <ul class="uk-list uk-padding-remove">
                                                                <li><a href=""><span class="uk-margin-small-right" uk-icon="icon: plus; ratio:0.8;"></span> Thêm vào</a></li>
                                                                <li><a href=""><span class="uk-margin-small-right" uk-icon="icon: social; ratio:0.8;"></span> Chia sẻ</a></li>
                                                                <li><a href=""><span class="uk-margin-small-right" uk-icon="icon: download; ratio:0.8;"></span> Tải xuống</a></li>
                                                                <li><a href=""><span class="uk-margin-small-right" uk-icon="icon: ban; ratio:0.8;"></span> Chặn</a></li>
                                                                <li><a href=""><span class="uk-margin-small-right" uk-icon="icon: warning; ratio:0.8;"></span> Thông tin</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-flex uk-flex-middle uk-margin-medium-top uk-flex-between uk-padding-small uk-padding-remove-top uk-padding-remove-bottom">
                    <h3 class="title_name">Album</h3>
                    <a href="" class="link_more">xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
                <div class="box_content uk-padding-small uk-margin-bottom">
                    <div class="uk-position-relative uk-visible-toggle uk-padding-small uk-padding-remove-top uk-padding-remove-left uk-padding-remove-right" tabindex="-1" uk-slider="finite: true">

                        <ul class="uk-slider-items uk-child-width-1-5@m uk-grid-small uk-grid" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'src' => 'https://i.scdn.co/image/5570996211d2ef04e38deb3824fa3f443666d089',
                                    'title' => 'Ai Là Người Thương Em',
                                    'name' => 'Quân A.P',
                                ),
                                array(
                                    'src' => 'images/album/img2.png',
                                    'title' => 'Làm người luôn yêu em',
                                    'name' => 'Sơn Tùng MTP',
                                ),
                                array(
                                    'src' => 'images/album/img3.png',
                                    'title' => 'Anh muốn em sống sao',
                                    'name' => 'Hương Tràm',
                                ),
                                array(
                                    'src' => 'images/album/img4.png',
                                    'title' => 'Nỗi nhớ đầy vơi',
                                    'name' => 'Hồ Ngọc Hà',
                                ),
                                array(
                                    'src' => 'images/album/img5.png',
                                    'title' => 'Đừng yêu nữa em mệt rồi',
                                    'name' => 'MIN',
                                ),
                            );
                            foreach ($data as $value): ?>
                                <li class="uk-width-3-5 uk-width-1-4@s uk-width-1-5@m">
                                    <div class="uk-position-relative box_3">
                                        <div class="uk-cover-container box_2">
                                            <img class="lazyload" src="<?= $value['src'] ?>" alt="" uk-cover>
                                            <canvas width="960" height="960"></canvas>
                                            <a class="uk-position-cover" href="#play"><span class="icon-play uk-position-center"></span></a>
                                        </div>
                                        <div class="uk-padding-small box_1 uk-position-bottom">
                                            <h6 class="uk-margin-remove title uk-text-truncate"><a href="#title"><?= $value['title'] ?></a></h6>
                                            <div class="author"><a href="#author"><?= $value['name'] ?></a></div>
                                        </div>
                                        <div class="uk-button luot_nghe uk-button-secondary uk-border-rounded uk-position-bottom-center"><i class="material-icons">headset</i> <span class="uk-text-middle">1242 lượt nghe</span></div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                    </div>
                </div>
                <div class="uk-flex uk-margin-medium-top uk-flex-middle uk-flex-between uk-padding-small uk-padding-remove-top uk-padding-remove-bottom">
                    <h3 class="title_name">Nghệ sĩ nổi bật</h3>
                </div>
                <div class="box_content uk-padding-small">
                    <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider="finite: true">

                        <ul class="uk-slider-items uk-child-width-1-5@m uk-grid-small uk-grid" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'src' => 'images/nghe-si-noi-bat/my_tam.png',
                                    'name' => 'Mỹ Tâm',
                                ),
                                array(
                                    'src' => 'images/nghe-si-noi-bat/ho_ngoc_ha.png',
                                    'name' => 'Hồ Ngọc Hà',
                                ),
                                array(
                                    'src' => 'images/nghe-si-noi-bat/son_tung.png',
                                    'name' => 'Sơn Tùng',
                                ),
                                array(
                                    'src' => 'images/nghe-si-noi-bat/bao_anh.png',
                                    'name' => 'Bảo Anh',
                                ),
                                array(
                                    'src' => 'images/nghe-si-noi-bat/erik.png',
                                    'name' => 'Erik',
                                ),
                            );
                            foreach ($data as $value): ?>
                                <li class="uk-width-2-5 uk-width-1-4@s uk-width-1-5@m">
                                    <a href="" class="uk-link-reset hover1">
                                        <div class="box_nghe_si uk-margin-small uk-border-circle uk-background-contain" data-src="images/bg-ava-nghesi.png" uk-img>
                                            <div class="uk-border-circle uk-transition-toggle uk-overflow-hidden">
                                                <div class="uk-cover-container uk-border-circle uk-transition-scale-up uk-transition-opaque">
                                                    <img data-src="<?= $value['src'] ?>" alt="" uk-cover>
                                                    <canvas width="960" height="960"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="uk-margin-remove title_name_1 uk-text-center"><?= $value['name'] ?></h4>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>