<div>
    <?php
    $data = array(
        array(
            'src' => 'https://cdn.tgdd.vn/Products/Images/42/202863/oppo-k3-black-400x400.jpg',
            'title' => 'OPPO K3',
        ),
        array(
            'src' => 'https://cdn.tgdd.vn/Products/Images/42/200294/samsung-galaxy-a50-128gb-blue-400x400.jpg',
            'title' => 'Samsung Galaxy A50 128GB',
        ),
        array(
            'src' => 'https://cdn.tgdd.vn/Products/Images/42/114115/iphone-x-64gb-21-400x400.jpg',
            'title' => 'iPhone X 64GB',
        ),
    );
    foreach ($data as $k => $v):?>
        <div class="item1">
            <div class="uk-grid-7 uk-grid" uk-grid>
                <div class="uk-width-auto">
                    <div class="uk-cover-container">
                        <img data-src="<?= $v['src'] ?>" alt="" uk-cover>
                        <canvas width="50" height="50"></canvas>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <h5 class="title_sidebar_right_1"><a href=""><?= $v['title'] ?></a></h5>
                    <div class="price_sidebar_right">19.200.000 đ</div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>