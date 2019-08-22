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
    <link rel="stylesheet" href="css/app.css">
    <!--JS-->
    <script src="assets/jquery/jquery-3.4.1.js"></script>
    <script src="assets/uikit-3.1.7/js/uikit.min.js"></script>
    <script src="assets/uikit-3.1.7/js/uikit-icons.min.js"></script>
    <script src="js/lazysizes.min.js"></script>
</head>
<body>
<section id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden">
