<div id="my-id" uk-offcanvas="overlay: true; mode: slide">
    <div class="uk-offcanvas-bar uk-overflow-auto uk-flex uk-flex-column uk-padding-remove">
        <nav class="menu_m">
            <div class="uk-padding-small" style="background-color: #000000;">
                <div class="uk-grid-small user_info uk-flex-middle" uk-grid>
                    <div class="uk-width-auto">
                        <div class="uk-cover-container uk-border-circle">
                            <img class="lazyload" data-src="images/hailm.jpg" alt="" uk-cover>
                            <canvas width="40" height="40"></canvas>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <h5 class="name uk-margin-remove uk-text-bold">The Flash</h5>
                        <span>Thành viên</span>
                    </div>
                    <div class="uk-width-auto">
                        <div class="box9 uk-border-circle uk-flex uk-flex-middle uk-flex-center">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="uk-list uk-margin-remove">
                <?php
                $data = array
                (
                    array(
                        'title' => 'Trang chủ',
                        'mode' => '',
                        'href' => '.',
                    ),
                    array(
                        'title' => 'Đang diễn ra',
                        'mode' => 'live',
                        'active' => true,
                        'href' => '#',
                    ),
                    array(
                        'title' => 'Lịch phát sóng',
                        'mode' => '',
                        'href' => 'lichphatsong.php',
                    ),
                    array(
                        'title' => 'Xem Highlight',
                        'mode' => '',
                        'href' => '#',
                    ),
                    array(
                        'title' => 'Hướng dẫn',
                        'mode' => '',
                        'href' => '#',
                    ),
                    array(
                        'title' => 'Nạp Coin',
                        'mode' => '',
                        'href' => '#',
                    ),
                    array(
                        'title' => 'Đặt cược',
                        'mode' => '',
                        'href' => '#',
                    ),
                    array(
                        'title' => 'FABET',
                        'mode' => 'ads',
                        'href' => '#',
                    ),
                    array(
                        'title' => '188BET',
                        'mode' => 'ads',
                        'href' => '#',
                    ),
                    array(
                        'title' => 'Cộng đồng',
                        'mode' => '',
                        'href' => '#',
                    ),
                    array(
                        'title' => 'Liên hệ quảng cáo',
                        'mode' => '',
                        'href' => '#',
                    ),
                );
                foreach ($data as $k1 => $v1) { ?>
                    <li class="uk-margin-remove <?= (isset($v1['active']) ? 'uk-active' : '') ?>">
                        <a class="uk-padding-small uk-display-block" href="<?= $v1['href'] ?>">
                            <?= $v1['title'] ?>
                            <?php switch ($v1['mode']) {
                                case 'live':
                                    echo "<span class=\"uk-badge live uk-text-small uk-text-uppercase\">live</span>";
                                    break;
                                case 'ads':
                                    echo "<span class=\"uk-badge ads uk-text-small uk-text-uppercase\">ads</span>";
                                    break;
                                default:
                                    echo "";
                            } ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <div class="copyright_m">
            <div class="uk-padding-small"><small>Copyright © 2019 90phut.tv</small></div>
        </div>
    </div>
</div>