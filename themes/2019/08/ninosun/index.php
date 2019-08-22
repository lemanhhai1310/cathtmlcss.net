<?php $data['title'] = 'Nồi cơm Ninosun - Giải pháp cho sức khoẻ gia đình thân yêu của bạn' ?>
<?php include "header.php"; ?>
<div class="uk-section-small uk-background-muted" uk-scrollspy="target: .anima; repeat: true; cls: animate; delay: 200">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-grid-medium uk-grid-match" uk-grid>
            <div>
                <div class="uk-card card1 uk-text-center uk-card-default uk-card-body uk-padding-small anima">
                    <h3 class="uk-card-title uk-text-uppercase">ĐẶT HÀNG NGAY BÂY GIỜ</h3>
                    <div class="box_gift uk-margin">
                        <div class="sale">NHẬN ƯU ĐÃI GIẢM 40%</div>
                        <div class="text_free">Tặng máy đo đường huyết</div>
                    </div>
                    <div class="summary_hover">
                        *** Chỉ áp dụng cho 100 người nhanh tay đầu tiên ***
                    </div>
                    <div class="uk-child-width-1-2" uk-grid>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card card1 uk-card-default uk-card-body uk-padding-small anima">
                    <h3 class="uk-card-title uk-text-uppercase uk-margin">Thời gian còn lại để được ưu đãi</h3>
                    <div id="clock" class="uk-grid-small uk-child-width-auto uk-flex-center" uk-grid uk-countdown="date: 2019-08-26T21:57:46+00:00">
                        <div>
                            <div class="uk-countdown-number uk-countdown-days"></div>
                            <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Ngày</div>
                        </div>
                        <div class="uk-countdown-separator">:</div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-hours"></div>
                            <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Giờ</div>
                        </div>
                        <div class="uk-countdown-separator">:</div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-minutes"></div>
                            <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Phút</div>
                        </div>
                        <div class="uk-countdown-separator">:</div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-seconds"></div>
                            <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Giây</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-section-small" uk-scrollspy="target: .anima; repeat: true; cls: animate; delay: 200">
    <div class="uk-container">
        <div class="box1 uk-text-center uk-position-relative uk-margin">
            <span class="uk-position-z-index uk-position-relative">tin nổi bật</span>
            <hr class="uk-position-center-left uk-position-center-right uk-margin-remove">
        </div>
        <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-medium" uk-grid>
            <?php
            $data = array(
                array(
                    'src' => 'images/tin-noi-bat/slide1_1552847917.jpg',
                    'title' => 'Công nghệ revocook thông minh - 4 giai đoạn',
                ),
                array(
                    'src' => 'images/tin-noi-bat/slwqd_1552847602.jpg',
                    'title' => 'Đánh giá nồi cơm điện tách đường',
                ),
                array(
                    'src' => 'images/tin-noi-bat/111_1552847421.jpg',
                    'title' => 'Nồi cơm tách đường loại nào tốt',
                ),
            );
            foreach ($data as $value): ?>
                <div>
                    <a href="">
                        <div class="uk-cover-container uk-inline-clip uk-transition-toggle news1 anima">
                            <img class="lazyload uk-transition-scale-up uk-transition-opaque uk-position-cover" uk-cover data-src="<?= $value['src'] ?>" alt="">
                            <canvas width="960" height="653.7265416"></canvas>
                            <div class="date uk-position-top-right">
                                <div class="day"> 17</div>
                                <div class="month">Th03</div>
                            </div>
                            <p class="desc uk-padding-small uk-margin-remove uk-position-bottom">
                                <?= $value['title'] ?>
                            </p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>