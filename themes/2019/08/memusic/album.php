<?php $data['title'] = 'Memusic - Album' ?>
<?php require "header.php"; ?>
<div class="uk-section-xsmall block_top uk-height-small uk-position-relative">
    <div class="uk-container uk-padding-remove">
        <div class="uk-flex uk-light uk-flex-middle uk-flex-between uk-padding-small uk-padding-remove-top uk-padding-remove-bottom">
            <h3 class="title_name">Album</h3>
        </div>
    </div>
</div>
<div class="uk-section-xsmall">
    <div class="uk-container uk-padding-remove">
        <div class="box_content_main uk-margin">
            <div class="uk-position-relative uk-position-z-index box_stt">
                <div class="uk-padding-small">
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
                    <div class="uk-text-center uk-margin">
                        <a href="" class="uk-button uk-button-default btn_load_more">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>