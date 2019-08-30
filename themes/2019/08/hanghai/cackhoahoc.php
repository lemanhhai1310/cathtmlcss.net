<?php $data['title'] = 'TRUNG TÂM NHÂN LỰC HÀNG HẢI ALLSEAMAN - Trang Khóa học' ?>
<?php require "header.php"; ?>
<div class="block_01 uk-light uk-section-small uk-background-norepeat uk-background-cover" data-src="images/bg_1.png" uk-img>
    <div class="uk-container">
        <h1 class="uk-text-right uk-text-uppercase">các khóa học</h1>
    </div>
</div>
<div class="uk-section-xsmall">
    <div class="uk-container">
        <ul class="tab_01 uk-tab">
            <li class="uk-active"><a href="cackhoahoc.php">Các khóa học</a></li>
            <li><a href="dangkykhoahoc.php">Đăng ký khóa học</a></li>
        </ul>
        <div class="uk-grid uk-grid-small uk-grid-20 uk-grid-match uk-child-width-1-3@m uk-margin" uk-grid>
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
                    <a href="khoahoc-detail.php">
                        <div class="uk-transition-toggle uk-overflow-hidden box_khoahoc uk-position-relative uk-text-center uk-light uk-background-default uk-border-rounded uk-box-shadow-medium">
                            <div class="uk-cover-container uk-transition-scale-up uk-transition-opaque" tabindex="0">
                                <img data-src="<?= $v['src'] ?>" alt="" class="uk-cover" uk-cover>
                                <canvas width="370" height="245"></canvas>
                            </div>
                            <div class="uk-padding-small uk-position-bottom uk-text-truncate">
                                <?= $v['title'] ?>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="uk-section-xsmall block_03">
            <ul class="uk-pagination uk-flex-center uk-grid-10" uk-margin>
                <li class="uk-active"><span>01</span></li>
                <li><a href="#">02</a></li>
                <li><a href="#">03</a></li>
            </ul>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>