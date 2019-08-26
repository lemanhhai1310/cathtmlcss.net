<?php $data['title'] = 'TRUNG TÂM NHÂN LỰC HÀNG HẢI ALLSEAMAN - Trang chủ' ?>
<?php require "header.php"; ?>
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push; ratio: 1920:751; min-height: 450;">

    <ul class="uk-slideshow-items">
        <?php
        $data = array(
            array(
                'src' => 'images/slider.jpg'
            ),
            array(
                'src' => 'images/slider.jpg'
            ),
        );
        foreach ($data as $k => $v): ?>
        <li>
            <img data-src="<?= $v['src'] ?>" alt="" class="uk-cover" uk-cover>
            <div class="uk-position-cover">
                <div class="uk-container uk-height-1-1 uk-flex uk-flex-middle">
                    <div class="uk-width-1-1 box_banner">
                        <h3 class="uk-text-right">Trung tâm nhân lực Hàng Hải</h3>
                        <h2 class="uk-text-right">ALLSEAMAN</h2>
                        <div class="uk-text-center uk-margin-large-top">
                            <a href="" class="uk-button uk-button-primary uk-margin-small-right">xem thêm</a>
                            <a href="#modal-media-video" class="uk-button uk-button-default" uk-toggle>video clip</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    <div class="uk-position-bottom block_style_slide uk-visible@m">
        <div class="uk-container uk-position-relative">
            <div class="box_cc uk-background-default uk-position-center-left-out"></div>
            <div class="box_cc uk-background-default uk-position-center-right-out"></div>
        </div>
    </div>
</div>
    <div id="modal-media-video" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
            <button class="uk-modal-close-outside" type="button" uk-close></button>
            <video data-src="https://yootheme.com/site/images/media/yootheme-pro.mp4" controls playsinline uk-video></video>
        </div>
    </div>
