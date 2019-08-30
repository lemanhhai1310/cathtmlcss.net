<aside>
    <div class="uk-margin">
        <form class="uk-search uk-search-default uk-width-1-1">
            <a href="" class="uk-search-icon-flip" uk-search-icon></a>
            <input class="uk-search-input" type="search" placeholder="Tìm kiếm">
        </form>
    </div>
    <div class="uk-margin">
        <h3 class="title_sidebar_1 uk-margin-small">Các khóa liên quan</h3>
        <div class="uk-grid uk-grid-small uk-grid-20 uk-grid-match uk-child-width-1-1@m" uk-grid>
            <?php
            $data = array(
                array(
                    'src' => 'images/khoa-hoc/sy-quan-moi-truong.png',
                    'title' => 'Sỹ quan môi trường',
                ),
                array(
                    'src' => 'images/khoa-hoc/quan-ly-an-toan.png',
                    'title' => 'Quản lý an toàn tàu',
                ),
            );
            foreach ($data as $k => $v): ?>
                <div>
                    <a href="khoahoc-detail.php">
                        <div class="uk-transition-toggle uk-overflow-hidden box_khoahoc uk-position-relative uk-text-center uk-light uk-background-default uk-border-rounded uk-box-shadow-medium">
                            <div class="uk-cover-container uk-transition-scale-up uk-transition-opaque" tabindex="0">
                                <img data-src="<?= $v['src'] ?>" alt="" class="uk-cover" uk-cover>
                                <canvas width="370" height="245"></canvas>
                            </div>
                            <div class="uk-padding-small uk-position-bottom uk-text-truncate">
                                <?= $v['title'] ?>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</aside>