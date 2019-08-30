<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?= /** @var TYPE_NAME $data */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="css/app.css">
    <!--JS-->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js@1.1.7/dist/defer_plus.min.js"></script>
    -->
    <script type="text/javascript">
        // Defer.js
        !function(e,o,t,n,i,r){function c(e,t){r?n(e,t||80):i.push(e,t)}function f(e,t,n,i){return t&&o.getElementById(t)||(i=o.createElement(e||'SCRIPT'),t&&(i.id=t),n&&(i.onload=n),o.head.appendChild(i)),i||{}}r=/p/.test(o.readyState),c.dom=f,e.defer=c,e.addEventListener('on'+t in e?t:'load',function(){for(r=t;i[0];)c(i.shift(),i.shift())}),e.deferscript=function(t,n,e,i){c(function(e){f(!1,n,i).src=t},e)}}(this,document,'pageshow',setTimeout,[]),function(u,t){var a='IntersectionObserver',d='src',l='lazied',h='data-',p=h+l,m='forEach',y='getAttribute',c='appendChild',b=Function(),v=u.defer||b,f=v.dom||b;function g(e){return[].slice.call(t.querySelectorAll(e))}function e(s){return function(e,t,o,r,c,f){v(function(n,t){function i(n){!1!==(r||b).call(n,n)&&(f||['srcset',d,'data','style'])[m](function(e,t){(t=n[y](h+e))&&(n[e]=t)}),n.className+=' '+(o||l)}t=a in u?(n=new u[a](function(e){e[m](function(e,t){e.isIntersecting&&(t=e.target)&&(n.unobserve(t),i(t))})},c)).observe.bind(n):i,g(e||s+'['+h+d+']:not(['+p+'])')[m](function(e){e[y](p)||(e.setAttribute(p,s),t(e))})},t)}}function n(){var r=t.head;v(function(t,n,i,o){t=[].concat(g((i='script[type=deferjs]')+':not('+(o='[async]')+')'),g(i+o)),function e(){if(0!=t){for(o in n=f(),(i=t.shift()).parentNode.removeChild(i),i.removeAttribute('type'),i)'string'==typeof i[o]&&n[o]!=i[o]&&(n[o]=i[o]);n[d]&&!n.hasAttribute('async')?(n.onload=n.onerror=e,r[c](n)):(r[c](n),v(e,.1))}}()},8)}v.all=n,u.deferstyle=function(t,n,e,i){v(function(e){(e=f('LINK',n,i)).rel='stylesheet',e.href=t},e)},u.deferimg=e('IMG'),u.deferiframe=e('IFRAME'),n()}(this,document);
        // Lazyload file Javascript
        deferscript('js/app-dist.js', 'app-js');
        deferscript('https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0', 'facebook-js', 3000);
        // Lazyload image
        deferimg('img[data-src],picture,video,audio');

        deferstyle('assets/font-awesome-4.7.0/css/font-awesome.min.css', 'font-awesome',3000);
        deferstyle('css/_fonts.css', 'fonts');

        deferiframe('iframe[data-src],[data-style],iframe');
    </script>
</head>
<body class="<?= (isset($dark)) ? 'dark uk-light' : '' ?>">
<div id="fb-root"></div>
<section id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden">
<header id="header" class="uk-visible@m uk-position-z-index" uk-sticky="animation: uk-animation-slide-top; top: 600">
    <div class="top_header_menu uk-background-muted uk-visible@m">
        <div class="uk-container">
            <nav class="uk-navbar uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-right">
                    <ul class="uk-subnav menu_top uk-subnav-divider uk-margin-remove">
                        <?php if(isset($dark)): ?>
                            <li><a href="detail-light.php">Light</a></li>
                        <?php endif; ?>
                        <?php if(isset($light)): ?>
                            <li><a href="detail-dark.php">Dark</a></li>
                        <?php endif; ?>
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
            <div class="uk-flex-middle uk-grid" uk-grid>
                <div class="uk-width-1-5@m">
                    <figure class="logo_hoangia">
                        <a href="."><img src="images/1x/logo.png" alt=""></a>
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
                    <div class="uk-grid-small uk-flex-middle uk-grid-8 uk-grid" uk-grid>
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
                    <div class="uk-grid-small uk-flex-middle uk-grid-8 uk-grid" uk-grid>
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
            <div class="uk-grid" uk-grid>
                <div class="uk-width-1-5@m">
                    <?php require "menu_pc.php"; ?>
                </div>
                <div class="uk-width-expand">
                    <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                        <div class="uk-navbar-left">

                            <ul class="uk-navbar-nav">
                                <li>
                                    <a href="">
                                        <img data-src="images/icon/baohanh.svg" alt="">
                                        <span class="uk-text-middle uk-margin-small-left uk-text-nowrap">Bảo hành uy tín</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img data-src="images/icon/tragop.svg" alt="">
                                        <span class="uk-text-middle uk-margin-small-left uk-text-nowrap">Trả góp ưu đãi</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img data-src="images/icon/hotro.svg" alt="">
                                        <span class="uk-text-middle uk-margin-small-left uk-text-nowrap">Hỗ trợ - Tư vấn</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img data-src="images/icon/showroom.svg" alt="">
                                        <span class="uk-text-middle uk-margin-small-left uk-text-nowrap">Bản đồ showroom</span>
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
<nav class="info_mb uk-navbar-container uk-navbar uk-hidden@m" uk-navbar>
    <div class="uk-navbar-center">
        <ul class="uk-navbar-nav">
            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: receiver; ratio: 0.7"></span> 09357.1.9999</a></li>
            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: clock; ratio: 0.7"></span> 08h00 - 21h00, T2C - CN</a></li>
        </ul>
    </div>
</nav>
<?php require "menu_mobile_hoangia.php"; ?>
<nav id="header_mb" class="uk-navbar-container uk-navbar uk-hidden@m" uk-navbar uk-sticky>
    <div class="uk-navbar-left">
        <div class="uk-navbar-item">
            <div id="mobile_menu_toggler" uk-toggle="target: #menu-mobile-hoangia">
                <div id="m_nav_menu" class="m_nav">
                    <div class="m_nav_ham button_closed" id="m_ham_1"></div>
                    <div class="m_nav_ham button_closed" id="m_ham_2"></div>
                    <div class="m_nav_ham button_closed" id="m_ham_3"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-navbar-center">
        <a class="uk-navbar-item uk-logo" href="."><img src="images/1x/logo.png" alt=""></a>
    </div>
    <div class="uk-navbar-right">
        <div>
            <a class="uk-navbar-toggle" href="#" uk-search-icon></a>
            <div class="uk-navbar-dropdown search_position uk-padding-small" uk-drop="mode: click; cls-drop: uk-navbar-dropdown; boundary: !nav">

                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <form class="uk-search uk-search-navbar uk-width-1-1">
                            <input class="uk-search-input" type="search" placeholder="Nội dung cần tìm" autofocus>
                        </form>
                    </div>
                    <div class="uk-width-auto">
                        <a class="uk-navbar-dropdown-close" href="#" uk-close></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</nav>
<div class="uk-overlay-primary mask_menu"></div>