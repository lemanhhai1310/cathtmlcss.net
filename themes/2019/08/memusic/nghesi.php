<?php $data['title'] = 'Memusic - Nghệ sĩ' ?>
<?php require "header.php"; ?>
<div class="uk-section-xsmall block_top uk-height-small uk-position-relative">
    <div class="uk-container uk-padding-remove">
        <div class="uk-flex uk-light uk-flex-middle uk-flex-between uk-padding-small uk-padding-remove-top uk-padding-remove-bottom">
            <h3 class="title_name">Nghệ sĩ</h3>
        </div>
    </div>
</div>
<div class="uk-section-xsmall">
    <div class="uk-container uk-padding-remove">
        <div class="box_content_main uk-margin">
            <div class="uk-position-relative uk-position-z-index box_stt">
                <div class="uk-padding-small">
                    <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-5@m uk-grid-small uk-grid" uk-grid>
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

                            array(
                                'src' => 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/avatars/a/2/d/b/a2db74655a717a3aaeb77053ceb91bc8.jpg',
                                'name' => 'Jack',
                            ),
                            array(
                                'src' => 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/avatars/e/e/e/e/eeee188a74736ed2423d4231b6b41424.jpg',
                                'name' => 'K-ICM',
                            ),
                            array(
                                'src' => 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/avatars/c/7/2/5/c7251165037599f02bbcee8550b37c16.jpg',
                                'name' => 'Thanh Hưng',
                            ),
                            array(
                                'src' => 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/avatars/7/c/5/a/7c5a9d0ec012cb842476b83dbbc96e84.jpg',
                                'name' => 'ERIK',
                            ),
                            array(
                                'src' => 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/avatars/4/4/7/4/4474062bb6b56be949da975c6963d4b6.jpg',
                                'name' => 'Trịnh Đình Quang',
                            ),

                            array(
                                'src' => 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/avatars/1/8/18e2999891374a475d0687ca9f989d83_1486908486.jpg',
                                'name' => 'BTS',
                            ),
                            array(
                                'src' => 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/avatars/2/d/3/c/2d3cbed55144c3a675d36ce8d947c04e.jpg',
                                'name' => 'BLACKPINK',
                            ),
                            array(
                                'src' => 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/avatars/d/d/ddf9c6066fb2e281dd8b25ef00f9546e_1513834713.jpg',
                                'name' => 'J.Fla',
                            ),
                            array(
                                'src' => 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/avatars/e/a/ea507573ba1b7bfea6bbd715e4aa4c10_1481549701.jpg',
                                'name' => 'BIGBANG',
                            ),
                            array(
                                'src' => 'https://photo-resize-zmp3.zadn.vn/w240_r1x1_jpeg/avatars/5/e/c/3/5ec3e992b8d4aa9c0e5fdd14e9a622fc.jpg',
                                'name' => 'TWICE',
                            ),

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
                            <div>
                                <a href="" class="uk-link-reset hover1">
                                    <div class="box_nghe_si uk-margin-small uk-border-circle uk-background-contain" data-src="images/bg-ava-nghesi.png" uk-img>
                                        <div class="uk-cover-container uk-border-circle uk-transition-toggle uk-overflow-hidden">
                                            <img class="lazyload uk-transition-scale-up uk-transition-opaque uk-position-cover" data-src="<?= $value['src'] ?>" alt="" uk-cover>
                                            <canvas width="960" height="960"></canvas>
                                        </div>
                                    </div>
                                    <h4 class="uk-margin-remove title_name_1 uk-text-center"><?= $value['name'] ?></h4>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="uk-text-center uk-margin">
                        <a href="" class="uk-button uk-button-default btn_load_more">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>