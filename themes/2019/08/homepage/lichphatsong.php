<?php $title = "Lịch phát sóng" ?>
<?php $lichphatsong = "" ?>
<?php include "header.php"; ?>
<?php include "block-4.php"; ?>
<?php include "block-ads.php"; ?>
<div class="uk-section-xsmall tv-block-lichphatsong">
    <div class="uk-container uk-margin">
        <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
            <div class="uk-width-1-2 uk-width-auto@m">
                <h1 class="video-title uk-text-uppercase">lịch phát sóng</h1>
            </div>
            <div class="uk-width-1-2 uk-width-auto@m uk-flex-last@m">
                <div class="tv-filter1 uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                    <select>
                        <?php
                        $data = array(
                            'Chọn giải đấu',
                            'UEFA Champion League',
                            'V League',
                            'Ngoại hạng Anh',
                            'Thai League',
                            'COPA AMERICA',
                            'Worldcup’s Women 2019',
                            'Laliga',
                            'Seri A',
                            'Bundesliga',
                            'UEFA Champion League',
                            'V League',
                            'Ngoại hạng Anh',
                            'Thai League',
                            'COPA AMERICA',
                            'Worldcup’s Women 2019',
                            'Laliga',
                            'Seri A',
                            'Bundesliga',
                        );
                        foreach ($data as $k1 => $v1){ ?>
                            <option value="<?= $v1; ?>"><?= $v1; ?></option>
                        <?php } ?>
                    </select>
                    <button class="uk-button uk-button-default uk-width-1-1 uk-text-truncate" type="button" tabindex="-1">
                        <span></span>
                        <span uk-icon="icon: chevron-down"></span>
                    </button>
                </div>
            </div>
            <div class="uk-width-expand">
                <form class="uk-search uk-search-default uk-width-1-1 tv-search">
                    <span class="uk-search-icon-flip" uk-search-icon></span>
                    <input class="uk-search-input" type="search" placeholder="Tìm trận đấu...">
                </form>
            </div>
        </div>
    </div>
    <div class="uk-container">
        <div class="uk-child-width-1-4@m uk-grid-small" uk-grid>
            <?php
            $data = array(
                array(
                    'img' => 'imgs/20180726-The18-Image-How-Many-Players-On-A-Soccer-Field.png',
                    'title' => 'Manchester United vs Chelsea',
                    'desc' => '2019 FIFA World Cup',
                    'tag' => 'poland-2019',
                    'live' => true,
                ),
                array(
                    'img' => 'imgs/20180726-The18-Image-How-Many-Players-On-A-Soccer-Field.png',
                    'title' => 'Manchester United vs Chelsea',
                    'desc' => '2019 FIFA World Cup',
                    'tag' => 'poland-2019',
                    'live' => false,
                ),
                array(
                    'img' => 'imgs/20180726-The18-Image-How-Many-Players-On-A-Soccer-Field.png',
                    'title' => 'Manchester United vs Chelsea',
                    'desc' => '2019 FIFA World Cup',
                    'tag' => '',
                    'live' => false,
                ),
                array(
                    'img' => 'imgs/20180726-The18-Image-How-Many-Players-On-A-Soccer-Field.png',
                    'title' => 'Manchester United vs Chelsea',
                    'desc' => '2019 FIFA World Cup',
                    'tag' => '',
                    'live' => false,
                ),
                array(
                    'img' => 'imgs/20180726-The18-Image-How-Many-Players-On-A-Soccer-Field.png',
                    'title' => 'Manchester United vs Chelsea',
                    'desc' => '2019 FIFA World Cup',
                    'tag' => '',
                    'live' => false,
                ),

                array(
                    'img' => 'imgs/20180726-The18-Image-How-Many-Players-On-A-Soccer-Field.png',
                    'title' => 'Manchester United vs Chelsea',
                    'desc' => '2019 FIFA World Cup',
                    'tag' => '',
                    'live' => false,
                ),
                array(
                    'img' => 'imgs/20180726-The18-Image-How-Many-Players-On-A-Soccer-Field.png',
                    'title' => 'Manchester United vs Chelsea',
                    'desc' => '2019 FIFA World Cup',
                    'tag' => '',
                    'live' => false,
                ),
                array(
                    'img' => 'https://znews-photo.zadn.vn/w480/Uploaded/pgi_ubnvgunau/2019_06_27/LionelMessikhiemtonkhinoivesieuphamdaphat1.jpg',
                    'title' => 'Manchester United vs Chelsea',
                    'desc' => '2019 FIFA World Cup',
                    'tag' => '',
                    'live' => false,
                ),
                array(
                    'img' => 'https://znews-photo.zadn.vn/w480/Uploaded/mdf_drokxr/2019_06_27/thumb_2.jpg',
                    'title' => 'Manchester United vs Chelsea',
                    'desc' => '2019 FIFA World Cup',
                    'tag' => '',
                    'live' => false,
                ),
                array(
                    'img' => 'https://znews-photo.zadn.vn/w480/Uploaded/neg_yrznslt/2019_06_26/chinhden.jpg',
                    'title' => 'Manchester United vs Chelsea',
                    'desc' => '2019 FIFA World Cup',
                    'tag' => '',
                    'live' => false,
                ),

                array(
                    'img' => 'https://znews-photo.zadn.vn/w480/Uploaded/neg_yrznslt/2019_06_27/VIETTEL_DO__HAGL_3_1.jpg',
                    'title' => 'Manchester United vs Chelsea',
                    'desc' => '2019 FIFA World Cup',
                    'tag' => '',
                    'live' => false,
                ),
                array(
                    'img' => 'https://znews-photo.zadn.vn/w480/Uploaded/jopluat/2019_06_27/Park_Hangseo_DAI_DIEN.jpg',
                    'title' => 'Manchester United vs Chelsea',
                    'desc' => '2019 FIFA World Cup',
                    'tag' => '',
                    'live' => false,
                ),
                array(
                    'img' => 'https://znews-photo.zadn.vn/w480/Uploaded/neg_yrznslt/2019_06_27/vietnamvancokhanangquavongbangneuhoayemen21024x682.jpg',
                    'title' => 'Manchester United vs Chelsea',
                    'desc' => '2019 FIFA World Cup',
                    'tag' => '',
                    'live' => false,
                ),
                array(
                    'img' => 'https://znews-photo.zadn.vn/w480/Uploaded/pgi_gunpuybat/2019_06_27/ava.jpg',
                    'title' => 'Manchester United vs Chelsea',
                    'desc' => '2019 FIFA World Cup',
                    'tag' => '',
                    'live' => false,
                ),
                array(
                    'img' => 'https://znews-photo.zadn.vn/w480/Uploaded/pgi_ubnatyvau/2019_06_26/davidsilvaandphilfodencropped_37r3paikoajn1557bj2jrrhh9.jpg',
                    'title' => 'Manchester United vs Chelsea',
                    'desc' => '2019 FIFA World Cup',
                    'tag' => '',
                    'live' => false,
                ),
                array(
                    'img' => 'imgs/20180726-The18-Image-How-Many-Players-On-A-Soccer-Field.png',
                    'title' => 'Manchester United vs Chelsea',
                    'desc' => '2019 FIFA World Cup',
                    'tag' => 'poland-2019',
                    'live' => true,
                ),
            );
            foreach ($data as $k1 => $v1){?>
                <div>
                    <div class="uk-box-shadow-large tv-box-2">
                        <div class="uk-cover-container">
                            <img src="<?= $v1['img'] ?>" alt="" uk-cover>
                            <canvas width="960" height="570"></canvas>
                            <span class="uk-text-uppercase tv-txt-live uk-position-bottom-left <?= ($v1['live']) ? 'uk-active' : '' ?>"><?= ($v1['live']) ? 'đang diễn ra' : 'sắp diễn ra' ?></span>
                            <div class="uk-position-cover tv-box-img-2 uk-flex uk-flex-center uk-flex-middle uk-padding-small">
                                <img src="imgs/1200px-Man_Utd_FC_.svg.png" alt="">
                                <?php include 'tyso.php'; ?>
                                <img src="imgs/Chelsea_icon_1317140689_1329240353.png" alt="">
                            </div>
                            <div class="uk-position-cover tv-box-11 uk-flex uk-flex-center uk-flex-middle">
                                <a href="#"><img src="imgs/music-player-play-1.png" alt=""></a>
                            </div>
                        </div>
                        <div class="uk-padding-small tv-box-desc">
                            <time>Thứ 6 2:30 AM</time>
                            <h5 class="title uk-text-truncate"><?= $v1['title'] ?></h5>
                            <p class="desc"><?= $v1['desc'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?php include "pagination.php"; ?>
    </div>
</div>
<?php include "footer.php"; ?>