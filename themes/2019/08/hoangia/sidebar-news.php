<div>
    <?php
    $data = array(
        array(
            'src' => 'https://sohanews.sohacdn.com/thumb_w/660/2019/8/25/photo-1-15666930622971960014508-crop-15666930767431296588731.jpg',
            'title' => 'Báo Arab: Tàu Trung Quốc một lần nữa vi phạm chủ quyền của Việt Nam',
        ),
        array(
            'src' => 'https://sohanews.sohacdn.com/thumb_w/660/2019/8/25/us-china-15666695747471070591151-crop-156666958155615050710.jpg',
            'title' => 'Nóng vội vượt Mỹ lên ngôi số 1 thế giới',
        ),
        array(
            'src' => 'https://sohanews.sohacdn.com/zoom/260_162/2019/8/25/photo-1-1566700400525949101778-crop-15667060106791039075168.jpg',
            'title' => 'Bé gái 5 tháng tuổi bị mẹ bỏ quên trên xe ô tô',
        ),
    );
    foreach ($data as $k => $v):?>
    <div class="item2 uk-margin-small">
        <div class="uk-grid-8 uk-grid" uk-grid>
            <div class="uk-width-auto">
                <div class="uk-cover-container">
                    <img data-src="<?= $v['src'] ?>" alt="" uk-cover>
                    <canvas width="100" height="62"></canvas>
                </div>
            </div>
            <div class="uk-width-expand">
                <h5 class="title_sidebar_right_1"><a href=""><?= $v['title'] ?></a></h5>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>