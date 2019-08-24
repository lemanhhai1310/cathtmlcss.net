<?php $data['title'] = 'Memusic - Chủ đề' ?>
<?php require "header.php"; ?>
<div class="uk-section-xsmall block_top uk-height-small uk-position-relative">
    <div class="uk-container uk-padding-remove">
        <div class="uk-flex uk-light uk-flex-middle uk-flex-between uk-padding-small uk-padding-remove-top uk-padding-remove-bottom">
            <h3 class="title_name">Chủ đề</h3>
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
                    <div class="uk-text-center uk-margin">
                        <a href="" class="uk-button uk-button-default btn_load_more">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>