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
    <script type="text/javascript">
        // Defer.js
        !function(e,o,t,n,i,r){function c(e,t){r?n(e,t||80):i.push(e,t)}function f(e,t,n,i){return t&&o.getElementById(t)||(i=o.createElement(e||'SCRIPT'),t&&(i.id=t),n&&(i.onload=n),o.head.appendChild(i)),i||{}}r=/p/.test(o.readyState),c.dom=f,e.defer=c,e.addEventListener('on'+t in e?t:'load',function(){for(r=t;i[0];)c(i.shift(),i.shift())}),e.deferscript=function(t,n,e,i){c(function(e){f(!1,n,i).src=t},e)}}(this,document,'pageshow',setTimeout,[]),function(u,t){var a='IntersectionObserver',d='src',l='lazied',h='data-',p=h+l,m='forEach',y='getAttribute',c='appendChild',b=Function(),v=u.defer||b,f=v.dom||b;function g(e){return[].slice.call(t.querySelectorAll(e))}function e(s){return function(e,t,o,r,c,f){v(function(n,t){function i(n){!1!==(r||b).call(n,n)&&(f||['srcset',d,'data','style'])[m](function(e,t){(t=n[y](h+e))&&(n[e]=t)}),n.className+=' '+(o||l)}t=a in u?(n=new u[a](function(e){e[m](function(e,t){e.isIntersecting&&(t=e.target)&&(n.unobserve(t),i(t))})},c)).observe.bind(n):i,g(e||s+'['+h+d+']:not(['+p+'])')[m](function(e){e[y](p)||(e.setAttribute(p,s),t(e))})},t)}}function n(){var r=t.head;v(function(t,n,i,o){t=[].concat(g((i='script[type=deferjs]')+':not('+(o='[async]')+')'),g(i+o)),function e(){if(0!=t){for(o in n=f(),(i=t.shift()).parentNode.removeChild(i),i.removeAttribute('type'),i)'string'==typeof i[o]&&n[o]!=i[o]&&(n[o]=i[o]);n[d]&&!n.hasAttribute('async')?(n.onload=n.onerror=e,r[c](n)):(r[c](n),v(e,.1))}}()},8)}v.all=n,u.deferstyle=function(t,n,e,i){v(function(e){(e=f('LINK',n,i)).rel='stylesheet',e.href=t},e)},u.deferimg=e('IMG'),u.deferiframe=e('IFRAME'),n()}(this,document);
        // Lazyload file Javascript
        deferscript('js/app-dist.js', 'app-js');
        // Lazyload image
        deferimg('img[data-src],picture,video,audio');

        deferstyle('assets/font-awesome-4.7.0/css/font-awesome.min.css', 'font-awesome',3000);
        deferstyle('css/fonts.css', 'fonts');

        deferiframe('iframe[data-src],[data-style],iframe');
    </script>
</head>
<body>
<section id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden">
<nav id="header-mb" class="uk-navbar uk-navbar-container uk-box-shadow-medium uk-hidden@m" uk-navbar uk-sticky="animation: uk-animation-slide-top; show-on-up: true;">

    <div class="uk-navbar-left">

        <a class="uk-navbar-item uk-logo" href="."><img src="images/logo.png" alt=""></a>

    </div>

    <div class="uk-navbar-right">

        <div class="uk-navbar-item">
            <div id="mobile_menu_toggler">
                <div id="m_nav_menu" class="m_nav">
                    <div class="m_nav_ham button_closed" id="m_ham_1"></div>
                    <div class="m_nav_ham button_closed" id="m_ham_2"></div>
                    <div class="m_nav_ham button_closed" id="m_ham_3"></div>
                </div>
            </div>
        </div>

    </div>
    <?php require "mobile_menu.php"; ?>
</nav>
<header id="header" class="uk-visible@m uk-box-shadow-medium uk-background-default" uk-sticky="animation: uk-animation-slide-top; show-on-up: true;">
    <div class="uk-container">
        <div class="uk-grid uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <figure class="logo1">
                    <a href="." class="uk-link-toggle">
                        <div class="uk-grid uk-grid-10 uk-flex-middle" uk-grid>
                            <div class="uk-width-auto">
                                <img src="images/logo.png" alt="">
                            </div>
                            <div class="uk-width-expand">
                                <h1>TRUNG TÂM NHÂN LỰC <br>
                                    HÀNG HẢI ALLSEAMAN</h1>
                            </div>
                        </div>
                    </a>
                </figure>
            </div>
            <div class="uk-width-expand">
                <nav class="uk-navbar-container top_header uk-light uk-navbar" uk-navbar>

                    <div class="uk-navbar-left">
                        <ul class="uk-navbar-nav">
                            <li><a href="#" class="uk-flex-row-reverse" uk-icon="receiver"><span>(+84) 2862876188</span></a></li>
                            <li><a href="#" class="uk-flex-row-reverse" uk-icon="mail"><span>info@trungtamhanghai .com</span></a></li>
                        </ul>
                    </div>

                    <div class="uk-navbar-right">

                        <ul class="uk-navbar-nav">
                            <li><a href="#" class="uk-flex-row-reverse" uk-icon="bookmark"><span>Sitemap</span></a></li>
                            <li>
                                <a href="" uk-icon="icon: triangle-down; ratio: 0.8"><img src="images/vn.png" alt=""></a>
                                <div class="uk-padding-small uk-dropdown" style="min-width: 200px" uk-dropdown>
                                    <ul class="uk-nav uk-dropdown-nav uk-text-right">
                                        <li><a href="#">Vietnamese <img src="images/vn.png" alt=""></a></li>
                                        <li><a href="#">English <img src="images/eng.png" alt=""></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>

                </nav>
                <nav class="uk-navbar-container bottom_menu_header uk-navbar-transparent uk-navbar" uk-navbar>
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav">
                            <li><a href="news.php">Tin tức</a></li>
                            <li>
                                <a href="about.php" uk-icon="chevron-down">Giới Thiệu</a>
                                <?php include "menu-dropdown.php"; ?>
                            </li>
                            <li><a href="lichhoc.php">Lịch học</a></li>
                            <li><a href="linhvuchoatdong.php">Lĩnh vực hoạt động</a></li>
                            <li><a href="cackhoahoc.php">Các khoá học</a></li>
                            <li><a href="tuyendung.php">TUYỂN DỤNG</a></li>
                            <li><a href="contact.php">LIÊN HỆ</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>