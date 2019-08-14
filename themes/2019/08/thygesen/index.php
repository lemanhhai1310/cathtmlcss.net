<?php include "header.php"; ?>
<div class="uk-container uk-padding-remove">
    <div class="uk-position-relative slide_home uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 1108:378; animation: fade; autoplay: true;">

        <ul class="uk-slideshow-items">
            <li>
                <img class="lazyload" data-src="images/slide1/slider1.jpg" alt="" uk-cover>
            </li>
            <li>
                <img class="lazyload" data-src="images/slide1/bandage-1108x378_c.png" alt="" uk-cover>
            </li>
            <li>
                <img class="lazyload" data-src="images/slide1/casual-fashion-1108x378_c.png" alt="" uk-cover>
            </li>
            <li>
                <img class="lazyload" data-src="images/slide1/kidswear-1108x378_c.png" alt="" uk-cover>
            </li>
            <li>
                <img class="lazyload" data-src="images/slide1/underwear-1108x378_c.png" alt="" uk-cover>
            </li>
            <li>
                <img class="lazyload" data-src="images/slide1/workwear-1108x378_c.png" alt="" uk-cover>
            </li>
        </ul>


        <a class="uk-position-center-left uk-position-small uk-slidenav" uk-icon="chevron-left" href="#" uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-slidenav" uk-icon="chevron-right" href="#" uk-slideshow-item="next"></a>

        <ul class="uk-slideshow-nav uk-position-bottom uk-dotnav uk-flex-center uk-margin"></ul>

    </div>
</div>
<div class="uk-container">
    <div class="uk-section-xsmall uk-padding-remove-bottom">
        <ul class="uk-subnav link1 uk-subnav-divider uk-flex-center uk-margin-remove-bottom">
            <li><a href="#">Activewear</a></li>
            <li><a href="#">Workwear</a></li>
            <li><a href="#">Casual & Fashionwear</a></li>
            <li><a href="#">Kidswear</a></li>
            <li><a href="#">Underwear</a></li>
            <li><a href="#">Bandage</a></li>
        </ul>
    </div>
</div>
<div class="uk-container">
    <div class="uk-section-xsmall">
        <div class="uk-child-width-1-2@m uk-grid-medium" uk-grid>
            <div>
                <div class="uk-cover-container" style="background-color: #efefef;">
                    <img class="lazyload" data-src="images/apparel-manufacturing.png" alt="" uk-cover>
                    <canvas width="750" height="300"></canvas>
                </div>
            </div>
            <div>
                <div class="uk-cover-container">
                    <img class="lazyload" data-src="images/machine.jpg" alt="" uk-cover>
                    <canvas width="750" height="300"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-container">
    <div class="uk-section-xsmall block_01">
        <div class="uk-child-width-1-2@m uk-grid-medium" uk-grid>
            <div>
                <h3 class="title3">WHAT OUR CUSTOMERS THINK</h3>
            </div>
            <div>
                <iframe class="lazyload" data-src="https://www.youtube.com/embed/TTmG19uGscM?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1080" frameborder="0" allowfullscreen uk-responsive uk-video="automute: true"></iframe>
            </div>
        </div>
    </div>
</div>
<div class="uk-container uk-padding-remove">
    <div class="banner-box uk-text-center uk-section-xsmall lazyload" data-src="images/private-lable.jpg" uk-img>
        MAKE YOUR CLOTHING BRAND WITH YOUR LOGO
    </div>
