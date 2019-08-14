<?php include "header.php"; ?>
<div class="uk-container">
    <div class="uk-section-xsmall">
        <div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-medium" uk-grid>
            <?php
            $data = array(
                array(
                    'src' => 'images/products_relate/baby-jumpsuit-manufacturer-thygesen-textile-vietnam-5-300x300.jpg',
                    'title' => 'Zip Up Jumpsuit'
                ),
                array(
                    'src' => 'images/products_relate/cotton-jumpsuit-6-300x300.jpg',
                    'title' => 'Long Sleeve Jumpsuit'
                ),
                array(
                    'src' => 'images/products_relate/Raglan-Jumpsuit-Manufacturer-Supplier-Thygesen-Textile-Vietnam-4-300x300.jpg',
                    'title' => 'Superman Jumpsuit'
                ),
                array(
                    'src' => 'images/products_relate/Slide3-2-300x300.jpg',
                    'title' => 'Raglan Jumpsuit'
                ),
                array(
                    'src' => 'images/products_relate/Slide6-6-300x300.jpg',
                    'title' => 'Baby Jumpsuit'
                ),
                array(
                    'src' => 'images/products_relate/Slide6-7-300x300.jpg',
                    'title' => 'Cotton Jumpsuit'
                ),
            );
            foreach ($data as $k => $v):?>
                <div>
                    <div class="uk-text-center thy-box-1">
                        <a href="">
                            <div class="uk-cover-container uk-box-shadow-hover-small">
                                <img class="lazyload" data-src="<?= $v['src'] ?>" alt="" uk-cover>
                                <canvas width="640" height="640"></canvas>
                            </div>
                        </a>
                        <div class="uk-padding-small">
                            <h5 class="uk-margin-remove title4"><?= $v['title'] ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>