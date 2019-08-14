<div class="block-02 uk-section-xsmall">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m" uk-grid uk-scrollspy="target: .anima; repeat: true; cls: animate; delay: 200">
            <?php
            $data = array(
                array(
                    'img1' => 'imgs/king-cong/Bitmap1.svg',
                    'img2' => 'imgs/king-cong/Ray-Ban-PNG-Image-Free-Download.svg',
                ),
                array(
                    'img1' => 'imgs/king-cong/Bitmap.svg',
                    'img2' => 'imgs/king-cong/gong-kinh-rayban-RX6317-2832.svg',
                    'left' => '',
                ),
            );
            foreach ($data as $k => $v):?>
            <div>
                <div class="uk-text-center uk-position-relative">
                    <div class="box1_img uk-position-top-center">
                        <img class="lazyload <?= isset($v['left']) ? 'left' : '' ?>" data-src="<?= $v['img1'] ?>">
                    </div>
                    <img class="imgx1 lazyload <?= isset($v['left']) ? 'left' : '' ?>" data-src="imgs/king-cong/93481f8141215.560b7ef9337d1 copy.svg">
                    <div class="box2_img uk-margin anima">
                        <img data-src="<?= $v['img2'] ?>" class="lazyload">
                    </div>
                    <div class="uk-text-center uk-margin-medium-top">
                        <a href="#" class="bello-btn-1 uk-button uk-button-default uk-border-pill">Xem thêm</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>