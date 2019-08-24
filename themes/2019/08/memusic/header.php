<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?= /** @var TYPE_NAME $data */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <!--
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/uikit-3.1.7/css/uikit.min.css">
    -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<section id="app" class="uk-offcanvas-content uk-overflow-hidden uk-background-norepeat uk-background-bottom-center lazy" data-src="images/bg-bottom3.png">
<?php include('menu_mobile1.php'); ?>
<?php include('menu_user_info.php'); ?>
<header id="me-header" class="uk-background-default">
    <div class="top_header uk-light uk-visible@m">
        <div class="uk-container">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

                <div class="uk-navbar-left">

                    <div class="uk-navbar-item">
                        <a href="" class="uk-margin-small-right" uk-icon="facebook"></a>
                        <a href="" class="uk-margin-small-right" uk-icon="youtube"></a>
                        <a href="" uk-icon="instagram"></a>
                    </div>

                    <div class="uk-navbar-item">
                        <div class="menu2_tag">
                            <a href="" class="uk-button uk-button-default uk-border-rounded uk-text-capitalize uk-margin-small-right">Sao Bolero</a>
                            <a href="" class="uk-button uk-button-default uk-border-rounded uk-text-capitalize">Teen Bolero</a>
                        </div>
                    </div>



                </div>

                <div class="uk-navbar-right">

                    <div class="uk-navbar-item">
                        <form action="javascript:void(0)" class="uk-position-relative form_search">
                            <input class="uk-input uk-border-rounded" style="min-width: 350px" type="text" placeholder="Tìm kiếm">
                            <button type="submit" class="uk-position-center-right uk-margin-small-right" uk-icon="search"></button>
                        </form>
                    </div>
                    <div class="uk-navbar-item">
                        <ul class="uk-subnav uk-subnav-divider uk-margin-remove login_txt">
                            <li><a href="#" class="uk-text-capitalize">Đăng nhập</a></li>
                            <li><a href="#" class="uk-text-capitalize">Đăng ký</a></li>
                        </ul>
                    </div>

                </div>

            </nav>
        </div>
    </div>
    <div class="uk-container uk-padding-remove">
        <nav class="menu_home_m uk-navbar-container uk-navbar-transparent" uk-navbar uk-sticky="media: (max-width: 640px); show-on-up: true; animation: uk-animation-slide-top;">

            <div class="nav-overlay uk-navbar-left">

                <a class="uk-navbar-item uk-logo uk-visible@m" href="."><img class="lazyload" src="images/logo-top.png" alt=""></a>


                <div class="uk-navbar-item uk-hidden@m">
                    <a href="#my-id" class="uk-navbar-toggle uk-padding-remove" uk-toggle>
                        <div id="m_nav_menu" class="m_nav menu">
                            <div class="m_nav_ham button_closed" id="m_ham_1"></div>
                            <div class="m_nav_ham button_closed" id="m_ham_2"></div>
                            <div class="m_nav_ham button_closed" id="m_ham_3"></div>
                        </div>
                    </a>
                </div>

                <a class="uk-navbar-toggle uk-hidden@m uk-padding-remove-left" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

            </div>

            <div class="nav-overlay uk-navbar-center">

                <a class="uk-navbar-item uk-logo uk-hidden@m" href="."><img class="lazyload" src="images/logo-top.png" alt=""></a>

            </div>

            <div class="nav-overlay uk-navbar-right">

                <ul class="uk-navbar-nav menu1 uk-visible@m">
                    <li class="uk-active"><a href="#">Trang chủ</a></li>
                    <li><a href="mv.php">MV</a></li>
                    <li><a href="chude.php">Chủ đề</a></li>
                    <li><a href="album.php">Album</a></li>
                    <li><a href="new-hit.php">New HIT</a></li>
                    <li><a href="nghesi.php">Nghệ sĩ</a></li>
                </ul>
                <div class="uk-navbar-item uk-hidden@m">
                    <a href="" uk-toggle="target: #offcanvas-flip">
                        <div class="uk-cover-container uk-border-circle">
                            <img class="lazyload" data-src="images/hailm.jpg" alt="" uk-cover>
                            <canvas width="40" height="40"></canvas>
                        </div>
                    </a>
                </div>

            </div>

            <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>

                <div class="uk-navbar-item uk-width-expand">
                    <form class="uk-search uk-search-navbar uk-width-1-1">
                        <input class="uk-search-input" type="search" placeholder="Tìm kiếm" autofocus>
                    </form>
                </div>

                <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

            </div>

        </nav>
    </div>
</header>