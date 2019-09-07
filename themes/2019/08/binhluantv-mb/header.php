<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/uikit-3.1.9/css/uikit.min.css">
    <link rel="stylesheet" href="css/app.css">
    <!--JS-->
    <script src="assets/jquery/jquery-3.4.1.js"></script>
    <script src="assets/uikit-3.1.9/js/uikit.min.js"></script>
    <script src="assets/uikit-3.1.9/js/uikit-icons.min.js"></script>
    <!--JS-->
    <script type="text/javascript">
        // Defer.js
        !function(e,o,t,n,i,r){function c(e,t){r?n(e,t||80):i.push(e,t)}function f(e,t,n,i){return t&&o.getElementById(t)||(i=o.createElement(e||'SCRIPT'),t&&(i.id=t),n&&(i.onload=n),o.head.appendChild(i)),i||{}}r=/p/.test(o.readyState),c.dom=f,e.defer=c,e.addEventListener('on'+t in e?t:'load',function(){for(r=t;i[0];)c(i.shift(),i.shift())}),e.deferscript=function(t,n,e,i){c(function(e){f(!1,n,i).src=t},e)}}(this,document,'pageshow',setTimeout,[]),function(u,t){var a='IntersectionObserver',d='src',l='lazied',h='data-',p=h+l,m='forEach',y='getAttribute',c='appendChild',b=Function(),v=u.defer||b,f=v.dom||b;function g(e){return[].slice.call(t.querySelectorAll(e))}function e(s){return function(e,t,o,r,c,f){v(function(n,t){function i(n){!1!==(r||b).call(n,n)&&(f||['srcset',d,'data','style'])[m](function(e,t){(t=n[y](h+e))&&(n[e]=t)}),n.className+=' '+(o||l)}t=a in u?(n=new u[a](function(e){e[m](function(e,t){e.isIntersecting&&(t=e.target)&&(n.unobserve(t),i(t))})},c)).observe.bind(n):i,g(e||s+'['+h+d+']:not(['+p+'])')[m](function(e){e[y](p)||(e.setAttribute(p,s),t(e))})},t)}}function n(){var r=t.head;v(function(t,n,i,o){t=[].concat(g((i='script[type=deferjs]')+':not('+(o='[async]')+')'),g(i+o)),function e(){if(0!=t){for(o in n=f(),(i=t.shift()).parentNode.removeChild(i),i.removeAttribute('type'),i)'string'==typeof i[o]&&n[o]!=i[o]&&(n[o]=i[o]);n[d]&&!n.hasAttribute('async')?(n.onload=n.onerror=e,r[c](n)):(r[c](n),v(e,.1))}}()},8)}v.all=n,u.deferstyle=function(t,n,e,i){v(function(e){(e=f('LINK',n,i)).rel='stylesheet',e.href=t},e)},u.deferimg=e('IMG'),u.deferiframe=e('IFRAME'),n()}(this,document);
        // Lazyload file Javascript
        deferscript('js/app.js', 'app-js');
        // Lazyload file Css
        deferstyle('assets/font-awesome-4.7.0/css/font-awesome.min.css', 'font-awesome',3000);
        deferstyle('css/fonts.css', 'font');

        // Lazyload image
        deferimg('img[data-src],picture,video,audio');
        deferiframe('iframe[data-src],[data-style],iframe');
    </script>
</head>
<body>
<section id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden">
<a href="#"><img class="uk-width-1-1" data-src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;refresh=1200000&amp;url=https://demkhuya.tv/wp-content/uploads/2019/06/728x90.gif" alt=""></a>
<?php include "header-nav.php"; ?>
<?php include('menu_mobile1.php'); ?>
<a href="#"><img class="uk-width-1-1" data-src="https://images2-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&amp;refresh=1200000&amp;url=https://demkhuya.tv/wp-content/uploads/2019/06/728x90.gif" alt=""></a>
