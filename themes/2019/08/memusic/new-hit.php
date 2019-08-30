<?php $data['title'] = 'Memusic - New Hit' ?>
<?php require "header.php"; ?>
<div class="uk-section-xsmall block_top uk-height-small uk-position-relative">
    <div class="uk-container uk-padding-remove">
        <div class="uk-flex uk-light uk-flex-middle uk-flex-between uk-padding-small uk-padding-remove-top uk-padding-remove-bottom">
            <h3 class="title_name">New Hit</h3>
        </div>
    </div>
</div>
<div class="uk-section-xsmall">
    <div class="uk-container uk-padding-remove">
        <div class="box_content_main uk-margin">
            <div class="uk-position-relative uk-position-z-index box_stt">
                <div class="uk-padding-small">
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
                    <div class="uk-text-center uk-margin">
                        <a href="" class="uk-button uk-button-default btn_load_more">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>