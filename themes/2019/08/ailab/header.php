<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>AILAB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/uikit-3.1.7/css/uikit.min.css">
    <link rel="stylesheet" href="css/app.css">
    <!--JS-->
    <script src="assets/jquery/jquery-3.3.1.js"></script>
    <script src="assets/uikit-3.1.7/js/uikit.min.js"></script>
    <script src="assets/uikit-3.1.7/js/uikit-icons.min.js"></script>
    <script src="js/app.js"></script>
</head>
<body>
<section id="app" class="uk-height-viewport uk-position-relative uk-offcanvas-content uk-overflow-hidden">
<?php include "menu_content.php" ?>
<nav id="nav_mobile" class="uk-navbar-container uk-hidden@s" uk-navbar uk-sticky>

    <div class="uk-navbar-left">
        <div class="uk-navbar-item uk-padding-remove-left">
            <div class="mobile_menu_toggler uk-border-circle">
                <div class="m_nav m_nav_menu">
                    <div class="m_nav_ham button_closed m_ham_1"></div>
                    <div class="m_nav_ham button_closed m_ham_2"></div>
                    <div class="m_nav_ham button_closed m_ham_3"></div>
                </div>
            </div>
        </div>

    </div>

    <div class="uk-navbar-center">
        <a class="uk-navbar-item uk-padding-remove-left uk-logo" href=".">
            <figure class="uk-text-center logo1 uk-margin-remove">
                <img data-srcset="images/logo-black.png, images/logo.webp, images/logo.svg" alt="" uk-img>
            </figure>
        </a>
    </div>

</nav>
<div class="uk-height-viewport uk-visible@s uk-position-relative uk-background-norepeat uk-background-bottom-center uk-background-contain" style="background-color: #1067db;" data-src="images/header/Bitmap.png" uk-img>
    <div class="uk-position-cover uk-background-norepeat uk-background-top-right" data-src="images/header/Flat Design Oneboarding Concepts - Isometric illustration 2.png" uk-img uk-parallax="bgy: -200">

    </div>
    <div class="uk-position-cover uk-grid-small" uk-grid>
        <div class="uk-width-auto">
            <div class="uk-height-1-1 uk-padding-small uk-background-default">
                <div class="mobile_menu_toggler uk-border-circle">
                    <div class="m_nav m_nav_menu">
                        <div class="m_nav_ham button_closed m_ham_1"></div>
                        <div class="m_nav_ham button_closed m_ham_2"></div>
                        <div class="m_nav_ham button_closed m_ham_3"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-expand uk-flex uk-flex-column">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

                <div class="uk-navbar-left">

                    <a class="uk-navbar-item uk-padding-remove-left uk-logo" href=".">
                        <figure class="uk-text-center logo1 uk-margin-remove">
                            <img data-srcset="images/logo.png, images/logo.webp, images/logo.svg" alt="" uk-img>
                        </figure>
                    </a>

                </div>

                <div class="uk-navbar-right">

                    <div class="uk-navbar-item">
                        <div class="change_lang uk-border-pill uk-overflow-hidden">
                            <label><input class="uk-radio" type="radio" name="radio2"> <span>FR</span></label>
                            <label><input class="uk-radio" type="radio" name="radio2" checked> <span>EN</span></label>
                        </div>
                    </div>

                </div>

            </nav>
            <div class="uk-child-width-1-2@m uk-flex-auto" uk-grid>
                <div class="uk-flex-middle uk-flex">
                    <div class="box1_h uk-padding-large uk-padding-remove-top uk-padding-remove-right" uk-scrollspy="cls: uk-animation-scale-down; target: > *; delay: 150; repeat: true;">
                        <div class="c1">We create</div>
                        <div class="c2">AI technologies</div>
                        <div class="c1">that revolutionize</div>
                        <p>Full service agency focusing on creating artificial intelligence applications on the web or mobile.
                            We work with companies of all sizes.</p>
                        <a href="#" class="uk-button btn1 uk-button-secondary uk-border-pill">READ MORE </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="" class="uk-icon-button uk-position-bottom-center arrow-btn"><img src="images/right-arrow.png" alt=""></a>
</div>