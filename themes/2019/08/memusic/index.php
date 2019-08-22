<?php $data['title'] = 'Memusic - Trang chủ' ?>
<?php require "header.php"; ?>
<div class="uk-container uk-padding-remove">
    <div class="uk-padding-small uk-padding-remove-top uk-padding-remove-bottom box_padding">
        <div uk-slideshow="ratio: 1020:571">
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                <ul class="uk-slideshow-items">
                    <li>
                        <img src="images/banner1.png" alt="" uk-cover>
                    </li>
                    <li>
                        <img src="images/banner1.png" alt="" uk-cover>
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

            </div>
            <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
        </div>
    </div>
</div>
<div class="uk-background-norepeat uk-background-top-center" data-src="images/bg-movive.png" uk-img>
    <div class="uk-container uk-padding-remove">
        <div class="uk-height-large">

        </div>
        <div class="uk-flex uk-flex-middle uk-flex-between uk-padding-small uk-padding-remove-top uk-padding-remove-bottom">
            <h3 class="title_name">Chart</h3>
        </div>
        <div class="uk-padding-small uk-padding-remove-bottom uk-padding-remove-top uk-margin-small">
            <div class="uk-grid-small" uk-grid>
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
                                <img class="lazyload" src="<?= $value['src'] ?>" alt="" uk-cover>
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
        <div class="uk-background-default uk-border-rounded box_content_main uk-margin">
            <div class="uk-flex uk-margin-medium-top uk-margin-small-bottom uk-flex-middle uk-flex-between uk-padding-small uk-padding-remove-top uk-padding-remove-bottom">
                <h3 class="title_name">Chủ đề</h3>
                <a href="" class="link_more">xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
            <div class="uk-padding-small uk-padding-remove-bottom uk-padding-remove-top uk-margin-small">
                <div class="uk-grid-small" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'images/chu-de/nhac_dong_que.png',
                            'title' => 'Ai Là Người Thương Em',
                            'name' => 'Quân A.P',
                        ),
                        array(
                            'src' => 'images/chu-de/nhac_rock.png',
                            'title' => 'Làm người luôn yêu em',
                            'name' => 'Sơn Tùng MTP',
                        ),
                        array(
                            'src' => 'images/chu-de/nhac_tru_tinh.png',
                            'title' => 'Anh muốn em sống sao',
                            'name' => 'Hương Tràm',
                        ),
                        array(
                            'src' => 'images/chu-de/bai_hat_ve_me.png',
                            'title' => 'Nỗi nhớ đầy vơi',
                            'name' => 'Hồ Ngọc Hà',
                        ),
                        array(
                            'src' => 'images/chu-de/nhac_dong_que.png',
                            'title' => 'Đừng yêu nữa em mệt rồi',
                            'name' => 'MIN',
                        ),
                        array(
                            'src' => 'images/chu-de/nhac_phim.png',
                            'title' => 'Ai Là Người Thương Em',
                            'name' => 'Quân A.P',
                        ),
                    );
                    foreach ($data as $key => $value): ?>
                        <div class="uk-width-1-1 uk-width-1-2@s uk-width-1-3@m">
                            <div class="uk-cover-container uk-light uk-box-shadow-medium">
                                <img src="<?= $value['src'] ?>" alt="" uk-cover>
                                <canvas width="640" height="370"></canvas>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="uk-flex uk-margin-medium-top uk-margin-small-bottom uk-flex-middle uk-flex-between uk-padding-small uk-padding-remove-top uk-padding-remove-bottom">
                <h3 class="title_name">New Hit</h3>
                <a href="" class="link_more">xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
            <div class="uk-padding-small uk-padding-remove-bottom uk-padding-remove-top uk-margin-small">
                <div class="uk-grid-medium uk-child-width-1-2@m" uk-grid>
                    <div>
                        <div class="uk-cover-container uk-margin-small">
                            <img src="images/new-hit/img1.png" alt="" uk-cover>
                            <canvas width="960" height="409"></canvas>
                        </div>
                        <div class="uk-child-width-auto uk-flex-between uk-margin-medium-bottom" uk-grid>
                            <div>
                                <h4 class="uk-margin-remove title_name_1 uk-text-center"><a href="">Sống Chết Có Nhau (Single)</a></h4>
                                <div class="author"><a href="#author">Quân A.P</a></div>
                            </div>
                            <div>
                                <div class="uk-button luot_nghe uk-button-secondary uk-border-rounded"><i class="material-icons">headset</i> <span class="uk-text-middle">1242 lượt nghe</span></div>
                            </div>
                        </div>
                        <ul class="uk-list">
                            <li class="uk-margin">
                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-auto">
                                        <div class="uk-cover-container uk-border-rounded">
                                            <img src="images/img-play.png" alt="" uk-cover>
                                            <canvas width="55" height="55"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="box_1 uk-padding-remove">
                                            <h6 class="uk-margin-remove title uk-text-truncate"><a href="#title">Gia Đình</a></h6>
                                            <div class="author"><a href="#author">Quân A.P</a></div>
                                            <div class="luot_nghe_1"><i class="material-icons">headset</i> <span>1242 lượt nghe</span></div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="uk-child-width-auto uk-flex-between" uk-grid>
                                            <div>04:50</div>
                                            <div><a href="#" class="uk-link-reset"><span uk-icon="more"></span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-margin">
                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-auto">
                                        <div class="uk-cover-container uk-border-rounded">
                                            <img src="images/img-play.png" alt="" uk-cover>
                                            <canvas width="55" height="55"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="box_1 uk-padding-remove">
                                            <h6 class="uk-margin-remove title uk-text-truncate"><a href="#title">Ai Là Người Thương Em</a></h6>
                                            <div class="author"><a href="#author">Quân A.P</a></div>
                                            <div class="luot_nghe_1"><i class="material-icons">headset</i> <span>1242 lượt nghe</span></div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="uk-child-width-auto uk-flex-between" uk-grid>
                                            <div>04:50</div>
                                            <div><a href="#" class="uk-link-reset"><span uk-icon="more"></span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-margin">
                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-auto">
                                        <div class="uk-cover-container uk-border-rounded">
                                            <img src="images/img-play.png" alt="" uk-cover>
                                            <canvas width="55" height="55"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="box_1 uk-padding-remove">
                                            <h6 class="uk-margin-remove title uk-text-truncate"><a href="#title">Gia Đình</a></h6>
                                            <div class="author"><a href="#author">Quân A.P</a></div>
                                            <div class="luot_nghe_1"><i class="material-icons">headset</i> <span>1242 lượt nghe</span></div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="uk-child-width-auto uk-flex-between" uk-grid>
                                            <div>04:50</div>
                                            <div><a href="#" class="uk-link-reset"><span uk-icon="more"></span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <div class="uk-cover-container uk-margin-small">
                            <img src="images/new-hit/img2.png" alt="" uk-cover>
                            <canvas width="960" height="409"></canvas>
                        </div>
                        <div class="uk-child-width-auto uk-flex-between uk-margin-medium-bottom" uk-grid>
                            <div>
                                <h4 class="uk-margin-remove title_name_1 uk-text-center"><a href="">Đóa hoa hồng</a></h4>
                                <div class="author"><a href="#author">Chi Pu</a></div>
                            </div>
                            <div>
                                <div class="uk-button luot_nghe uk-button-secondary uk-border-rounded"><i class="material-icons">headset</i> <span class="uk-text-middle">1242 lượt nghe</span></div>
                            </div>
                        </div>
                        <ul class="uk-list">
                            <li class="uk-margin">
                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-auto">
                                        <div class="uk-cover-container uk-border-rounded">
                                            <img src="images/img-play.png" alt="" uk-cover>
                                            <canvas width="55" height="55"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="box_1 uk-padding-remove">
                                            <h6 class="uk-margin-remove title uk-text-truncate"><a href="#title">Gia Đình</a></h6>
                                            <div class="author"><a href="#author">Quân A.P</a></div>
                                            <div class="luot_nghe_1"><i class="material-icons">headset</i> <span>1242 lượt nghe</span></div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="uk-child-width-auto uk-flex-between" uk-grid>
                                            <div>04:50</div>
                                            <div><a href="#" class="uk-link-reset"><span uk-icon="more"></span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-margin">
                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-auto">
                                        <div class="uk-cover-container uk-border-rounded">
                                            <img src="images/img-play.png" alt="" uk-cover>
                                            <canvas width="55" height="55"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="box_1 uk-padding-remove">
                                            <h6 class="uk-margin-remove title uk-text-truncate"><a href="#title">Ai Là Người Thương Em</a></h6>
                                            <div class="author"><a href="#author">Quân A.P</a></div>
                                            <div class="luot_nghe_1"><i class="material-icons">headset</i> <span>1242 lượt nghe</span></div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="uk-child-width-auto uk-flex-between" uk-grid>
                                            <div>04:50</div>
                                            <div><a href="#" class="uk-link-reset"><span uk-icon="more"></span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-margin">
                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-auto">
                                        <div class="uk-cover-container uk-border-rounded">
                                            <img src="images/img-play.png" alt="" uk-cover>
                                            <canvas width="55" height="55"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="box_1 uk-padding-remove">
                                            <h6 class="uk-margin-remove title uk-text-truncate"><a href="#title">Gia Đình</a></h6>
                                            <div class="author"><a href="#author">Quân A.P</a></div>
                                            <div class="luot_nghe_1"><i class="material-icons">headset</i> <span>1242 lượt nghe</span></div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <div class="uk-child-width-auto uk-flex-between" uk-grid>
                                            <div>04:50</div>
                                            <div><a href="#" class="uk-link-reset"><span uk-icon="more"></span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
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

                    <ul class="uk-slider-items uk-child-width-1-5@m uk-grid-small" uk-grid>
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

                    <ul class="uk-slider-items uk-child-width-1-5@m uk-grid-small" uk-grid>
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
                                        <div class="uk-cover-container uk-border-circle uk-transition-toggle uk-overflow-hidden">
                                            <img class="lazyload uk-transition-scale-up uk-transition-opaque uk-position-cover" data-src="<?= $value['src'] ?>" alt="" uk-cover>
                                            <canvas width="960" height="960"></canvas>
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
<?php require "footer.php"; ?>