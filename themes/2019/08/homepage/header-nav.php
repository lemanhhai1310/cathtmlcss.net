<header id="tv-header" uk-sticky>
    <div class="uk-container">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

            <div class="uk-navbar-left uk-hidden@m">

                <ul class="uk-navbar-nav">
                    <li>
                        <a href="#my-id" class="uk-navbar-toggle uk-padding-remove" uk-toggle>
                            <div id="m_nav_menu" class="m_nav menu">
                                <div class="m_nav_ham button_closed" id="m_ham_1"></div>
                                <div class="m_nav_ham button_closed" id="m_ham_2"></div>
                                <div class="m_nav_ham button_closed" id="m_ham_3"></div>
                            </div>
                        </a>
                    </li>
                </ul>

            </div>

            <div class="uk-navbar-left uk-visible@m">
                <a class="uk-navbar-item uk-logo uk-padding-remove-left" href="."><img src="imgs/Logo-Ngang.png" style="height: 34px;" alt=""></a>
                <ul class="uk-navbar-nav">
                    <li class="<?= isset($home) ? 'uk-active' : '' ?>"><a href=".">Trang chủ</a></li>
                    <li class="<?= isset($lichphatsong) ? 'uk-active' : '' ?>"><a href="lichphatsong.php">Lịch phát sóng</a></li>
                    <li><a href="#">Trận đấu</a></li>
                    <li class="<?= isset($video) ? 'uk-active' : '' ?>"><a href="video.php">Video</a></li>
                    <li>
                        <a href="#">
                            <span class="uk-badge ads uk-text-small uk-text-uppercase">ads</span>
                            Fabet
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="uk-badge ads uk-text-small uk-text-uppercase">ads</span>
                            Bet188
                        </a>
                    </li>
                    <li><a href="#">Fanpage</a></li>
                    <li class="<?= isset($acc) ? 'uk-active' : '' ?>"><a href="taikhoan.php">Tài khoản</a></li>
                </ul>

            </div>

            <div class="uk-navbar-center uk-hidden@m">
                <a class="uk-navbar-item uk-logo" href="."><img src="imgs/logo.png" alt=""></a>
            </div>

            <div class="uk-navbar-right uk-visible@m">

                <ul class="uk-navbar-nav">
                    <li class="user">
                        <a href="#">
                            <div class="uk-grid-small user_info uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="uk-cover-container uk-border-circle">
                                        <img src="https://scontent.fhan3-3.fna.fbcdn.net/v/t1.0-9/53397793_1028481614010994_3431479243719049216_n.jpg?_nc_cat=100&_nc_eui2=AeEiZzOj1Lpi6CPBoD6ZV0Nx3rCG5lAGTTYyQP4Eb1Fxlr5g_8bfwLNG1s1NUOck7dcckU8EEcpEdV7oSVHdzkMpjmjAgjXM0tff4kx1pGFwgg&_nc_oc=AQmn_OVWm8u5NAIu9o5e5y68aFNIrM_5PNxMxsVmkBK6uWbLAhhLzngCQTM1HlCx-Ss&_nc_ht=scontent.fhan3-3.fna&oh=7cd32b804e67d1bbb7d2ff664e77c276&oe=5D682899" alt="" uk-cover>
                                        <canvas width="35" height="35"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <h5 class="name uk-margin-remove uk-text-bold">The Flash</h5>
                                    <span>VIP 1</span>
                                </div>
                                <div class="uk-width-auto">
                                    <span uk-icon="triangle-down"></span>
                                </div>
                            </div>
                        </a>
                        <div class="uk-navbar-dropdown uk-padding-remove box8" uk-dropdown="pos: bottom-right; mode: click">
                            <div class="user_acc">
                                <ul class="uk-list">
                                    <li>Email: <b>hai.lemanh.1310@gmail.com</b></li>
                                    <li>ID: <b>203</b></li>
                                    <li>Số dư: <span>2,301,011</span> <img class="coin" src="imgs/coin.png" alt=""></li>
                                </ul>
                            </div>
                            <ul class="uk-nav uk-navbar-dropdown-nav uk-text-center user_menu">
                                <li><a href="#">Tài khoản</a></li>
                                <li class="uk-active"><a href="#">Nạp coin</a></li>
                                <li><a href="#">Chuyển coin</a></li>
                                <li><a href="#">Đăng xuất</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>

            </div>

            <div class="uk-navbar-right uk-hidden@m">

                <ul class="uk-navbar-nav">
                    <li>
                        <a class="uk-padding-remove" href="#">
                            <div class="uk-cover-container uk-border-circle box11">
                                <img src="https://scontent.fhan3-3.fna.fbcdn.net/v/t1.0-1/p50x50/58551712_558791001311032_4407660791101128704_n.jpg?_nc_cat=101&_nc_oc=AQkAgoShI9Ogxh988U6FOz8BptadG-L9NflOXpU50nokMgUtviclFLUVB_1iY1MN1EQ&_nc_ht=scontent.fhan3-3.fna&oh=85961291b5986b127feb93ef87e5defc&oe=5D308A60" alt="" uk-cover>
                                <canvas width="30" height="30"></canvas>
                            </div>
                        </a>
                        <div class="uk-navbar-dropdown uk-padding-remove box8" uk-dropdown="pos: bottom-right">
                            <div class="user_acc">
                                <ul class="uk-list">
                                    <li>Email: <b>hai.lemanh.1310@gmail.com</b></li>
                                    <li>ID: <b>203</b></li>
                                    <li>Số dư: <span>2,301,011</span> <img class="coin" src="imgs/coin.png" alt=""></li>
                                </ul>
                            </div>
                            <ul class="uk-nav uk-navbar-dropdown-nav uk-text-center user_menu">
                                <li><a href="#">Tài khoản</a></li>
                                <li><a href="#">Nạp coin</a></li>
                                <li><a href="#">Chuyển coin</a></li>
                                <li><a href="#">Đăng xuất</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>

            </div>

        </nav>
    </div>
</header>