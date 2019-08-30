<?php $data['title'] = 'TRUNG TÂM NHÂN LỰC HÀNG HẢI ALLSEAMAN - Trang Lịch học' ?>
<?php require "header.php"; ?>
<div class="block_01 uk-light uk-section-small uk-background-norepeat uk-background-cover" data-src="images/bg_1.png" uk-img>
    <div class="uk-container">
        <h1 class="uk-text-right uk-text-uppercase">lĩnh vực hoạt động</h1>
    </div>
</div>
<div class="uk-section-xsmall">
    <div class="uk-container">
        <ul class="tab_01 uk-tab" uk-tab="connect: .uk-switcher">
            <li class="uk-active"><a href="">Lĩnh vực hoạt động</a></li>
            <li><a href="">Hình ảnh hoạt động</a></li>
        </ul>
        <ul class="uk-switcher">
            <li>
                <div class="uk-grid uk-grid-small uk-grid-20 uk-grid-match uk-child-width-1-3@m" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'images/linh-vuc-hoat-dong/img1.png',
                            'title' => 'Đào tạo và huấn luyện thuyền viên',
                            'desc' => 'Ngày 01/4/2013 Trung tâm Huấn luyện thuyền viên đã mở các lớp cập nhật nghiệp vụ...',
                        ),
                        array(
                            'src' => 'images/linh-vuc-hoat-dong/img2.png',
                            'title' => 'Cung ứng và quản lý thuyền viên',
                            'desc' => 'Cung ứng và quản lý thuyền viên cho các trung tâm, các nơi có nhu cầu',
                        ),
                        array(
                            'src' => 'images/linh-vuc-hoat-dong/img3.png',
                            'title' => 'Hoạt động hỗ trợ dịch vụ vận tải',
                            'desc' => 'Hoạt động dịch vụ hỗ trợ vận tải và các hỗ trợ cho cho đường biển',
                        ),
                        array(
                            'src' => 'images/linh-vuc-hoat-dong/img4.png',
                            'title' => 'Cung cấp các khoá học đào tạo theo yêu cầu',
                            'desc' => 'Ngày 01/4/2013 Trung tâm Huấn luyện thuyền viên đã mở các lớp cập nhật nghiệp vụ...',
                        ),
                        array(
                            'src' => 'images/linh-vuc-hoat-dong/img5.png',
                            'title' => 'Cung ứng và quản lý nhân sự hàng hải',
                            'desc' => 'Cung ứng và quản lý thuyền viên cho các trung tâm, các nơi có nhu cầu',
                        ),
                        array(
                            'src' => 'images/linh-vuc-hoat-dong/img6.png',
                            'title' => 'Hoạt động hỗ trợ dịch vụ tàu thuyền vận chuyển',
                            'desc' => 'Hoạt động dịch vụ hỗ trợ vận tải và các hỗ trợ cho cho đường biển',
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                    <div>
                        <div class="uk-card box_linhvuchoatdong uk-card-default uk-text-center uk-card-body uk-padding-small uk-box-shadow-medium">
                            <div class="box_img uk-margin">
                                <img data-src="<?= $v['src'] ?>" alt="">
                            </div>
                            <h3 class="uk-card-title"><?= $v['title'] ?></h3>
                            <div class="desc"><?= $v['desc'] ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </li>
            <li>
                <div class="uk-grid uk-grid-small uk-grid-20 uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
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
                        array(
                            'src' => 'https://imgproxy3.cdnforo.com/S5xW2k8mYx_dVPEL6eujw3N13U3JDYChDBe8rxWOgxU/h:460/plain/http://data.tinhte.vn/data/attachment-files/2019/08/4759986_Cover_MW.jpg'
                        ),
                        array(
                            'src' => 'https://imgproxy3.cdnforo.com/W0Mlq3Lkmf0tbx4net_39cjz7k4zNsxA7l3ioEtKw3E/h:460/plain/http://data.tinhte.vn/data/attachment-files/2019/08/4759924_Cover_GlobalFoundries_vs_TSMC.jpg'
                        ),
                        array(
                            'src' => 'https://imgproxy3.cdnforo.com/rdS4h8iBianX3IrjuMviljCJUkmGYIDRm_2CUaGnoJo/h:460/plain/http://data.tinhte.vn/data/attachment-files/2019/08/4756885_cover_dell_latitude_7400.jpg'
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                        <div>
                            <div class="uk-cover-container uk-transition-toggle uk-light">
                                <img data-src="<?= $v['src'] ?>" alt="" class="uk-cover" uk-cover>
                                <canvas width="640" height="424"></canvas>
                                <a class="uk-position-cover uk-overlay uk-overlay-primary uk-transition-fade" style="z-index: 982;" href="<?= $v['src'] ?>" data-caption="Caption 1"><span class="uk-position-center" uk-icon="icon: search; ratio: 1.5"></span></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </li>
        </ul>
    </div>
</div>
<?php require "footer.php"; ?>