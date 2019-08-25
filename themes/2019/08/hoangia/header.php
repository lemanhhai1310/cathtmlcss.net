<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?= /** @var TYPE_NAME $data */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<section id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden">
<header class="uk-visible@m">
    <div class="top_header_menu uk-background-muted uk-visible@m">
        <div class="uk-container">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-right">
                    <ul class="uk-subnav menu_top uk-subnav-divider uk-margin-remove">
                        <li><a href="#">Trả góp 0%</a></li>
                        <li><a href="#">So sánh sản phẩm</a></li>
                        <li><a href="#">Tin tức</a></li>
                        <li><a href="#">Tuyển dụng</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Trung Tâm Bảo Hành</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="center_header uk-section-xsmall">
        <div class="uk-container">
            <div class="uk-flex-middle" uk-grid>
                <div class="uk-width-1-5@m">
                    <figure class="logo_hoangia">
                        <a href="."><img class="lazyload" data-src="images/1x/logo.png" alt=""></a>
                    </figure>
                </div>
                <div class="uk-width-expand">
                    <form class="box_search">
                        <fieldset class="uk-fieldset">
                            <div class="uk-button-group uk-flex">
                                <input class="uk-input uk-flex-auto uk-border-rounded" type="text" placeholder="Nhập từ khóa sản phẩm">
                                <button class="uk-button uk-button-secondary uk-border-rounded uk-text-capitalize uk-text-nowrap">Tìm kiếm</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="uk-width-auto">
                    <div class="uk-grid-small uk-flex-middle uk-grid-8" uk-grid>
                        <div class="uk-width-auto">
                            <div class="box_icon uk-border-rounded">
                                <span uk-icon="receiver"></span>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="txt_1">093571 9999</div>
                            <div class="txt_1">03565 99999</div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-auto">
                    <div class="uk-grid-small uk-flex-middle uk-grid-8" uk-grid>
                        <div class="uk-width-auto">
                            <div class="box_icon uk-border-rounded">
                                <span uk-icon="clock"></span>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="txt_1 uk-text-right">08h00 - 21h00</div>
                            <div class="txt_1 uk-text-right">Open T2 - CN</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_header">
        <div class="uk-container">
            <div uk-grid>
                <div class="uk-width-1-5@m">

                </div>
                <div class="uk-width-expand">
                    <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                        <div class="uk-navbar-left">

                            <ul class="uk-navbar-nav">
                                <li>
                                    <a href="">
                                        <img class="lazyload" data-src="images/1x/bao-hanh.png" alt="">
                                        <span class="uk-text-middle uk-margin-small-left">Bảo hành uy tín</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img class="lazyload" data-src="images/1x/tra-gop.png" alt="">
                                        <span class="uk-text-middle uk-margin-small-left">Trả góp ưu đãi</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img class="lazyload" data-src="images/1x/ho-tro.png" alt="">
                                        <span class="uk-text-middle uk-margin-small-left uk-text-nowrap">Hỗ trợ - Tư vấn</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>