</div>
<div class="uk-container">
    <div class="uk-section-small">
        <div class="grid-sp-bottom uk-child-width-1-2@s uk-child-width-1-4@m" uk-grid>
            <?php
            $data = array(
                array(
                    'img' => 'images/sp_bottom/Halter-Bikini-2-300x300.jpg',
                    'title' => 'Off Shoulder Bikini',
                    'href' => 'product-detail.php',
                ),
                array(
                    'img' => 'images/sp_bottom/Off-Shoulder-Bikini-1-300x300.jpg',
                    'title' => 'Slim Fit Polo Shirt',
                    'href' => 'product-detail.php',
                ),
                array(
                    'img' => 'images/sp_bottom/shark-t-shirt-manufacturer-supplier-thygesen-textile-vietnam-1-300x300.jpg',
                    'title' => 'Shark T-Shirt',
                    'href' => 'product-detail.php',
                ),
                array(
                    'img' => 'images/sp_bottom/short-sleeve-rash-guard-manufacturer-supplier-thygesen-textile-vietnam-6-300x300.jpg',
                    'title' => 'Strappy Two Pieces Swimsuit',
                    'href' => 'product-detail.php',
                ),
                array(
                    'img' => 'images/sp_bottom/sleeveless-dress-manufacturer-supplier-thygesen-textile-vietnam-3-300x300.jpg',
                    'title' => 'Halter Bikini',
                    'href' => 'product-detail.php',
                ),
                array(
                    'img' => 'images/sp_bottom/Slim-Fit-Polo-Shirt-Manufacturer-Supplier-Thygesen-Textile-Vietnam-1-300x300.jpg',
                    'title' => 'Short Sleeve Rash Guard',
                    'href' => 'product-detail.php',
                ),
                array(
                    'img' => 'images/sp_bottom/Strappy-Two-Pieces-Swimwear-1-300x300.jpg',
                    'title' => 'Workout Crop Top',
                    'href' => 'product-detail.php',
                ),
                array(
                    'img' => 'images/sp_bottom/work-out-crop-top-manufacturer-supplier-Thygesen-Textile-Vietnam-2-300x300.jpg',
                    'title' => 'Sleeveless Dress',
                    'href' => 'product-detail.php',
                ),
                array(
                    'img' => 'images/sp_bottom/Halter-Bikini-2-300x300.jpg',
                    'title' => 'Off Shoulder Bikini',
                    'href' => 'product-detail.php',
                ),
                array(
                    'img' => 'images/sp_bottom/Off-Shoulder-Bikini-1-300x300.jpg',
                    'title' => 'Slim Fit Polo Shirt',
                    'href' => 'product-detail.php',
                ),
                array(
                    'img' => 'images/sp_bottom/shark-t-shirt-manufacturer-supplier-thygesen-textile-vietnam-1-300x300.jpg',
                    'title' => 'Shark T-Shirt',
                    'href' => 'product-detail.php',
                ),
                array(
                    'img' => 'images/sp_bottom/short-sleeve-rash-guard-manufacturer-supplier-thygesen-textile-vietnam-6-300x300.jpg',
                    'title' => 'Strappy Two Pieces Swimsuit',
                    'href' => 'product-detail.php',
                ),
                array(
                    'img' => 'images/sp_bottom/sleeveless-dress-manufacturer-supplier-thygesen-textile-vietnam-3-300x300.jpg',
                    'title' => 'Halter Bikini',
                    'href' => 'product-detail.php',
                ),
                array(
                    'img' => 'images/sp_bottom/Slim-Fit-Polo-Shirt-Manufacturer-Supplier-Thygesen-Textile-Vietnam-1-300x300.jpg',
                    'title' => 'Short Sleeve Rash Guard',
                    'href' => 'product-detail.php',
                ),
                array(
                    'img' => 'images/sp_bottom/Strappy-Two-Pieces-Swimwear-1-300x300.jpg',
                    'title' => 'Workout Crop Top',
                    'href' => 'product-detail.php',
                ),
                array(
                    'img' => 'images/sp_bottom/work-out-crop-top-manufacturer-supplier-Thygesen-Textile-Vietnam-2-300x300.jpg',
                    'title' => 'Sleeveless Dress',
                    'href' => 'product-detail.php',
                ),
                array(
                    'img' => 'images/sp_bottom/Halter-Bikini-2-300x300.jpg',
                    'title' => 'Off Shoulder Bikini',
                    'href' => 'product-detail.php',
                ),
                array(
                    'img' => 'images/sp_bottom/Off-Shoulder-Bikini-1-300x300.jpg',
                    'title' => 'Slim Fit Polo Shirt',
                    'href' => 'product-detail.php',
                ),
                array(
                    'img' => 'images/sp_bottom/shark-t-shirt-manufacturer-supplier-thygesen-textile-vietnam-1-300x300.jpg',
                    'title' => 'Shark T-Shirt',
                    'href' => 'product-detail.php',
                ),
                array(
                    'img' => 'images/sp_bottom/short-sleeve-rash-guard-manufacturer-supplier-thygesen-textile-vietnam-6-300x300.jpg',
                    'title' => 'Strappy Two Pieces Swimsuit',
                    'href' => 'product-detail.php',
                ),
            );
            foreach ($data as $k => $v): ?>
                <div>
                    <div class="item1">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-cover-container">
                                    <img class="lazyload" data-src="<?= $v['img'] ?>" alt="" uk-cover>
                                    <canvas width="50" height="50"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <h5 class="title1"><a href="<?= $v['href'] ?>"><?= $v['title'] ?></a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>