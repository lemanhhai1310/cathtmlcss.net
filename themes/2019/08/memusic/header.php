<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?= /** @var TYPE_NAME $data */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/uikit-3.1.7/css/uikit.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <!--JS-->
    <script src="assets/jquery/jquery-3.4.1.js"></script>
    <script src="assets/uikit-3.1.7/js/uikit.min.js"></script>
    <script src="assets/uikit-3.1.7/js/uikit-icons.min.js"></script>
    <script src="js/lazysizes.min.js"></script>
</head>
<body>
<section id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-background-norepeat uk-background-bottom-center" data-src="images/bg-bottom3.png" uk-img>
<header id="me-header">
    <div class="top_header">

    </div>
    <div class="uk-container uk-padding-remove">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

            <div class="uk-navbar-left">

                <a class="uk-navbar-item uk-logo uk-visible@m" href="."><img src="images/logo-top.png" alt=""></a>

                <div class="uk-navbar-item">

                </div>

            </div>

            <div class="uk-navbar-center">

                <a class="uk-navbar-item uk-logo uk-hidden@m" href="."><img src="images/logo-top.png" alt=""></a>

            </div>

            <div class="uk-navbar-right">

                <ul class="uk-navbar-nav menu1 uk-visible@m">
                    <li class="uk-active"><a href="#">Trang chủ</a></li>
                    <li><a href="#">MV</a></li>
                    <li><a href="#">Chủ đề</a></li>
                    <li><a href="#">Album</a></li>
                    <li><a href="#">New HIT</a></li>
                    <li><a href="#">Nghệ sĩ</a></li>
                </ul>

            </div>

        </nav>
    </div>
</header>