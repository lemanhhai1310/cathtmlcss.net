<?php $data['title'] = 'Memusic - Trang cá nhân' ?>
<?php require "header.php"; ?>
<div class="uk-section-xsmall block_top uk-height-small uk-position-relative">
    <div class="uk-container uk-padding-remove">
        <div class="uk-flex uk-light uk-flex-middle uk-flex-between uk-padding-small uk-padding-remove-top uk-padding-remove-bottom">
            <h3 class="title_name">Trang cá nhân</h3>
        </div>
    </div>
</div>
<div class="uk-section-xsmall">
    <div class="uk-container uk-padding-remove">
        <div class="box_content_main uk-margin">
            <div class="uk-position-relative uk-position-z-index box_stt">
                <div class="uk-padding-small uk-padding-remove-bottom uk-padding-remove-top uk-background-default uk-border-rounded uk-box-shadow-medium">
                    <div class="uk-grid-match uk-grid-divider" uk-grid>
                        <div class="uk-width-1-4@m uk-visible@m">
                            <?php require "sidebar-left.php"; ?>
                        </div>
                        <div class="uk-width-expand">
                            <div class="uk-section-xsmall">
                                <h3 class="title_1">Bài hát yêu thích</h3>
                                <h3 class="title_1">MV yêu thích</h3>
                                <div class="uk-grid-small" uk-grid>
                                    <?php
                                    $data = array(
                                        array(
                                            'src' => 'images/mv1.png',
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
                                    );
                                    foreach ($data as $key => $value): ?>
                                        <div class="uk-width-1-2 uk-width-1-2@s">
                                            <div class="uk-cover-container uk-light uk-box-shadow-medium uk-margin-small">
                                                <img class="lazyload" data-src="<?= $value['src'] ?>" alt="" uk-cover>
                                                <canvas width="640" height="360"></canvas>
                                                <a href="" class="uk-position-cover"><img class="uk-position-left play_1" style="top: 10px; left: 10px;" src="images/play.png" alt=""></a>
                                            </div>
                                            <h4 class="uk-margin-remove title_name_1"><a href="">Sống Chết Có Nhau (Single)</a></h4>
                                            <div class="author"><a href="#author">Quân A.P</a></div>
                                            <div class="uk-button luot_nghe uk-button-secondary uk-border-rounded"><i class="material-icons">headset</i> <span class="uk-text-middle">1242 lượt nghe</span></div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>