<div class="uk-section-small">
    <div class="uk-container">
        <div class="uk-grid uk-grid-small uk-grid-20" uk-grid>
            <div class="uk-width-2-5@m">
                <div class="box_about uk-text-right">
                    <p>Trung tâm huấn luyện thuyền viên
                        (TTHLTV) ALL SEAMAN
                        với nhiệm vụ chủ yếu là huấn luyện,
                        cập nhật,nâng cao kỹ năng làm việc
                        cho đội ngũ sỹ quan, thuyền viên
                        trong nước và quốc tế.</p>
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="uk-grid uk-grid-small uk-grid-20 uk-child-width-1-2" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'images/gioi-thieu-chung.jpg',
                            'title' => 'Giới thiệu chung',
                        ),
                        array(
                            'src' => 'images/tam-nhin-su-menh.jpg',
                            'title' => 'Tầm nhìn & sứ mệnh',
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                    <div>
                        <div class="uk-cover-container">
                            <img data-src="<?= $v['src'] ?>" alt="" class="uk-cover" uk-cover>
                            <canvas width="322" height="322"></canvas>
                            <div class="uk-position-bottom uk-text-center uk-light uk-padding-small" style="background-color: #02519c;">
                                <h3 class="title_1 uk-margin-remove"><a href=""><?= $v['title'] ?></a></h3>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="uk-grid uk-grid-medium" uk-grid>
            <div class="uk-width-auto@m">
                <figure class="uk-text-center">
                    <img data-src="images/img1.jpg" alt="">
                </figure>
            </div>
            <div class="uk-width-expand">
                <p class="desc-about">Theo nhu cầu sử dụng thuyền viên hiện nay, việc đáp ứng và thỏa mãn các yêu cầu của quốc tế và trong nước đang ngày càng là một áp lực không chỉ cho các trường đào tạo chuyên nghiệp mà còn cho cả các doanh nghiệp vận tải biển. Trước nhu cầu cấp bách đó, ngày 29/03/2006 Công ty cổ phần Vận tải biển Việt Nam (VOSCO) đã thành lập Trung tâm huấn luyện thuyền viên (TTHLTV) với nhiệm vụ chủ yếu là huấn luyện, cập nhật, nâng cao kỹ năng làm việc cho đội ngũ sỹ quan, thuyền viên của Công ty nhằm đáp ứng đủ về số lượng, đảm bảo về chất lượng để phục vụ cho đội tàu đang phát triển rất nhanh của Công ty ....
                    các lĩnh vực tàu hàng khô, tàu dầu, tàu container và làm thuê cho các chủ tàu trong và ngoài nước.

                    Tôn cuộn mạ kẽm, tôn mạ màu, tôn lạnh, tôn lạnh mạ màu, tôn cửa cuốn.
                    Tôn lợp mạ kẽm, tôn lợp mạ hợp kim nhôm kẽm, tôn mạ màu với nhiều kiểu sóng: 9 sóng, 9 sóng đôi, 9 sóng uốn vòm, sóng giả ngói, 5 sóng, 5 sóng Jamins, sóng Kiplock và các loại sóng khác phục vụ cho công trình dân dụng và nhà xưởng…
                    Tôn lợp cách nhiệt OPP 9 Sóng, tôn lợp cách âm và cách nhiệt PU-PVC 5 sóng, tôn plafongs ( 13 sóng nhỏ, 6 sóng lớn).
                    Xà gỗ thép: C,Z,U,I,V
                    Thép đen dạng cuộn, thép xẻ băng, cắt phẳng. Thép cán nguội , cán nóng, thép tấm.
                    Các lọai phụ kiện xây dựng nhà xưởng.
                </p>
                <a href="" class="uk-button uk-button-default btn_readmore" uk-icon="chevron-right">Đọc thêm </a>
            </div>
        </div>
    </div>
</div>
<div class="uk-section-small block_01">
    <div class="uk-container">
        <div class="box_1 uk-position-relative uk-text-center uk-margin">
            <h2>Các khoá học</h2>
            <div class="desc">CHÚNG TÔI ĐÀO TẠO VÀ CUNG CẤP CÁC NGHIỆP VỤ</div>
        </div>
        <div class="uk-grid uk-grid-small uk-grid-20 uk-child-width-1-2 uk-child-width-1-3@m" uk-grid>
            <?php
            $data = array(
                array(
                    'src' => 'images/khoa-hoc/sy-quan-moi-truong.png',
                    'title' => 'Sỹ quan môi trường',
                ),
                array(
                    'src' => 'images/khoa-hoc/quan-ly-an-toan.png',
                    'title' => 'Quản lý an toàn tàu',
                ),
                array(
                    'src' => 'https://sohanews.sohacdn.com/zoom/260_162/2019/photo1566828255465-1566828256109-crop-1566828316322617468829.jpg',
                    'title' => 'Làm quen tàu hoá chất',
                ),
                array(
                    'src' => 'https://sohanews.sohacdn.com/zoom/260_162/2019/photo1566814670714-1566814670928-crop-1566814680604262018280.jpg',
                    'title' => 'Khai thác tàu dầu nâng cao',
                ),
                array(
                    'src' => 'https://sohanews.sohacdn.com/zoom/260_162/2019/photo1566745417885-1566745418112-crop-1566745487832803655893.jpg',
                    'title' => 'Làm quen tàu dầu',
                ),
                array(
                    'src' => 'https://sohanews.sohacdn.com/zoom/260_162/2019/photo1566835475575-1566835475823-crop-1566835484049473175265.jpg',
                    'title' => 'Quan sát và đồ giải tự động bằng Radar',
                ),
            );
            foreach ($data as $k => $v): ?>
                <div>
                    <a href="">
                        <div class="uk-cover-container box_khoahoc uk-text-center uk-light uk-background-default uk-border-rounded uk-box-shadow-medium">
                            <img data-src="<?= $v['src'] ?>" alt="" class="uk-cover" uk-cover>
                            <canvas width="370" height="245"></canvas>
                            <div class="uk-padding-small uk-position-bottom uk-text-truncate">
                                <?= $v['title'] ?>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="uk-text-center uk-margin">
            <a href="" class="link_more" uk-icon="chevron-right">Xem thêm</a>
        </div>
    </div>
</div>
<div class="uk-section-small uk-padding-remove-bottom">
    <div class="box_1 uk-position-relative uk-text-center uk-margin">
        <h2>Hình ảnh hoạt động</h2>
    </div>
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true">

        <ul class="uk-slider-items uk-grid uk-grid-20" uk-lightbox="animation: fade">
            <?php
            $data = array(
                array(
                    'src' => 'images/hinh-anh-hoat-dong/img1.png'
                ),
                array(
                    'src' => 'images/slider.jpg'
                ),
                array(
                    'src' => 'https://znews-photo.zadn.vn/w660/Uploaded/pgi_gehatuvrh/2019_08_26/WAVMRSDOZBCX7CMBJUJ5HRQX3U.jpg'
                ),
                array(
                    'src' => 'https://znews-photo.zadn.vn/w660/Uploaded/pgi_gehatuvrh/2019_08_19/zing_016_2.jpg'
                ),
                array(
                    'src' => 'https://znews-photo.zadn.vn/w660/Uploaded/pwvopivp/2019_08_19/1.jpg'
                ),
                array(
                    'src' => 'https://sohanews.sohacdn.com/thumb_w/660/2019/8/26/35f0aa70-b553-4419-9d99-b4afeb8544f3-1566808594864240362445-crop-15668086017611588723220.jpg'
                ),
            );
            foreach ($data as $k => $v): ?>
            <li class="uk-width-3-5">
                <a href="<?= $v['src'] ?>" style="cursor: zoom-in" data-caption="Caption 1">
                    <div class="uk-panel uk-cover-container box_hinhanh">
                        <img data-src="<?= $v['src'] ?>" class="uk-cover" alt="" uk-img uk-cover>
                        <canvas width="971" height="450"></canvas>
                    </div>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container">
        <div class="box_1 uk-position-relative uk-text-center uk-margin">
            <h2>Tin tức nổi bật</h2>
            <a href="" class="uk-button uk-button-default btn_readmore uk-visible@m uk-position-center-right" uk-icon="chevron-right">Tới trang tin tức</a>
        </div>
        <div class="uk-grid uk-child-width-1-3@m" uk-grid>
            <div>

            </div>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>